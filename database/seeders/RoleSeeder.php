<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        if (!Role::where('name', 'admin')->exists()) {
            Role::create(['name' => 'admin']);
        }
        
        if (!Role::where('name', 'user')->exists()) {
            Role::create(['name' => 'user']);
        }
        // أضف الأدوار الأخرى إذا لزم الأمر
    }
}
