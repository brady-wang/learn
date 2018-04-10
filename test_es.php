<?php
require 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;


$client = ClientBuilder::create()->build();
//$params = [
//    'index' => 'my_index',
//    'type' => 'my_type',
//    'id' => '2',
//    //'body' => ['title' => 'Quick brown rabbits','body'=>'Brown rabbits are commonly seen.']
//    'body' => ['title' => 'Keeping pets healthy','body'=>'My quick brown fox eats rabbits on a regular basis.']
//];
//
//$response = $client->index($params);
//print_r($response);

/*$params = [
    'index' => 'my_index',
    'type' => 'my_type',
    'id' => 'my_id'
];

$response = $client->get($params);
print_r($response);*/

/*$params = [
    'index' => 'my_index',
    'type' => 'my_type',
    'id' => 'my_id'
];

$source = $client->getSource($params);
print_r($source);*/

$a = '{
    "query": {
        "dis_max": {
            "queries": [
                { "match": { "title": "Brown fox" }},
                { "match": { "body":  "Brown fox" }}
            ]
        }
    }
}';

//$a = '{
//    "query": {
//        "bool": {
//            "should": [
//                { "match": { "title": "Brown fox" }},
//                { "match": { "body":  "Brown fox" }}
//            ]
//        }
//    }
//}';
var_dump(json_decode($a,true));exit;
$params = [
    'index' => 'my_index',
    'type' => 'my_type',
    'body' => json_decode($a,true)
];

$response = $client->search($params);
print_r($response);

//$params = [
//    'index' => 'my_index',
//    'type' => 'my_type',
//    'id' => 'my_id'
//];
//
//$response = $client->delete($params);
//print_r($response);


//$deleteParams = [
//    'index' => 'my_index'
//];
//$response = $client->indices()->delete($deleteParams);
//print_r($response);

//$params = [
//    'index' => 'my_index',
//    'body' => [
//        'settings' => [
//            'number_of_shards' => 2,
//            'number_of_replicas' => 0
//        ]
//    ]
//];
//
//$response = $client->indices()->create($params);
//print_r($response);