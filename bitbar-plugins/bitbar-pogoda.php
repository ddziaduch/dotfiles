#!/usr/bin/env php
<?php declare(strict_types=1);
//# <bitbar.title>Show weather from Meteo.pl</bitbar.title>
//# <bitbar.version>v1.1.0</bitbar.version>
//# <bitbar.author>Damian Dziaduch</bitbar.author>

$location='row=346&col=210';
echo "☀️\n";
echo "---\n";
$img = file_get_contents('https://www.meteo.pl/um/metco/mgram_pict.php?ntype=0u&row=346&col=210&lang=pl');
$encoded = base64_encode($img);
echo "|image=$encoded href=http://www.meteo.pl/um/php/meteorogram_list.php?ntype=0u&" . $location . "&lang=pl";
