<?php

namespace App\Http\Controllers;

use App\Jobs\PrintAunthor;
use App\Jobs\PrintTask;
use App\Jobs\PrintToday;
use JustIversen\JobChainer\JobChainer;

class JobsController extends Controller
{
    public function run() 
    {
        $chain = new JobChainer;

        $chain->add(PrintToday::class);
        $chain->add(PrintAunthor::class);
        $chain->add(PrintTask::class);
        $chain->dispatch();
    }

}
