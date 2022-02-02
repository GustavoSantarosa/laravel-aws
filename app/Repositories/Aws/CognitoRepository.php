<?php

namespace App\Repositories;

use Illuminate\Support\Facades\App;

class CognitoRepository
{
    public function Object()
    {
        $cognito = App::make('aws')->createClient('cognito');
    }
}
