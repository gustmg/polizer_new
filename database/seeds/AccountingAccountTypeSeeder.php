<?php

use Illuminate\Database\Seeder;

class AccountingAccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounting_account_types')->insert(array(
               'accounting_account_type_description' => 'Bancos',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('accounting_account_types')->insert(array(
               'accounting_account_type_description' => 'Inventarios',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('accounting_account_types')->insert(array(
               'accounting_account_type_description' => 'Ventas / Ingresos',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('accounting_account_types')->insert(array(
               'accounting_account_type_description' => 'Gastos de operación',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('accounting_account_types')->insert(array(
               'accounting_account_type_description' => 'Gastos de venta',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('accounting_account_types')->insert(array(
               'accounting_account_type_description' => 'Gastos de administración',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));
    }
}
