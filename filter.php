<?php

require 'vendor/autoload.php';

$json = json_decode(file_get_contents('source/roads.geojson'));

$collectors = [];
$boundary = [];
$arterial = [];

foreach ($json->features as $feature) {
    if ($feature->properties->{"class_de"} == 'Collector-Residential') {
        $collectors[] = [ 'type' => 'Feature', 'properties' => [ 'type' => 'collector' ], 'geometry' => $feature->geometry ];
    }

    if ($feature->properties->{"class_de"} == 'Local-Residential') {
        $collectors[] = [ 'type' => 'Feature', 'properties' => [ 'type' => 'local' ], 'geometry' => $feature->geometry ];
    }

    if (str_contains(strtolower($feature->properties->{"class_de"}), 'arterial')) {
        if (in_array($feature->properties->name, [ 'WHITEMUD', "KINGSWAY", "PRINCESS", "BELGRAVI", "FOX DRIV", "ARGYLL R", "118 AVEN", "75 STREE", "63 AVENU", "113 STRE", "142 STRE", "149 STRE", "WAYNE GR"])) {
            continue;
        }
        $arterial[] = [ 'type' => 'Feature', 'properties' => [ 'type' => 'arterial' ], 'geometry' => $feature->geometry ];
    }
}

function matches($feature)
{
    switch ($feature->properties->name) {
        case "WHITEMUD":
            foreach ($feature->geometry->coordinates as $line) {
                foreach ($line as $coord) {
                    if ($coord[1] > 53.512320) {
                        return false;
                    }
                }
            }
            return true;
            break;
        default: return false;
    }

}

file_put_contents('source/local-collectors.geojson', json_encode([ 'type' => "FeatureCollection", 'features' => $collectors ]));
file_put_contents('source/arterial.geojson', json_encode([ 'type' => "FeatureCollection", 'features' => $arterial ]));
//file_put_contents('source/boundary.geojson', json_encode([ 'type' => "FeatureCollection", 'features' => $boundary ]));
