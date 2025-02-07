<div class="side-bar-con">
    <div class="side-bar-column">
        <!-- WIDGET -->
        <div class="widget about-widget">
            <h2 class="widget-title">
                Обо мне <span class="hor-center main-color-bg"></span>
            </h2>
            <div class="widget-content">
                <div class="about-img-link">
                    <img src="img/about-img.jpg" alt="about-me">
                </div>
                <div class="aw-capture">
                    <h2>TEMKA</h2>
                    <p>Велосипедист, программист, путешественник.</p>

                    <div class="main-color">
                        <a href="#" class="bbo-btn">Хочу еще!</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- WIDGET -->
        <div class="widget latest-posts-widget">
            <h2 class="widget-title">
                Популярные посты <span class="hor-center main-color-bg"></span>
            </h2>
            <div class="widget-content">
                <ul class="ws-post-list">
                    @foreach($popular as $ppost)
                    <li class="main-color">
                        <a href="{{ route("post.show", $ppost->id) }}" class="post-sm-thmb">
                            <img src="{{ 'storage/' . $ppost->image_preview }}" alt="thumbnails-2">
                        </a>
                        <div class="post-thumb-det">
                            <a href="{{ route("post.show", $ppost->id) }}" class="effect">{{ $ppost->title }}</a>
                            <span><time datetime="2018-08-08">Aout 08, 2018</time></span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- / WIDGET -->
        <!-- WIDGET -->
        <div class="widget follow-widget">
            <h2 class="widget-title">
                Категории <span class="hor-center main-color-bg"></span>
            </h2>
            <div class="widget-content">
                <ul class="ws-list">
                    <li class="main-color"><a href="#">Велосипеды <span>(16)</span></a></li>
                    <li class="main-color"><a href="#">Путешествия <span>(31)</span></a></li>
                </ul>
            </div>
        </div>
        <!-- / WIDGET -->
    </div>
</div>
