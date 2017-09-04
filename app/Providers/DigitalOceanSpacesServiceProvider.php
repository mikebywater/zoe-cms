<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Storage;
use Aws\S3\S3Client;
use League\Flysystem\AwsS3v3\AwsS3Adapter;
use League\Flysystem\Filesystem;

class DigitalOceanSpacesServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {

        Storage::extend('DO', function( $app, $config )
        {
            $client = S3Client::factory(array(
                'key' => $config['key'],
                'secret' => $config['secret'],
                'base_url' => $config['base_url'],
                'region' => $config['region'],
            ));

            return new Filesystem(new AwsS3Adapter($client, $config['bucket']));
        });
    }
}
