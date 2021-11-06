<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ( $i = 1; $i < 40; $i++ ) {
          DB::table('products')->insert([
              'title'       => 'Product ' . $i,
              'slug'        => 'product-' . $i,
              'img'         => '/img/book' . rand( 1, 9 ) . '.png',
              'price'       => rand( 10, 700 ),
              'new_price'   => null,
              'in_stock'    => 1,
              'category_id' => rand( 1, 10 ),
              'description' =>  '<p>Iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum quam nunc putamus parum claram. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p><p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
              <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt;</li>
              <li>Mirum est notare quam littera gothica;</li>
              <li>Claritas est etiam processus dynamicus sequitur;</li>
              <li>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore;</li>
              <li>Investigationes demonstraverunt lectores.</li>
              </ul>',
              'created_at'  => Carbon::now()->format('Y-m-d H:i:s'),
          ]);
      }
    }
}
