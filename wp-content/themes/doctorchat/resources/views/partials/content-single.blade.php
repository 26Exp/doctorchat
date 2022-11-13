<div class="max-w-3xl mx-auto my-7">
  <article @php(post_class('prose prose-xl prose-doctorchat-mint py-7'))>
    <header>
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
