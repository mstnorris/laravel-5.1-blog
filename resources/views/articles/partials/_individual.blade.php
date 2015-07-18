<article class="paper">
    <div class="row">
        <div class="col-xs-12">


            <h2>{{ $article->title }}</h2>

            @include('articles.partials._article-body')

            <p>Published {{ $article->published_at->diffForHumans() }} by {{ $article->author->name }}</p>


        </div>
    </div>
</article>