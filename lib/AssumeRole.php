<?php

namespace JJFulfilment\AmazonSPAPI;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Query;

class AssumeRole
{
    /** @var string */
    private $accessKeyId;
    /** @var string */
    private $secretAccessKey;
    /** @var string */
    private $sessionToken;

    /**
     * AssumeRole constructor.
     * @param string $accessKeyId
     * @param string $secretAccessKey
     * @param string $sessionToken
     */
    public function __construct($accessKeyId, $secretAccessKey, $sessionToken)
    {
        $this->accessKeyId = $accessKeyId;
        $this->secretAccessKey = $secretAccessKey;
        $this->sessionToken = $sessionToken;
    }

    public function getAccessKeyId()
    {
        return $this->accessKeyId;
    }

    public function getSecretAccessKey()
    {
        return $this->secretAccessKey;
    }

    public function getSessionToken()
    {
        return $this->sessionToken;
    }

    /**
     * @param string $region
     * @param string $accessKey
     * @param string $secretKey
     * @param string $roleArn
     * @param int $durationSeconds
     * @return AssumeRole
     */
    public static function assume($region, $accessKey, $secretKey, $roleArn, $durationSeconds = 3600)
    {
        $requestOptions = [
            'headers' => [
                'accept' => 'application/json',
            ],
            'form_params' => [
                'Action' => 'AssumeRole',
                'DurationSeconds' => $durationSeconds,
                'RoleArn' => $roleArn,
                'RoleSessionName' => 'amazon-sp-api-php',
                'Version' => '2011-06-15',
            ],
        ];

        $host = 'sts.amazonaws.com';
        $uri = '/';

        try {
            $signedHeader = Signature::calculateSignatureForService(
                $host,
                'POST',
                $uri,
                '',
                Query::build($requestOptions['form_params']),
                'sts',
                $accessKey,
                $secretKey,
                'us-east-1',
                null,
                null,
                'cs-php-sp-api-client/2.1'
            );
        } catch (\Exception $e) {
            echo "Error (Signing process) : {$e->getMessage()}";
            throw $e;
        }

        $client = new Client([
            'base_uri' => 'https://'.$host,
        ]);

        $requestOptions['headers'] = array_merge($requestOptions['headers'], $signedHeader);

        try {
            $response = $client->post($uri, $requestOptions);

            $json = json_decode($response->getBody(), true);
            $credentials = $json['AssumeRoleResponse']['AssumeRoleResult']['Credentials'] ?? null;

            return new AssumeRole(
                $credentials['AccessKeyId'],
                $credentials['SecretAccessKey'],
                $credentials['SessionToken']
            );
        } catch (\Exception $e) {
            echo "Error (Signing process) : {$e->getMessage()}";
            throw $e;
        }
    }
}
