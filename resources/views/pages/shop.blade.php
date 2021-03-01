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
              <div class="col-lg-12">

                      <div class="books-grid-control">
                          <div class="showing">
                              Showing <span>1-9</span> of <span>24</span> results
                          </div>

                         <div class="sort">
                             <select>
                                 <option data-display="Default sorting">Default sorting</option>
                                 <option value="1">Sort by popularity</option>
                                 <option value="2">Sort by average rating</option>
                                 <option value="3">Sort by newness</option>
                                 <option value="4">Sort by price: low to high</option>
                                 <option value="3">Sort by price: high to low</option>
                             </select>
                          </div>

                      </div>

              </div>
          </div>

          @foreach ( $products as $product )

            @if ( $loop->iteration == 1 || $loop->iteration % 4 == 0 )
              <div class="row mb30">
            @endif

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="books-item new">
                    <div class="books-item-thumb">
                        <img src="{{$product->img}}" alt="book">
                        <!-- <div class="new">New</div> -->
                        <!-- <div class="sale">Sale</div> -->
                        <div class="overlay overlay-books"></div>
                    </div>

                    <div class="books-item-info">
                        <div class="books-author">{{$product->category['title']}}</div>
                        <h5 class="books-title">{{$product->title}}</h5>
                        <div class="books-price">
                          @if ( $product->new_price )
                            <span class="del">${{$product->price}}</span>
                            ${{$product->new_price}}
                          @else
                            ${{$product->price}}
                          @endif
                        </div>
                    </div>

                    <a href="{{ route( 'getProduct', [ $product->category['slug'], $product->slug ] ) }}" class="btn btn-small btn--dark add">
                        <span class="text">Add to Cart</span>
                        <i class="seoicon-commerce"></i>
                    </a>

                </div>
            </div>

            @if ( $loop->iteration % 3 == 0 )
              </div>
            @endif

          @endforeach

          <div class="row pb120">
              <div class="col-lg-12">
                  {{$products->links('vendor.pagination.default')}}
              </div>
          </div>

      </div>
  </div>

  <!-- End Books products grid -->

@endsection
