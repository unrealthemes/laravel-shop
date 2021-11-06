<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ( $i = 1; $i < 11; $i++ ) {
          DB::table('product_categories')->insert([
              'title'      => 'Category ' . $i,
              'slug'       => 'category-' . $i,
              'parent_id'  => rand($i+1, 10),
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ]);
      }
    }
}
