<?php

use Illuminate\Database\Seeder;

class SubcategorySeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategory')->insert([
            'name' => 'Kip',
            'desc' => 'Vogelsoort die behoort tot de hoenderachtigen.',
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Lam',
            'desc' => 'Een jong schaap.',
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Rund',
            'desc' => 'Het rund (Bos taurus) is een evenhoevige uit het geslacht Bos van de familie der holhoornigen.',
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Varken',
            'desc' => 'De varkens of zwijnen van de Oude Wereld (Suidae) zijn een familie uit de orde der evenhoevigen.',
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Wild',
            'desc' => 'Wild worden planten en dieren genoemd die niet gecultiveerd worden maar "in het wild" leven.',
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Gevogelte',
            'desc' => 'Met gevogelte wordt in de keuken het vlees van vogels bedoeld, meestal met uitzondering van kip.',
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Geit',
            'desc' => 'De geit (Capra hircus) is een zoogdier dat behoort tot de evenhoevigen, en daarbinnen de holhoornigen (Bovidae).',
        ]);
    }
}
