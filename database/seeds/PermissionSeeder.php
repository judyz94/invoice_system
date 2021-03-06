<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Invoices
        DB::table('permissions')->insert([
            'name' => 'Invoices index',
            'slug' => 'invoices.index',
            'description' => 'List all invoices'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Invoices create',
            'slug' => 'invoices.create',
            'description' => 'Create invoices'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Invoices edit',
            'slug' => 'invoices.edit',
            'description' => 'Edit invoices'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Invoices delete',
            'slug' => 'invoices.destroy',
            'description' => 'Delete invoices'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Invoices show',
            'slug' => 'invoices.show',
            'description' => 'Show invoice details'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Invoices import',
            'slug' => 'invoices.import',
            'description' => 'Import invoices'
        ]);


        //Invoice details
        DB::table('permissions')->insert([
            'name' => 'Invoice details create',
            'slug' => 'details.create',
            'description' => 'Create invoice details'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Invoice details edit',
            'slug' => 'details.edit',
            'description' => 'Edit invoice details'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Invoice details delete',
            'slug' => 'details.destroy',
            'description' => 'Delete invoice invoice details'
        ]);

        //Payment attempts
        DB::table('permissions')->insert([
            'name' => 'Payments attempt create',
            'slug' => 'payments.store',
            'description' => 'Create payment attempts'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Payment attempts index',
            'slug' => 'payments.index',
            'description' => 'List all payment attempts'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Payment attempts show',
            'slug' => 'payments.show',
            'description' => 'Details of payment attempt'
        ]);


        //Permissions
        DB::table('permissions')->insert([
            'name' => 'Permissions index',
            'slug' => 'permissions.index',
            'description' => 'List all permissions'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Permissions create',
            'slug' => 'permissions.create',
            'description' => 'Create permissions'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Permissions edit',
            'slug' => 'permissions.edit',
            'description' => 'Edit permissions'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Permissions delete',
            'slug' => 'permissions.destroy',
            'description' => 'Delete permissions'
        ]);

        //Roles
        DB::table('permissions')->insert([
            'name' => 'Roles index',
            'slug' => 'roles.index',
            'description' => 'List all roles'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Roles create',
            'slug' => 'roles.create',
            'description' => 'Create roles'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Roles edit',
            'slug' => 'roles.edit',
            'description' => 'Edit roles'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Roles delete',
            'slug' => 'roles.destroy',
            'description' => 'Delete roles'
        ]);

        //Products
        DB::table('permissions')->insert([
            'name' => 'Products index',
            'slug' => 'products.index',
            'description' => 'List all products'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Products create',
            'slug' => 'products.create',
            'description' => 'Create products'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Products edit',
            'slug' => 'products.edit',
            'description' => 'Edit products'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Products delete',
            'slug' => 'products.destroy',
            'description' => 'Delete products'
        ]);

        //Sellers
        DB::table('permissions')->insert([
            'name' => 'Sellers index',
            'slug' => 'sellers.index',
            'description' => 'List all sellers'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Sellers create',
            'slug' => 'sellers.create',
            'description' => 'Create sellers'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Sellers edit',
            'slug' => 'sellers.edit',
            'description' => 'Edit sellers'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Sellers delete',
            'slug' => 'sellers.destroy',
            'description' => 'Delete sellers'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Sellers show',
            'slug' => 'sellers.show',
            'description' => 'Show seller details'
        ]);

        //Customers
        DB::table('permissions')->insert([
            'name' => 'Customers index',
            'slug' => 'customers.index',
            'description' => 'List all customers'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Customers create',
            'slug' => 'customers.create',
            'description' => 'Create customers'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Customers edit',
            'slug' => 'customers.edit',
            'description' => 'Edit customers'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Customers delete',
            'slug' => 'customers.destroy',
            'description' => 'Delete customers'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Customers show',
            'slug' => 'customers.show',
            'description' => 'Show customer details'
        ]);

        //Modals
        DB::table('permissions')->insert([
            'name' => 'Order summary',
            'slug' => 'orderSummary',
            'description' => 'See order summary of sale'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Overdue invoice',
            'slug' => 'overdueInvoice',
            'description' => 'Warning overdue invoice'
        ]);

        DB::table('permissions')->insert([
            'name' => 'No products in detail',
            'slug' => 'invoiceProduct',
            'description' => 'Warning when detail not have products'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Pending payment',
            'slug' => 'pendingPayment',
            'description' => 'Warning pending payment'
        ]);


        //Users
        DB::table('permissions')->insert([
            'name' => 'Users index',
            'slug' => 'users.index',
            'description' => 'List all users'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Users edit',
            'slug' => 'users.edit',
            'description' => 'Edit users'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Users delete',
            'slug' => 'users.destroy',
            'description' => 'Delete users'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Users show',
            'slug' => 'users.show',
            'description' => 'Show user details'
        ]);

        //Home - 43
        DB::table('permissions')->insert([
            'name' => 'Home customer',
            'slug' => 'home.customer',
            'description' => 'Home customer to pay'
        ]);

        //Exports - 44
        DB::table('permissions')->insert([
            'name' => 'Invoice report',
            'slug' => 'invoice.report',
            'description' => 'Filter invoices to export'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Invoices index with filters',
            'slug' => 'invoices.filter',
            'description' => 'Invoices index with filter'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Invoice detail PDF',
            'slug' => 'download.PDF.invoice',
            'description' => 'Invoice detail PDF download'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Payment attempts PDF',
            'slug' => 'download.PDF.payment',
            'description' => 'Payment attempts PDF download'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Invoices XLS export',
            'slug' => 'download.XLS',
            'description' => 'Invoices all XLS export'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Invoices CSV export',
            'slug' => 'download.CSV',
            'description' => 'Invoices all CSV export'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Invoices TXT export',
            'slug' => 'download.TXT',
            'description' => 'Invoices all TXT export'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Invoice report export',
            'slug' => 'export.report',
            'description' => 'Invoice report export'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Modal export all invoices',
            'slug' => 'export.all',
            'description' => 'Modal export all invoices'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Exported reports index',
            'slug' => 'reports.index',
            'description' => 'List all export reports'
        ]);

        DB::table('permissions')->insert([
            'name' => 'Delete exports',
            'slug' => 'reports.destroy',
            'description' => 'Delete exported report'
        ]);

        //API - Invoice details
        DB::table('permissions')->insert([
            'name' => 'Invoice details index',
            'slug' => 'details.index',
        ]);
    }
}

