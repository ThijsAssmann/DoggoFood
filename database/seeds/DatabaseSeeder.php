<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ProductenSeederTable::class);
         $this->call(CategorySeederTable::class);
         $this->call(SubcategorySeederTable::class);
    }
}
