@extends( 'layouts.main-layout' )

@section( 'title', $post->title )

@section( 'content' )

  <!-- Blog posts-->

  <div class="container">
    <div class="row medium-padding120">
        <main class="main">

          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    				<article class="hentry post post-standard-details">

    					<div class="post-thumb">
    						<img src="{{$post->img}}" alt="seo">
    					</div>

    					<div class="post__content">

    						<h2 class="h2 post__title entry-title ">
    							<a href="#">{{$post->title}}</a>
    						</h2>


    						<div class="post-additional-info">

    							<!-- <div class="post__author author vcard">
    								<img src="/img/avatar-b-details.png" alt="author">
    								Posted by

    								<div class="post__author-name fn">
    									<a href="#" class="post__author-link">Admin</a>
    								</div>

    							</div> -->

    							<span class="post__date">

    								<i class="seoicon-clock"></i>

    								<time class="published" datetime="2016-03-20 12:00:00">
    									March 20, 2016
    								</time>

    							</span>

    							<span class="category">
    								<i class="seoicon-tags"></i>
    								<a href="{{ route( 'getPostsByCategory', $slug_category ) }}">Business</a>
    							</span>

    							<span class="post__comments">
    								<a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
    								6
    							</span>

    						</div>
    						<div class="post__content-info">

                  {!!$post->text!!}

    							<div class="widget w-tags">
    								<div class="tags-wrap">
    									<a href="#" class="w-tags-item">SEO</a>
    									<a href="#" class="w-tags-item">Advertising</a>
    									<a href="#" class="w-tags-item">Business</a>
    									<a href="#" class="w-tags-item">Optimization</a>
    								</div>
    							</div>

    						</div>
    					</div>

    					<div class="socials">Share:
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
    					</div>

    				</article>

    				<div class="blog-details-author">

    					<div class="blog-details-author-thumb">
    						<img src="/img/blog-details-author.png" alt="Author">
    					</div>

    					<div class="blog-details-author-content">
    						<div class="author-info">
    							<h5 class="author-name">Philip Demarco</h5>
    							<p class="author-info">SEO Specialist</p>
    						</div>
    						<p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
    							nonummy nibh euismod.
    						</p>
    						<div class="socials">

    							<a href="" class="social__item">
    								<img src="/svg/circle-facebook.svg" alt="facebook">
    							</a>

    							<a href="" class="social__item">
    								<img src="/svg/twitter.svg" alt="twitter">
    							</a>

    							<a href="" class="social__item">
    								<img src="/svg/google.svg" alt="google">
    							</a>

    							<a href="" class="social__item">
    								<img src="/svg/youtube.svg" alt="youtube">
    							</a>

    						</div>
    					</div>
    				</div>

    				<div class="pagination-arrow">

    					<a href="#" class="btn-prev-wrap">
    						<svg class="btn-prev">
    							<use xlink:href="#arrow-left"></use>
    						</svg>
    						<div class="btn-content">
    							<div class="btn-content-title">Next Post</div>
    							<p class="btn-content-subtitle">Claritas Est Etiam Processus</p>
    						</div>
    					</a>

    					<a href="#" class="btn-next-wrap">
    						<div class="btn-content">
    							<div class="btn-content-title">Previous Post</div>
    							<p class="btn-content-subtitle">Duis Autem Velius</p>
    						</div>
    						<svg class="btn-next">
    							<use xlink:href="#arrow-right"></use>
    						</svg>
    					</a>

    				</div>

    				<div class="comments">

    					<div class="heading">
    						<h4 class="h1 heading-title">6 Comments</h4>
    						<div class="heading-line">
    							<span class="short-line"></span>
    							<span class="long-line"></span>
    						</div>
    					</div>

    					<ol class="comments__list">

    					<li class="comments__item">

    						<div class="comment-entry comment comments__article">

    							<div class="comment-content comment">
    								<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram,
    									anteposuerit litterarum formas humanitatis per seacula quarta
    									et quinta decima.
    								</p>
    							</div>

    							<div class="comments__body display-flex">

    								<a href="#" class="reply">
    									<i class=" seoicon-arrow-back"></i>
    								</a>

    								<div class="comments__avatar">

    									<img src="/img/post-author3.png" alt="avatar">

    								</div>

    								<header class="comment-meta comments__header">

    									<cite class="fn url comments__author">
    										<a href="#" rel="external" class=" ">Jonathan Simpson</a>
    									</cite>

    									<div class="comments__time">
    										<time class="published" datetime="2016-04-20 12:00:00">20.04.2016 <span class="at">at</span> 4:27 pm
    										</time>
    									</div>

    								</header>

    							</div>

    						</div>
    					</li>

    						<li class="comments__item">

    							<div class="comment-entry comment comments__article">

    								<div class="comment-content comment">
    									<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
    								</div>

    								<div class="comments__body display-flex">

    									<a href="#" class="reply">
    										<i class=" seoicon-arrow-back"></i>
    									</a>

    									<div class="comments__avatar">

    										<img src="/img/post-author2.png" alt="avatar">

    									</div>

    									<header class="comment-meta comments__header">

    										<cite class="fn url comments__author">
    											<a href="#" rel="external">Angelina Johnson</a>
    										</cite>

    										<div class="comments__time">
    											<time class="published" datetime="2016-04-20 12:00:00">20.04.2016 <span class="at">at</span> 4:27 pm
    											</time>
    										</div>

    									</header>

    								</div>

    							</div>

    							<ol class="children">

    								<li class="comments__item">

    									<div class="comment-entry comment comments__article">

    										<div class="comment-content comment">
    											<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram,
    												anteposuerit litterarum formas humanitatis per seacula quarta decima et
    												quinta decima facer possim assum.
    											</p>
    										</div>

    										<div class="comments__body display-flex">

    											<a href="#" class="reply">
    												<i class=" seoicon-arrow-back"></i>
    											</a>

    											<div class="comments__avatar">

    												<img src="/img/post-author1.png" alt="avatar">

    											</div>

    											<header class="comment-meta comments__header">

    												<cite class="fn url comments__author">
    													<a href="#" rel="external">Philip Demarco</a>
    													<span class="replied">replied Angelina</span>
    												</cite>

    												<div class="comments__time">
    													<time class="published" datetime="2016-04-20 12:00:00">20.04.2016 <span class="at">at</span> 4:27 pm
    													</time>
    												</div>

    											</header>

    										</div>

    									</div>

    									<ol class="children">

    										<li class="comments__item">

    											<div class="comment-entry comment comments__article">

    												<div class="comment-content comment">
    													<p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
    													</p>
    												</div>

    												<div class="comments__body display-flex">

    													<a href="#" class="reply">
    														<i class=" seoicon-arrow-back"></i>
    													</a>

    													<div class="comments__avatar">

    														<img src="/img/post-author2.png" alt="avatar">

    													</div>

    													<header class="comment-meta comments__header">

    														<cite class="fn url comments__author">
    															<a href="#" rel="external">Angelina Johnson</a>
    															<span class="replied">replied Angelina</span>
    														</cite>

    														<div class="comments__time">
    															<time class="published" datetime="2016-04-20 12:00:00">20.04.2016 <span class="at">at</span> 4:27 pm
    															</time>
    														</div>

    													</header>

    												</div>

    											</div>
    										</li>

    									</ol>
    								</li>

    							</ol>
    						</li>

    						<li class="comments__item">

    							<div class="comment-entry comment comments__article">

    								<div class="comment-content comment">
    									<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram,
    										anteposuerit litterarum formas humanitatis per seacula quarta decima et
    										quinta decima.
    									</p>
    								</div>

    								<div class="comments__body display-flex">

    									<a href="#" class="reply">
    										<i class=" seoicon-arrow-back"></i>
    									</a>

    									<div class="comments__avatar">

    										<img src="/img/post-author3.png" alt="avatar">

    									</div>

    									<header class="comment-meta comments__header">

    										<cite class="fn url comments__author">
    											<a href="#" rel="external" class=" ">Jonathan Simpson</a>
    										</cite>

    										<div class="comments__time">
    											<time class="published" datetime="2016-04-20 12:00:00">20.04.2016 <span class="at">at</span> 4:27 pm
    											</time>
    										</div>

    									</header>

    								</div>

    							</div>


    						<ol class="children">

    							<li class="comments__item">

    								<div class="comment-entry comment comments__article">

    									<div class="comment-content comment">
    										<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram,
    											anteposuerit litterarum formas humanitatis per seacula quarta decima et
    											quinta decima facer possim assum.
    										</p>
    									</div>

    									<div class="comments__body display-flex">

    										<a href="#" class="reply">
    											<i class=" seoicon-arrow-back"></i>
    										</a>

    										<div class="comments__avatar">

    											<img src="/img/post-author1.png" alt="avatar">

    										</div>

    										<header class="comment-meta comments__header">

    											<cite class="fn url comments__author">
    												<a href="#" rel="external">Philip Demarco</a>
    												<span class="replied">replied Angelina</span>
    											</cite>

    											<div class="comments__time">
    												<time class="published" datetime="2016-04-20 12:00:00">20.04.2016 <span class="at">at</span> 4:27 pm
    												</time>
    											</div>

    										</header>

    									</div>

    								</div>
    							</li>
    						</ol>
    						</li>
    				</ol>
    				</div>

    				<div class="row">

    					<div class="leave-reply contact-form">

    						<form>

    							<div class="col-lg-12">
    								<div class="heading">
    									<h4 class="h1 heading-title">Leave a Comment</h4>
    									<div class="heading-line">
    										<span class="short-line"></span>
    										<span class="long-line"></span>
    									</div>
    								</div>
    							</div>

    							<div class="col-lg-12">

    								<input class="email input-standard-grey" name="full_name" id="full_name" placeholder="Your Full Name" value="" type="text">

    							</div>

    							<div class="col-lg-6">

    								<input class="email input-standard-grey" name="comment_email" id="comment_email" placeholder="Email Address" value="" type="text">

    							</div>

    							<div class="col-lg-6">

    								<input class="email input-standard-grey" name="comment_website" id="comment_website" placeholder="Website" value="" type="text">

    							</div>

    							<div class="col-lg-12">

    								<textarea name="order_comments" class="input-text input-standard-grey" id="order_comments" placeholder="Your Comment"></textarea>

    							</div>

    							<div class="col-lg-12">

    								<div class="submit-block table">
    									<div class="col-lg-4 table-cell">
    										<div class="btn btn-small btn--primary">
    											<span class="text">Submit</span>
    										</div>
    									</div>

    									<div class="col-lg-8 table-cell">
    										<div class="submit-block-text">
    											You may use these HTML tags and attributes: <span> &lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt;
    											&lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt;
    											&lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </span>
    										</div>
    									</div>

    								</div>

    							</div>
    						</form>
    					</div>
    				</div>

    			</div>

          @include('includes.sidebar')

        </main>
    </div>
  </div>

  <!-- End Blog posts-->

@endsection
