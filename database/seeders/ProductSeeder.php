<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'references' => Str::uuid()->toString(),
                'title' => "Aptamil Pronutra 1 800g",
                'description' => "Aptamil Pronutra 1 800g",
                'price' => 180.00,
                'image' => "aptamil800.png",
                'business' => "Aptamil"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Aptamil Pronutra 2 800g",
                'description' => "Aptamil Pronutra 2 800g",
                'price' => 180.50,
                'image' => "aptamil800.png",
                'business' => "Aptamil"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Lady Liberty Bean Bites, Buffalo Ranch, Non-GMO, Plant-Based Protein, 35g",
                'description' => "Lady Liberty Bean Bites, Buffalo Ranch, Non-GMO, Plant-Based Protein, 35g",
                'price' => 180.00,
                'image' => "bean-bites-35.png",
                'business' => "Lady Liberty"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Lady Liberty Bean Bites, Buffalo Ranch, Non-GMO, Plant-Based Protein, 35g 1",
                'description' => "Lady Liberty Bean Bites, Buffalo Ranch, Non-GMO, Plant-Based Protein, 35g",
                'price' => 180.00,
                'image' => "bean-bites-35.png",
                'business' => "Lady Liberty"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Double Chocolate Chip Protein Cookie 59g",
                'description' => "Double Chocolate Chip Protein Cookie 59g",
                'price' => 30.00,
                'image' => "quest59.png",
                'business' => "Quest"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Double Chocolate Chip Protein Cookie 59g 1",
                'description' => "Double Chocolate Chip Protein Cookie 59g",
                'price' => 30.00,
                'image' => "quest59.png",
                'business' => "Quest"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Oreo Original Format Familial 440g",
                'description' => "Oreo Original Format Familial 440g",
                'price' => 70.00,
                'image' => "oreo440.png",
                'business' => "Mondelez"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Oreo Original Format Familial 44gx10",
                'description' => "Oreo Original Format Familial 44gx10",
                'price' => 70.00,
                'image' => "oreo440.png",
                'business' => "Mondelez"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Red Bull Energy Drink, 12 Fl Oz (24 Pack)",
                'description' => "Red Bull Energy Drink, 12 Fl Oz (24 Pack)",
                'price' => 240.00,
                'image' => "red-bull-24.png",
                'business' => "Red Bull"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Red Bull Energy Drink, 12 Fl Ozx24",
                'description' => "Red Bull Energy Drink, 12 Fl Oz (24 Pack)",
                'price' => 240.00,
                'image' => "red-bull-24.png",
                'business' => "Red Bull"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Oreo Golden 220g",
                'description' => "Oreo Golden 220g",
                'price' => 60.00,
                'image' => "oreo-golden220.png",
                'business' => "Mondelez"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Oreo Golden 22gx10",
                'description' => "Oreo Golden 22gx10",
                'price' => 60.00,
                'image' => "oreo-golden220.png",
                'business' => "Mondelez"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Pack Biscuit Gaufrette Tagger au Cacao Bimo 10x24g",
                'description' => "Pack Biscuit Gaufrette Tagger au Cacao Bimo 10x24g",
                'price' => 24.00,
                'image' => "bimo24.png",
                'business' => "Bimo"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Pack Biscuit Gaufrette Tagger au Cacao Bimo 240g",
                'description' => "Pack Biscuit Gaufrette Tagger au Cacao Bimo 240g",
                'price' => 24.00,
                'image' => "bimo24.png",
                'business' => "Bimo"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Kellogg’s Chocos Moons & Stars 1200g with Whole Grain",
                'description' => "Kellogg’s Chocos Moons & Stars 1200g with Whole Grain",
                'price' => 74.50,
                'image' => "Kellogg1200.png",
                'business' => "Kellogg’s"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Kellogg’s Chocos Moons & Stars 1x1200g with Whole Grain",
                'description' => "Kellogg’s Chocos Moons & Stars 1x1200g with Whole Grain",
                'price' => 74.50,
                'image' => "Kellogg1200.png",
                'business' => "Kellogg’s"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Kettle Brand Potato Chips, Sea Salt & Vinegar Kettle Chips, Snack Bag, 42g (Pack of 24)",
                'description' => "Kettle Brand Potato Chips, Sea Salt & Vinegar Kettle Chips, Snack Bag, 42g (Pack of 24)",
                'price' => 150.00,
                'image' => "kettle42.png",
                'business' => "Kettle"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Kettle Brand Potato Chips, Sea Salt & Vinegar Kettle Chips, Snack Bag, 42gx24",
                'description' => "Kettle Brand Potato Chips, Sea Salt & Vinegar Kettle Chips, Snack Bag, 42gx24",
                'price' => 150.00,
                'image' => "kettle42.png",
                'business' => "Kettle"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Solan De Cabras Still Water Pet Bottle 500ml (20Pcs)",
                'description' => "Solan De Cabras Still Water Pet Bottle 500ml (20Pcs)",
                'price' => 40.00,
                'image' => "solan-500.png",
                'business' => "Solan"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Solan De Cabras Still Water Pet Bottle 500mlx20",
                'description' => "Solan De Cabras Still Water Pet Bottle 500mlx20",
                'price' => 40.00,
                'image' => "solan-500.png",
                'business' => "Solan"
            ],
            [
                'references' => Str::uuid()->toString(),
                'title' => "Solan De Cabras Still Water Pet Bottle 20x500ml",
                'description' => "Solan De Cabras Still Water Pet Bottle 20x500ml",
                'price' => 40.00,
                'image' => "solan-500.png",
                'business' => "Solan"
            ],

        ];
        Product::insert($products);
    }
}
