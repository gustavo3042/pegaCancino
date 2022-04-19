<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Provider;
//use App\ModelsBodega;
use App\Models\Bodega;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();



        $this->call(RoleSeeder::class);

        $user =  User::create([

            'name'=>'Pipe Perez Admin',
            'email'=>'admin@admin.cl',
            'password'=>Hash::make('adminadmin'),

        ])->assignRole('Admin');



        $user =  User::create([

          'name'=>'Tio Miguel',
          'email'=>'tiomiguel@admin.cl',
          'password'=>Hash::make('admintiomiguel'),

      ])->assignRole('Admin');

        $user = User::create([

          'name'=>'Pipe Perez',
          'email'=>'vendedor@gmail.com',
          'password' => Hash::make('vendevende'),


        ])->assignRole('VendedorPrat');


        $user = User::create([

          'name'=>'Barbara Ormazabal',
          'email'=>'despacho@gmail.com',
          'password' => Hash::make('despachadespacha'),


        ])->assignRole('DespachoPrat');


        $user = User::create([

          'name'=>'Edison Basques',
          'email'=>'Edison@gmail.com',
          'password' => Hash::make('guardaguarda'),


        ])->assignRole('Bodega');



      



        $user = User::create([

          'name'=>'America Fuentealba',
          'email'=>'America@gmail.com',
          'password' => Hash::make('vendePalmeras'),


        ])->assignRole('vendePalmeras');

        $user = User::create([

          'name'=>'Ursula Aburto',
          'email'=>'Ursula@gmail.com',
          'password' => Hash::make('despachoPalmeras'),


        ])->assignRole('despachoPalmeras');
        

        $categoria =  Category::create([
            'name'=>'Lanas'
          ]);


          
        $categoria =  Category::create([
          'name'=>'Roller'
        ]);


        $providers =  Provider::create([
    
            'name' => 'Miguel Salinas bodega Prat',
            'email' => 'raul@lanas.cl',
            'rut' => '12923121-2',
            'address' => 'chillan 1',
            'phone' => '4242121'
          ]);

        $product = Bodega::create([
    
            'name' => 'lana roja',
            'barcode' => '03.03080',
            'color' => '4242',
            'stock' => '422',
           // 'totalObillos' => '22',
            //'image' => '1',
            //'brand' => 'Real',
            'price' => '1000',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'lana negra',
            'barcode' => '123456',
            'color' => '1234566',
            'stock' => '422',
           // 'totalObillos' => '22',
            //'image' => '1',
            //'brand' => 'Real',
            'price' => '1500',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


/*
          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '03.03049',
            'color' => '49',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '665',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '03.03065',
            'color' => '65',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '665',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '03.03029',
            'color' => '29',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '665',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '03.03100',
            'color' => '100',
            'stock' => '40',
            'totalObillos' => '40',
            'image' => '1',
            'brand' => 'Real',
            'price' => '665',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '03.03456',
            'color' => '456',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '665',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '03.03042',
            'color' => '42',
            'stock' => '135',
            'totalObillos' => '135',
            'image' => '1',
            'brand' => 'Real',
            'price' => '665',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '03.03017',
            'color' => '17',
            'stock' => '30',
            'totalObillos' => '30',
            'image' => '1',
            'brand' => 'Real',
            'price' => '665',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '03.03001',
            'color' => '1',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '665',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '03.03013',
            'color' => '13',
            'stock' => '65',
            'totalObillos' => '65',
            'image' => '1',
            'brand' => 'Real',
            'price' => '665',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '03.03057',
            'color' => '57',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '665',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '03.03061',
            'color' => '61',
            'stock' => '35',
            'totalObillos' => '35',
            'image' => '1',
            'brand' => 'Real',
            'price' => '665',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '03.03207',
            'color' => '207',
            'stock' => '35',
            'totalObillos' => '35',
            'image' => '1',
            'brand' => 'Real',
            'price' => '665',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '03.03085',
            'color' => '85',
            'stock' => '5',
            'totalObillos' => '5',
            'image' => '1',
            'brand' => 'Real',
            'price' => '665',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          //fin de lanas suprema



          //CREBEL


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03009',
            'color' => '9',
            'stock' => '250',
            'totalObillos' => '250',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03018',
            'color' => '18',
            'stock' => '65',
            'totalObillos' => '65',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03024',
            'color' => '24',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03078',
            'color' => '78',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03109',
            'color' => '109',
            'stock' => '250',
            'totalObillos' => '250',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03105',
            'color' => '105',
            'stock' => '250',
            'totalObillos' => '250',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03042',
            'color' => '42',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03080',
            'color' => '80',
            'stock' => '300',
            'totalObillos' => '300',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03456',
            'color' => '109',
            'stock' => '195',
            'totalObillos' => '195',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03001',
            'color' => '1',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03061',
            'color' => '61',
            'stock' => '250',
            'totalObillos' => '250',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03055',
            'color' => '55',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03028',
            'color' => '28',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03047',
            'color' => '47',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03065',
            'color' => '65',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03020',
            'color' => '20',
            'stock' => '270',
            'totalObillos' => '270',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03033',
            'color' => '33',
            'stock' => '230',
            'totalObillos' => '230',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03043',
            'color' => '43',
            'stock' => '220',
            'totalObillos' => '220',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03122',
            'color' => '122',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03073',
            'color' => '73',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03050',
            'color' => '50',
            'stock' => '200',
            'totalObillos' => '200',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03092',
            'color' => '92',
            'stock' => '145',
            'totalObillos' => '145',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03031',
            'color' => '31',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03103',
            'color' => '103',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03029',
            'color' => '29',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03085',
            'color' => '85',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03062',
            'color' => '62',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03072',
            'color' => '72',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03008',
            'color' => '8',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03013',
            'color' => '13',
            'stock' => '350',
            'totalObillos' => '350',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03004',
            'color' => '4',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03027',
            'color' => '27',
            'stock' => '90',
            'totalObillos' => '90',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03128',
            'color' => '128',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03090',
            'color' => '90',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03007',
            'color' => '7',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03057',
            'color' => '57',
            'stock' => '200',
            'totalObillos' => '200',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03002',
            'color' => '2',
            'stock' => '145',
            'totalObillos' => '145',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03017',
            'color' => '17',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03021',
            'color' => '21',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '04.03048',
            'color' => '48',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '6595',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          // fin Crebel




          //Chilote
          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '05.03031',
            'color' => '31',
            'stock' => '145',
            'totalObillos' => '145',
            'image' => '1',
            'brand' => 'Real',
            'price' => '980',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '05.03057',
            'color' => '57',
            'stock' => '80',
            'totalObillos' => '80',
            'image' => '1',
            'brand' => 'Real',
            'price' => '980',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '05.03016',
            'color' => '16',
            'stock' => '35',
            'totalObillos' => '35',
            'image' => '1',
            'brand' => 'Real',
            'price' => '980',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '05.03427',
            'color' => '427',
            'stock' => '80',
            'totalObillos' => '80',
            'image' => '1',
            'brand' => 'Real',
            'price' => '980',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '05.03076',
            'color' => '76',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '980',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '05.03073',
            'color' => '73',
            'stock' => '120',
            'totalObillos' => '120',
            'image' => '1',
            'brand' => 'Real',
            'price' => '980',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '05.03078',
            'color' => '78',
            'stock' => '140',
            'totalObillos' => '140',
            'image' => '1',
            'brand' => 'Real',
            'price' => '980',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '05.03136',
            'color' => '136',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '980',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '05.03068',
            'color' => '68',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '980',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          /*

          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '05.03427',
            'color' => '427',
            'stock' => '30',
            'totalObillos' => '30',
            'image' => '1',
            'brand' => 'Real',
            'price' => '980',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          

          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '05.03780',
            'color' => '780',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '980',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '05.03238',
            'color' => '238',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '980',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          // fin chilote


          //Sureña

          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '06.03039',
            'color' => '39',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '570',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '06.03016',
            'color' => '16',
            'stock' => '95',
            'totalObillos' => '95',
            'image' => '1',
            'brand' => 'Real',
            'price' => '570',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '06.03061',
            'color' => '61',
            'stock' => '85',
            'totalObillos' => '85',
            'image' => '1',
            'brand' => 'Real',
            'price' => '570',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '06.03009',
            'color' => '9',
            'stock' => '40',
            'totalObillos' => '40',
            'image' => '1',
            'brand' => 'Real',
            'price' => '570',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '06.03033',
            'color' => '33',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '570',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '06.03011',
            'color' => '11',
            'stock' => '45',
            'totalObillos' => '45',
            'image' => '1',
            'brand' => 'Real',
            'price' => '570',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '06.03036',
            'color' => '36',
            'stock' => '90',
            'totalObillos' => '90',
            'image' => '1',
            'brand' => 'Real',
            'price' => '570',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '06.03031',
            'color' => '31',
            'stock' => '45',
            'totalObillos' => '45',
            'image' => '1',
            'brand' => 'Real',
            'price' => '570',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //fin Sureña


          //Versatil

          $product = Bodega::create([
    
            'name' => 'Versatil',
            'barcode' => '07.03001',
            'color' => '1',
            'stock' => '300',
            'totalObillos' => '300',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1140',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);
          

          $product = Bodega::create([
    
            'name' => 'Versatil',
            'barcode' => '07.03019',
            'color' => '19',
            'stock' => '550',
            'totalObillos' => '550',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1140',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Versatil',
            'barcode' => '07.03033',
            'color' => '33',
            'stock' => '120',
            'totalObillos' => '120',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1140',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Versatil',
            'barcode' => '07.03100',
            'color' => '100',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1140',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Versatil',
            'barcode' => '07.03348',
            'color' => '348',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1140',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Versatil',
            'barcode' => '07.03349',
            'color' => '349',
            'stock' => '20',
            'totalObillos' => '20',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1140',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



        //fin versatil


        // Suprema 40GR


        $product = Bodega::create([
    
          'name' => 'Suprema 40GR',
          'barcode' => '77.03100',
          'color' => '100',
          'stock' => '75',
          'totalObillos' => '75',
          'image' => '1',
          'brand' => 'Real',
          'price' => '360',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Suprema 40GR',
          'barcode' => '77.03490',
          'color' => '490',
          'stock' => '140',
          'totalObillos' => '140',
          'image' => '1',
          'brand' => 'Real',
          'price' => '360',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Suprema 40GR',
          'barcode' => '77.03033',
          'color' => '33',
          'stock' => '45',
          'totalObillos' => '45',
          'image' => '1',
          'brand' => 'Real',
          'price' => '360',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Suprema 40GR',
          'barcode' => '77.03001',
          'color' => '1',
          'stock' => '100',
          'totalObillos' => '100',
          'image' => '1',
          'brand' => 'Real',
          'price' => '360',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        //fin Suprema 40GR


        //Bebe Maxi


        $product = Bodega::create([
    
          'name' => 'Bebe Maxi',
          'barcode' => '08.03008',
          'color' => '8',
          'stock' => '45',
          'totalObillos' => '45',
          'image' => '1',
          'brand' => 'Real',
          'price' => '745',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Bebe Maxi',
          'barcode' => '08.03106',
          'color' => '106',
          'stock' => '120',
          'totalObillos' => '120',
          'image' => '1',
          'brand' => 'Real',
          'price' => '745',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Bebe Maxi',
          'barcode' => '08.03092',
          'color' => '92',
          'stock' => '150',
          'totalObillos' => '150',
          'image' => '1',
          'brand' => 'Real',
          'price' => '745',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Bebe Maxi',
          'barcode' => '08.03014',
          'color' => '14',
          'stock' => '30',
          'totalObillos' => '30',
          'image' => '1',
          'brand' => 'Real',
          'price' => '745',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Bebe Maxi',
          'barcode' => '08.03100',
          'color' => '100',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '745',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Bebe Maxi',
          'barcode' => '08.03009',
          'color' => '9',
          'stock' => '100',
          'totalObillos' => '100',
          'image' => '1',
          'brand' => 'Real',
          'price' => '745',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Bebe Maxi',
          'barcode' => '08.03004',
          'color' => '4',
          'stock' => '150',
          'totalObillos' => '150',
          'image' => '1',
          'brand' => 'Real',
          'price' => '745',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Bebe Maxi',
          'barcode' => '08.03003',
          'color' => '3',
          'stock' => '100',
          'totalObillos' => '100',
          'image' => '1',
          'brand' => 'Real',
          'price' => '745',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);




        //fin Bebe Maxi



        //Pintitas



        $product = Bodega::create([
    
          'name' => 'Pintitas',
          'barcode' => '09.03902',
          'color' => '902',
          'stock' => '100',
          'totalObillos' => '100',
          'image' => '1',
          'brand' => 'Real',
          'price' => '100',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Pintitas',
          'barcode' => '09.03910',
          'color' => '910',
          'stock' => '0',
          'totalObillos' => '0',
          'image' => '1',
          'brand' => 'Real',
          'price' => '100',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);

        //fin Pintitas




        //Dulce Algodon


        $product = Bodega::create([
    
          'name' => 'Dulce Algodon',
          'barcode' => '10.03002',
          'color' => '2',
          'stock' => '70',
          'totalObillos' => '70',
          'image' => '1',
          'brand' => 'Real',
          'price' => '740',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Dulce Algodon',
          'barcode' => '10.03047',
          'color' => '47',
          'stock' => '20',
          'totalObillos' => '20',
          'image' => '1',
          'brand' => 'Real',
          'price' => '740',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Dulce Algodon',
          'barcode' => '10.03048',
          'color' => '48',
          'stock' => '70',
          'totalObillos' => '70',
          'image' => '1',
          'brand' => 'Real',
          'price' => '740',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Dulce Algodon',
          'barcode' => '10.03031',
          'color' => '31',
          'stock' => '70',
          'totalObillos' => '70',
          'image' => '1',
          'brand' => 'Real',
          'price' => '740',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Dulce Algodon',
          'barcode' => '10.03080',
          'color' => '80',
          'stock' => '30',
          'totalObillos' => '30',
          'image' => '1',
          'brand' => 'Real',
          'price' => '740',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Dulce Algodon',
          'barcode' => '10.03050',
          'color' => '50',
          'stock' => '40',
          'totalObillos' => '40',
          'image' => '1',
          'brand' => 'Real',
          'price' => '740',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Dulce Algodon',
          'barcode' => '10.03184',
          'color' => '184',
          'stock' => '20',
          'totalObillos' => '20',
          'image' => '1',
          'brand' => 'Real',
          'price' => '740',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Dulce Algodon',
          'barcode' => '10.03040',
          'color' => '40',
          'stock' => '70',
          'totalObillos' => '70',
          'image' => '1',
          'brand' => 'Real',
          'price' => '740',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Dulce Algodon',
          'barcode' => '10.03062',
          'color' => '62',
          'stock' => '70',
          'totalObillos' => '70',
          'image' => '1',
          'brand' => 'Real',
          'price' => '740',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Dulce Algodon',
          'barcode' => '10.03009',
          'color' => '9',
          'stock' => '70',
          'totalObillos' => '70',
          'image' => '1',
          'brand' => 'Real',
          'price' => '740',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Dulce Algodon',
          'barcode' => '10.03019',
          'color' => '19',
          'stock' => '70',
          'totalObillos' => '70',
          'image' => '1',
          'brand' => 'Real',
          'price' => '740',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Dulce Algodon',
          'barcode' => '10.03001',
          'color' => '1',
          'stock' => '70',
          'totalObillos' => '70',
          'image' => '1',
          'brand' => 'Real',
          'price' => '740',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Dulce Algodon',
          'barcode' => '10.03008',
          'color' => '8',
          'stock' => '70',
          'totalObillos' => '70',
          'image' => '1',
          'brand' => 'Real',
          'price' => '740',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        //fin Dulce Algodon



        //Hilo Ibis


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03001',
          'color' => '1',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03081',
          'color' => '81',
          'stock' => '100',
          'totalObillos' => '100',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03168',
          'color' => '168',
          'stock' => '150',
          'totalObillos' => '150',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03154',
          'color' => '154',
          'stock' => '150',
          'totalObillos' => '150',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03141',
          'color' => '141',
          'stock' => '100',
          'totalObillos' => '100',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03014',
          'color' => '14',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03047',
          'color' => '47',
          'stock' => '150',
          'totalObillos' => '150',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03057',
          'color' => '57',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);

        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03071',
          'color' => '71',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);

        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03028',
          'color' => '28',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03108',
          'color' => '108',
          'stock' => '100',
          'totalObillos' => '100',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03019',
          'color' => '19',
          'stock' => '60',
          'totalObillos' => '60',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03070',
          'color' => '70',
          'stock' => '0',
          'totalObillos' => '0',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);

        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03031',
          'color' => '31',
          'stock' => '70',
          'totalObillos' => '70',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03076',
          'color' => '76',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03059',
          'color' => '59',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03118',
          'color' => '118',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03105',
          'color' => '105',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03037',
          'color' => '37',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03021',
          'color' => '21',
          'stock' => '35',
          'totalObillos' => '35',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Hilo Ibis',
          'barcode' => '11.03062',
          'color' => '62',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1415',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        //fin Hilo Ibis



        //  Algodon 100% Reginella



        $product = Bodega::create([
    
          'name' => 'Algodon 100% Reginella',
          'barcode' => '12.03001',
          'color' => '1',
          'stock' => '150',
          'totalObillos' => '150',
          'image' => '1',
          'brand' => 'Real',
          'price' => '696',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);
          

        $product = Bodega::create([
    
          'name' => 'Algodon 100% Reginella',
          'barcode' => '12.03108',
          'color' => '108',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '696',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Algodon 100% Reginella',
          'barcode' => '12.03014',
          'color' => '14',
          'stock' => '45',
          'totalObillos' => '45',
          'image' => '1',
          'brand' => 'Real',
          'price' => '696',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Algodon 100% Reginella',
          'barcode' => '12.03116',
          'color' => '116',
          'stock' => '30',
          'totalObillos' => '30',
          'image' => '1',
          'brand' => 'Real',
          'price' => '696',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Algodon 100% Reginella',
          'barcode' => '12.03073',
          'color' => '73',
          'stock' => '20',
          'totalObillos' => '20',
          'image' => '1',
          'brand' => 'Real',
          'price' => '696',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Algodon 100% Reginella',
          'barcode' => '12.03021',
          'color' => '21',
          'stock' => '30',
          'totalObillos' => '30',
          'image' => '1',
          'brand' => 'Real',
          'price' => '696',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Algodon 100% Reginella',
          'barcode' => '12.03105',
          'color' => '105',
          'stock' => '35',
          'totalObillos' => '35',
          'image' => '1',
          'brand' => 'Real',
          'price' => '696',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Algodon 100% Reginella',
          'barcode' => '12.03496',
          'color' => '496',
          'stock' => '29',
          'totalObillos' => '29',
          'image' => '1',
          'brand' => 'Real',
          'price' => '696',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Algodon 100% Reginella',
          'barcode' => '12.03152',
          'color' => '152',
          'stock' => '29',
          'totalObillos' => '29',
          'image' => '1',
          'brand' => 'Real',
          'price' => '696',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);
          

        $product = Bodega::create([
    
          'name' => 'Algodon 100% Reginella',
          'barcode' => '12.03009',
          'color' => '9',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '696',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Algodon 100% Reginella',
          'barcode' => '12.03072',
          'color' => '72',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '696',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Algodon 100% Reginella',
          'barcode' => '12.03057',
          'color' => '57',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '696',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);

        $product = Bodega::create([
    
          'name' => 'Algodon 100% Reginella',
          'barcode' => '12.03019',
          'color' => '19',
          'stock' => '25',
          'totalObillos' => '25',
          'image' => '1',
          'brand' => 'Real',
          'price' => '696',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        // fin Algodon 100% Reginella


        //Hilo Sol


        $product = Bodega::create([
    
          'name' => 'Hilo Sol',
          'barcode' => '13.03152',
          'color' => '152',
          'stock' => '145',
          'totalObillos' => '145',
          'image' => '1',
          'brand' => 'Real',
          'price' => '755',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Hilo Sol',
          'barcode' => '13.03042',
          'color' => '42',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '755',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Hilo Sol',
          'barcode' => '13.03054',
          'color' => '54',
          'stock' => '90',
          'totalObillos' => '90',
          'image' => '1',
          'brand' => 'Real',
          'price' => '755',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Hilo Sol',
          'barcode' => '13.03085',
          'color' => '85',
          'stock' => '95',
          'totalObillos' => '95',
          'image' => '1',
          'brand' => 'Real',
          'price' => '755',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Sol',
          'barcode' => '13.03019',
          'color' => '19',
          'stock' => '95',
          'totalObillos' => '95',
          'image' => '1',
          'brand' => 'Real',
          'price' => '755',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Sol',
          'barcode' => '13.03029',
          'color' => '29',
          'stock' => '40',
          'totalObillos' => '40',
          'image' => '1',
          'brand' => 'Real',
          'price' => '755',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Sol',
          'barcode' => '13.03447',
          'color' => '447',
          'stock' => '95',
          'totalObillos' => '95',
          'image' => '1',
          'brand' => 'Real',
          'price' => '755',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Sol',
          'barcode' => '13.03105',
          'color' => '105',
          'stock' => '40',
          'totalObillos' => '40',
          'image' => '1',
          'brand' => 'Real',
          'price' => '755',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Sol',
          'barcode' => '13.03001',
          'color' => '1',
          'stock' => '60',
          'totalObillos' => '60',
          'image' => '1',
          'brand' => 'Real',
          'price' => '755',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Hilo Sol',
          'barcode' => '13.03122',
          'color' => '122',
          'stock' => '45',
          'totalObillos' => '45',
          'image' => '1',
          'brand' => 'Real',
          'price' => '755',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Hilo Sol',
          'barcode' => '13.03031',
          'color' => '31',
          'stock' => '20',
          'totalObillos' => '20',
          'image' => '1',
          'brand' => 'Real',
          'price' => '755',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);




        //Fin Hilo Sol



        //Tiara


        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03918',
          'color' => '918',
          'stock' => '40',
          'totalObillos' => '40',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03923',
          'color' => '923',
          'stock' => '110',
          'totalObillos' => '110',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03940',
          'color' => '940',
          'stock' => '80',
          'totalObillos' => '80',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03926',
          'color' => '926',
          'stock' => '80',
          'totalObillos' => '80',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03917',
          'color' => '917',
          'stock' => '60',
          'totalObillos' => '60',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03927',
          'color' => '927',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03903',
          'color' => '903',
          'stock' => '40',
          'totalObillos' => '40',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03928',
          'color' => '928',
          'stock' => '10',
          'totalObillos' => '10',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);

        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03905',
          'color' => '905',
          'stock' => '40',
          'totalObillos' => '40',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);

        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03910',
          'color' => '910',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03931',
          'color' => '931',
          'stock' => '40',
          'totalObillos' => '40',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03916',
          'color' => '916',
          'stock' => '120',
          'totalObillos' => '120',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03922',
          'color' => '922',
          'stock' => '70',
          'totalObillos' => '70',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03943',
          'color' => '943',
          'stock' => '10',
          'totalObillos' => '10',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03919',
          'color' => '919',
          'stock' => '50',
          'totalObillos' => '50',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);


        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03908',
          'color' => '908',
          'stock' => '110',
          'totalObillos' => '110',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);

        $product = Bodega::create([
    
          'name' => 'Tiara',
          'barcode' => '14.03909',
          'color' => '909',
          'stock' => '80',
          'totalObillos' => '80',
          'image' => '1',
          'brand' => 'Real',
          'price' => '1040',
          'status' => '1',
          'category_id' => '1',
          'provider_id' => '1',
          
        ]);



  //Fin Tiara

*/

          //Mamba


          $product = Bodega::create([
    
            'name' => 'Mamba',
            'barcode' => '801442',
            'color' => '8014',
            'stock' => '50',
           
            'price' => '2350',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Mamba',
            'barcode' => '801542',
            'color' => '8015',
            'stock' => '10',
            
            'price' => '2350',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Mamba',
            'barcode' => '801742',
            'color' => '8017',
            'stock' => '20',
            
            'price' => '2350',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Mamba',
            'barcode' => '801642',
            'color' => '8016',
            'stock' => '30',
          
            'price' => '2350',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Mamba',
            'barcode' => '801342',
            'color' => '8013',
            'stock' => '10',
          
            'price' => '2350',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //Anakena

          $product = Bodega::create([
    
            'name' => 'Anakena',
            'barcode' => '40738',
            'color' => '407',
            'stock' => '40',
          
            'price' => '1490',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Anakena',
            'barcode' => '40438',
            'color' => '404',
            'stock' => '10',
          
            'price' => '1490',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Anakena',
            'barcode' => '41138',
            'color' => '411',
            'stock' => '10',
          
            'price' => '1490',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Anakena',
            'barcode' => '40838',
            'color' => '408',
            'stock' => '19',
          
            'price' => '1490',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Anakena',
            'barcode' => '40338',
            'color' => '403',
            'stock' => '10',
          
            'price' => '1490',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Anakena',
            'barcode' => '40638',
            'color' => '406',
            'stock' => '40',
          
            'price' => '1490',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          //fin anakena


          //Coral

          $product = Bodega::create([
    
            'name' => 'Coral',
            'barcode' => '17042',
            'color' => '170',
            'stock' => '68',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Coral',
            'barcode' => '15942',
            'color' => '159',
            'stock' => '30',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Coral',
            'barcode' => '16942',
            'color' => '169',
            'stock' => '19',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Coral',
            'barcode' => '16242',
            'color' => '162',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Coral',
            'barcode' => '15642',
            'color' => '156',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Coral',
            'barcode' => '16042',
            'color' => '160',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Coral',
            'barcode' => '15742',
            'color' => '157',
            'stock' => '50',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Coral',
            'barcode' => '16342',
            'color' => '163',
            'stock' => '39',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Coral',
            'barcode' => '16742',
            'color' => '167',
            'stock' => '40',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Coral',
            'barcode' => '16142',
            'color' => '161',
            'stock' => '38',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Coral',
            'barcode' => '15842',
            'color' => '158',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Coral',
            'barcode' => '16642',
            'color' => '166',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //fin Coral


          //Pintitas


          $product = Bodega::create([
    
            'name' => 'Pintitas',
            'barcode' => '9051020',
            'color' => '905',
            'stock' => '15',
          
            'price' => '2100',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Pintitas',
            'barcode' => '9101020',
            'color' => '910',
            'stock' => '40',
          
            'price' => '2100',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Pintitas',
            'barcode' => '9061020',
            'color' => '906',
            'stock' => '5',
          
            'price' => '2100',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Pintitas',
            'barcode' => '9071020',
            'color' => '907',
            'stock' => '30',
          
            'price' => '2100',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Pintitas',
            'barcode' => '9021020',
            'color' => '902',
            'stock' => '25',
          
            'price' => '2100',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Pintitas',
            'barcode' => '9011020',
            'color' => '901',
            'stock' => '30',
          
            'price' => '2100',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Pintitas',
            'barcode' => '9081020',
            'color' => '908',
            'stock' => '35',
          
            'price' => '2100',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Pintitas',
            'barcode' => '9041020',
            'color' => '904',
            'stock' => '20',
          
            'price' => '2100',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          //fin Pintitas



          //Versatil



          $product = Bodega::create([
    
            'name' => 'Versatil',
            'barcode' => '0290620',
            'color' => '029',
            'stock' => '55',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Versatil',
            'barcode' => '0330620',
            'color' => '033',
            'stock' => '15',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Versatil',
            'barcode' => '3490620',
            'color' => '349',
            'stock' => '15',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Versatil',
            'barcode' => '1250620',
            'color' => '125',
            'stock' => '40',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Versatil',
            'barcode' => '0010620',
            'color' => '01',
            'stock' => '105',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Versatil',
            'barcode' => '0190620',
            'color' => '19',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          //Fin versatil



          //Tiara


          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '92221',
            'color' => '922',
            'stock' => '30',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '90421',
            'color' => '904',
            'stock' => '20',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '91621',
            'color' => '916',
            'stock' => '20',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '94021',
            'color' => '940',
            'stock' => '10',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '91821',
            'color' => '918',
            'stock' => '20',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '92021',
            'color' => '920',
            'stock' => '30',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '90821',
            'color' => '908',
            'stock' => '10',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '94321',
            'color' => '943',
            'stock' => '20',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '93821',
            'color' => '938',
            'stock' => '10',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '90921',
            'color' => '909',
            'stock' => '20',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '92821',
            'color' => '928',
            'stock' => '30',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '92321',
            'color' => '923',
            'stock' => '10',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '91721',
            'color' => '917',
            'stock' => '30',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '90321',
            'color' => '903',
            'stock' => '20',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '92721',
            'color' => '927',
            'stock' => '10',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '91021',
            'color' => '910',
            'stock' => '10',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '93921',
            'color' => '939',
            'stock' => '10',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '93121',
            'color' => '931',
            'stock' => '20',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '90621',
            'color' => '906',
            'stock' => '30',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Tiara',
            'barcode' => '92621',
            'color' => '926',
            'stock' => '10',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //fin Tiara


          //Baby Maxi

          $product = Bodega::create([
    
            'name' => 'Baby Maxi',
            'barcode' => '0306001',
            'color' => '01',
            'stock' => '30',
          
            'price' => '1790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Baby Maxi',
            'barcode' => '0306100',
            'color' => '100',
            'stock' => '45',
          
            'price' => '1790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Baby Maxi',
            'barcode' => '0306008',
            'color' => '008',
            'stock' => '20',
          
            'price' => '1790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Baby Maxi',
            'barcode' => '0306011',
            'color' => '11',
            'stock' => '5',
          
            'price' => '1790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Baby Maxi',
            'barcode' => '0306009',
            'color' => '009',
            'stock' => '20',
          
            'price' => '1790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Baby Maxi',
            'barcode' => '03060099', //mismo stock con 009 color
            'color' => '31',
            'stock' => '15',
          
            'price' => '1790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Baby Maxi',
            'barcode' => '0306106',
            'color' => '106',
            'stock' => '15',
          
            'price' => '1790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Baby Maxi',
            'barcode' => '0306014',
            'color' => '14',
            'stock' => '15',
          
            'price' => '1790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Baby Maxi',
            'barcode' => '0306062',
            'color' => '62',
            'stock' => '5',
          
            'price' => '1790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //fin Baby Maxi

          //Chenille



          $product = Bodega::create([
    
            'name' => 'Chanille',
            'barcode' => '76500',
            'color' => '76',
            'stock' => '30',
          
            'price' => '590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chanille',
            'barcode' => '108500',
            'color' => '108',
            'stock' => '17.5',
          
            'price' => '590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Chanille',
            'barcode' => '47500',
            'color' => '47',
            'stock' => '5',
          
            'price' => '590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chanille',
            'barcode' => '17500',
            'color' => '17',
            'stock' => '5',
          
            'price' => '590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Chanille',
            'barcode' => '103500',
            'color' => '103',
            'stock' => '15',
          
            'price' => '590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chanille',
            'barcode' => '73500',
            'color' => '73',
            'stock' => '7.5',
          
            'price' => '590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chanille',
            'barcode' => '21500',
            'color' => '21',
            'stock' => '7.5',
          
            'price' => '590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          //fin Chanille



          //Querubin


          $product = Bodega::create([
    
            'name' => 'Querubin',
            'barcode' => '11038',
            'color' => '110',
            'stock' => '10',
          
            'price' => '2100',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Querubin',
            'barcode' => '11338',
            'color' => '113',
            'stock' => '30',
          
            'price' => '2100',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          //Fin querubin


          //Sureña


          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '11904',
            'color' => '11',
            'stock' => '45',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '16312',
            'color' => '16',
            'stock' => '20',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '36849',
            'color' => '36',
            'stock' => '20',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '70078',
            'color' => '70',
            'stock' => '30',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '33848',
            'color' => '33',
            'stock' => '15',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '31073',
            'color' => '31',
            'stock' => '30',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '61852',
            'color' => '61',
            'stock' => '40',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '89079',
            'color' => '89',
            'stock' => '25',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '319080',
            'color' => '319',
            'stock' => '35',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '09060',
            'color' => '09',
            'stock' => '35',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Surena',
            'barcode' => '39850',
            'color' => '39',
            'stock' => '15',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);





          //Fin Sureña



          //Chilote


          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '255147',
            'color' => '255',
            'stock' => '20',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '136146',
            'color' => '136',
            'stock' => '20',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '259780',
            'color' => '259',
            'stock' => '55',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '23891',
            'color' => '238',
            'stock' => '35',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '6887',
            'color' => '68',
            'stock' => '35',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '76088',
            'color' => '76',
            'stock' => '25',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '57124',
            'color' => '57',
            'stock' => '25',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '427093',
            'color' => '427',
            'stock' => '30',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '16148',
            'color' => '16',
            'stock' => '20',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '78145',
            'color' => '78',
            'stock' => '25',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '42135',
            'color' => '42',
            'stock' => '35',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '31476',
            'color' => '31',
            'stock' => '35',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '38480',
            'color' => '38',
            'stock' => '25',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Chilote',
            'barcode' => '73479',
            'color' => '78',
            'stock' => '30',
          
            'price' => '2200',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //fin Chilote



          //Trapito


          $product = Bodega::create([
    
            'name' => 'Trapito',
            'barcode' => '03831',
            'color' => '38',
            'stock' => '30',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Trapito',
            'barcode' => '06031',
            'color' => '60',
            'stock' => '10',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Trapito',
            'barcode' => '04931',
            'color' => '49',
            'stock' => '30',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Trapito',
            'barcode' => '00631',
            'color' => '6',
            'stock' => '10',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Trapito',
            'barcode' => '00531',
            'color' => '5',
            'stock' => '10',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Trapito',
            'barcode' => '05831',
            'color' => '58',
            'stock' => '60',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //fin Trapito


          //Trapito M

          $product = Bodega::create([
    
            'name' => 'Trapito M',
            'barcode' => '00132',
            'color' => 'M1',
            'stock' => '10',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Trapito M',
            'barcode' => '00832',
            'color' => 'M8',
            'stock' => '10',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Trapito M',
            'barcode' => '02032',
            'color' => 'M20',
            'stock' => '10',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          // fin Trapito M


          //IBIS

          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '076002',
            'color' => '76',
            'stock' => '65',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317015',
            'color' => '15',
            'stock' => '160',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317059',
            'color' => '59',
            'stock' => '55',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317057',
            'color' => '57',
            'stock' => '55',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317081',
            'color' => '81',
            'stock' => '35',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317032',
            'color' => '32',
            'stock' => '45',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317014',
            'color' => '14',
            'stock' => '45',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317020',
            'color' => '20',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317027',
            'color' => '27',
            'stock' => '25',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317008',
            'color' => '8',
            'stock' => '25',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317070',
            'color' => '70',
            'stock' => '25',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317106',
            'color' => '106',
            'stock' => '15',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317024',
            'color' => '24',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317062',
            'color' => '62',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317002',
            'color' => '02',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317108',
            'color' => '108',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317019',
            'color' => '19',
            'stock' => '15',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317105',
            'color' => '105',
            'stock' => '40',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317001',
            'color' => '01',
            'stock' => '29',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317118',
            'color' => '118',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317021',
            'color' => '21',
            'stock' => '50',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);





          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317116',
            'color' => '116',
            'stock' => '50',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317030',
            'color' => '30',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317031',
            'color' => '31',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317033',
            'color' => '33',
            'stock' => '55',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317060',
            'color' => '60',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317028',
            'color' => '28',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317112',
            'color' => '112',
            'stock' => '45',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317496',
            'color' => '496',
            'stock' => '45',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317007',
            'color' => '7',
            'stock' => '25',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317061',
            'color' => '61',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317073',
            'color' => '73',
            'stock' => '35',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317078',
            'color' => '78',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317092',
            'color' => '92',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317100',
            'color' => '100',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317049',
            'color' => '49',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317013',
            'color' => '13',
            'stock' => '25',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);





          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317040',
            'color' => '40',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Ibis',
            'barcode' => '0317029',
            'color' => '29',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          //Fin Ibis



          // Sol


          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367112',
            'color' => '112',
            'stock' => '40',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367019',
            'color' => '19',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367007',
            'color' => '07',
            'stock' => '40',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367038',
            'color' => '38',
            'stock' => '50',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367013',
            'color' => '13',
            'stock' => '35',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367152',
            'color' => '152',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367001',
            'color' => '01',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367008',
            'color' => '8',
            'stock' => '40',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367085',
            'color' => '85',
            'stock' => '35',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367029',
            'color' => '29',
            'stock' => '45',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367003',
            'color' => '3',
            'stock' => '30',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367017',
            'color' => '17',
            'stock' => '30',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367447',
            'color' => '447',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367122',
            'color' => '122',
            'stock' => '50',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367105',
            'color' => '105',
            'stock' => '0',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367032',
            'color' => '32',
            'stock' => '30',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sol',
            'barcode' => '0367049',
            'color' => '49',
            'stock' => '45',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          //fin Sol



          //Dulce Algodon


          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '1892012',
            'color' => '189',
            'stock' => '50',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '082012',
            'color' => '8',
            'stock' => '80',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '312012',
            'color' => '31',
            'stock' => '30',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '192012',
            'color' => '19',
            'stock' => '30',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '092012',
            'color' => '9',
            'stock' => '40',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '1842012',
            'color' => '184',
            'stock' => '10',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '502012',
            'color' => '50',
            'stock' => '50',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '272012',
            'color' => '27',
            'stock' => '30',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '612012',
            'color' => '61',
            'stock' => '59',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '802012',
            'color' => '80',
            'stock' => '30',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '1122012',
            'color' => '112',
            'stock' => '50',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '1052012',
            'color' => '105',
            'stock' => '50',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '1092012',
            'color' => '109',
            'stock' => '40',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          

          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '622012',
            'color' => '62',
            'stock' => '30',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '0472012',
            'color' => '47',
            'stock' => '30',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '132012',
            'color' => '13',
            'stock' => '50',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '482012',
            'color' => '48',
            'stock' => '50',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '012012',
            'color' => '01',
            'stock' => '40',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '022012',
            'color' => '02',
            'stock' => '40',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '932012',
            'color' => '93',
            'stock' => '60',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '402012',
            'color' => '40',
            'stock' => '40',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dulce Algodon',
            'barcode' => '0852012',
            'color' => '85',
            'stock' => '10',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          //fin Dulce Algodon


          //Super Economico

          $product = Bodega::create([
    
            'name' => 'Super Economico',
            'barcode' => '7402105',
            'color' => '740',
            'stock' => '10',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Super Economico',
            'barcode' => '48501007',
            'color' => '4850',
            'stock' => '10',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Super Economico',
            'barcode' => '417310',
            'color' => '41',
            'stock' => '10',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Super Economico',
            'barcode' => '67022111',
            'color' => '6702',
            'stock' => '10',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Super Economico',
            'barcode' => '8293572',
            'color' => '829',
            'stock' => '10',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //fin Super Economico



          //Adora


          $product = Bodega::create([
    
            'name' => 'Adora',
            'barcode' => '650720',
            'color' => '6507',
            'stock' => '20',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Adora',
            'barcode' => '650220',
            'color' => '6502',
            'stock' => '10',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Adora',
            'barcode' => '650520',
            'color' => '6505',
            'stock' => '20',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Adora',
            'barcode' => '651120',
            'color' => '6511',
            'stock' => '30',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Adora',
            'barcode' => '651220',
            'color' => '6512',
            'stock' => '10',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);





          $product = Bodega::create([
    
            'name' => 'Adora',
            'barcode' => '650820',
            'color' => '6508',
            'stock' => '30',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Adora',
            'barcode' => '650120',
            'color' => '6501',
            'stock' => '30',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Adora',
            'barcode' => '650320',
            'color' => '6503',
            'stock' => '20',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Adora',
            'barcode' => '651020',
            'color' => '6510',
            'stock' => '20',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Adora',
            'barcode' => '650620',
            'color' => '6506',
            'stock' => '10',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Adora',
            'barcode' => '650420',
            'color' => '6504',
            'stock' => '30',
          
            'price' => '1890',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          //fin Adora



          //Algodon Reciclado



          $product = Bodega::create([
    
            'name' => 'Algodon Reciclado',
            'barcode' => '400643',
            'color' => '4006',
            'stock' => '40',
          
            'price' => '2290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



       


          $product = Bodega::create([
    
            'name' => 'Algodon Reciclado',
            'barcode' => '400843',
            'color' => '4008',
            'stock' => '30',
          
            'price' => '2290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Algodon Reciclado',
            'barcode' => '400343',
            'color' => '4003',
            'stock' => '10',
          
            'price' => '2290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Algodon Reciclado',
            'barcode' => '4009343',
            'color' => '4009',
            'stock' => '20',
          
            'price' => '2290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Algodon Reciclado',
            'barcode' => '4012343',
            'color' => '4012',
            'stock' => '40',
          
            'price' => '2290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Algodon Reciclado',
            'barcode' => '4004343',
            'color' => '4004',
            'stock' => '10',
          
            'price' => '2290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Algodon Reciclado',
            'barcode' => '4013343',
            'color' => '4013',
            'stock' => '10',
          
            'price' => '2290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Algodon Reciclado',
            'barcode' => '400743',
            'color' => '4007',
            'stock' => '20',
          
            'price' => '2290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Algodon Reciclado',
            'barcode' => '400543',
            'color' => '4005',
            'stock' => '30',
          
            'price' => '2290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Algodon Reciclado',
            'barcode' => '401443',
            'color' => '4014',
            'stock' => '29',
          
            'price' => '2290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Algodon Reciclado',
            'barcode' => '401043',
            'color' => '4010',
            'stock' => '30',
          
            'price' => '2290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Algodon Reciclado',
            'barcode' => '400243',
            'color' => '4002',
            'stock' => '30',
          
            'price' => '2290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);






          $product = Bodega::create([
    
            'name' => 'Algodon Reciclado',
            'barcode' => '400143',
            'color' => '4001',
            'stock' => '10',
          
            'price' => '2290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          //Fin Algodon Reciclado


          //Crebel



          
          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303027',
            'color' => '27',
            'stock' => '25',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303085',
            'color' => '85',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303042',
            'color' => '42',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303008',
            'color' => '8',
            'stock' => '30',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303020',
            'color' => '20',
            'stock' => '45',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303048',
            'color' => '48',
            'stock' => '30',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303031',
            'color' => '31',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303090',
            'color' => '90',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303057',
            'color' => '57',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303047',
            'color' => '47',
            'stock' => '30',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303050',
            'color' => '50',
            'stock' => '50',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303009',
            'color' => '9',
            'stock' => '25',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303205',
            'color' => '205',
            'stock' => '45',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303062',
            'color' => '62',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303456',
            'color' => '456',
            'stock' => '30',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303103',
            'color' => '103',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303021',
            'color' => '21',
            'stock' => '75',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303108',
            'color' => '108',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303065',
            'color' => '65',
            'stock' => '85',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303128',
            'color' => '128',
            'stock' => '15',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303028',
            'color' => '28',
            'stock' => '30',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303032',
            'color' => '32',
            'stock' => '40',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303080',
            'color' => '80',
            'stock' => '15',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303029',
            'color' => '29',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303189',
            'color' => '189',
            'stock' => '15',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303105',
            'color' => '105',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303092',
            'color' => '92',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303007',
            'color' => '7',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303109',
            'color' => '109',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303116',
            'color' => '116',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Crebel',
            'barcode' => '0303072',
            'color' => '72',
            'stock' => '25',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //Fin Crebel


          //Dalai Lana



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '77379',
            'color' => '773',
            'stock' => '50',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '77179',
            'color' => '771',
            'stock' => '26',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '76579',
            'color' => '765',
            'stock' => '16',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '75779',
            'color' => '757',
            'stock' => '30',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '75979',
            'color' => '759',
            'stock' => '10',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '77279',
            'color' => '772',
            'stock' => '30',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '77579',
            'color' => '775',
            'stock' => '10',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '75079',
            'color' => '750',
            'stock' => '30',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '76179',
            'color' => '761',
            'stock' => '10',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '77079',
            'color' => '770',
            'stock' => '22',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '75279',
            'color' => '752',
            'stock' => '20',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '77679',
            'color' => '776',
            'stock' => '81',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '77479',
            'color' => '774',
            'stock' => '20',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '76679',
            'color' => '766',
            'stock' => '60',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '76279',
            'color' => '762',
            'stock' => '10',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '76479',
            'color' => '764',
            'stock' => '20',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '76979',
            'color' => '769',
            'stock' => '20',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '76879',
            'color' => '768',
            'stock' => '30',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '75379',
            'color' => '753',
            'stock' => '29',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '75479',
            'color' => '754',
            'stock' => '30',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          //fin Dalai Lana


          //Dacolor




          $product = Bodega::create([
    
            'name' => 'Dacolor',
            'barcode' => '01337',
            'color' => '13',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Dacolor',
            'barcode' => '04737',
            'color' => '47',
            'stock' => '30',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dacolor',
            'barcode' => '04537',
            'color' => '45',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dacolor',
            'barcode' => '04637',
            'color' => '46',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dacolor',
            'barcode' => '04437',
            'color' => '44',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dacolor',
            'barcode' => '04337',
            'color' => '43',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dacolor',
            'barcode' => '05837',
            'color' => '58',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dacolor',
            'barcode' => '00137',
            'color' => '01',
            'stock' => '40',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //Dacolor


          //Fresquita



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '00309',
            'color' => '3',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '05509',
            'color' => '55',
            'stock' => '40',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '890209',
            'color' => '8902',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '825909',
            'color' => '8259',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '073009',
            'color' => '730',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '420409',
            'color' => '4204',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '825209',
            'color' => '8252',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '179909',
            'color' => '1799',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '28909',
            'color' => '289',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '02909',
            'color' => '29',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '03309',
            'color' => '33',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '621009',
            'color' => '6210',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '621309',
            'color' => '6213',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '28809',
            'color' => '288',
            'stock' => '18.8',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '621209',
            'color' => '6212',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '43909',
            'color' => '439',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '02209',
            'color' => '22',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);





          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '73109',
            'color' => '731',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '08109',
            'color' => '81',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '360209',
            'color' => '3602',
            'stock' => '40',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '110209',
            'color' => '1102',
            'stock' => '40',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '22509',
            'color' => '225',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '42509',
            'color' => '425',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '02809',
            'color' => '28',
            'stock' => '40',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '689009',
            'color' => '6890',
            'stock' => '40',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '177709',
            'color' => '1777',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);





          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '178809',
            'color' => '1788',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '520209',
            'color' => '5202',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '825409',
            'color' => '8254',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '23109',
            'color' => '231',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '20509',
            'color' => '205',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '621409',
            'color' => '6214',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '621109',
            'color' => '6211',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '02609',
            'color' => '26',
            'stock' => '60',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '22909',
            'color' => '229',
            'stock' => '2',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '25909',
            'color' => '259',
            'stock' => '30',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '825709',
            'color' => '8257',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Fresquita',
            'barcode' => '485009',
            'color' => '4850',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          // fin Fresquita


          //Fresquita M

          $product = Bodega::create([
    
            'name' => 'Fresquita M',
            'barcode' => '002016',
            'color' => '02',
            'stock' => '10',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita M',
            'barcode' => '001016',
            'color' => '01',
            'stock' => '10',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Fresquita M',
            'barcode' => '004016',
            'color' => '04',
            'stock' => '10',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Fresquita M',
            'barcode' => '010016',
            'color' => '10',
            'stock' => '10',
          
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //Fin Fresquita M


          //







          //Perle


          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '825991',
            'color' => '8259',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '130291',
            'color' => '1302',
            'stock' => '30',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '20591',
            'color' => '205',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '08191',
            'color' => '81',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '23491',
            'color' => '234',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '485091',
            'color' => '4850',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '110291',
            'color' => '1102',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '03291',
            'color' => '32',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '820291',
            'color' => '8202',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '825791',
            'color' => '8257',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '02291',
            'color' => '22',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '420491',
            'color' => '4204',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '21091',
            'color' => '210',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '20991',
            'color' => '209',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '90391',
            'color' => '903',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '825491',
            'color' => '8254',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '825291',
            'color' => '8252',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '071291',
            'color' => '712',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '890291',
            'color' => '8902',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '43991',
            'color' => '439',
            'stock' => '30',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '28891',
            'color' => '288',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '810291',
            'color' => '8102',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '27991',
            'color' => '279',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '21691',
            'color' => '216',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Perle',
            'barcode' => '640291',
            'color' => '6402',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          //fin Perle



          //Latina

          $product = Bodega::create([
    
            'name' => 'Latina',
            'barcode' => '90244',
            'color' => '902',
            'stock' => '20',
          
            'price' => '2100',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Latina',
            'barcode' => '92244',
            'color' => '922',
            'stock' => '10',
          
            'price' => '2100',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Latina',
            'barcode' => '92944',
            'color' => '928',
            'stock' => '10',
          
            'price' => '2100',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //Fin latina


          //Suprema


          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '0681120',
            'color' => '68',
            'stock' => '55',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '4561120',
            'color' => '456',
            'stock' => '15',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '0131120',
            'color' => '13',
            'stock' => '40',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '0291120',
            'color' => '29',
            'stock' => '15',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '0011120',
            'color' => '01',
            'stock' => '25',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '0851120',
            'color' => '85',
            'stock' => '15',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '0281120',
            'color' => '28',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Suprema',
            'barcode' => '4901120',
            'color' => '490',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //Macrame 3MM


          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '601446',
            'color' => '6014',
            'stock' => '50',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '600646',
            'color' => '6006',
            'stock' => '20',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          
          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '600346',
            'color' => '6003',
            'stock' => '20',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '601746',
            'color' => '6017',
            'stock' => '10',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          
          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '601146',
            'color' => '6011',
            'stock' => '10',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          
          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '600946',
            'color' => '6009',
            'stock' => '30',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          
          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '600546',
            'color' => '6005',
            'stock' => '50',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          
          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '601646',
            'color' => '6016',
            'stock' => '10',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          
          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '601246',
            'color' => '6012',
            'stock' => '20',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          
          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '600746',
            'color' => '6007',
            'stock' => '20',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '601046',
            'color' => '6010',
            'stock' => '10',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          
          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '601546',
            'color' => '6015',
            'stock' => '10',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          
          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '600446',
            'color' => '6004',
            'stock' => '20',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);







          
          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '601846',
            'color' => '6018',
            'stock' => '20',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          
          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '600246',
            'color' => '6002',
            'stock' => '10',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);






          
          $product = Bodega::create([
    
            'name' => 'Macrame 3MM',
            'barcode' => '600846',
            'color' => '6008',
            'stock' => '10',
          
            'price' => '2590',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //fin Macrame 3MM



          //Macrame 500gs


          
          $product = Bodega::create([
    
            'name' => 'Macrame 500 grs',
            'barcode' => '1558',
            'color' => '4',
            'stock' => '4',
          
            'price' => '9900',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Macrame 500 grs',
            'barcode' => '1559',
            'color' => '5',
            'stock' => '3',
          
            'price' => '9900',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          //fin Macrame 500 grs


          //Spray



          $product = Bodega::create([
    
            'name' => 'Spray',
            'barcode' => '52241',
            'color' => '522',
            'stock' => '2',
          
            'price' => '1900',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Spray',
            'barcode' => '51541',
            'color' => '515',
            'stock' => '1',
          
            'price' => '1900',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Spray',
            'barcode' => '50441',
            'color' => '504',
            'stock' => '1',
          
            'price' => '1900',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          //Fin Spray




          //Lurex

          $product = Bodega::create([
    
            'name' => 'Lurex',
            'barcode' => '2211',
            'color' => '22',
            'stock' => '30',
          
            'price' => '0',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Lurex',
            'barcode' => '2411',
            'color' => '24',
            'stock' => '10',
          
            'price' => '0',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Lurex',
            'barcode' => '3011',
            'color' => '30',
            'stock' => '20',
          
            'price' => '0',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Lurex',
            'barcode' => '2711',
            'color' => '27',
            'stock' => '30',
          
            'price' => '0',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Lurex',
            'barcode' => '2611',
            'color' => '26',
            'stock' => '50',
          
            'price' => '0',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Lurex',
            'barcode' => '2511',
            'color' => '25',
            'stock' => '10',
          
            'price' => '0',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          // Fin Lurex






          //Boom Batik

          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '110221',
            'color' => '11',
            'stock' => '5',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          
          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '420221',
            'color' => '42',
            'stock' => '35',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          
          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '220221',
            'color' => '22',
            'stock' => '10',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '340221',
            'color' => '34',
            'stock' => '20',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '280221',
            'color' => '28',
            'stock' => '40',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '330221',
            'color' => '33',
            'stock' => '5',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '320221',
            'color' => '32',
            'stock' => '5',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '410221',
            'color' => '41',
            'stock' => '5',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '240221',
            'color' => '24',
            'stock' => '10',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //Fin Boom Batik



          //Nativa


          
          $product = Bodega::create([
    
            'name' => 'Nativa',
            'barcode' => '1350920',
            'color' => '135',
            'stock' => '5',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Nativa',
            'barcode' => '1100920',
            'color' => '110',
            'stock' => '5',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          
          $product = Bodega::create([
    
            'name' => 'Nativa',
            'barcode' => '1380920',
            'color' => '138',
            'stock' => '10',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //Fin Nativa



          //Super Economica

          $product = Bodega::create([
    
            'name' => 'Super Economica',
            'barcode' => '041093',
            'color' => '41',
            'stock' => '30',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Super Economica',
            'barcode' => '4850093',
            'color' => '4850',
            'stock' => '10',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Super Economica',
            'barcode' => '425093',
            'color' => '425',
            'stock' => '10',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Super Economica',
            'barcode' => '6902093',
            'color' => '6902',
            'stock' => '30',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Super Economica',
            'barcode' => '1302093',
            'color' => '1302',
            'stock' => '20',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Super Economica',
            'barcode' => '3916093',
            'color' => '3916',
            'stock' => '10',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Super Economica',
            'barcode' => '712093',
            'color' => '712',
            'stock' => '20',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Super Economica',
            'barcode' => '3202093',
            'color' => '3202',
            'stock' => '30',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Super Economica',
            'barcode' => '2903093',
            'color' => '2903',
            'stock' => '20',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Super Economica',
            'barcode' => '6702093',
            'color' => '6702',
            'stock' => '20',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Super Economica',
            'barcode' => '718093',
            'color' => '718',
            'stock' => '10',
          
            'price' => '1290',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          //Fin Super Economica



          //Algodon Color


          $product = Bodega::create([
    
            'name' => 'Algodon Color',
            'barcode' => '0371014',
            'color' => '14',
            'stock' => '55',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Algodon Color',
            'barcode' => '0371103',
            'color' => '103',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Algodon Color',
            'barcode' => '0371108',
            'color' => '108',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Algodon Color',
            'barcode' => '0371057',
            'color' => '57',
            'stock' => '10',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Algodon Color',
            'barcode' => '0371105',
            'color' => '105',
            'stock' => '25',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Algodon Color',
            'barcode' => '0371009',
            'color' => '09',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Algodon Color',
            'barcode' => '0371017',
            'color' => '17',
            'stock' => '50',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Algodon Color',
            'barcode' => '0371021',
            'color' => '21',
            'stock' => '65',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Algodon Color',
            'barcode' => '0371137',
            'color' => '137',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Algodon Color',
            'barcode' => '0371042',
            'color' => '42',
            'stock' => '15',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Algodon Color',
            'barcode' => '0371019',
            'color' => '19',
            'stock' => '20',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Algodon Color',
            'barcode' => '0371048',
            'color' => '48',
            'stock' => '5',
          
            'price' => '1690',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          //Fin Algodon Color





          //Crebel 50 GRS


          $product = Bodega::create([
    
            'name' => 'Crebel 50 Grs',
            'barcode' => '48750',
            'color' => '48',
            'stock' => '25',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Crebel 50 Grs',
            'barcode' => '18588',
            'color' => '18',
            'stock' => '35',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Crebel 50 Grs',
            'barcode' => '49751',
            'color' => '49',
            'stock' => '65',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Crebel 50 Grs',
            'barcode' => '90898',
            'color' => '90',
            'stock' => '25',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Crebel 50 Grs',
            'barcode' => '13587',
            'color' => '13',
            'stock' => '25',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Crebel 50 Grs',
            'barcode' => '24745',
            'color' => '24',
            'stock' => '20',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Crebel 50 Grs',
            'barcode' => '50536',
            'color' => '50',
            'stock' => '40',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Crebel 50 Grs',
            'barcode' => '11378',
            'color' => '11',
            'stock' => '35',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //fin Crebel 50 Grs



          //Ideal 40 Grs


          $product = Bodega::create([
    
            'name' => 'Ideal 40 Grs',
            'barcode' => '349062000',
            'color' => '349',
            'stock' => '48',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          
          $product = Bodega::create([
    
            'name' => 'Ideal 40 Grs',
            'barcode' => '03306200',
            'color' => '33',
            'stock' => '48',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          
          $product = Bodega::create([
    
            'name' => 'Ideal 40 Grs',
            'barcode' => '1000620',
            'color' => '100',
            'stock' => '60',
          
            'price' => '790',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Product::create([
    
            'name' => 'lana negra',
            'barcode' => '123456',
            'color' => '111',
            'stock' => '200',
          
            'price' => '1500',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Product::create([
    
            'name' => 'prueba',
            'barcode' => '3042',
            'color' => '111',
            'stock' => '200',
          
            'price' => '1000',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Product::create([
    
            'name' => 'Lana Roja',
            'barcode' => '03.03080',
            'color' => '112',
            'stock' => '200',
          
            'price' => '1000',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);
       
/*






         



          //Dacolor


          $product = Bodega::create([
    
            'name' => 'Dacolor',
            'barcode' => '16.03001',
            'color' => '1',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '340',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dacolor',
            'barcode' => '16.03047',
            'color' => '47',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '340',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dacolor',
            'barcode' => '16.03045',
            'color' => '45',
            'stock' => '80',
            'totalObillos' => '80',
            'image' => '1',
            'brand' => 'Real',
            'price' => '340',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dacolor',
            'barcode' => '16.03056',
            'color' => '56',
            'stock' => '30',
            'totalObillos' => '30',
            'image' => '1',
            'brand' => 'Real',
            'price' => '340',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dacolor',
            'barcode' => '16.03044',
            'color' => '44',
            'stock' => '110',
            'totalObillos' => '110',
            'image' => '1',
            'brand' => 'Real',
            'price' => '340',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          //fin Dacolor



          //Dalai Lana



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03769',
            'color' => '769',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03768',
            'color' => '768',
            'stock' => '290',
            'totalObillos' => '290',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03750',
            'color' => '750',
            'stock' => '20',
            'totalObillos' => '20',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03763',
            'color' => '763',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03774',
            'color' => '774',
            'stock' => '40',
            'totalObillos' => '40',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03770',
            'color' => '770',
            'stock' => '30',
            'totalObillos' => '30',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03766',
            'color' => '766',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03772',
            'color' => '772',
            'stock' => '221',
            'totalObillos' => '221',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03773',
            'color' => '773',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03751',
            'color' => '751',
            'stock' => '190',
            'totalObillos' => '190',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03761',
            'color' => '761',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03754',
            'color' => '754',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03778',
            'color' => '778',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03755',
            'color' => '755',
            'stock' => '40',
            'totalObillos' => '40',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03767',
            'color' => '767',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03762',
            'color' => '762',
            'stock' => '120',
            'totalObillos' => '120',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03752',
            'color' => '752',
            'stock' => '140',
            'totalObillos' => '140',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03771',
            'color' => '771',
            'stock' => '250',
            'totalObillos' => '250',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03760',
            'color' => '760',
            'stock' => '270',
            'totalObillos' => '270',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03757',
            'color' => '757',
            'stock' => '290',
            'totalObillos' => '290',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03764',
            'color' => '764',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03775',
            'color' => '775',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03777',
            'color' => '777',
            'stock' => '250',
            'totalObillos' => '250',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03765',
            'color' => '765',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03759',
            'color' => '759',
            'stock' => '10',
            'totalObillos' => '10',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03776',
            'color' => '776',
            'stock' => '140',
            'totalObillos' => '140',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Dalai Lana',
            'barcode' => '17.03753',
            'color' => '753',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2991',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          // fin Dalai Lana

*/
          //Flora


          $product = Bodega::create([
    
            'name' => 'Flora',
            'barcode' => '501721',
            'color' => '5017',
            'stock' => '20',
            //'totalObillos' => '50',
            //'image' => '1',
           // 'brand' => 'Real',
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Flora',
            'barcode' => '501421',
            'color' => '5014',
            'stock' => '10',
            //'totalObillos' => '100',
            //'image' => '1',
            //'brand' => 'Real',
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Flora',
            'barcode' => '502121',
            'color' => '5021',
            'stock' => '9',
          //  'totalObillos' => '60',
            //'image' => '1',
            //'brand' => 'Real',
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Flora',
            'barcode' => '502221',
            'color' => '5022',
            'stock' => '20',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Flora',
            'barcode' => '501521',
            'color' => '5015',
            'stock' => '40',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Flora',
            'barcode' => '502021',
            'color' => '5020',
            'stock' => '30',
          
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Flora',
            'barcode' => '501621',
            'color' => '5016',
            'stock' => '30',
           
            
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Flora',
            'barcode' => '501321',
            'color' => '5013',
            'stock' => '40',
           
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Flora',
            'barcode' => '501221',
            'color' => '5012',
            'stock' => '10',
           
            'price' => '2500',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

/*
          $product = Bodega::create([
    
            'name' => 'Flora',
            'barcode' => '18.05018',
            'color' => '5018',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '790',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          //fin de Flora


        // Lurex

          $product = Bodega::create([
    
            'name' => 'Lurex',
            'barcode' => '19.05030',
            'color' => '30',
            'stock' => '60',
            'totalObillos' => '60',
            'image' => '1',
            'brand' => 'Real',
            'price' => '200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          
          $product = Bodega::create([
    
            'name' => 'Lurex',
            'barcode' => '19.05028',
            'color' => '28',
            'stock' => '30',
            'totalObillos' => '30',
            'image' => '1',
            'brand' => 'Real',
            'price' => '200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Lurex',
            'barcode' => '19.05026',
            'color' => '26',
            'stock' => '30',
            'totalObillos' => '30',
            'image' => '1',
            'brand' => 'Real',
            'price' => '200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Lurex',
            'barcode' => '19.05024',
            'color' => '24',
            'stock' => '30',
            'totalObillos' => '30',
            'image' => '1',
            'brand' => 'Real',
            'price' => '200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          
          $product = Bodega::create([
    
            'name' => 'Lurex',
            'barcode' => '19.05027',
            'color' => '27',
            'stock' => '30',
            'totalObillos' => '30',
            'image' => '1',
            'brand' => 'Real',
            'price' => '200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          
          $product = Bodega::create([
    
            'name' => 'Lurex',
            'barcode' => '19.05022',
            'color' => '22',
            'stock' => '20',
            'totalObillos' => '20',
            'image' => '1',
            'brand' => 'Real',
            'price' => '200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          //fin lurex


          */
          //Mamut



          
          $product = Bodega::create([
    
            'name' => 'Mamut',
            'barcode' => '12538',
            'color' => '125',
            'stock' => '20',
           
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Mamut',
            'barcode' => '13638',
            'color' => '136',
            'stock' => '10',
           
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Mamut',
            'barcode' => '25938',
            'color' => '259',
            'stock' => '10',
           
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Mamut',
            'barcode' => '13241',
            'color' => '132',
            'stock' => '20',
           
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Mamut',
            'barcode' => '24038',
            'color' => '240',
            'stock' => '5',
           
            'price' => '1990',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          //Fin Mamut

/*
          //Sultan

          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07054',
            'color' => '7054',
            'stock' => '20',
            'totalObillos' => '20',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07009',
            'color' => '7009',
            'stock' => '90',
            'totalObillos' => '90',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07010',
            'color' => '7010',
            'stock' => '230',
            'totalObillos' => '230',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07035',
            'color' => '7035',
            'stock' => '90',
            'totalObillos' => '90',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07018',
            'color' => '7018',
            'stock' => '170',
            'totalObillos' => '170',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07038',
            'color' => '7038',
            'stock' => '110',
            'totalObillos' => '110',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07022',
            'color' => '7022',
            'stock' => '200',
            'totalObillos' => '200',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07051',
            'color' => '7051',
            'stock' => '90',
            'totalObillos' => '90',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07005',
            'color' => '7005',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07037',
            'color' => '7037',
            'stock' => '40',
            'totalObillos' => '40',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07003',
            'color' => '7003',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07029',
            'color' => '7029',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07015',
            'color' => '7015',
            'stock' => '60',
            'totalObillos' => '60',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07008',
            'color' => '7008',
            'stock' => '160',
            'totalObillos' => '160',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07039',
            'color' => '7039',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07055',
            'color' => '7055',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07002',
            'color' => '7002',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Sultan',
            'barcode' => '21.07050',
            'color' => '7050',
            'stock' => '10',
            'totalObillos' => '10',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1750',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          // fin Sultan




          //Spray

          $product = Bodega::create([
    
            'name' => 'Spray',
            'barcode' => '22.07519',
            'color' => '519',
            'stock' => '30',
            'totalObillos' => '30',
            'image' => '1',
            'brand' => 'Real',
            'price' => '80',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Spray',
            'barcode' => '22.07522',
            'color' => '522',
            'stock' => '30',
            'totalObillos' => '30',
            'image' => '1',
            'brand' => 'Real',
            'price' => '80',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Spray',
            'barcode' => '22.07520',
            'color' => '520',
            'stock' => '20',
            'totalObillos' => '20',
            'image' => '1',
            'brand' => 'Real',
            'price' => '80',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          //fin Spray



          //Kinder Bebe



          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02003',
            'color' => '2003',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02001',
            'color' => '2001',
            'stock' => '10',
            'totalObillos' => '10',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02015',
            'color' => '2015',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02008',
            'color' => '2008',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02014',
            'color' => '2014',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02009',
            'color' => '2009',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02002',
            'color' => '2002',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02006',
            'color' => '2006',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02010',
            'color' => '2010',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02011',
            'color' => '2011',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02012',
            'color' => '2012',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02005',
            'color' => '2005',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02016',
            'color' => '2016',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02004',
            'color' => '2004',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);




          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02007',
            'color' => '2007',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'kinder Bebe',
            'barcode' => '23.02017',
            'color' => '2017',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '760',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          //fin Kinder Bebe



          //Algodon 100% Reciclado

          $product = Bodega::create([
    
            'name' => 'Algodon 100% Reciclado',
            'barcode' => '24.04003',
            'color' => '4003',
            'stock' => '10',
            'totalObillos' => '10',
            'image' => '1',
            'brand' => 'Real',
            'price' => '120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Algodon 100% Reciclado',
            'barcode' => '24.04013',
            'color' => '4013',
            'stock' => '20',
            'totalObillos' => '20',
            'image' => '1',
            'brand' => 'Real',
            'price' => '120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Algodon 100% Reciclado',
            'barcode' => '24.04007',
            'color' => '4007',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Algodon 100% Reciclado',
            'barcode' => '24.04012',
            'color' => '4012',
            'stock' => '30',
            'totalObillos' => '30',
            'image' => '1',
            'brand' => 'Real',
            'price' => '120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Algodon 100% Reciclado',
            'barcode' => '24.04005',
            'color' => '4005',
            'stock' => '10',
            'totalObillos' => '10',
            'image' => '1',
            'brand' => 'Real',
            'price' => '120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          // fin Algodon 100% Reciclado


          //Algodon Macrame 100% Algodon

          
          $product = Bodega::create([
    
            'name' => 'Algodon Macrame 100% Algodon',
            'barcode' => '25.06001',
            'color' => '6001',
            'stock' => '100',
            'totalObillos' => '100',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1030',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Algodon Macrame 100% Algodon',
            'barcode' => '25.06009',
            'color' => '6009',
            'stock' => '30',
            'totalObillos' => '30',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1030',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Algodon Macrame 100% Algodon',
            'barcode' => '25.06006',
            'color' => '6006',
            'stock' => '80',
            'totalObillos' => '80',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1030',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Algodon Macrame 100% Algodon',
            'barcode' => '25.06004',
            'color' => '6004',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1030',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Algodon Macrame 100% Algodon',
            'barcode' => '25.06014',
            'color' => '6014',
            'stock' => '130',
            'totalObillos' => '130',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1030',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Algodon Macrame 100% Algodon',
            'barcode' => '25.06003',
            'color' => '6003',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1030',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Algodon Macrame 100% Algodon',
            'barcode' => '25.06008',
            'color' => '6008',
            'stock' => '150',
            'totalObillos' => '150',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1030',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Algodon Macrame 100% Algodon',
            'barcode' => '25.06012',
            'color' => '6012',
            'stock' => '130',
            'totalObillos' => '130',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1030',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Algodon Macrame 100% Algodon',
            'barcode' => '25.06010',
            'color' => '6010',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1030',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Algodon Macrame 100% Algodon',
            'barcode' => '25.06002',
            'color' => '6002',
            'stock' => '130',
            'totalObillos' => '130',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1030',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Algodon Macrame 100% Algodon',
            'barcode' => '25.06011',
            'color' => '6011',
            'stock' => '30',
            'totalObillos' => '30',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1030',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          // fin Algodon Macrame 100% Algodon

          //Latina

          $product = Bodega::create([
    
            'name' => 'Latina',
            'barcode' => '26.06926',
            'color' => '926',
            'stock' => '170',
            'totalObillos' => '170',
            'image' => '1',
            'brand' => 'Real',
            'price' => '540',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Latina',
            'barcode' => '26.06918',
            'color' => '918',
            'stock' => '90',
            'totalObillos' => '90',
            'image' => '1',
            'brand' => 'Real',
            'price' => '540',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Latina',
            'barcode' => '26.06922',
            'color' => '922',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '540',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Latina',
            'barcode' => '26.06927',
            'color' => '927',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '540',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Latina',
            'barcode' => '26.06902',
            'color' => '902',
            'stock' => '130',
            'totalObillos' => '130',
            'image' => '1',
            'brand' => 'Real',
            'price' => '540',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Latina',
            'barcode' => '26.06928',
            'color' => '928',
            'stock' => '10',
            'totalObillos' => '10',
            'image' => '1',
            'brand' => 'Real',
            'price' => '540',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);
          

          // Fin latina



          //Boom Batik


          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '27.06928',
            'color' => '28',
            'stock' => '140',
            'totalObillos' => '140',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '27.06911',
            'color' => '11',
            'stock' => '40',
            'totalObillos' => '40',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '27.06942',
            'color' => '42',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '27.06937',
            'color' => '37',
            'stock' => '140',
            'totalObillos' => '140',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '27.06932',
            'color' => '32',
            'stock' => '40',
            'totalObillos' => '40',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '27.06941',
            'color' => '41',
            'stock' => '140',
            'totalObillos' => '140',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '27.06934',
            'color' => '34',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '27.06924',
            'color' => '24',
            'stock' => '120',
            'totalObillos' => '120',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '27.06936',
            'color' => '36',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '27.06939',
            'color' => '39',
            'stock' => '40',
            'totalObillos' => '40',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '27.06933',
            'color' => '33',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '27.06925',
            'color' => '25',
            'stock' => '140',
            'totalObillos' => '140',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Boom Batik',
            'barcode' => '27.06943',
            'color' => '43',
            'stock' => '40',
            'totalObillos' => '40',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1120',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          // Fin Boom Batik


          //Esqui


          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06307',
            'color' => '307',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06263',
            'color' => '263',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06250',
            'color' => '250',
            'stock' => '40',
            'totalObillos' => '40',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06309',
            'color' => '309',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06312',
            'color' => '312',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06371',
            'color' => '371',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06369',
            'color' => '269',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06293',
            'color' => '293',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06318',
            'color' => '318',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06300',
            'color' => '300',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);



          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06384',
            'color' => '384',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06257',
            'color' => '257',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06252',
            'color' => '252',
            'stock' => '40',
            'totalObillos' => '40',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06310',
            'color' => '310',
            'stock' => '60',
            'totalObillos' => '60',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06294',
            'color' => '294',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06258',
            'color' => '258',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06275',
            'color' => '275',
            'stock' => '50',
            'totalObillos' => '50',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06314',
            'color' => '314',
            'stock' => '30',
            'totalObillos' => '30',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

          $product = Bodega::create([
    
            'name' => 'Esqui',
            'barcode' => '28.06320',
            'color' => '320',
            'stock' => '70',
            'totalObillos' => '70',
            'image' => '1',
            'brand' => 'Real',
            'price' => '1200',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);


          // fin Esqui

          //Algodon Sintetico

          


















          



          $product = Bodega::create([
    
            'name' => 'Lana Alpaka',
            'barcode' => '6920201028099',
            'color' => '4241',
            'stock' => '422',
            'totalObillos' => '22',
            'image' => '1',
            'brand' => 'Real',
            'price' => '2400',
            'status' => '1',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);





        



          $product = Bodega::create([
    
            'name' => 'duo Simple 1.50 x 165',
            'barcode' => 'baige0001',
            'color' => 'beige0001',
            'stock' => '21',
            'totalObillos' => '0',
            'image' => '1',
            'brand' => 'Real',
            'price' => '100',
            'status' => '1',
            'category_id' => '2',
            'provider_id' => '1',
            
          ]);








          $bodega =  Bodega::create([
    
            'name' => 'Kinder bebe',
            'barcode' => '03.03080',
            'color' => '4242',
            'stock' => '422',
            'totalObillos' => '22',
            'image' => '1',
            'brand' => 'Real',
            'price' => '520',
            'status' => '2',
            'category_id' => '1',
            'provider_id' => '1',
            
          ]);

*/
          



        
        

    }
}
