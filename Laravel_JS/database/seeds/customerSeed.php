<?php

use Illuminate\Database\Seeder;

class customerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('customers')->insert([
            'name' => 'pablo hernan',
            'email' => 'jose@gmail.com',
            'contact_number' => '9971386229'
        ]);
        DB::table('customers')->insert([
            'name' => 'CarlosHu',
            'email' => 'anthor@gmail.com',
            'contact_number' => '9998123124'
        ]);
        DB::table('customers')->insert([
            'name' => 'Glendi Hu',
            'email' => 'rosario@gmail.com',
            'contact_number' => '998912931'
        ]);
    }
}
