<?php

use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert(array(
               'bank_name' => 'BANAMEX',
               'bank_sat_key' => '02',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('banks')->insert(array(
               'bank_name' => 'BBVA BANCOMER',
               'bank_sat_key' => '12',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('banks')->insert(array(
               'bank_name' => 'HSBC',
               'bank_sat_key' => '21',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('banks')->insert(array(
               'bank_name' => 'SANTANDER',
               'bank_sat_key' => '14',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('banks')->insert(array(
               'bank_name' => 'SCOTIABANK',
               'bank_sat_key' => '44',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('banks')->insert(array(
               'bank_name' => 'BANORTE',
               'bank_sat_key' => '72',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('banks')->insert(array(
               'bank_name' => 'INBURSA',
               'bank_sat_key' => '36',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));
    }
}
