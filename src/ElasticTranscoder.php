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

    protected function getClient()
    {
        return $this->client;
    }

    /**
     *
     * @param $inputKey
     * @param $destinationKey
     * @param $config
     * @param null $thumbPattern
     */
    public function encode($inputKey, $destinationKey, $config, $thumbPattern = null)
    {
        $folname = ''; //What is it??
        $params = [
            'PipelineId' => '',
            'Inputs' => [

            ],
            'OutputKeyPrefix' => $folname . "/",
            'Outputs' => [
                [
                    'Key' => $destinationKey,
                    'ThumbnailPattern' => $thumbPattern,
                    'Rotate' => 'auto',
                    'PresetId' => '',
                    'Encryption' => [
                        'Mode' => 's3',
                    ],
                ],
            ],
        ];

        $job_config = array(
            'PipelineId' => '',
            'Input' => '',
            'Output' => '',
        );

        $result = $this->getClient()->createJob($params);
    }

    public function getJob($id)
    {
        return $this->getClient()->readJob([
            'Id' => $id
        ]);
    }

    public function cancelJob($id)
    {
        return $this->getClient()->cancelJob([
            'Id' => $id
        ]);
    }

}