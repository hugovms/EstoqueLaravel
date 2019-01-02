<?php

use Illuminate\Database\Seeder;
use App\Categoria;
use App\Produto;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CategoriaTableSeeder::class);
        $this->call(ProdutosTableSeeder::class);
    }
}

class CategoriaTableSeeder extends Seeder
{
	public function run()
	{
		Categoria::create(['nome' => 'Eletrodomesticos']);
		Categoria::create(['nome' => 'Eletronicos']);
		Categoria::create(['nome' => 'Videogames']);
		Categoria::create(['nome' => 'Vestuario']);
		Categoria::create(['nome' => 'Esportes']);
	}
}

class ProdutosTableSeeder extends Seeder
{
	public function run()
	{
		Produto::create(['nome' => '007 Legends',
						 'valor' => 69.90,
						 'descricao' => '007 Legends um clássico do Wii.',
						 'quantidade' => 5,
						 'tamanho' => '4.62gb',
						 'categoria_id' => 3,
						]);
		Produto::create(['nome' => 'Halo 4',
						 'valor' => 69.90,
						 'descricao' => 'Um ótimo exclusivo de xbox 360.',
						 'quantidade' => 3,
						 'tamanho' => '8.21gb',
						 'categoria_id' => 3,
						]);
		Produto::create(['nome' => 'Moletom Bape Shark',
						 'valor' => 299.90,
						 'descricao' => 'Estilo rapper americano.',
						 'quantidade' => 2,
						 'tamanho' => 'GG',
						 'categoria_id' => 4,
						]);
		Produto::create(['nome' => 'Adidas Ultraboost',
						 'valor' => 799.90,
						 'descricao' => 'O melhor conforto para seus pés.',
						 'quantidade' => 10,
						 'tamanho' => '40',
						 'categoria_id' => 4,
						]);
		Produto::create(['nome' => 'Fogão Dako Deluxe',
						 'valor' => 399.90,
						 'descricao' => 'Escolha Dako pois Dako é bom.',
						 'quantidade' => 1,
						 'tamanho' => '1m',
						 'categoria_id' => 1,
						]);
	}
}