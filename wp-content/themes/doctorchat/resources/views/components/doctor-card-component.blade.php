<a href="{{ $permalink }}">
  <article class="doctor-card">
    <div class="doctor-card-preview">
      <img src="{{ $avatar }}" alt="{{ $name }}" />
    </div>
    <div class="doctor-caption">
      <h2 class="doctor-name">{{ $name }}</h2>
      <h3 class="doctor-category">{{ $speciality }}</h3>
      <div class="doctor-meta">
        <div class="doctor-meta-item">
          <span>
            <img src="@asset('svgs/message.svg')" alt="message price"/>
          </span>
          <span>{{ $priceChat }} {{ get_field('currency', 'options') }}</span>
        </div>
        <div class="doctor-meta-item">
          <span>
            <img src="@asset('svgs/video.svg')" alt="video price"/>
          </span>
          <span>{{ $priceVideo }} {{ get_field('currency', 'options') }}</span>
        </div>
      </div>
    </div>
  </article>
</a>
