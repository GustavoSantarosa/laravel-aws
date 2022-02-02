<?php

namespace App\Repositories;

use Illuminate\Support\Facades\App;

class S3Repository
{
    public function putObject(string $bucket, string $key, string $sourceFile)
    {
        $s3 = App::make('aws')->createClient('s3');
        $s3->putObject(array(
            'Bucket'     => $bucket,
            'Key'        => $key,
            'SourceFile' => $sourceFile,
        ));
    }
}
