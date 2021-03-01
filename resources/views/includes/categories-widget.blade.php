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
