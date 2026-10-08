<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Sencha Japonés',        'price' => 8.50,  'stock' => 40, 'category' => 'Té verde',   'description' => 'Té verde de hoja fina con notas vegetales y un final ligeramente dulce.'],
            ['name' => 'Matcha Ceremonial',     'price' => 24.90, 'stock' => 15, 'category' => 'Té verde',   'description' => 'Polvo de té verde molido en piedra, ideal para preparar con batidor de bambú.'],
            ['name' => 'Gunpowder',             'price' => 6.20,  'stock' => 55, 'category' => 'Té verde',   'description' => 'Hojas enrolladas en pequeñas bolitas, sabor intenso y algo ahumado.'],
            ['name' => 'Earl Grey',             'price' => 7.40,  'stock' => 60, 'category' => 'Té negro',   'description' => 'Té negro aromatizado con aceite de bergamota. Un clásico para la tarde.'],
            ['name' => 'Assam Breakfast',       'price' => 6.90,  'stock' => 48, 'category' => 'Té negro',   'description' => 'Té negro con cuerpo y notas maltosas, perfecto con un poco de leche.'],
            ['name' => 'Darjeeling First Flush','price' => 14.50, 'stock' => 20, 'category' => 'Té negro',   'description' => 'Cosecha de primavera del Himalaya, ligera y con aroma floral.'],
            ['name' => 'Rooibos Vainilla',      'price' => 5.80,  'stock' => 70, 'category' => 'Infusión',   'description' => 'Rooibos sudafricano sin teína con vainilla natural. Apto para la noche.'],
            ['name' => 'Manzanilla con Miel',   'price' => 4.50,  'stock' => 80, 'category' => 'Infusión',   'description' => 'Flores de manzanilla enteras con un toque de miel. Suave y digestiva.'],
            ['name' => 'Menta Poleo',           'price' => 4.20,  'stock' => 65, 'category' => 'Infusión',   'description' => 'Mezcla refrescante de hierbabuena y poleo, buena fría o caliente.'],
            ['name' => 'Oolong Tie Guan Yin',   'price' => 12.80, 'stock' => 25, 'category' => 'Oolong',     'description' => 'Oolong semioxidado de Fujian con aroma a orquídea. Admite varias infusiones.'],
            ['name' => 'Pu-erh Añejo',          'price' => 16.00, 'stock' => 12, 'category' => 'Pu-erh',     'description' => 'Té fermentado de Yunnan, terroso y profundo. Mejora con los años.'],
            ['name' => 'Tetera de Hierro 0,8 L','price' => 39.90, 'stock' => 8,  'category' => 'Accesorios', 'description' => 'Tetera de hierro fundido con filtro de acero inoxidable incluido.'],
        ];

        foreach ($products as $product) {
            Product::create([
                ...$product,
                'slug'  => Str::slug($product['name']),
                'image' => 'https://picsum.photos/seed/' . Str::slug($product['name']) . '/400/300',
            ]);
        }
    }
}