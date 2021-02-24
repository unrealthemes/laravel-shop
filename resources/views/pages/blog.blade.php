@extends('layouts.main-layout')

@section('title', 'Blog')

@section('content')

  <!-- Blog posts-->

  <div class="container">
    <div class="row medium-padding120">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <main class="main">

          @foreach ( $posts as $post )

            <article class="hentry post post-standard has-post-thumbnail">

              <div class="post-thumb">
                <img src="{{$post->img}}" alt="seo">
                <div class="overlay"></div>
                <a href="{{$post->img}}" class="link-image js-zoom-image">
                  <i class="seoicon-zoom"></i>
                </a>
                <a href="#" class="link-post">
                  <i class="seoicon-link-bold"></i>
                </a>
              </div>

              <div class="post__content">

                 <!-- <div class="post__author author vcard">
                   <img src="img/avatar6.png" alt="author">
                   Posted by
                   <div class="post__author-name fn">
                    <a href="#" class="post__author-link">Admin</a>
                   </div>
                 </div> -->

                <div class="post__content-info">

                    <h2 class="post__title entry-title ">
                      <a href="15_blog_details.html">{{$post->title}}</a>
                    </h2>

                    <div class="post-additional-info">

                      <span class="post__date">
                        <i class="seoicon-clock"></i>
                        <time class="published" datetime="2016-04-17 12:00:00">
                          April 17, 2016
                        </time>
                      </span>

                      <span class="category">
                        <i class="seoicon-tags"></i>
                        <a href="{{route('getPostsByCategory', $post->category['slug'])}}">
                          {{$post->category['title']}}
                        </a>
                      </span>

                      <!--<span class="post__comments">
                        <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                        6
                      </span> -->

                    </div>

                      <!-- <p class="post__text">{{$post->text}}</p> -->

                    <a href="{{ route( 'getPost', [ $post->category['slug'], $post->slug ] ) }}" class="btn btn-small btn--dark btn-hover-shadow">
                      <span class="text">Continue Reading</span>
                      <i class="seoicon-right-arrow"></i>
                    </a>
                </div>
              </div>

            </article>

          @endforeach

        </main>

        <div class="row">
          <div class="col-lg-12">
            {{$posts->links('vendor.pagination.default')}}
          </div>
        </div>

      </div>


      <!-- Sidebar-->

      <div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-12 col-xs-12">
        <aside aria-label="sidebar" class="sidebar sidebar-right">
          <div class="widget">
            <form class="w-search">
              <input class="email search input-standard-grey" required="required" placeholder="Search" type="search">
              <button class="icon">
                <i class="seoicon-loupe"></i>
              </button>
            </form>
          </div>

          <div class="widget w-post-category">
            <div class="heading">
              <h4 class="heading-title">Post Category</h4>
              <div class="heading-line">
                <span class="short-line"></span>
                <span class="long-line"></span>
              </div>
            </div>
            <div class="post-category-wrap">

              @foreach ( $categories as $category )

                <div class="category-post-item">
                  <span class="post-count">{{$category->posts_count}}</span>
                  <a href="{{route('getPostsByCategory', $category->slug)}}" class="category-title">
                    {{$category->title}}
                    <i class="seoicon-right-arrow"></i>
                  </a>
                </div>

              @endforeach

            </div>
          </div>

        </aside>
      </div>

      <!-- End Sidebar-->


    </div>
  </div>

  <!-- End Blog posts-->

@endsection
