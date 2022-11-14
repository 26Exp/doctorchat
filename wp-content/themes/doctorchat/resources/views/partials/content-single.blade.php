<div class="max-w-3xl mx-auto my-7">
  <article @php(post_class('prose prose-doctorchat-mint py-7 px-5 prose-doctorchat-mint md:prose-xl'))>
    <header>
      <img src="{{ get_the_post_thumbnail_url(get_the_ID(), 'full') }}" alt="{{ get_the_title() }}" />
      <h1 class="entry-title">
        {!! $title !!}
      </h1>

      @include('partials.entry-meta')
    </header>

    <div class="entry-content">
      @php(the_content())
    </div>

    <footer>
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>

    @php(comments_template())
  </article>
</div>
