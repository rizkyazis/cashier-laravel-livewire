<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'Beef Burger',
            'Pizza',
            'French Fries',
            'Coffee',
            'Lemon Tea',
            'Merchandise'
        ];

        $price = [
            2.45,
            5.45,
            0.85,
            2.00,
            1.25,
            19.99
        ];

        $image = [
            'https://asset.kompas.com/crops/AnzPGqRxpoD-26G__5fPh6ooZSk=/0x28:640x455/750x500/data/photo/2020/12/12/5fd44cf8e94b1.jpg',
            'https://thumbs.dreamstime.com/b/fresh-tasty-pizza-white-background-clipping-path-included-85746388.jpg',
            'https://envato-shoebox-0.imgix.net/69f3/3e88-0049-11e4-9936-b8ca3a6774f8/IMG_9535.jpg?auto=compress%2Cformat&fit=max&mark=https%3A%2F%2Felements-assets.envato.com%2Fstatic%2Fwatermark2.png&markalign=center%2Cmiddle&markalpha=18&w=1600&s=fee857352c2dfac438691b477b22abc3',
            'https://previews.123rf.com/images/amenic181/amenic1811702/amenic181170200033/72395893-cup-of-coffee-latte-and-coffee-beans-isolated-on-white-background.jpg',
            'https://static.vecteezy.com/system/resources/previews/002/434/535/non_2x/tea-in-cup-with-leaf-mint-and-lemon-isolated-on-white-background-free-photo.jpg',
            'https://cdn.trendhunterstatic.com/phpthumbnails/413/413275/413275_1_800.jpeg'
        ];

        $category = [1,1,2,3,3,4];

        for($i=0;$i<6;$i++){
            $product = Product::create([
                'name'=>$name[$i],
                'price'=>$price[$i],
                'image'=>$image[$i]
            ]);

            ProductCategory::create([
                'product_id'=>$product->id,
                'category_id'=>$category[$i]
            ]);
        }
    }
}
