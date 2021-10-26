<?php

namespace NSQClientProducer;

class Send 
{

    private $client;
    private $config;

    public function __construct($config)
    {
        $this->client = new \GuzzleHttp\Client();
        $this->config = $config;
    }

    public function sendWhatsapp($phone, $message)
    {
        $response = $this->client->post($this->config['waURL'], [
            'json' => [
                'to' => $phone,
                'text' => $message
            ]
        ]);

        return $response->getBody();
    }

    public function sendEmail($mailAddress, $message, $subject = 'No subject')
    {
        $response = $this->client->post($this->config['emailURL'], [
            'json' => [
                'to' => $mailAddress,
                'subject' => $subject,
                'text' => $message
            ]
        ]);

        return $response->getBody();
    }
}