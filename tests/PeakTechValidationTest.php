<?php

declare(strict_types=1);
include_once __DIR__ . '/stubs/Validator.php';
class PeakTechValidationTest extends TestCaseSymconValidation
{
    public function testValidatePeakTech(): void
    {
        $this->validateLibrary(__DIR__ . '/..');
    }
    public function testValidateP8005Module(): void
    {
        $this->validateModule(__DIR__ . '/../P8005');
    }
}