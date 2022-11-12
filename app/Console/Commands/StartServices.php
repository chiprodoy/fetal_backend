<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\PengingatPergerakanJanin;
use Illuminate\Console\Command;

class StartServices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start:services {serviceName : The service name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to run all services';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        switch($this->argument('serviceName')){
            case 'pengingat-pergerakan-janin' : $this->sendPengingatPergerakanJanin();break;
        }
        return 0;
    }

    public function sendPengingatPergerakanJanin(){
        $user=User::all();
        foreach($user as $k => $v){
            $v->notify(new PengingatPergerakanJanin());
        }
    }
}
