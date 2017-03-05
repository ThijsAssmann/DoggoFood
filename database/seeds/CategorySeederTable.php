<?php

use Illuminate\Database\Seeder;

class CategorySeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'cat_name' => 'Brokken',
            'cat_desc' => 'Honden brokken.',
        ]);

        DB::table('category')->insert([
            'cat_name' => 'Snacks',
            'cat_desc' => 'Honden snacks.',
        ]);

        DB::table('category')->insert([
            'cat_name' => 'Training',
            'cat_desc' => 'Eten speciaal voor training als beloning.',
        ]);
    }

}
