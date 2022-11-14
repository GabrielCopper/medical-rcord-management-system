<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Medicine::create([
            'id' => 1,
            'medicine_name' => 'Neurontin',
            'medicine_quantity' => 1000,
            'medicine_cost' => 15000,
            'date_of_acquisition' => Carbon::now()->format('Y-m-d'),
            'date_of_expiration' => Carbon::now()->format('Y-m-d'),
       ]);
       Medicine::create([
            'id' => 2,
            'medicine_name' => 'Cefalexin',
            'medicine_quantity' => 500,
            'medicine_cost' => 10000,
            'date_of_acquisition' => Carbon::now()->format('Y-m-d'),
            'date_of_expiration' => Carbon::now()->format('Y-m-d'),
       ]);
       Medicine::create([
            'id' => 3,
            'medicine_name' => 'Paracetamol',
            'medicine_quantity' => 300,
            'medicine_cost' => 1000,
            'date_of_acquisition' => Carbon::now()->format('Y-m-d'),
            'date_of_expiration' => Carbon::now()->format('Y-m-d'),
       ]);
       Medicine::create([
            'id' => 4,
            'medicine_name' => 'Amoxicillin',
            'medicine_quantity' => 800,
            'medicine_cost' => 2000,
            'date_of_acquisition' => Carbon::now()->format('Y-m-d'),
            'date_of_expiration' => Carbon::now()->format('Y-m-d'),
       ]);
       Medicine::create([
            'id' => 5,
            'medicine_name' => 'Biogesic',
            'medicine_quantity' => 200,
            'medicine_cost' => 6000,
            'date_of_acquisition' => Carbon::now()->format('Y-m-d'),
            'date_of_expiration' => Carbon::now()->format('Y-m-d'),
       ]);
       Medicine::create([
            'id' => 6,
            'medicine_name' => 'Allopurinol',
            'medicine_quantity' => 2000,
            'medicine_cost' => 15000,
            'date_of_acquisition' => Carbon::now()->format('Y-m-d'),
            'date_of_expiration' => Carbon::now()->format('Y-m-d'),
       ]);
       Medicine::create([
            'id' => 7,
            'medicine_name' => 'Betamethasone',
            'medicine_quantity' => 2000,
            'medicine_cost' => 15000,
            'date_of_acquisition' => Carbon::now()->format('Y-m-d'),
            'date_of_expiration' => Carbon::now()->format('Y-m-d'),
       ]);
       Medicine::create([
            'id' => 8,
            'medicine_name' => 'Clonidine',
            'medicine_quantity' => 2000,
            'medicine_cost' => 15000,
            'date_of_acquisition' => Carbon::now()->format('Y-m-d'),
            'date_of_expiration' => Carbon::now()->format('Y-m-d'),
       ]);
       Medicine::create([
            'id' => 9,
            'medicine_name' => 'Domperidone',
            'medicine_quantity' => 2000,
            'medicine_cost' => 15000,
            'date_of_acquisition' => Carbon::now()->format('Y-m-d'),
            'date_of_expiration' => Carbon::now()->format('Y-m-d'),
       ]);
       Medicine::create([
            'id' => 10,
            'medicine_name' => 'Metformin',
            'medicine_quantity' => 2000,
            'medicine_cost' => 15000,
            'date_of_acquisition' => Carbon::now()->format('Y-m-d'),
            'date_of_expiration' => Carbon::now()->format('Y-m-d'),
       ]);
       Medicine::create([
            'id' => 11,
            'medicine_name' => 'Omeprazole',
            'medicine_quantity' => 2000,
            'medicine_cost' => 15000,
            'date_of_acquisition' => Carbon::now()->format('Y-m-d'),
            'date_of_expiration' => Carbon::now()->format('Y-m-d'),
       ]);
    }
}
