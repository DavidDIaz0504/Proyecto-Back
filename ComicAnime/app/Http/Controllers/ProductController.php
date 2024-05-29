<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        1 => [
            'id' => 1,
            'title' => 'Bolso Totoro',
            'image' => 'https://m.media-amazon.com/images/I/71jn1tRUlBL._AC_SY500_.jpg',
            'description' => 'Descubre la magia de Ghibli con este encantador bolso Totoro, perfecto para cualquier aventura.',
            'price' => '45.50',
            'category' => 'Ropa'
        ],
        2 => [
            'id' => 2,
            'title' => 'Teclado Gamer',
            'image' => 'https://m.media-amazon.com/images/I/71WBwf2mkXL._AC_SL1500_.jpg',
            'description' => 'Eleva tu juego con este teclado gamer retroiluminado, diseñado para la victoria.',
            'price' => '45.50',
            'category' => 'Tecnologia'
        ],
        3 => [
            'id' => 3,
            'title' => 'Cosmetiquera',
            'image' => 'https://m.media-amazon.com/images/I/51VctPhsYDL._AC_SL1500_.jpg',
            'description' => 'Organiza tus esenciales de belleza con estilo con esta práctica y chic cosmetiquera.',
            'price' => '45.50',
            'category' => 'Belleza'
        ],
        4 => [
            'id' => 4,
            'title' => 'Bolso de OnePiece',
            'image' => 'https://m.media-amazon.com/images/I/51XRvih20sL.__AC_SX300_SY300_QL70_FMwebp_.jpg',
            'description' => 'Lleva tu amor por OnePiece a todas partes con este bolso exclusivo y resistente.',
            'price' => '45.50',
            'category' => 'Ropa'
        ],
        5 => [
            'id' => 5,
            'title' => 'Pocillo Decorativo',
            'image' => 'https://m.media-amazon.com/images/I/71uiLhG24SL._AC_SL1500_.jpg',
            'description' => 'Agrega un toque artístico a tu hogar con este elegante y versátil pocillo decorativo.',
            'price' => '45.50',
            'category' => 'Decoracion'
        ],
        6 => [
            'id' => 6,
            'title' => 'PowerBank',
            'image' => 'https://m.media-amazon.com/images/I/71BiMUM7X0L._AC_SL1500_.jpg',
            'description' => 'Nunca te quedes sin batería con este PowerBank ultraportátil y de alta capacidad.',
            'price' => '45.50',
            'category' => 'Tecnologia'
        ],
        7 => [
            'id' => 7,
            'title' => 'Paleta de sombras',
            'image' => 'https://m.media-amazon.com/images/I/71PF5pOgNVL._SL1500_.jpg',
            'description' => 'Desata tu creatividad con esta paleta de sombras de ojos de colores vibrantes y duraderos.',
            'price' => '45.50',
            'category' => 'Belleza'
        ],
        8 => [
            'id' => 8,
            'title' => 'Buzo Personalizado',
            'image' => 'https://m.media-amazon.com/images/I/71S6sufXhBL._AC_SX522_.jpg',
            'description' => 'Muestra tu estilo único con este buzo personalizado, cómodo para cualquier ocasión.',
            'price' => '45.50',
            'category' => 'Ropa'
        ],
        9 => [
            'id' => 9,
            'title' => 'Anillos Akatsuki',
            'image' => 'imgs/akats_rings.png',
            'description' => 'Manifiesta tu lealtad al Akatsuki con estos anillos simbólicos, un must para los fans de Naruto.',
            'price' => '45.50',
            'category' => 'Ropa'
        ],
        10 => [
            'id' => 10,
            'title' => 'Figuras Kimetsu',
            'image' => 'https://m.media-amazon.com/images/I/61yiWit1x2L._AC_SL1500_.jpg',
            'description' => 'Colecciona estas detalladas figuras de Kimetsu no Yaiba, cada una capturando la esencia del personaje.',
            'price' => '45.50',
            'category' => 'Decoracion'
        ],
        11 => [
            'id' => 11,
            'title' => 'Gorro Anime',
            'image' => 'https://m.media-amazon.com/images/I/513jRXv5geL._AC_.jpg',
            'description' => 'Mantente abrigado y estiloso con este gorro inspirado en tus animes favoritos.',
            'price' => '45.50',
            'category' => 'Ropa'
        ]
    ];

    public function show($id)
    {
        $product = $this->products[$id] ?? null;

        if (!$product) {
            abort(404);
        }

        return view('detailsp', ['product' => $product]);
    }

    public function index()
    {
        return view('/welcome'); // Asegúrate de tener una vista llamada 'home' o ajusta el nombre de la vista según corresponda.
    }

    public function ist(Request $request)
    {
        $category = $request->input('category');

        if ($category) {
            $filteredProducts = array_filter($this->products, function ($product) use ($category) {
                return $product['category'] === $category;
            });
            return view('store', ['products' => $filteredProducts]);
        } else {
            return view('store', ['products' => $this->products]);
        }
    }

}
