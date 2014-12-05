<?php

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/ElasticSearcherTestCase.php';
require __DIR__.'/dummy/Indexes/MoviesIndex.php';
require __DIR__.'/dummy/Queries/MoviesFrom2014Query.php';
require __DIR__.'/dummy/Queries/MoviesFromXYearQuery.php';

// Test host (should be inside the vagrant box).
define('ELASTICSEARCH_HOST', 'localhost:9200');