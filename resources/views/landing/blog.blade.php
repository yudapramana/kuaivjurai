@extends('layouts.landing.master')
@section('title', $title)

@section('_styles')

{{-- Primary Meta Tags --}}
<meta name="title" content="{{$title}}">
<meta name="description" content="{{$title}}" />
<meta name="keywords" content="About Pandan View Mandeh, Mandeh, Pesisir Selatan, Puncak Mandeh" />
<meta name="author" content="Pandan View Mandeh" />
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<meta name="revisit-after" content="1 Days" />

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="{{$title}}">
<meta property="og:title" content="{{$title}}">
<meta property="og:locale" content="id_ID">
<meta property="og:description" content="Pandan View Mandeh Resort Pandan View Mandeh terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara. Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah langsung k...">
<meta property="og:image" content="{{ asset('sailor/img/logo.png') }}" />

<meta property="og:type" content=website />
<meta property="og:url" content="{{ URL::current() }}" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="{{$title}}" />
<meta name="twitter:title" content="{{$title}}" />
<meta name="twitter:description" content="Pandan View Mandeh Resort Pandan View Mandeh terletak dikawasan destinasi wisata bahari Teluk Mandeh yang menghadirkan sebuah kafe dan cottage untuk wisatawan lokal, domestik dan manca negara. Pandan View Mandeh terdapat beberapa spot spot berfoto yang indah dan pemandangan yang indah langsung k...">
<meta name="twitter:image" content="{{ asset('sailor/img/logo.png') }}" />
<meta property="twitter:url" content="{{ URL::current() }}">


<link rel="canonical" href="{{ URL::current() }}" />
<link rel="alternate" hreflang="en-US" href="{{ URL::current() }}" />
<link rel="shortcut icon" type="image/png" href="{{ URL::current() }}" />

@endsection

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Blog</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Blog</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    @forelse($posts as $key => $post)
                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{$post->cover}}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="/post/{{$post->slug}}">{{$post->title}}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/post/{{$post->slug}}">{{ $post->user->username }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="/post/{{$post->slug}}"><time datetime="{{$post->created_at->format('Y-m-d')}}">{{ $post->created_at->format('d F Y') }}</time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a href="/post/{{$post->slug}}">{{$post->view_count}} Reads</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                {!!\Illuminate\Support\Str::limit($post->desc, 200, $end='...')!!}
                            </p>
                            <div class="read-more">
                                <a href="/post/{{$post->slug}}">Read More</a>
                            </div>
                        </div>

                    </article><!-- End blog entry -->
                    @empty
                    <p>No Posts Shown</p>
                    @endforelse

                    {{-- {{ $posts->links('pagination::bootstrap-4') }} --}}


                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            {{ $posts->links('pagination::bootstrap-4') }}

                            {{-- <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li> --}}
                        </ul>
                    </div>

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="/blog">
                                <input type="text" name="search" required value="{{ request()->input('search', old('search')) }}" />
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @foreach ($categories as $category)
                                <li><a href="/blog?category={{$category->slug}}">{{$category->name}} <span>({{$category->posts_count}})</span></a></li>

                                @endforeach
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">

                            @foreach($recent_posts as $key => $post)
                            <div class="post-item clearfix">
                                <img src="{{$post->cover}}" alt="">
                                <h4><a href="/post/{{$post->slug}}">{{\Illuminate\Support\Str::limit($post->title, 20, $end='...')}}</a></h4>
                                <time datetime="2020-01-01"> {{ $post->created_at->format('d F Y') }}</time>
                            </div>
                            @endforeach


                        </div><!-- End sidebar recent posts-->

                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                @foreach ($tags as $tag)
                                <li><a href="/blog?tag={{$tag->slug}}">{{$tag->name}}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->

@endsection
