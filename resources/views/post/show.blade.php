@extends('layouts.main')

@section('content')
    <div class="blogs-wrapper">
        <div class="blog-list-con">
            <!-- item -->
            <article class="post-standard">
                <div class="post-content">
                    <div class="post-standard-header">
                        <div class="s-p-categories main-color">
                            <a href="#">{{ $post->category->title }}</a>
                        </div>
                        <h1 class="s-post-title effect">
                            {{ $post->title }}
                        </h1>
                        <div class="s-meta-date">
                            <span>{{ $date->format("d/m/Y") }}</span>
                        </div>
                    </div>
                    <div class="post-standard-media">
                        <figure class="s-post-img">
                                <img src="{{ "storage/" . $post->image }}" alt="post-1">
                        </figure>
                    </div>
                    <div class="post-standard-footer">
                        {!! $post->content !!}
                        <ul class="sg-post-tags">
                            <li class="main-color"><a href="#">Travel</a></li>
                            <li class="main-color"><a href="#">Women</a></li>
                            <li class="main-color"><a href="#">Blogger</a></li>
                            <li class="main-color"><a href="#">Adventure</a></li>
                        </ul>

                        <div class="s-post-last">
                            <div class="s-post-author">
                                <span>
                                    <i class="fa fa-comments"></i>
                                    {{ $post->comments->count() }}
                                </span>
                                <span>
                                    <i class="fa fa-eye"></i>
                                    1001
                                </span>
                            </div>
                            <div class="s-post-share">
                                <ul>
                                    <li class="main-color">
                                        <a href="#" class="effect"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="main-color">
                                        <a href="#" class="effect"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="main-color">
                                        <a href="#" class="effect"><i class="fa fa-pinterest-p"></i></a>
                                    </li>
                                    <li class="main-color">
                                        <a href="#" class="effect"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li class="main-color">
                                        <a href="#" class="effect"><i class="fa fa-vine"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <!-- / item -->
        </div>
        <!-- POSTS Navigation -->
        <nav class="sg-post-navigation">
            <h2 class="sr-only">Post navigation</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="prev-post main-color">
                        <a href="#">
                                                        <span class="nav-thumb">
                                                            <img src="img/blog-post-3.jpg" alt="nav-img-1">
                                                        </span>
                            <span class="nav-post-meta">
                                                            <span>PREVIOUS</span>
                                                            <span class="effect nav-m-title">The Stunning Vistas of Juneau</span>
                                                        </span>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="next-post main-color">
                        <a href="#">
                                                        <span class="nav-post-meta">
                                                            <span>NEXT</span>
                                                            <span class="effect nav-m-title">A Post-Modern Design Retrospective</span>
                                                        </span>
                            <span class="nav-thumb">
                                                            <img src="img/blog-post-6.jpg" alt="nav-img-2">
                                                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- / pOSTS Navigation -->
        <!-- RELATED POSTS -->
        <div class="related-posts">
            <h2> Смотрите также...</h2>
            <div class="row">
                @foreach($related as $rel)
                    <div class="col-xs-12 col-sm-4">
                        <div class="related-item">
                            <a href="{{ route("post.show", $rel->id) }}" class="rp-thumb">
                                <img src="{{ asset("storage/" . $rel->image) }}" alt="rel-img-1">
                            </a>
                            <a href="{{ route("post.show", $rel->id) }}" class="rp-title">
                                <h3>{{ $rel->title }}</h3>
                            </a>
                            <span class="rp-date">JULY 17, 2018</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- / RELATED POSTS -->
    </div>
@endsection
