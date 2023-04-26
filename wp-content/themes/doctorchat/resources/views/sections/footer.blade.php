<footer class="bg-doctorchat-turquoise">
  <div class="dc-container py-8 lg:py-28">
    <div class="space-y-12 lg:flex lg:justify-between lg:space-y-0 lg:space-x-16 lg:px-11">
      <a href="{{ home_url('/') }}">
        <picture>
          <source media="(min-width: 1024px)" srcset="@asset('svgs/logo-vertical.svg')"/>
          <img src="@asset('svgs/logo.svg')" alt="DoctorChat Logo"/>
        </picture>
      </a>
      <div class="flex justify-between space-x-7 text-white lg:space-x-12 xl:space-x-28">
        <div class="max-w-xs [&>div[class$='widget']]:space-y-4">
          @php(dynamic_sidebar('footer-one'))
          <div class="!mt-4 inline-grid grid-cols-3 gap-3 md:grid-cols-6 lg:!mt-6 ">
            <a href="{{ get_field('viber_url', 'options') }}" target="_blank">
              <div
                class="flex h-10 w-10 items-center justify-center rounded-full bg-white p-2">
                <img src="@asset('svgs/viber.svg')" alt="Viber"/>
              </div>
            </a>
            <a href="{{ get_field('whatsapp_url', 'options') }}" target="_blank">
              <div
                class="flex h-10 w-10 items-center justify-center rounded-full bg-white p-2"
              >
                <img src="@asset('svgs/whatsapp.svg')" alt="Whatsapp"/>
              </div>
            </a>
            <a href="{{ get_field('telegram_url', 'options') }}" target="_blank">
              <div
                class="flex h-10 w-10 items-center justify-center rounded-full bg-white p-2"
              >
                <img src="@asset('svgs/telegram.svg')" alt="Telegram"/>
              </div>
            </a>
            {{--  <a href="https://www.linkedin.com/company/doctorchat.md/" target="_blank">--}}
            {{--    <div--}}
            {{--      class="flex h-10 w-10 items-center justify-center rounded-full bg-white p-2"--}}
            {{--    >--}}
            {{--      <img src="@asset('svgs/linkedin-in.svg')" alt="Linkedin"/>--}}
            {{--    </div>--}}
            {{--  </a>--}}
            <a href="{{ get_field('facebook_url', 'options') }}" target="_blank">
              <div
                class="flex h-10 w-10 items-center justify-center rounded-full bg-white p-3"
              >
                <img src="@asset('svgs/facebook-f.svg')" alt="Facebook"/>
              </div>
            </a>
            <a href="{{ get_field('instagram_url', 'options') }}" target="_blank">
              <div
                class="flex h-10 w-10 items-center justify-center rounded-full bg-white p-2"
              >
                <img src="@asset('svgs/instagram.svg')" alt="Instagram"/>
              </div>
            </a>
          </div>

        </div>
        <div class="space-y-4">
          @php(dynamic_sidebar('footer-two'))
          @php(wp_nav_menu(['theme_location' => 'footer-menu', 'menu_class' => 'list-disc pl-5 !-mt-4']))
        </div>
      </div>
    </div>
  </div>
  <div class="flex items-center justify-center px-5 py-9 md:py-0 md:pb-2">
    <picture>
      <source media="(min-width: 768px)" srcset="@asset('svgs/separator-white.svg')"/>
      <img src="@asset('svgs/separator-white-mobile.svg')" alt="DoctorChat Logo"/>
    </picture>
  </div>
</footer>
