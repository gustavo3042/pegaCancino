<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; //se trae esta use para poder crear un rol
use Spatie\Permission\Models\Permission; //se trae esta use para poder crear un rol

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 =Role::create(['name'=>'Admin']);
        $role2 =Role::create(['name'=>'VendedorPrat']);
        $role3 =Role::create(['name'=>'Bodega']);
        $role4 =Role::create(['name'=>'DespachoPrat']);
        $role5 =Role::create(['name'=>'vendePalmeras']);
        $role6 =Role::create(['name'=>'despachoPalmeras']);
      


        Permission::create(['name' => 'home.index',
        'description'=>'Ver panel de administracion Prat'])->syncRoles([$role1,$role2,$role3,$role4,$role5,$role6]);

      
        Permission::create(['name' => 'home.indexPalmeras',
        'description'=>'Ver panel de administracion Palmeras'])->syncRoles([$role1]);

       


        Permission::create(['name' => 'users.index',
        'description'=>'Ver listado de Usuarios'])->syncRoles([$role1]);
    
        Permission::create(['name' => 'users.edit',
        'description'=>'Asignar un rol'])->syncRoles([$role1]);



        Permission::create(['name'=>'roles.index',
        'description'=>'Ver listado de Roles'])->syncRoles([$role1]);
      
        Permission::create(['name'=>'roles.create',
      'description'=>'Crear Rol'])->syncRoles([$role1]);
      
      
      Permission::create(['name'=>'roles.edit',
      'description'=>'Editar Rol'])->syncRoles([$role1]);
      
      Permission::create(['name'=>'roles.destroy',
      'description'=>'Eliminar Rol'])->syncRoles([$role1]);


        Permission::create(['name' => 'sale.index',
        'description'=>'Ver vista principal de ventas'])->syncRoles([$role1,$role2,$role4,$role5,$role6]);

       

        Permission::create(['name'=>'sale.boleta',
        'description'=>'Generar ticket boleta'])->syncRoles([$role1,$role2]);


        Permission::create(['name'=>'sale.despacho',
        'description'=>'Generar ticket para venta realizada'])->syncRoles([$role1,$role4]);



        Permission::create(['name'=>'sale.boleta2',
        'description'=>'Generar ticket boleta en local Palmeras'])->syncRoles([$role1,$role5]);


        Permission::create(['name'=>'sale.despacho2',
        'description'=>'Generar ticket para venta realizada en local Palmeras'])->syncRoles([$role1,$role6]);


        Permission::create(['name'=>'sale.salePalmeras',
        'description'=>'Ver vista principal de ventas de local de Palmeras'])->syncRoles([$role1,$role5,$role6]);

        

        Permission::create(['name' => 'sale.Prat',
        'description'=>'Ver vista principal de ventas Prat'])->syncRoles([$role1,$role2,$role4]);


        
        Permission::create(['name' => 'cart.list',
        'description'=>'Ver Carrito de venta'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'palmeras.list',
        'description'=>'Ver Carrito de venta del local Palmeras'])->syncRoles([$role1,$role5]);

        Permission::create(['name' => 'cart.palmeras',
        'description'=>'Generar venta con pistola Palmeras'])->syncRoles([$role1,$role5]);

        Permission::create(['name' => 'cart.create',
        'description'=>'Generar venta con pistola '])->syncRoles([$role1,$role2]);
       
        Permission::create(['name' => 'product.index',
        'description'=>'Ver vista principal de productos de bodega'])->syncRoles([$role1,$role2,$role3,$role5,$role6]);

        Permission::create(['name' => 'product.create',
        'description'=>'Ingresar producto a la bodega'])->syncRoles([$role1,$role3]);

        
        Permission::create(['name' => 'product.edit',
        'description'=>'Editar producto de la bodega'])->syncRoles([$role1,$role3]);

        
        Permission::create(['name' => 'product.show',
        'description'=>'Ver detalle del producto de la bodega'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'product.destroy',
        'description'=>'Eliminar producto de la bodega'])->syncRoles([$role1,$role3]);


        Permission::create(['name' => 'bodegas.index',
        'description'=>'Ver detalle del producto de la bodega Palmeras'])->syncRoles([$role1,$role2,$role3,$role4,$role5,$role6]);


        Permission::create(['name' => 'bodegas.create',
        'description'=>'Crear producto en bodega Prat'])->syncRoles([$role1,$role3]);


        Permission::create(['name' => 'bodegas.edit',
        'description'=>'Editar producto de la bodega Prat'])->syncRoles([$role1,$role3]);

        Permission::create(['name' => 'bodegas.destroy',
        'description'=>'Eliminar producto de la bodega Prat'])->syncRoles([$role1,$role3]);


        Permission::create(['name' => 'products.reports',
        'description'=>'Ver productos con bajo stock en bodega Prat '])->syncRoles([$role1,$role2,$role3,$role4]);

        Permission::create(['name' => 'bodegas.reports',
        'description'=>'Ver productos con bajo stock en bodega Palmeras'])->syncRoles([$role1,$role3,$role5,$role6]);


        Permission::create(['name'=>'purchase.index',
        'description'=>'Ver vista de compras'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'purchase.create',
        'description'=>'Realizar compra a mano'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'purchase.show',
        'description'=>'Ver detalle de la compra'])->syncRoles([$role1,$role3]);
        Permission::create(['name'=>'purchase.edit',
        'description'=>'Editar compra'])->syncRoles([$role1,$role3]);


        Permission::create(['name'=>'cart.list2',
        'description'=>'Ver vista de para realizar compra con pistola para Palmeras'])->syncRoles([$role1,$role3]);
        
        Permission::create(['name'=>'cart.create2',
        'description'=>'Realizar compra con pistola para Palmeras'])->syncRoles([$role1,$role3]);


        Permission::create(['name'=>'cart.list4',
        'description'=>'Vista principal compras Palmeras'])->syncRoles([$role1,$role3]);

        Permission::create(['name'=>'palmeras.compras',
        'description'=>'Realizar compra para ingresar producto a local Palmeras'])->syncRoles([$role1,$role3]);




        Permission::create(['name'=>'reports.day',
        'description'=>'Ver reportes por dia'])->syncRoles([$role1,$role2,$role4]);

        Permission::create(['name'=>'reports.date',
        'description'=>'Generar reporte por rango de fecha'])->syncRoles([$role1,$role2,$role4]);


        Permission::create(['name'=>'reports.dayPalmera',
        'description'=>'Ver reporte por dia local Palmeras'])->syncRoles([$role1,$role5,$role6]);



        Permission::create(['name'=>'reports.datePalmera',
        'description'=>'Generar reporte por rango de fecha en local Palmeras'])->syncRoles([$role1,$role5,$role6]);


      
        Permission::create(['name'=>'provider.index',
        'description'=>'Ingresar al modulo de Proveedores'])->syncRoles([$role1]);


        Permission::create(['name'=>'category.index',
        'description'=>'Ingresar al modulo de Categorias'])->syncRoles([$role1]);

    

    }
}
