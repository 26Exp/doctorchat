@extends('layouts.app')

@section('content')
  <div class="max-w-4xl mx-auto my-5">
    <article @php(post_class('prose mx-auto px-5 prose-doctorchat-mint md:px-0 md:prose-xl'))>
      <header>
        <h1 class="entry-title">{!! get_the_title() !!}</h1>
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

@endsection
