<?php

namespace App\Services;

use GuzzleHttp\Client;

class ReviewService
{
    public function all()
    {
        $client = new Client();
        $json = $client->request('GET', 'https://maps.googleapis.com/maps/api/place/details/json', ['query' =>
            ['placeid' => 'ChIJmRGFnpR_cEgRteOCjbcPGFw' , 'key' => env('GPLACES_KEY')]]);
        return collect(json_decode($json->getBody()->getContents())->result->reviews);
    }

    public function link()
    {
        return 'https://search.google.com/local/writereview?placeid=ChIJmRGFnpR_cEgRteOCjbcPGFw';
    }
}