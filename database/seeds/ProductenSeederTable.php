<?php

use Illuminate\Database\Seeder;

class ProductenSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Brokken
        DB::table('product')->insert([
            'name' => 'Geperste brokken kip',
            'desc' => 'De brokken bevatten geen synthetische toevoegingen in de vorm van geur-, kleur- en smaakstoffen.',
            'price' => '42.50',
            'sales_price' => '37.30',
            'stock' => '14',
            'cat' => 'Brokken',
            'subcat' => 'Kip',
            'weight' => '15',
            'weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'name' => 'Canex Adult Brocks',
            'desc' => 'Canex Adult Brocks is een geëxpandeerd (krokante) licht verteerbaar volledig hondenvoer dat geheel op basis van de wetenschappelijk vastgestelde voedingsbehoefte is ontwikkeld. De voeding is geschikt voor de volwassen hond van alle rassen.',
            'price' => '38.95',
            'sales_price' => '33.95',
            'stock' => '25',
            'cat' => 'Brokken',
            'subcat' => 'Kip',
            'weight' => '12.5',
            'weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'name' => 'Naturis Adult XL',
            'desc' => 'Naturis Adult XL is de complete voeding voor de volwassen hond van het grotere ras. De voeding is geschikt voor honden vanaf 30 kg in de leeftijd 12 maanden tot 5 jaar.',
            'price' => '37.50',
            'sales_price' => '33.30',
            'stock' => '20',
            'cat' => 'Brokken',
            'subcat' => 'Kip',
            'weight' => '15',
            'weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'name' => 'Prins ProCare Lam & Rijst',
            'desc' => 'Prins ProCare Lam & Rijst Hypoallergic is een geperste hondenbrok welke geschikt is voor gevoelige volwassen honden tot een leeftijd van ca. 8 jaar.',
            'price' => '51.50',
            'sales_price' => '42.30',
            'stock' => '15',
            'cat' => 'Brokken',
            'subcat' => 'Lam',
            'weight' => '15',
            'weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'name' => 'Prins ProCare Croque Lam & Rijst Hypoallergeen',
            'desc' => 'Prins ProCare Croque Lamb & Rice Hypoallergic is speciaal voor honden met een allergie voor eiwitten van rund- of kippenvlees. Tevens bevat deze brok geen tarwe gluten. Speciaal geschikt voor de gevoelige hond.',
            'price' => '55.50',
            'sales_price' => '42.95',
            'stock' => '20',
            'cat' => 'Brokken',
            'subcat' => 'Lam',
            'weight' => '10',
            'weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'name' => 'Biofood Lam & Rijst',
            'desc' => 'BIOFOOD Lam&Rijst is een volledige licht verteerbare, natuurlijke en zeer smaakvolle hondenvoeding speciaal ontwikkelt volwassen honden en voor overgevoelige honden met bijv. huid- en vachtproblemen.',
            'price' => '37.50',
            'sales_price' => '33.95',
            'stock' => '15',
            'cat' => 'Brokken',
            'subcat' => 'Lam',
            'weight' => '12.5',
            'weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'name' => 'Biofood Diner Rund',
            'desc' => 'BIOFOOD Diner is een volledig licht verteerbare, natuurlijke en zeer smaakvolle hondenvoeding bereid met groenten en vlees.',
            'price' => '26.50',
            'sales_price' => '20.95',
            'stock' => '20',
            'cat' => 'Brokken',
            'subcat' => 'Rund',
            'weight' => '10',
            'weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'name' => 'Biofood Korkant Rund',
            'desc' => 'BIOFOOD Krokant is een volledige licht verteerbare, natuurlijke en zeer smaakvolle hondenvoeding voor volwassen honden van alle rassen met een normale activiteit.',
            'price' => '36.95',
            'sales_price' => '34.95',
            'stock' => '25',
            'cat' => 'Brokken',
            'subcat' => 'Rund',
            'weight' => '12.5',
            'weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'name' => 'Farm Food High Energy Classic',
            'desc' => 'Farm Food High Energy Classic is een hoogwaardig hondenvoer welke geschikt is voor honden van alle leeftijden en rassen.',
            'price' => '46.95',
            'sales_price' => '44.60',
            'stock' => '15',
            'cat' => 'Brokken',
            'subcat' => 'Rund',
            'weight' => '15',
            'weight_unit' => 'kg',
        ]);

        // Snacks
        DB::table('product')->insert([
            'name' => 'Varkensoren',
            'desc' => 'Varkensoren worden op hoge temperatuur gedroogd zodat eventuele bacteriën worden vernietigd. Een varkensoor is een lekkernij voor honden en een prima gebitsreiniger.',
            'price' => '7.95',
            'sales_price' => '6.95',
            'stock' => '250',
            'cat' => 'Snacks',
            'subcat' => 'Varken',
            'weight' => '250',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Varkensdarm',
            'desc' => 'Varkensdarm oftewel spaghetti is geschikt voor kleine hondjes.',
            'price' => '3.89',
            'sales_price' => '2.75',
            'stock' => '356',
            'cat' => 'Snacks',
            'subcat' => 'Varken',
            'weight' => '200',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Oorschelp varken',
            'desc' => 'Varkensoorschelpen zijn een lekkere knapperige snack voor grote en kleine honden.',
            'price' => '4.49',
            'sales_price' => '3.45',
            'stock' => '143',
            'cat' => 'Snacks',
            'subcat' => 'Varken',
            'weight' => '500',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Mixzak rundsnacks',
            'desc' => 'Mixzak van de 5 toppers!',
            'price' => '7.49',
            'sales_price' => '5.75',
            'stock' => '75',
            'cat' => 'Snacks',
            'subcat' => 'Rund',
            'weight' => '1',
            'weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'name' => 'Rundvleesplaatjes',
            'desc' => 'Rundvleesplaatjes repen bevatten veel eiwit  en weinig vet.',
            'price' => '4.95',
            'sales_price' => '3.95',
            'stock' => '100',
            'cat' => 'Snacks',
            'subcat' => 'Rund',
            'weight' => '500',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Pensstaaf',
            'desc' => 'Pensstaafjes van groene pens.',
            'price' => '5.45',
            'sales_price' => '4.75',
            'stock' => '60',
            'cat' => 'Snacks',
            'subcat' => 'Rund',
            'weight' => '500',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Ree-oren met vacht',
            'desc' => 'Ree-oren per 10 stuks',
            'price' => '7.35',
            'sales_price' => '6.75',
            'stock' => '70',
            'cat' => 'Snacks',
            'subcat' => 'Wild',
            'weight' => '250',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Vleesreepen konijn',
            'desc' => 'Vleesreepen konijn 250 gram',
            'price' => '4.45',
            'sales_price' => '3.89',
            'stock' => '80',
            'cat' => 'Snacks',
            'subcat' => 'Wild',
            'weight' => '250',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Vleesreepen kangeroe',
            'desc' => 'Vleesreepen kangeroe 250 gram',
            'price' => '5.35',
            'sales_price' => '4.45',
            'stock' => '60',
            'cat' => 'Snacks',
            'subcat' => 'Wild',
            'weight' => '250',
            'weight_unit' => 'gram',
        ]);

        // Training
        DB::table('product')->insert([
            'name' => 'Lamsvleesblokjes',
            'desc' => 'Vleesblokjes van lam. Om te geven als beloning tijdens een training of tussendoortje!',
            'price' => '4.75',
            'sales_price' => '3.35',
            'stock' => '80',
            'cat' => 'Training',
            'subcat' => 'Lam',
            'weight' => '250',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Eendenvleesblokjes',
            'desc' => 'Heerlijke gedroogde eendenvleesblokjes voor de kleine en grote hond als een lekker tussendoortje.',
            'price' => '4.75',
            'sales_price' => '3.35',
            'stock' => '90',
            'cat' => 'Training',
            'subcat' => 7,
            'weight' => '250',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Konijnvleesblokjes',
            'desc' => 'Heerlijke gedroogde konijnvleesblokjes voor de kleine en grote hond als een lekker tussendoortje.',
            'price' => '4.25',
            'sales_price' => '3.35',
            'stock' => 3,
            'cat' => 'Training',
            'subcat' => 'Wild',
            'weight' => '250',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Paardenvleesblokjes',
            'desc' => 'lokjes gemaakt van 100% paardenvlees, zonder enige toevoegingen. Snacks van Paard zijn zeer geschikt voor honden en katten met een voedselallergie.',
            'price' => '4.25',
            'sales_price' => '3.35',
            'stock' => '100',
            'cat' => 'Training',
            'subcat' => 8,
            'weight' => '250',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Kipfilét blokjes',
            'desc' => 'Kip stukjes van het vetarme borstvlees van de kip.',
            'price' => '4.75',
            'sales_price' => '3.35',
            'stock' => '50',
            'cat' => 'Training',
            'subcat' => 'Kip',
            'weight' => '250',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Kippenhartjes',
            'desc' => 'Door hun kleine formaat zijn kippenhartjes zeer geschikt om te geven als beloning en voor training.',
            'price' => '4.75',
            'sales_price' => '3.35',
            'stock' => '30',
            'cat' => 'Training',
            'subcat' => 'Kip',
            'weight' => '250',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Runderlong',
            'desc' => 'Runderlong is een  gezonde, lekkere snack  en bevat weinig vet. Trainers van runderlong  zijn daarom zeer geschikt tijdens training of als verantwoord tussendoortje.',
            'price' => '4.25',
            'sales_price' => '3.35',
            'stock' => '45',
            'cat' => 'Training',
            'subcat' => 'Rund',
            'weight' => '250',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Runderlever',
            'desc' => 'Een van onze vele hondensnacks waar de meeste honden dol op zijn. Het is makkelijk te breken in kleine stukjes en daarom ook zeer geschikt voor training en beloning.',
            'price' => '4.45',
            'sales_price' => '3.35',
            'stock' => '80',
            'cat' => 'Training',
            'subcat' => 'Rund',
            'weight' => '250',
            'weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'name' => 'Geitenvleesblokjes',
            'desc' => 'Geitenvleesblokjes zijn hypo-allergene blokjes die ideaal zijn voor training of gezond tussendoortje.',
            'price' => '4.95',
            'sales_price' => '3.95',
            'stock' => '65',
            'cat' => 'Training',
            'subcat' => 'Gevogelte',
            'weight' => '250',
            'weight_unit' => 'gram',
        ]);
    }
}
