@extends('layouts.main')

@section('content')
    <div class="blogs-wrapper">
        <div class="blog-list-con">
            @foreach($posts as $post)
            <article class="post-standard">
                <div class="post-content">
                    <div class="post-standard-header">
                        <div class="s-p-categories main-color">
                            <a href="#">{{ $post->category->title }}</a>
                        </div>
                        <h2 class="s-post-title effect">
                            <a href="{{ route("post.show", $post->id) }}">{{ $post->title }}</a>
                        </h2>
                        <div class="s-meta-date">
                            <span>10/05/2018</span>
                        </div>
                    </div>
                    <div class="post-standard-media">
                        <figure class="s-post-img">
                            <a href="{{ route("post.show", $post->id) }}">
                                <img src="{{ "storage/" . $post->image }}" alt="post-1">
                            </a>
                        </figure>
                    </div>
                    <div class="post-standard-footer">
                        <p class="post-excerpt">{{ $post->description }}</p>

                        <div class="c-read-btn">
                            <a href="{{ route("post.show", $post->id) }}" class="bb-btn main-color-bg">Подробнее</a>
                        </div>

                        <div class="s-post-last">
                            <div class="s-post-author">
                                                <span>
                                                    <i class="fa fa-comments"></i>
                                                    10
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
            @endforeach
        </div>
        <div class="posts-pagination">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
