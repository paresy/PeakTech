# PeakTech P8005
Ermöglicht den Empfang von Lautstärke-Werten

### Inhaltsverzeichnis

1. [Funktionsumfang](#1-funktionsumfang)
2. [Voraussetzungen](#2-voraussetzungen)
3. [Software-Installation](#3-software-installation)
4. [Einrichten der Instanzen in IP-Symcon](#4-einrichten-der-instanzen-in-ip-symcon)
5. [Statusvariablen und Profile](#5-statusvariablen-und-profile)
6. [WebFront](#6-webfront)
7. [PHP-Befehlsreferenz](#7-php-befehlsreferenz)

### 1. Funktionsumfang

* Dieses Modul empfängt Daten vom Schallpegel-Messgerät PeakTech P8005 und leitet diese in eine Lautstärke Variable weiter. Die Aktualisierung wird dabei mehrmals pro Sekunde durchgeführt und belastet das System stärker als andere Module.

### 2. Vorraussetzungen

- IP-Symcon ab Version 5.3
- Schallpegel-Messgerät PeakTech P8005

### 3. Software-Installation

* Über den Module Store das 'PeakTech P8005'-Modul installieren.
* Alternativ über das Module Control folgende URL hinzufügen: https://github.com/paresy/PeakTech

### 4. Einrichten der Instanzen in IP-Symcon

Unter 'Instanz hinzufügen' kann das 'PeakTech P8005'-Modul mithilfe des Schnellfilters gefunden werden.  
- Weitere Informationen zum Hinzufügen von Instanzen in der [Dokumentation der Instanzen](https://www.symcon.de/service/dokumentation/konzepte/instanzen/#Instanz_hinzufügen)

__Konfigurationsseite__:

Keine Konfiguration notwendig.

### 5. Statusvariablen und Profile

Die Statusvariablen/Kategorien werden automatisch angelegt. Das Löschen einzelner kann zu Fehlfunktionen führen.

#### Statusvariablen

Name               | Typ
------------------ | -------
Lautstärke         | Float

#### Profile

Name     | Typ
-------- | -------
Loudness | Float

### 6. WebFront

Keine spezielle Funktion. Variablen werden im WebFront angezeigt.

### 7. PHP-Befehlsreferenz

Keine Funktionen vorhanden
