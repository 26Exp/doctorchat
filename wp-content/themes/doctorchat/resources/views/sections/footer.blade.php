      <div class="dc-container py-8 lg:py-28">
        <div class="space-y-12 lg:flex lg:justify-between lg:space-y-0 lg:space-x-16 lg:px-11">
          <a href="/">
            <picture>
              <source media="(min-width: 1024px)" srcset="@asset('svgs/logo-vertical.svg')" />
              <img src="@asset('svgs/logo.svg')" alt="DoctorChat Logo" />
            </picture>
          </a>
          <div class="flex justify-between space-x-7 text-white lg:space-x-12 xl:space-x-28">
            <div class="max-w-xs space-y-4">
              @php(dynamic_sidebar('footer-one'))
              <h4 class="pb-4 text-3xl font-bold lg:text-4xl">Contacte</h4>
              <div>
                <h5 class="font-bold lg:text-lg">Adresa Juridică:</h5>
                <p>Bucureşti, sector 6, Splaiul Independenţei nr. 273, corp 3, etaj 3</p>
              </div>
              <div>
                <h5 class="font-bold lg:text-lg">Telefon:</h5>
                <p>+37378272887</p>
              </div>
              <div>
                <h5 class="font-bold lg:text-lg">Email:</h5>
                <p>info@doctorchat.md</p>
              </div>
              <div>
                <h5 class="font-bold lg:text-lg">Urmărește-ne și pe alte rețele:</h5>
              </div>
            </div>
            <div class="space-y-4">
              <div class="pb-4">
                <h4 class="text-3xl font-bold lg:text-4xl">NewsLetter</h4>
                <p>abonează-te ca să fii informat</p>
              </div>
              <div>
                <h5 class="font-bold lg:text-lg">Utile:</h5>
                <ul class="list-disc pl-5">
                  <li>
                    <a href="#">ANCP</a>
                  </li>
                  <li>
                    <a href="#">Termeni și condiții</a>
                  </li>
                  <li>
                    <a href="#">Politica de confidențialitate</a>
                  </li>
                  <li>
                    <a href="#">Pentru Doctori</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex items-center justify-center px-5 py-9 md:py-0 md:pb-2">
        <picture>
          <source media="(min-width: 768px)" srcset="@asset('svgs/separator-white.svg')" />
          <img src="@asset('svgs/separator-white-mobile.svg')" alt="DoctorChat Logo" />
        </picture>
      </div>
</footer>
