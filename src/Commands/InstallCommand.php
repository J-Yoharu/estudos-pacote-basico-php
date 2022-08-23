<?php

namespace Basico\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'install:teste';

    protected $description = 'Comando de teste';

    public function handle()
    {
        dd("Ok, pelo teste de comando;");
    }
}