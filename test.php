<?php

require 'vendor/autoload.php';

$json = json_decode(file_get_contents('source/slsn.geojson'));

$localRoads = collect($json->features)
    ->filter(function ($feature) {
        return starts_with($feature->properties->class_de, 'Local');
    })
    ->map(function ($feature) {
        unset($feature->properties);
        return $feature;
    })
    ->values()
    ->toArray();

$json->features = $localRoads;

file_put_contents('source/local_roads.geojson', json_encode($json));

$json = json_decode(file_get_contents('source/slsn.geojson'));

$localRoads = collect($json->features)
    ->filter(function ($feature) {
        return starts_with($feature->properties->class_de, 'Collector');
    })
    ->map(function ($feature) {
        unset($feature->properties);
        return $feature;
    })
    ->values()
    ->toArray();

$json->features = $localRoads;

file_put_contents('source/collector_roads.geojson', json_encode($json));
