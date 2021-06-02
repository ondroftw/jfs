<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ParseXml extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:xml';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $xml = simplexml_load_string(file_get_contents(public_path('static/dishes.xml')), "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        dd(array_map(function ($item) {
            return [
                "name" => data_get($item, "NAME"),
                "dishes" => array_map(function ($dish) {
                    return [
                        "name" => data_get($dish, "NAME"),
                        "price" => (float)data_get($dish, "PRICE"),
                    ];
                }, data_get($item, "DISHES.DISH"))
            ];
        }, data_get($array, "DISHCATEGORY")));
    }
}
