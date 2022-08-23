<?php

namespace Basico\Commands;

use Illuminate\Console\Command;

class InstallComand extends Command
{
    protected $signature = 'install:teste';

    protected $description = 'Comando de teste';

    public function handle()
    {
        dd("ok, do comando teste");
    }
}