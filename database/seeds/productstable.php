<?php

use Illuminate\Database\Seeder;

class productstable extends Seeder
{
        public function run()
    {
      DB::table('products')->insert([
         'name' => 'Macbook',
          'price'  => 80000,    ]);
    }

}
