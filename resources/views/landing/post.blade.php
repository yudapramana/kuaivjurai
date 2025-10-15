@extends('layouts.landing.master')
@section('title', 'Pandan View Mandeh - ' . $post->title)

@section('_styles')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Primary Meta Tags -->
<title>{{ $post->title }}</title>
<meta name="title" content="{{ $post->title }}">
<meta name="description" content="{{ $post->meta_desc }}">
<meta name="keywords" content="{{ $post->keywords }}">
<meta name="author" content="Pandan View Mandeh" />
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<meta name="revisit-after" content="1 Days" />

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="PANDAN VIEW MANDEH">
<meta property="og:title" content="PANDAN VIEW MANDEH - {{ $post->title }} ">
<meta property="og:locale" content="id_ID">

<meta property="og:type" content=article />
<meta property="og:url" content="{{ URL::current() }}">
<meta property="og:description" content="{{ $post->meta_desc }}">
<meta property="og:image" content="{{ $post->cover }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ URL::current() }}">
<meta property="twitter:title" content="{{ $post->title }}">
<meta property="twitter:description" content="{{ $post->meta_desc }}">
<meta property="twitter:image" content="{{ $post->cover }}">
<meta name="twitter:site" content="{{ URL::current() }}" />

<link rel="canonical" href="{{ URL::current() }}" />
<link rel="alternate" hreflang="en-US" href="{{ URL::current() }}" />
<link rel="shortcut icon" type="image/png" href="{{ URL::current() }}" />

<style>
    .preserveLines {
        white-space: pre-wrap;
    }

</style>
@endsection

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Post</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Post Detail</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="{{$post->cover}}" alt="" class="img-fluid">
                        </div>

                        <h1 class="entry-title">
                            <a href="/post/{{$post->slug}}">{{$post->title}}</a>
                        </h1>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/post/{{$post->slug}}">{{ $post->user->username }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="/post/{{$post->slug}}"><time datetime="{{$post->created_at->format('Y-m-d')}}">{{ $post->created_at->format('d F Y') }}</time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-eye"></i> <a href="/post/{{$post->slug}}">{{$post->view_count}} Reads</a></li>
                            </ul>
                        </div>

                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6641141866403336" crossorigin="anonymous"></script>
                        <ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-6641141866403336" data-ad-slot="4286197238"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});

                        </script>

                        <div class="entry-content">
                            {!!$post->desc!!}
                        </div>

                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="/blog?category={{$post->category->slug}}">{{$post->category->name}}</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                @foreach($post->tags as $key => $tag)
                                <li><a href="/blog?tag={{$tag->slug}}">{{$tag->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                    </article><!-- End blog entry -->

                    {{-- <div class="blog-author d-flex align-items-center">
                        <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
                        <div>
                            <h4>Jane Smith</h4>
                            <div class="social-links">
                                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                            </div>
                            <p>
                                Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                            </p>
                        </div>
                    </div><!-- End blog author bio --> --}}

                    {{-- <div class="blog-comments">

                        <h4 class="comments-count">8 Comments</h4>

                        <div id="comment-1" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                                        Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                                    </p>
                                </div>
                            </div>
                        </div><!-- End comment #1 -->

                        <div id="comment-2" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                                    </p>
                                </div>
                            </div>

                            <div id="comment-reply-1" class="comment comment-reply">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                                    <div>
                                        <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan, 2020</time>
                                        <p>
                                            Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                                            Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                                            Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                                        </p>
                                    </div>
                                </div>

                                <div id="comment-reply-2" class="comment comment-reply">
                                    <div class="d-flex">
                                        <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                                        <div>
                                            <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                            <time datetime="2020-01-01">01 Jan, 2020</time>
                                            <p>
                                                Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                                            </p>
                                        </div>
                                    </div>

                                </div><!-- End comment reply #2-->

                            </div><!-- End comment reply #1-->

                        </div><!-- End comment #2-->

                        <div id="comment-3" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-5.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at.
                                        Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.
                                    </p>
                                </div>
                            </div>

                        </div><!-- End comment #3 -->

                        <div id="comment-4" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                                    </p>
                                </div>
                            </div>

                        </div><!-- End comment #4 -->

                        <div class="reply-form">
                            <h4>Leave a Reply</h4>
                            <p>Your email address will not be published. Required fields are marked * </p>
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Your Name*">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="text" class="form-control" placeholder="Your Email*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <input name="website" type="text" class="form-control" placeholder="Your Website">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>

                            </form>

                        </div>

                    </div><!-- End blog comments --> --}}

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
