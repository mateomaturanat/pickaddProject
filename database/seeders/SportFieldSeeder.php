<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SportFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('sport_fields')->insert(
            [
                'name' => 'Play 5 Cancha Sintetica Techada',
                'address' => 'Calle 49 # 28A 20, Campin',
                'city' => 'Manizales',
                'cellphone' => '3017171863',
                'hour_price' => '75000',
                'court_type' => 'F5',
                'horary' => '08:30 a.m. - 10:30 p.m.',
                'week' => 'L - D',
                'type' => 'Privada',
                'amount' => '1',
                'trafo' => 'M53516',
                'lat' => '-75.50131652',
                'long' => '5.06017858',
                'description' => '75000',
                'image_url' => 'img',
            ]

        );

        DB::table('sport_fields')->insert(
            ['name' => 'Cancha Sintética Luis Fernando Montoya Soto', 'address' => 'Unidad Deportiva Palogrande', 'city' => 'Manizales', 'cellphone' => '68878621', 'hour_price' => '260000', 'court_type' => 'F11', 'horary' => '10:00 a.m. - 04:00 p.m.', 'week' => 'L - V', 'type' => 'Publica', 'amount' => '1', 'trafo' => 'M40958', 'lat' => '-75.48952378', 'long' => '5.0567662', 'description' => '260000', 'image_url' => '260000']

        );

        DB::table('sport_fields')->insert(
            ['name' => 'Cancha de Fútbol Baja Suiza', 'address' => 'Cra 17 # 67-02', 'city' => 'Manizales', 'cellphone' => '3046272823', 'hour_price' => '80000', 'court_type' => 'F5', 'horary' => '08:00 a.m. - 10:00 p.m.', 'week' => 'L - D', 'type' => 'Privada', 'amount' => '1', 'trafo' => 'M43404', 'lat' => '-75.47950378', 'long' => '5.05616297', 'description' => '80000', 'image_url' => '80000']

        );

        DB::table('sport_fields')->insert(
            ['name' => 'La Golera - Cancha Sintética', 'address' => 'Av. Alberto Mendoza # 87 62', 'city' => 'Manizales', 'cellphone' => '30454450', 'hour_price' => '65000', 'court_type' => 'F5', 'horary' => '08:00 a.m. - 09:00 p.m.', 'week' => 'L - D', 'type' => 'Privada', 'amount' => '1', 'trafo' => 'M45628', 'lat' => '-75.47513354', 'long' => '5.04078504', 'description' => '65000', 'image_url' => '65000']

        );

        DB::table('sport_fields')->insert(
            ['name' => 'Soccer Club', 'address' => 'Calle 46 # 21 15, Saenz', 'city' => 'Manizales', 'cellphone' => '68858692', 'hour_price' => '60000', 'court_type' => 'F5', 'horary' => '09:30 a.m. - 10:00 p.m.', 'week' => 'L - D', 'type' => 'Privada', 'amount' => '2', 'trafo' => 'M53471', 'lat' => '-75.50194994', 'long' => '5.06699236', 'description' => '60000', 'image_url' => '60000']

        );

        DB::table('sport_fields')->insert(
            ['name' => 'Cancha Sintética Cootilca', 'address' => 'Calle 45 # 23 58A', 'city' => 'Manizales', 'cellphone' => '8860154', 'hour_price' => '62000', 'court_type' => 'F5', 'horary' => '09:00 a.m. - 10:00 p.m.', 'week' => 'L - D', 'type' => 'Privada', 'amount' => '1', 'trafo' => 'M70981', 'lat' => '-75.50269296', 'long' => '5.06579281', 'description' => '62000', 'image_url' => '62000']

        );

        DB::table('sport_fields')->insert(
            ['name' => 'Cancha Sintética La Enea', 'address' => 'Cra 36 # 100B - 101', 'city' => 'Manizales', 'cellphone' => '6882717', 'hour_price' => '160000', 'court_type' => 'F11', 'horary' => '09:30 a.m. - 07:30 p.m.', 'week' => 'L - D', 'type' => 'Publica', 'amount' => '1', 'trafo' => 'M63094', 'lat' => '754633149500', 'long' => '50302067100', 'description' => '160000', 'image_url' => '160000']

        );

        DB::table('sport_fields')->insert(
            ['name' => 'Canchas la Uribe', 'address' => 'Av. Panamericana - El Jardin La Playa', 'city' => 'Manizales', 'cellphone' => '68899130', 'hour_price' => '90000', 'court_type' => 'F11-F8-F5', 'horary' => '08:30 a.m. - 10:30 p.m.', 'week' => 'L - D', 'type' => 'Privada', 'amount' => '(1)(1)(2)', 'trafo' => 'M20134', 'lat' => '-75.53465862', 'long' => '5.04719396', 'description' => '90000', 'image_url' => '90000']

        );

        DB::table('sport_fields')->insert(
            ['name' => 'Cancha de Arrayanes', 'address' => 'Calle 47 # 37A 88', 'city' => 'Manizales', 'cellphone' => '3164906208', 'hour_price' => '75000', 'court_type' => 'F11', 'horary' => '09:00 a.m. - 10:00 p.m.', 'week' => 'L - V', 'type' => 'Publica', 'amount' => '1', 'trafo' => 'M11809', 'lat' => '-75.51077099', 'long' => '5.0579932', 'description' => '75000', 'image_url' => '75000']

        );

        DB::table('sport_fields')->insert(
            ['name' => 'Cancha De Futbol Aranjuez', 'address' => 'Cra 42 # 72 2', 'city' => 'Manizales', 'cellphone' => '3107550988', 'hour_price' => '65000', 'court_type' => 'F11', 'horary' => '09:00 a.m. - 09:30 p.m.', 'week' => 'L - V', 'type' => 'Publica', 'amount' => '1', 'trafo' => 'M78330', 'lat' => '-75.49858138', 'long' => '5.04126924', 'description' => '65000', 'image_url' => '65000']

        );

        DB::table('sport_fields')->insert(
            ['name' => 'Cancha Fútbol - Terminal', 'address' => 'Via Panamericana, Terminal Cambulos', 'city' => 'Manizales', 'cellphone' => '3148237392', 'hour_price' => '60000', 'court_type' => 'F5', 'horary' => '09:00 a.m. - 10:00 p.m.', 'week' => 'L - D', 'type' => 'Privada', 'amount' => '2', 'trafo' => 'M14522', 'lat' => '-75.50704957', 'long' => '5.04947518', 'description' => '60000', 'image_url' => '60000']

        );

        DB::table('sport_fields')->insert(
            ['name' => 'Marchagás Centro Deportivo', 'address' => 'Sec. Puente - MarchaGas', 'city' => 'Villamaria', 'cellphone' => '3008273632', 'hour_price' => '75000', 'court_type' => 'F8-F5', 'horary' => '10:00 a.m. - 10:00 p.m.', 'week' => 'L - D', 'type' => 'Privada', 'amount' => '(3)(1)', 'trafo' => 'M45791', 'lat' => '-75.50308621', 'long' => '5.04113375', 'description' => '75000', 'image_url' => '75000']

        );
    }
}
