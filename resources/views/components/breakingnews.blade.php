<!-- Breaking News Area -->
<div class="col-12 col-md-6 mb-2">
    <div class="breaking-news-area">
        <h5 class="breaking-news-title">Ultimas Notícias</h5>
        <div id="breakingNewsTicker" class="ticker">
            <ul>
                @foreach($ultimasNoticias as $ultima)
                <li>
                    <a href="#">{{$ultima->titulo}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>