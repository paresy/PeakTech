<?php

declare(strict_types=1);
class P8005 extends IPSModule
{
    public function Create()
    {
        //Never delete this line!
        parent::Create();

        //Add our profile
        if (!IPS_VariableProfileExists('Loudness')) {
            IPS_CreateVariableProfile('Loudness', VARIABLETYPE_FLOAT);
            IPS_SetVariableProfileIcon('Loudness', 'Speaker');
            IPS_SetVariableProfileText('Loudness', '', ' dbA');
            IPS_SetVariableProfileValues('Loudness', 0, 150, 0);
            IPS_SetVariableProfileDigits('Loudness', 1);
        }

        $this->RegisterVariableFloat('Level', 'Level', 'Loudness');

        //Create a preconfigured cutter
        $this->ConnectParent('{AC6C6E74-C797-40B3-BA82-F135D941D1A2}');
    }

    public function GetConfigurationForParent()
    {
        return json_encode([
            'ParseType'         => 0,
            'LeftCutChar'       => 'A5 0D',
            'LeftCutCharAsHex'  => true,
            'RightCutChar'      => 'A5 0C',
            'RightCutCharAsHex' => true,
            'DeleteCutChars'    => false,
            'InputLength'       => 0,
            'SyncChar'          => '',
            'SyncCharAsHex'     => false,
            'Timeout'           => 0,
        ]);
    }

    public function ReceiveData($JSONString)
    {
        $data = json_decode($JSONString);
        $value = utf8_decode($data->Buffer);

        $this->SendDebug('Value', $value, 1);

        if (strlen($value) == 2) {
            $bcd = bin2hex($value[0]) . bin2hex($value[1]);
            $value = intval($bcd) / 10;
            if ($this->GetValue('Level') != $value) {
                $this->SetValue('Level', $value);
            }
        }
    }
}