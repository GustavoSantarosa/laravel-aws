<?php

namespace App\Repositories;

use Illuminate\Support\Facades\App;

class PollyRepository
{
    public function Object()
    {
        $polly = App::make('aws')->createClient('polly');
    }
}
