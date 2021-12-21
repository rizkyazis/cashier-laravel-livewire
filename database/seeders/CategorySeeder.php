<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ['Food','Snack','Drink','Other'];
        $icon =
        [
            'uil uil-utensils',
            'uil uil-pizza-slice',
            'uil uil-coffee',
            'uil uil-apps'
        ];

        for($i=0;$i<4;$i++){
            Category::create([
                'name'=>$category[$i],
                'icon'=>$icon[$i]
            ]);
        }
    }
}
