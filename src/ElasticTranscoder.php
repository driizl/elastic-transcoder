<?php

namespace Driizl\Elastic;

use Aws;

class ElasticTranscoder
{
    protected $client;

    public function __construct()
    {
        $this->client  = new Aws\ElasticTranscoder\ElasticTranscoderClient([
            'version' => 'latest',
            'key' => env('AWS_KEY'),
            'secret' => env('AWS_SECRET'),
            'region' => env('AWS_REGION')
        ]);
    }

    public function createJob()
    {
        $params = [];

        dump($this->client);
    }

}