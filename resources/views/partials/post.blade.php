<article>
  <header>
    <h2>{{ $post->title }}</h2>
  </header>
  <div class="content">
    {{ $post->content }}
  </div>
  <footer>
    <p>Posted {{ $post->created_at->diffForHumans() }}</p>
    <p><a href="{{ URL::route('viewPost', ['id' => $post->id])}}#comments">{{ $post->getNumCommentsStr() }}</a></p>
  </footer>
</article>
