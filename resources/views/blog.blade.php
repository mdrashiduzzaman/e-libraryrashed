@extends('front_layouts.master')

@section('content')

<!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Blog Posts</h2>
                    <span class="underline center"></span>
                    <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        
        <!-- Start: Blog Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="blog-main-list">
                        <div class="container">
                            <div class="row">
                                <div class="blog-page grid">
                                    <article>
                                        <div class="grid-item blog-item">
                                            <div class="post-thumbnail">
                                                <div class="post-date-box">
                                                    <div class="post-date">
                                                        <a class="date" href="#.">07</a>
                                                    </div>
                                                    <div class="post-date-month">
                                                        <a class="month" href="#.">Mar</a>
                                                    </div>
                                                </div>
                                                <a href="blog-detail.html"><img alt="blog" src="{{asset('front_assets')}}/images/blog/blog-01.jpg" /></a>
                                                <div class="post-share">
                                                    <a href="#."><i class="fa fa-comment"></i> 37</a>
                                                    <a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a>
                                                    <a href="#."><i class="fa fa-eye"></i> 180</a>
                                                    <a href="#."><i class="fa fa-share-alt"></i> Share</a>
                                                </div>
                                            </div>
                                            <div class="post-detail">
                                                <header class="entry-header">
                                                    <div class="blog_meta_category">
                                                        <span class="arrow-right"></span>
                                                        <a href="#." rel="category tag">Design</a>, 
                                                        <a href="#." rel="category tag">art</a>
                                                    </div>
                                                    <h3 class="entry-title"><a href="blog-detail.html">Here each week my friends</a></h3>
                                                    <div class="entry-meta">
                                                        <span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                                                        <span><i class="fa fa-comment"></i> <a href="#">15 Comments</a></span>
                                                    </div>
                                                </header>
                                                <div class="entry-content">
                                                    <p>Curabitur sagittis fermentum ante at imperdiet. Proin viverra arcu ac quam finibus, efficitur rutrum turpis auctor. Maecenas at mi vitae lacus tempus egestas nec eget eros. Nunc eget est tellus. Quisque quis mattis eros, sit amet facilisis felis. Aliquam molestie purus venenatis lorem laoreet venenatis.....</p>
                                                </div>
                                                <footer class="entry-footer">
                                                    <a class="btn btn-default" href="blog-detail.html">Read More</a>
                                                </footer>
                                            </div>
                                        </div>
                                    </article>
                                    
                                </div>
                                <a href="#" id="loadmore">Load More Posts</a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Blog Section -->
@include('front_includes.follow')


@endsection