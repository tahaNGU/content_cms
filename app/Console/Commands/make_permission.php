<?php

namespace App\Console\Commands;

use App\Models\permissions;
use Illuminate\Console\Command;

class make_permission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $modules = trans('modules.module_name');
        $crud = ["create", "read", "delete", "update"];
//        unset($modules["permission"]);
        foreach ($modules as $key => $module) {
            array_map(function ($item) use ($key) {
                permissions::insertOrIgnore([
                    "title" => $item."-" . $key,
                    "module"=>$key
                ]);
                dump($item."-" . $key);
            }, $crud);
        }
    }
}
