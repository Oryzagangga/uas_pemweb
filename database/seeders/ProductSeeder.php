<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    protected $products = [
        [
            'name' => 'IL - SET ANAK RABELLA / SETELAN ANAK PEREMPUAN RIB PREMIUM',
            'price' => 11999,
        ],
        [
            'name' => '[BPOM] PARFUM BACCARAT 50ML PREMIUM / PARFUM BACCARAT ROUGE 60ML BEST SELLER / PARFUM WANGI TAHAN LAMA',
            'price' => 10250,
        ],
        [
            'name' => 'HAMMOCK/AYUNAN',
            'price' => 29000
        ],
        [
            'name' => 'TOPI BASEBALL PRIA WANITA DEWASA SURF WAVE DISTRO',
            'price' => 8999
        ],
        [
            'name' => 'CELANA PENDEK PRIA DEWASA 70 DAPAT 5 CELANA PENDEK CHINOS',
            'price' => 99750
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->products as $product) {
            Product::create([
                'name' => $product['name'],
                'price' => $product['price']
            ]);
        }
    }
}
