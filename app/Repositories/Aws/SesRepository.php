<?php

namespace App\Repositories;

use Illuminate\Support\Facades\App;

class SesRepository
{
    public function Object()
    {
        $ses = App::make('aws')->createClient('ses');
    }
}
