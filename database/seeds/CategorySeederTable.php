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
            'desc' => 'In de winkel zijn veel verschillende hondenbrokken te koop. Toch is het vaak moeilijk om brokken te vinden waar je echt tevreden mee bent. Hier bij DoggoFood vinden wij het belangrijk dat uw huisdier de juiste voeding krijgt. Groot, klein, jong of oud wij hebben wat uw huisdier nodig heeft.',
        ]);

        DB::table('category')->insert([
            'name' => 'Snacks',
            'desc' => 'In de winkel zijn veel verschillende snacks te koop. Toch is het vaak moeilijk om snacks te vinden waar je echt tevreden mee bent. Hier bij DoggoFood vinden wij het belangrijk dat uw huisdier de juiste voeding krijgt. Groot, klein, jong of oud wij hebben wat uw huisdier nodig heeft.',
        ]);

        DB::table('category')->insert([
            'name' => 'Training',
            'desc' => 'Het kan soms moeilijk zijn om een snack te vinden die u aan uw huisdier kan geven tijdens het trainen. Hier bij DoggoFood willen wij een goed assortiment dingesen zodat uw een goed en goedkopen snack aan uw huisdier kan geven ter beloning .',
        ]);
    }

}
