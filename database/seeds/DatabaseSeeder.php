<?php

use Illuminate\Database\Seeder;
use EditorialWeb\Autor;
use EditorialWeb\TipoEdicion;
use EditorialWeb\Genero;
use EditorialWeb\Nivel;
use EditorialWeb\Libro;
use EditorialWeb\LibroAutor;
//use EditorialWeb\Empleado;
use EditorialWeb\Representante;
use EditorialWeb\EstadoPedido;
use EditorialWeb\Pedido;
use EditorialWeb\Linea;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(NivelesSeeder::class);
		$this->call(TipoEdicionesSeeder::class);
		$this->call(AutoresSeeder::class);
		$this->call(GenerosSeeder::class);
		$this->call(LibrosSeeder::class);
		$this->call(LibroAutoresSeeder::class);
		$this->call(RepresentantesSeeder::class);
        $this->call(EstadoPedidosSeeder::class);
	    $this->call(PedidosSeeder::class);
		$this->call(LineasSeeder::class);
		//$this->call(UsersTableSeeder::class);
		factory(EditorialWeb\User::class, 50)->create();
		factory(EditorialWeb\Post::class, 300)->create();

	}

}
