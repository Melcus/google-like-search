<?php

namespace App\Console\Commands;

use App\Models\Store;
use Illuminate\Console\Command;
use Sleimanx2\Plastic\Facades\Plastic;

class ImportStoresToES extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ImportStoresToES {offset}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Stores to Elasticsearch';

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
     * @return mixed
     */
    public function handle()
    {
        $offset = $this->argument('offset');
        $limit = 500;
        $this->processStores($offset, $limit);
        $offset += $limit;
        $this->call('ImportStoresToES', ['offset' => $offset]);
    }


     protected function processStores($offset, $limit)
    {

        $stores = Store::offset($offset)->limit($limit)->get();

        if(count($stores))
        {
            Plastic::persist()->bulkSave($stores);
            $max = $offset + $limit;
            $this->info("Indexed stores to ES  from {$offset} to {$max}.");
            unset($stores);
        }
    }


}
