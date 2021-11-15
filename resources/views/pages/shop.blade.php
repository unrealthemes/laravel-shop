@extends('layouts.main-layout')

@section('title', 'Shop')

@section('content')

  @include('includes.breadcrumbs')

  <!-- Books products grid -->

  <div class="container">
      <div class="row pt120">
          <div class="col-lg-8 col-lg-offset-2">
              <div class="heading align-center mb60">
                  <h4 class="h1 heading-title">80+ Useful Books About SEO</h4>

                  <p class="heading-text">Investigationes demonstraverunt lectores legere me lius quod ii legunt
                      saepius qui facit eorum.
                  </p>
              </div>
          </div>
      </div>

      <div class="books-grid">
          <div class="row">
            <form action="{{route('getShop')}}" method="get" style="margin-bottom: 60px;">

              <div class="col-lg-8">
                <input name="search" class="email input-standard-grey" placeholder="Search" type="text" @if(isset($_GET['search'])) value="{{$_GET['search']}}" @endif>
              </div>

              <div class="col-lg-4">
                <div class="sort">
                    <select name="category_id">
                        <option value="default" data-display="Choose category">Choose category</option>
                        
                        @foreach( $categories as $category )
                            <option value="{{$category->id}}" @if(isset($_GET['category_id'])) @if($_GET['category_id'] == $category->id) selected @endif @endif>
                                {{$category->title}}
                            </option>
                        @endforeach

                    </select>
                </div>
              </div>

              <div class="col-lg-8">

                      <div class="books-grid-control" style="text-align: left;">
                         <div class="sort" style="margin-right: 60px;">
                             <select name="sort">
                                 <option value="default" data-display="Default sorting">Default sorting</option>
                                    <option value="price-low-high" @if(isset($_GET['sort'])) @if($_GET['sort'] == 'price-low-high') selected @endif @endif>
                                        Price: low to high
                                    </option>
                                    <option value="price-high-low" @if(isset($_GET['sort'])) @if($_GET['sort'] == 'price-high-low') selected @endif @endif>
                                        Price: high to low
                                    </option>
                                    <option value="name-a-z" @if(isset($_GET['sort'])) @if($_GET['sort'] == 'name-a-z') selected @endif @endif>
                                        Name: A-Z
                                    </option>
                                    <option value="name-z-a" @if(isset($_GET['sort'])) @if($_GET['sort'] == 'name-z-a') selected @endif @endif>
                                        Name: Z-A
                                    </option>
                             </select>
                          </div>
                          <div class="showing" style="margin-right: 0;">
                              Showing <span>{{$products->count()}}</span> results
                          </div>
                      </div>

              </div>

              <div class="col-lg-4">
                <button class="btn btn-medium btn--breez btn-hover-shadow" type="submit" style="width: 100%;">
                    <span class="text">Filter</span>
                    <span class="semicircle"></span>
                </button>
              </div>

            </form>
          </div>
          <div class="products_wrapper">

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

          </div>
          <div class="row pb120">
              <div class="col-lg-12">
                  <!-- {{$products->links('vendor.pagination.default')}} -->
                  {{$products->withQueryString()->links('vendor.pagination.default')}}
              </div>
          </div>

      </div>
  </div>

  <!-- End Books products grid -->

@endsection

@section('custom_js')
  <!-- <script>
    $(document).ready( function() {
       $('.sort select').on('change', function(event) {
          let orderBy = this.value;
          $.ajax({
              url: "@if(Route::currentRouteName() == 'getShop'){{route('getShop')}}@else{{route('getProductsByCategory', $product->category['slug'])}}@endif",
              type: "GET",
              data: {
                  orderBy: orderBy,
                  page: {{isset($_GET['page']) ? $_GET['page'] : 1}},
              },
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success: (data) => {
                  let positionParameters = location.pathname.indexOf('?');
                  let url = location.pathname.substring(positionParameters,location.pathname.length);
                  let newURL = url + '?'; // http://127.0.0.1:8001/phones?
                  newURL += "&page={{isset($_GET['page']) ? $_GET['page'] : 1}}" + '&orderBy=' + orderBy; // http://127.0.0.1:8001/phones?orderBy=name-z-a
                  history.pushState({}, '', newURL);
                  $('.navigation a').each( function( index, value ) {
                      let link= $(this).attr('href');
                      $(this).attr( 'href', link + '&orderBy=' + orderBy );
                  });
                  $('.products_wrapper').html( data );
              }
          });
       });
    });
  </script> -->
@endsection 
