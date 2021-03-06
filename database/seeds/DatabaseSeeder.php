<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'cities',
            'customers',
            'sellers',
            'users',
            'products',
            'states',
            'invoices',
            'invoice_product',
            'permissions',
            'roles',
            'role_user',
            'permission_role',
        ]);

        $this->call(CitySeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(SellerSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(InvoiceProductSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(PermissionRoleSeeder::class);
    }

    public function truncateTables(array $tables): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table)
        {
          DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}

