<footer class="bg-[#92D4D2]">
  <div class="dc-container py-8 lg:py-28">
    <div class="space-y-12 lg:flex lg:justify-between lg:space-y-0 lg:space-x-16 lg:px-11">
      <a href="/">
        <picture>
          <source media="(min-width: 1024px)" srcset="@asset('svgs/logo-vertical.svg')"/>
          <img src="@asset('svgs/logo.svg')" alt="DoctorChat Logo"/>
        </picture>
      </a>
      <div class="flex justify-between space-x-7 text-white lg:space-x-12 xl:space-x-28">
        <div class="max-w-xs space-y-4">
          @php(dynamic_sidebar('footer-one'))
        </div>
        <div class="space-y-4">
          @php(dynamic_sidebar('footer-two'))
          <div>
            @php(wp_nav_menu(['theme_location' => 'footer-menu', 'menu_class' => 'list-disc pl-5']))
          </div>
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
