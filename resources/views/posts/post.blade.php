<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at->format('F jS , Y \@ g:i A') }}</p>
    {{ $post->body }}
</div>
<!-- /.blog-post -->