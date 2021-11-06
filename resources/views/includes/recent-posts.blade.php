<!-- Post-slider -->

<div class="container">

    <div class="recent-post-slider medium-padding120">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="heading">
                    <h4 class="h1 heading-title">Latest From the Blog</h4>
                    <a href="{{route('getBlog')}}" class="read-more">Read Our Blog
                        <i class="seoicon-right-arrow"></i>
                    </a>
                    <div class="heading-line">
                        <span class="short-line"></span>
                        <span class="long-line"></span>
                    </div>
                </div>
            </div>

        </div>

        <div class="theme-module news-slider-module">
            <div class="swiper-container top-pagination" data-show-items="3" data-scroll-items="3">

                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <div class="swiper-wrapper">

                    @foreach ( $posts as $post )

                        <div class="swiper-slide">
                            <article class="hentry post">

                                <!-- <time class="post__date published " datetime="2016-01-30 12:00:00">
                                    {{$post->created_at}} 
                                </time> -->
                                <!-- January 30, 2016 -->

                                <div class="post__content">
                                    <h2 class="post__title entry-title">
                                        <a href="{{ route( 'getPost', [ $post->category['slug'], $post->slug ] ) }}">
                                            {{$post->title}}
                                        </a>
                                    </h2>
                                    
                                    <p class="post__text">
                                        {{ \Illuminate\Support\Str::limit( $post->text, 140 ) }}  
                                    </p>

                                </div>

                                <!-- <div class="post__author author vcard">
                                    <div class="post-avatar">
                                        <img src="img/post-author1.png" alt="author">
                                    </div>
                                    <span class="post__author-name fn"> Posted by <a href="#" class="post__author-link">Admin</a></span>
                                </div> -->

                            </article>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>

    </div>
</div>

<!-- End Post-slider -->