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
            'prod_name' => 'Geperste brokken kip',
            'prod_desc' => 'De brokken bevatten geen synthetische toevoegingen in de vorm van geur-, kleur- en smaakstoffen.',
            'prod_price' => '42.50',
            'prod_sales_price' => '37.30',
            'prod_stock' => '14',
            'prod_cat' => 1,
            'prod_catsub' => 1,
            'prod_weight' => '15',
            'prod_weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Canex Adult Brocks',
            'prod_desc' => 'Canex Adult Brocks is een geëxpandeerd (krokante) licht verteerbaar volledig hondenvoer dat geheel op basis van de wetenschappelijk vastgestelde voedingsbehoefte is ontwikkeld. De voeding is geschikt voor de volwassen hond van alle rassen.',
            'prod_price' => '38.95',
            'prod_sales_price' => '33.95',
            'prod_stock' => '25',
            'prod_cat' => 1,
            'prod_catsub' => 1,
            'prod_weight' => '12.5',
            'prod_weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Naturis Adult XL',
            'prod_desc' => 'Naturis Adult XL is de complete voeding voor de volwassen hond van het grotere ras. De voeding is geschikt voor honden vanaf 30 kg in de leeftijd 12 maanden tot 5 jaar.',
            'prod_price' => '37.50',
            'prod_sales_price' => '33.30',
            'prod_stock' => '20',
            'prod_cat' => 1,
            'prod_catsub' => 1,
            'prod_weight' => '15',
            'prod_weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Prins ProCare Lam & Rijst',
            'prod_desc' => 'Prins ProCare Lam & Rijst Hypoallergic is een geperste hondenbrok welke geschikt is voor gevoelige volwassen honden tot een leeftijd van ca. 8 jaar.',
            'prod_price' => '51.50',
            'prod_sales_price' => '42.30',
            'prod_stock' => '15',
            'prod_cat' => 1,
            'prod_catsub' => 2,
            'prod_weight' => '15',
            'prod_weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Prins ProCare Croque Lam & Rijst Hypoallergeen',
            'prod_desc' => 'Prins ProCare Croque Lamb & Rice Hypoallergic is speciaal voor honden met een allergie voor eiwitten van rund- of kippenvlees. Tevens bevat deze brok geen tarwe gluten. Speciaal geschikt voor de gevoelige hond.',
            'prod_price' => '55.50',
            'prod_sales_price' => '42.95',
            'prod_stock' => '20',
            'prod_cat' => 1,
            'prod_catsub' => 2,
            'prod_weight' => '10',
            'prod_weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Biofood Lam & Rijst',
            'prod_desc' => 'BIOFOOD Lam&Rijst is een volledige licht verteerbare, natuurlijke en zeer smaakvolle hondenvoeding speciaal ontwikkelt volwassen honden en voor overgevoelige honden met bijv. huid- en vachtproblemen.',
            'prod_price' => '37.50',
            'prod_sales_price' => '33.95',
            'prod_stock' => '15',
            'prod_cat' => 1,
            'prod_catsub' => 2,
            'prod_weight' => '12.5',
            'prod_weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Biofood Diner Rund',
            'prod_desc' => 'BIOFOOD Diner is een volledig licht verteerbare, natuurlijke en zeer smaakvolle hondenvoeding bereid met groenten en vlees.',
            'prod_price' => '26.50',
            'prod_sales_price' => '20.95',
            'prod_stock' => '20',
            'prod_cat' => 1,
            'prod_catsub' => 3,
            'prod_weight' => '10',
            'prod_weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Biofood Korkant Rund',
            'prod_desc' => 'BIOFOOD Krokant is een volledige licht verteerbare, natuurlijke en zeer smaakvolle hondenvoeding voor volwassen honden van alle rassen met een normale activiteit.',
            'prod_price' => '36.95',
            'prod_sales_price' => '34.95',
            'prod_stock' => '25',
            'prod_cat' => 1,
            'prod_catsub' => 3,
            'prod_weight' => '12.5',
            'prod_weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Farm Food High Energy Classic',
            'prod_desc' => 'Farm Food High Energy Classic is een hoogwaardig hondenvoer welke geschikt is voor honden van alle leeftijden en rassen.',
            'prod_price' => '46.95',
            'prod_sales_price' => '44.60',
            'prod_stock' => '15',
            'prod_cat' => 1,
            'prod_catsub' => 3,
            'prod_weight' => '15',
            'prod_weight_unit' => 'kg',
        ]);

        // Snacks
        DB::table('product')->insert([
            'prod_name' => 'Varkensoren',
            'prod_desc' => 'Varkensoren worden op hoge temperatuur gedroogd zodat eventuele bacteriën worden vernietigd. Een varkensoor is een lekkernij voor honden en een prima gebitsreiniger.',
            'prod_price' => '7.95',
            'prod_sales_price' => '6.95',
            'prod_stock' => '250',
            'prod_cat' => 2,
            'prod_catsub' => 4,
            'prod_weight' => '250',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Varkensdarm',
            'prod_desc' => 'Varkensdarm oftewel spaghetti is geschikt voor kleine hondjes.',
            'prod_price' => '3.89',
            'prod_sales_price' => '2.75',
            'prod_stock' => '356',
            'prod_cat' => 2,
            'prod_catsub' => 4,
            'prod_weight' => '200',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Oorschelp varken',
            'prod_desc' => 'Varkensoorschelpen zijn een lekkere knapperige snack voor grote en kleine honden.',
            'prod_price' => '4.49',
            'prod_sales_price' => '3.45',
            'prod_stock' => '143',
            'prod_cat' => 2,
            'prod_catsub' => 4,
            'prod_weight' => '500',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Mixzak rundsnacks',
            'prod_desc' => 'Mixzak van de 5 toppers!',
            'prod_price' => '7.49',
            'prod_sales_price' => '5.75',
            'prod_stock' => '75',
            'prod_cat' => 2,
            'prod_catsub' => 3,
            'prod_weight' => '1',
            'prod_weight_unit' => 'kg',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Rundvleesplaatjes',
            'prod_desc' => 'Rundvleesplaatjes repen bevatten veel eiwit  en weinig vet.',
            'prod_price' => '4.95',
            'prod_sales_price' => '3.95',
            'prod_stock' => '100',
            'prod_cat' => 2,
            'prod_catsub' => 3,
            'prod_weight' => '500',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Pensstaaf',
            'prod_desc' => 'Pensstaafjes van groene pens.',
            'prod_price' => '5.45',
            'prod_sales_price' => '4.75',
            'prod_stock' => '60',
            'prod_cat' => 2,
            'prod_catsub' => 3,
            'prod_weight' => '500',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Ree-oren met vacht',
            'prod_desc' => 'Ree-oren per 10 stuks',
            'prod_price' => '7.35',
            'prod_sales_price' => '6.75',
            'prod_stock' => '70',
            'prod_cat' => 2,
            'prod_catsub' => 5,
            'prod_weight' => '250',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Vleesreepen konijn',
            'prod_desc' => 'Vleesreepen konijn 250 gram',
            'prod_price' => '4.45',
            'prod_sales_price' => '3.89',
            'prod_stock' => '80',
            'prod_cat' => 2,
            'prod_catsub' => 5,
            'prod_weight' => '250',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Vleesreepen kangeroe',
            'prod_desc' => 'Vleesreepen kangeroe 250 gram',
            'prod_price' => '5.35',
            'prod_sales_price' => '4.45',
            'prod_stock' => '60',
            'prod_cat' => 2,
            'prod_catsub' => 5,
            'prod_weight' => '250',
            'prod_weight_unit' => 'gram',
        ]);

        // Training
        DB::table('product')->insert([
            'prod_name' => 'Lamsvleesblokjes',
            'prod_desc' => 'Vleesblokjes van lam. Om te geven als beloning tijdens een training of tussendoortje!',
            'prod_price' => '4.75',
            'prod_sales_price' => '3.35',
            'prod_stock' => '80',
            'prod_cat' => 3,
            'prod_catsub' => 2,
            'prod_weight' => '250',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Eendenvleesblokjes',
            'prod_desc' => 'Heerlijke gedroogde eendenvleesblokjes voor de kleine en grote hond als een lekker tussendoortje.',
            'prod_price' => '4.75',
            'prod_sales_price' => '3.35',
            'prod_stock' => '90',
            'prod_cat' => 3,
            'prod_catsub' => 7,
            'prod_weight' => '250',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Konijnvleesblokjes',
            'prod_desc' => 'Heerlijke gedroogde konijnvleesblokjes voor de kleine en grote hond als een lekker tussendoortje.',
            'prod_price' => '4.25',
            'prod_sales_price' => '3.35',
            'prod_stock' => 3,
            'prod_cat' => 3,
            'prod_catsub' => 5,
            'prod_weight' => '250',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Paardenvleesblokjes',
            'prod_desc' => 'lokjes gemaakt van 100% paardenvlees, zonder enige toevoegingen. Snacks van Paard zijn zeer geschikt voor honden en katten met een voedselallergie.',
            'prod_price' => '4.25',
            'prod_sales_price' => '3.35',
            'prod_stock' => '100',
            'prod_cat' => 3,
            'prod_catsub' => 8,
            'prod_weight' => '250',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Kipfilét blokjes',
            'prod_desc' => 'Kip stukjes van het vetarme borstvlees van de kip.',
            'prod_price' => '4.75',
            'prod_sales_price' => '3.35',
            'prod_stock' => '50',
            'prod_cat' => 3,
            'prod_catsub' => 1,
            'prod_weight' => '250',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Kippenhartjes',
            'prod_desc' => 'Door hun kleine formaat zijn kippenhartjes zeer geschikt om te geven als beloning en voor training.',
            'prod_price' => '4.75',
            'prod_sales_price' => '3.35',
            'prod_stock' => '30',
            'prod_cat' => 3,
            'prod_catsub' => 1,
            'prod_weight' => '250',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Runderlong',
            'prod_desc' => 'Runderlong is een  gezonde, lekkere snack  en bevat weinig vet. Trainers van runderlong  zijn daarom zeer geschikt tijdens training of als verantwoord tussendoortje.',
            'prod_price' => '4.25',
            'prod_sales_price' => '3.35',
            'prod_stock' => '45',
            'prod_cat' => 3,
            'prod_catsub' => 3,
            'prod_weight' => '250',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Runderlever',
            'prod_desc' => 'Een van onze vele hondensnacks waar de meeste honden dol op zijn. Het is makkelijk te breken in kleine stukjes en daarom ook zeer geschikt voor training en beloning.',
            'prod_price' => '4.45',
            'prod_sales_price' => '3.35',
            'prod_stock' => '80',
            'prod_cat' => 3,
            'prod_catsub' => 3,
            'prod_weight' => '250',
            'prod_weight_unit' => 'gram',
        ]);

        DB::table('product')->insert([
            'prod_name' => 'Geitenvleesblokjes',
            'prod_desc' => 'Geitenvleesblokjes zijn hypo-allergene blokjes die ideaal zijn voor training of gezond tussendoortje.',
            'prod_price' => '4.95',
            'prod_sales_price' => '3.95',
            'prod_stock' => '65',
            'prod_cat' => 3,
            'prod_catsub' => 6,
            'prod_weight' => '250',
            'prod_weight_unit' => 'gram',
        ]);
    }
}
