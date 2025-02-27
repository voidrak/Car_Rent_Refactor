<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $cars = [
            [
                'brand' => 'Toyota',
                'model' => 'Camry',
                'engine' => '2.5L',
                'price_per_day' => 5000,
                'image' => '/images/cars/Toyota_Camry.jpg',
                'quantity' => 1,
                'status' => 'available',
            ],
            [
                'brand' => 'Honda',
                'model' => 'Civic',
                'engine' => '1.8L',
                'price_per_day' => 4500,
                'image' => '/images/cars/Honda_Civic.jpg',
                'quantity' => 1,
                'status' => 'available',
            ],
            [
                'brand' => 'Ford',
                'model' => 'Mustang',
                'engine' => '5.0L V8',
                'price_per_day' => 7000,
                'image' => '/images/cars/Ford_Mustang.jpg',
                'quantity' => 1,
                'status' => 'available',
            ],
            [
                'brand' => 'BMW',
                'model' => 'X5',
                'engine' => '3.0L',
                'price_per_day' => 8000,
                'image' => '/images/cars/BMW_X5.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Mercedes-Benz',
                'model' => 'E-Class',
                'engine' => '2.0L',
                'price_per_day' => 6500,
                'image' => '/images/cars/Mercedes-Benz_E-Class.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Chevrolet',
                'model' => 'Malibu',
                'engine' => '1.5L',
                'price_per_day' => 5500,
                'image' => '/images/cars/Chevrolet_Malibu.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Audi',
                'model' => 'A4',
                'engine' => '2.0L',
                'price_per_day' => 7000,
                5,
                'image' => '/images/cars/Audi_A4.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Nissan',
                'model' => 'Altima',
                'engine' => '2.5L',
                'price_per_day' => 5000,
                'image' => '/images/cars/Nissan_Altima.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Hyundai',
                'model' => 'Sonata',
                'engine' => '2.5L',
                'price_per_day' => 4500,
                'image' => '/images/cars/Hyundai_Sonata.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Kia',
                'model' => 'Optima',
                'engine' => '2.0L',
                'price_per_day' => 4500,
                'image' => '/images/cars/Kia_Optima.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Volkswagen',
                'model' => 'Golf',
                'engine' => '1.4L',
                'price_per_day' => 6000,
                'image' => '/images/cars/Volkswagen_Golf.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Subaru',
                'model' => 'Impreza',
                'engine' => '2.0L',
                'price_per_day' => 6000,
                'image' => '/images/cars/Subaru_Impreza.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Ford',
                'model' => 'Focus',
                'engine' => '1.6L',
                'price_per_day' => 5000,
                'image' => '/images/cars/Ford_Focus.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Tesla',
                'model' => 'Model 3',
                'engine' => 'Electric',
                'price_per_day' => 9000,
                'image' => '/images/cars/Tesla_Model_3.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Chevrolet',
                'model' => 'Camaro',
                'engine' => '6.2L V8',
                'price_per_day' => 10000,
                'image' => '/images/cars/Chevrolet_Camaro.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Jaguar',
                'model' => ' F-Type',
                'engine' => '3.0L V6',
                'price_per_day' => 12000,
                'image' => '/images/cars/Jaguar_F-Type.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Lexus',
                'model' => 'RX 350',
                'engine' => '3.5L V6',
                'price_per_day' => 8000,
                'image' => '/images/cars/Lexus_RX_350.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Volvo',
                'model' => 'XC60',
                'engine' => '2.0L',
                'price_per_day' => 7000,
                'image' => '/images/cars/Volvo_XC60.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Porsche',
                'model' => '911 Carrera',
                'engine' => '3.0L Flat-6',
                'price_per_day' => 15000,
                'image' => '/images/cars/Porsche_911_Carrera.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Mitsubishi',
                'model' => 'Outlander',
                'engine' => '2.4L',
                'price_per_day' => 6000,
                'image' => '/images/cars/Mitsubishi_Outlander.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Land Rover',
                'model' => 'Range Rover Sport',
                'engine' => '3.0L V6',
                'price_per_day' => 12000,
                'image' => '/images/cars/Land_Rover_Range_Rover_Sport.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'GMC',
                'model' => 'Sierra_1500',
                'engine' => '5.3L V8',
                'price_per_day' => 12000,
                'image' => '/images/cars/GMC_Sierra_1500.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Fiat',
                'model' => '500',
                'engine' => '1.4L',
                'price_per_day' => 4000,
                'image' => '/images/cars/Fiat_500.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Mini',
                'model' => 'Cooper',
                'engine' => '1.5L',
                'price_per_day' => 5500,
                'image' => '/images/cars/Mini_Cooper.jpg',
                'quantity' => 1,
                'status' => 'available',
            ],
            [
                'brand' => 'Audi',
                'model' => 'Q5',
                'engine' => '2.0L',
                'price_per_day' => 8000,
                'image' => '/images/cars/Audi_Q5.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Chevrolet',
                'model' => 'Tahoe',
                'engine' => '5.3L V8',
                'price_per_day' => 11000,
                'image' => '/images/cars/Chevrolet_Tahoe.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Ford',
                'model' => 'Explorer',
                'engine' => '3.5L V6',
                'price_per_day' => 9500,
                'image' => '/images/cars/Ford_Explorer.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Jeep',
                'model' => 'Wrangler',
                'engine' => '3.6L V6',
                'price_per_day' => 10000,
                'image' => '/images/cars/Jeep_Wrangler.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Mazda',
                'model' => 'CX-5',
                'engine' => ' 2.5L',
                'price_per_day' => 6500,
                'image' => '/images/cars/Mazda_CX-5.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
            [
                'brand' => 'Hyundai',
                'model' => 'Tucson',
                'engine' => ' 2.0L',
                'price_per_day' => 5000,
                'image' => '/images/cars/Hyundai_Tucson.jpg',
                'quantity' => 1,
                'status' => 'available',

            ],
        ];

        foreach ($cars as $car) {
            DB::table('cars')->insert([
                'brand' => $car['brand'],
                'model' => $car['model'],
                'engine' => $car['engine'],
                'price_per_day' => $car['price_per_day'],
                'image' => $car['image'],
                'quantity' => $car['quantity'],
                'status' => $car['status'],
            ]);
        }
    }
}
