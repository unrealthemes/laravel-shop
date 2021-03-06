<!-- Stunning header -->

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">@yield('title')</h1>

        @if ( Route::currentRouteName() == 'getBlog' )
          {{ Breadcrumbs::render( 'blog' ) }}
        @elseif ( Route::currentRouteName() == 'getPostsByCategory' )
          {{ Breadcrumbs::render( 'category', $current_category ) }}
        @elseif ( Route::currentRouteName() == 'getPost' )
          {{ Breadcrumbs::render( 'post', $current_category, $post ) }}
        @endif
        
    </div>
</div>

<!-- End Stunning header -->
