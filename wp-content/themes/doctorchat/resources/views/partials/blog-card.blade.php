<a class="actual-blog @if($i == 1) large @endif " href="{{ the_permalink() }}">
  <article>
    <div class="actual-blog-preview">
      <img src="{{ get_the_post_thumbnail_url(get_the_ID(), 'full') }}" alt="{{ get_the_title() }}" />
    </div>
    <div class="actual-blog-caption">
      <span class="actual-blog-category">{{ get_the_category()[0]->name }}</span>
      <h3 class="actual-blog-title">
        {{ get_the_title() }}
      </h3>
      <div class="actual-blog-meta">
        @php
        $doctor = get_posts([
                'post_type' => 'doctors',
                'meta_query' => [
                    [
                        'key' => 'doctor',
                        'value' => get_the_author_meta('ID'),
                        'compare' => '=',
                    ],
                ],
            ]);
        @endphp

        <span>{{ $doctor[0]->post_title ?? '' }}</span>
        <span>{{ get_the_date('d M Y')}}</span>
      </div>
      <p class="actual-blog-description">
        @if($i == 1)
          {{ wp_trim_words( get_the_content(), 25, '...' ) }}
        @else
          {{ wp_trim_words( get_the_content(), 20, '...' ) }}
        @endif
      </p>
    </div>
  </article>
</a>
