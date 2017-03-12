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
            'name' => 'Brokken',
            'desc' => 'Honden brokken.',
        ]);

        DB::table('category')->insert([
            'name' => 'Snacks',
            'desc' => 'Honden snacks.',
        ]);

        DB::table('category')->insert([
            'name' => 'Training',
            'desc' => 'Eten speciaal voor training als beloning.',
        ]);
    }

}
