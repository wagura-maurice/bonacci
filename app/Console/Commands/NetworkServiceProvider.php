<?php

namespace App\Console\Commands;

use App\Models\Contactu;
use Illuminate\Console\Command;
use App\Models\NetworkProvidentem;
use Njenga55\ServiceProvider\Facades\MobileProvider;

class NetworkServiceProvider extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'service:provider';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to get the network provider of contacts';

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
        /*
           Write your handler logic bellow:

           - get the name of the mobile provide via Njenga55's ServiceProvider.
           - check if the mobile provider is provide for in the db.
           - update the contact's network; foreign key.
        */

        Contactu::where([
            '_status' => Contactu::PENDING
        ])->chunk(100, function($contacts) {
            foreach ($contacts as $key => $contact) {
                
                $mobileProvider = MobileProvider::getProvider(prefix(0, $contact->phoneNumber, -9));

                if ($mobileProvider) {
                    $networkProvider = NetworkProvidentem::whereName($mobileProvider)->first();
                    $contact->networkId = optional($networkProvider)->id;
                    $contact->save();
                }
            }
        });
    }
}
