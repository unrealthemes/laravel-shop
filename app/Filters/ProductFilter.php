<?php

namespace App\Filters;

class ProductFilter extends QueryFilter {

    public function category_id($id = null){
        
        return $this->builder->when($id, function($query) use($id){
            $query->where('category_id', $id);
        });
    }

    public function search($search_string = ''){

        return $this->builder
                        ->where('title', 'LIKE', '%'.$search_string.'%');
                        // ->orWhere('description', 'LIKE', '%'.$search_string.'%');
    }

    public function sort($order=''){

        if ( isset( $order ) ) {

            if ( $order == 'price-low-high' ) {
                return $this->builder->orderBy('price');
            }

            if ( $order == 'price-high-low' ) {
                return $this->builder->orderBy('price','desc');
            }

            if ( $order == 'name-a-z' ) {
                return $this->builder->orderBy('title');
            }

            if ( $order == 'name-z-a' ) {
                return $this->builder->orderBy('title','desc');
            }
        }
    }
}