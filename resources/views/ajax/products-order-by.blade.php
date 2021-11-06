@foreach ( $products as $product )

  @if ( $loop->iteration == 1 || $loop->iteration % 4 == 0 )
    <div class="row mb30">
  @endif

  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="books-item new">
          <div class="books-item-thumb">
              <a href="{{ route( 'getProduct', [ $product->category['slug'], $product->slug ] ) }}">
                  <img src="{{$product->img}}" alt="book">
                  <!-- <div class="new">New</div> -->
                  <!-- <div class="sale">Sale</div> -->
                  <div class="overlay overlay-books"></div>
              </a>
          </div>

          <div class="books-item-info">
              <a href="{{route('getProductsByCategory', $product->category['slug'])}}" class="books-author">
                {{$product->category['title']}}
              </a>
              <h5 class="books-title"><a href="{{ route( 'getProduct', [ $product->category['slug'], $product->slug ] ) }}">{{$product->title}}</a></h5>
              <div class="books-price">
                @if ( $product->new_price )
                  <span class="del">${{$product->price}}</span>
                  ${{$product->new_price}}
                @else
                  ${{$product->price}}
                @endif
              </div>
          </div>

          <button class="btn btn-small btn--dark add">
              <span class="text">Add to Cart</span>
              <i class="seoicon-commerce"></i>
          </button>

      </div>
  </div>

  @if ( $loop->iteration % 3 == 0 )
    </div>
  @endif

@endforeach
