<?php

namespace Partoo\Permission\Commands;

use Illuminate\Console\Command;
use Partoo\Permission\Contracts\Permission as PermissionContract;

class CreatePermission extends Command
{
    protected $signature = 'permission:create-permission
                {name : The name of the permission}
                {label : The label of the permission}
                {guard? : The name of the guard}';

    protected $description = 'Create a permission';

    public function handle()
    {
        $permissionClass = app(PermissionContract::class);

        $permission = $permissionClass::findOrCreate($this->argument('name'), $this->argument('guard'));

        $this->info("Permission `{$permission->name}` created");
    }
}