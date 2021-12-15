#!/usr/bin/env bash
#  <xbar.title>Show weather from meteo.pl</xbar.title>
#  <xbar.version>v2.0.0</xbar.version>
#  <xbar.author>Damian Dziaduch</xbar.author>
echo "☀️";
echo "---";
ENCODED=$(curl -s "https://www.meteo.pl/um/metco/mgram_pict.php?ntype=0u&row=346&col=210&lang=pl" | base64);
echo " | image=$ENCODED href=https://www.meteo.pl/um/metco/mgram_pict.php?ntype=0u&row=346&col=210&lang=pl";
