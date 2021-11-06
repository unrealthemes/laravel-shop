@extends( 'layouts.main-layout' )

@section( 'title', $product->title )

@section( 'content' )

  @include('includes.breadcrumbs')

  <!-- Product details -->

  <div class="container">
      <div class="row medium-padding120">
          <div class="product-details">


              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                  <div class="product-details-thumb">

                      <div class="swiper-container" data-effect="fade">

                          <!-- Additional required wrapper -->
                          <div class="swiper-wrapper">
                              <!-- Slides -->

                              <div class="product-details-img-wrap swiper-slide">
                                  <img src="/img/product-details.png" alt="product" data-swiper-parallax="-10">
                                  <!-- <div class="sale" data-swiper-parallax="10">Sale</div> -->
                              </div>

                              <div class="product-details-img-wrap swiper-slide">
                                  <img src="/img/product-details.png" alt="product" data-swiper-parallax="-10">
                                  <!-- <div class="sale" data-swiper-parallax="10">Sale</div> -->
                              </div>

                              <div class="product-details-img-wrap swiper-slide">
                                  <img src="/img/product-details.png" alt="product" data-swiper-parallax="-10">
                                  <!-- <div class="sale" data-swiper-parallax="10">Sale</div> -->
                              </div>

                          </div>
                          <!-- If we need pagination -->
                          <div class="swiper-pagination"></div>
                      </div>

                  </div>

              </div>


              <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                  <div class="product-details-info">
                      <div class="product-details-info-price">
                        @if ( $product->new_price )
                          <span class="del">${{$product->price}}</span>
                          ${{$product->new_price}}
                        @else
                          ${{$product->price}}
                        @endif
                      </div>
                      <h3 class="product-details-info-title">{{$product->title}}</h3>
                      <!-- <div class="product-details-info-ratings">
                          <div class="ratings">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                          </div>
                          <a href="#" class="reviews">3 customer reviews</a>
                      </div> -->
                      <p class="product-details-info-text">Qolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                          nibham liber tempor cum soluta nobis eleifend option congue nihil uarta decima et quinta.
                          Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.
                      </p>

                      <div class="quantity">
                          <a href="#" class="quantity-minus">-</a>
                          <input title="Qty" class="email input-text qty text" type="text" value="2">
                          <a href="#" class="quantity-plus">+</a>
                      </div>

                      <a href="19_cart.html" class="btn btn-medium btn--primary">
                          <span class="text">Add to Cart</span>
                          <i class="seoicon-commerce"></i>
                          <span class="semicircle"></span>
                      </a>
                  </div>

                  <div class="product-details-add-info">
                      <!-- <div class="author">Author:
                          <a href="#" class="author-name">Samuel Peterson</a>
                      </div> -->

                      <div class="tags">Category:
                          <a class="tags-item" href="{{route('getProductsByCategory', $product->category['slug'])}}">
                            {{$product->category['title']}}
                          </a>
                      </div>

                      <!-- <div class="socials">Share:
                          <a href="" class="social__item">
                              <i class="seoicon-social-facebook"></i>
                          </a>
                          <a href="" class="social__item">
                              <i class="seoicon-social-twitter"></i>
                          </a>
                          <a href="" class="social__item">
                              <i class="seoicon-social-linkedin"></i>
                          </a>
                          <a href="" class="social__item">
                              <i class="seoicon-social-google-plus"></i>
                          </a>
                          <a href="" class="social__item">
                              <i class="seoicon-social-pinterest"></i>
                          </a>
                      </div> -->
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- End Product details -->

  <!-- Product descriptions -->


  <div class="container-fluid">
      <div class="row">
          <div class="product-description">
              <div class="container">

                  <ul class="product-description-control" role="tablist">

                      <li role="presentation" class="active">
                          <a href="#product-description" role="tab" data-toggle="tab" class="description control-item">Description</a>
                      </li>

                      <li role="presentation">
                          <a href="#product-reviews" role="tab" data-toggle="tab" class="reviews control-item">Reviews <span>(3)</span></a>
                      </li>

                  </ul>

                  <div class="tab-content">
                      <div role="tabpanel" class="tab-pane fade in active" id="product-description">
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="product-description-title">Product Description:</div>
                                  {!!$product->description!!}
                              </div>
                          </div>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="product-reviews">
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="product-description-title">3 Reviews for “<span class="c-primary">SEO: Marketing Strategy</span>”</div>

                                  <ol class="comments__list-review">

                                      <li class="comments__item-review">

                                          <div class="comment-entry comment comments__article">

                                              <div class="comments__avatar-review">

                                                  <img src="/img/reviews-avatar1.png" alt="avatar">

                                              </div>

                                              <div class="comments__body ovh">

                                                  <div class="ratings">
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star-o" aria-hidden="true"></i>
                                                  </div>

                                                  <header class="comment-meta comments__header-review">

                                                      <cite class="fn url comments__author-review">
                                                          <a href="#" rel="external" class=" ">Jonathan Simpson</a>
                                                      </cite>

                                                      <a href="#" class="comments__time-review">
                                                          <time class="published" datetime="2016-04-20 12:00:00">April 20, 2016
                                                          </time>
                                                      </a>

                                                  </header>

                                                  <div class="comment-content comment">
                                                      <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                                                          anteposuerit litterarum formas humanitatis per seacula quarta decima
                                                          et quinta decima.
                                                      </p>
                                                  </div>


                                              </div>

                                          </div>
                                      </li>

                                      <li class="comments__item-review">

                                          <div class="comment-entry comment comments__article">

                                              <div class="comments__avatar-review">

                                                  <img src="/img/reviews-avatar2.png" alt="avatar">

                                              </div>

                                              <div class="comments__body ovh">

                                                  <div class="ratings">
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                  </div>

                                                  <header class="comment-meta comments__header-review">

                                                      <cite class="fn url comments__author-review">
                                                          <a href="#" rel="external" class=" ">Angelina Johnson</a>
                                                      </cite>

                                                      <a href="#" class="comments__time-review">
                                                          <time class="published" datetime="2016-04-20 12:00:00">April 20, 2016
                                                          </time>
                                                      </a>

                                                  </header>

                                                  <div class="comment-content comment">
                                                      <p>Qothica, quam nunc putamus parum claram, anteposuerit litterarum formas.</p>
                                                  </div>

                                              </div>

                                          </div>


                                      </li>

                                      <li class="comments__item-review">

                                          <div class="comment-entry comment comments__article">

                                              <div class="comments__avatar-review">

                                                  <img src="/img/reviews-avatar3.png" alt="avatar">

                                              </div>

                                              <div class="comments__body ovh">

                                                  <div class="ratings">
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                      <i class="fa fa-star-o" aria-hidden="true"></i>
                                                  </div>

                                                  <header class="comment-meta comments__header-review">

                                                      <cite class="fn url comments__author-review">
                                                          <a href="#" rel="external" class=" ">Philip Demarco</a>
                                                      </cite>

                                                      <a href="#" class="comments__time-review">
                                                          <time class="published" datetime="2016-04-20 12:00:00">April 20, 2016
                                                          </time>
                                                      </a>

                                                  </header>

                                                  <div class="comment-content comment">
                                                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                          nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                                          volutpat. Eodem modo typi, qui nunc nobis videntur parum clari, fiant
                                                          sollemnes in futurum autem vel eum iriure dolor in hendrerit in
                                                          vulputate velit esse molestie consequat.
                                                      </p>
                                                  </div>

                                              </div>

                                          </div>


                                      </li>

                                  </ol>


                              </div>

                          </div>

                          <div class="row">
                              <div class="add-review">
                                  <div class="col-lg-12">
                                      <div class="product-description-title">Add a Review</div>
                                  </div>
                                  <div class="col-lg-12">
                                      <div class="your-rating">Your Rating:
                                          <div class="ratings">
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star" aria-hidden="true"></i>
                                              <i class="fa fa-star-o" aria-hidden="true"></i>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-12">
                                      <div class="contact-form">
                                          <form>

                                              <div class="row">

                                                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                      <input class="email input-standard-grey" placeholder="Your Name" type="text">

                                                      <input class="email input-standard-grey" placeholder="Email Address" type="text">
                                                  </div>


                                              </div>

                                              <div class="row">

                                                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                                                      <textarea class="email input-standard-grey" placeholder="Your Review"></textarea>

                                                  </div>

                                              </div>

                                              <button class="btn btn-medium btn--breez btn-hover-shadow">
                                                  <span class="text">Submit</span>
                                                  <span class="semicircle"></span>
                                              </button>

                                          </form>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>

  <!-- End Product descriptions -->

  <!-- Interested Product -->


  <div class="container">

          <div class="interested-products medium-padding120">

              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <div class="heading align-center">
                          <h4 class="h1 heading-title">Related Products</h4>
                          <div class="heading-line">
                              <span class="short-line"></span>
                              <span class="long-line"></span>
                          </div>

                          <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>

                      </div>
                  </div>
              </div>

              <div class="row" id="items-grid">

                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="books-item">
                          <div class="books-item-thumb">
                              <img src="/img/book7.png" alt="book">
                              <div class="new">New</div>
                              <div class="sale">Sale</div>
                              <div class="overlay overlay-books"></div>
                          </div>

                          <div class="books-item-info">
                              <div class="books-author">Douglas Brown</div>
                              <h5 class="books-title">The Basic Principles</h5>

                              <div class="books-price free">Free</div>
                          </div>

                          <div class="btn btn-small btn--light-green btn-hover-shadow">
                              <span class="text">Download</span>
                              <i class="seoicon-arrow-to-bottom"></i>
                          </div>

                      </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="books-item">
                          <div class="books-item-thumb">
                              <img src="/img/book8.png" alt="book">
                              <div class="new">New</div>
                              <div class="sale">Sale</div>
                              <div class="overlay overlay-books"></div>
                          </div>

                          <div class="books-item-info">
                              <div class="books-author">Samuel Peterson</div>
                              <h5 class="books-title">SEO Community</h5>

                              <div class="books-price">$20.00</div>
                          </div>

                          <a href="19_cart.html" class="btn btn-small btn--dark add">
                              <span class="text">Add to Cart</span>
                              <i class="seoicon-commerce"></i>
                          </a>

                      </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="books-item">
                          <div class="books-item-thumb">
                              <img src="/img/book9.png" alt="book">
                              <div class="new">New</div>
                              <div class="sale">Sale</div>
                              <div class="overlay overlay-books"></div>
                          </div>

                          <div class="books-item-info">
                              <div class="books-author">Callum Bailey</div>
                              <h5 class="books-title">Search Marketing</h5>

                              <div class="books-price">$58.00</div>
                          </div>

                          <a href="19_cart.html" class="btn btn-small btn--dark add">
                              <span class="text">Add to Cart</span>
                              <i class="seoicon-commerce"></i>
                          </a>

                      </div>

                  </div>
              </div>

              <a href="#" class="load-more" id="load-more-button" data-load-link="items-to-load.html" data-container="items-grid">
                  <span class="load-more-img-wrap">
                      <img src="/img/load-more-line.png" alt="load-more">
                  </span>
                  <span class="load-more-text">load more</span>
              </a>

          </div>

  </div>

  <!-- Interested Product -->

@endsection
