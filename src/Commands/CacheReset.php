<?php

namespace Partoo\Permission\Commands;

use Illuminate\Console\Command;
use Partoo\Permission\PermissionRegistrar;

class CacheReset extends Command
{
    protected $signature = 'permission:cache-reset';

    protected $description = 'Reset the permission cache';

    public function handle()
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $this->info('Permission cache flushed.');
    }
}
