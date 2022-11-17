<a href="{{ $permalink }}">
  <article class="doctor-card">
    <div class="doctor-card-preview">
      <img src="{{ $avatar }}" alt="{{ $name }}" />
    </div>
    <div class="doctor-caption">
      <h3 class="doctor-name">{{ $name }}</h3>
      <h6 class="doctor-category">{{ $speciality }}</h6>
      <div class="doctor-meta">
        <div class="doctor-meta-item">
          <span>
            <img src="@asset('svgs/message.svg')" />
          </span>
          <span>{{ $priceChat }} mdl</span>
        </div>
        <div class="doctor-meta-item">
          <span>
            <img src="@asset('svgs/video.svg')" />
          </span>
          <span>{{ $priceVideo }} mdl</span>
        </div>
      </div>
    </div>
  </article>
</a>
