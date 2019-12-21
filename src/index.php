<?php

namespace imzankhan\SC_Assign;

use GuzzleHttp\Client;

class Index
{
    public function Base($apikey, $endpoint, $query = [])
    {
        $headers = ['api_key' => $apikey, 'Content-Type' => 'application/json'];

        $client = new Client(['base_uri' => 'api.giphy.com/']);

        $response = $client->get($endpoint, [
            'headers' => $headers,
            'query' => $query
        ]);

        $contents = (string) $response->getBody();

        return $contents;
    }

    public function Search($apikey, $search, $limit = 25)
    {
        $endpoint = 'v1/gifs/search';
        $query = ['q' => $search, 'limit' => $limit];
        $response = Index::Base($apikey, $endpoint, $query);

        return $response;
    }

    public function Trending($apikey, $limit = 25)
    {
        $endpoint = 'v1/gifs/trending';
        $query = ['limit' => $limit];
        $response = Index::Base($apikey, $endpoint, $query);
        return $response;
    }
}
