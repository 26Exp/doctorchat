{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  <!-- Hero Section Start -->
  <section
    class="relative h-screen bg-[url('../src/resources/images/hero-section.jpg')] bg-cover bg-center bg-no-repeat pt-[10vh]"
  >
    <div class="pointer-events-none absolute top-0 left-0 h-full w-full bg-black/30"></div>
    <div class="dc-container relative z-10 h-full w-full">
      <div class="flex h-full w-full flex-col justify-center">
        <header class="mb-7 lg:mb-12">
          <h1 class="mb-3 text-6xl font-bold uppercase text-white lg:text-8xl">
            Clinica virtuală
          </h1>
          <h3 class="text-4xl font-bold text-doctorchat-mint lg:text-6xl">
            Consultații online de la tine de acasa
          </h3>
        </header>
        <main>
          <div class="max-w-4xl pl-5 lg:pl-8">
            <ul class="list-disc space-y-1 text-lg font-normal text-white lg:text-4xl">
              <li>Specialiști medicali calificați din Republica Moldova la un click distanță.</li>
              <li>Doctori cu experiență clinică, științifică și didactică.</li>
              <li>Oferă asistență online pentru tratamente de rutină și sfaturi medicale.</li>
            </ul>
          </div>
        </main>
        <footer class="mt-14 flex justify-center lg:mt-16 lg:justify-start">
          <button class="btn btn-default">Solicită o consultație!</button>
        </footer>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->

  <!-- Highlights Section Start -->
  <section class="py-1 lg:py-5">
    <div class="dc-container">
      <div
        class="flex flex-col items-center space-x-0 space-y-5 lg:flex-row lg:items-stretch lg:space-y-0 lg:space-x-8 xl:space-x-11"
      >
        <div class="highlights-block">
          <img class="icon" src="./resources/svgs/check.svg" alt="Doctori verificați" />
          <h3 class="title">Doctori verificați</h3>
          <p class="description">
            DoctorChat selectează cu atenție specialiștii publicați pe aplicație. Fiecare doctor
            este acceptat în baza informației profesionale, experiență și expertiză. Plus se iau
            în considerare și calificative ale altor utilizatori.
          </p>
        </div>
        <div class="highlights-block">
          <img class="icon" src="./resources/svgs/24h.svg" alt="Rapid și ușor" />
          <h3 class="title">Rapid și ușor</h3>
          <p class="description">
            În decurs de 24h din momentul accesării. Fără drum, fără stat în rând. Direct de la
            telefon sau computer. Iar uneori când ești departe de casă și un doctor bun devine
            greu de accesat, DoctorChat este soluția. Și vom continua să optimizăm pentru
            confortul tău.
          </p>
        </div>
        <div class="highlights-block">
          <img class="icon" src="./resources/svgs/avatar.svg" alt="Confidențial și anonim" />
          <h3 class="title">Confidențial și anonim</h3>
          <p class="description">
            DoctorChat garantează confidențialitatea consultațiilor video de pe platformă. Tot ce
            se discută rămâne doar între tine și doctor. Iar datele tale personale vor fi
            anonimizate și securizate
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Highlights Section End -->

  <!-- Separator Start -->
  <div class="flex items-center justify-center px-2 py-14 md:py-28">
    <picture>
      <source media="(min-width: 768px)" srcset="./resources/svgs/section-separator.svg" />
      <img src="./resources/svgs/section-separator-mobile.svg" alt="DoctorChat Logo" />
    </picture>
  </div>
  <!-- Separator End -->

  <!-- How it works Section Start -->
  <section class="pb-14 pt-1 lg:pb-36 lg:pt-5">
    <div class="dc-container">
      <header>
        <h2 class="section-title mb-12 md:mb-24 lg:mb-40">Cum funcționează?</h2>
      </header>
      <main class="how-works-section">
        <div class="how-works-block">
          <div class="caption">
            <h4 class="title">1. Înregistrează-te</h4>
            <p class="description">
              Crează un cont personal folosind butonul de mai sus cu minimul de date pentru
              autentificare. Toate datele cu caracter personal sunt securizate, așa că fii pe
              pace, poți avea încredere în platformă!
            </p>
          </div>
          <div class="preview">
            <img src="./resources/images/how-works-1.png" alt="Înregistrează-te" />
          </div>
        </div>
        <div class="how-works-block">
          <div class="caption">
            <h4 class="title">2. Selectează un doctor</h4>
            <p class="description">
              Din lista specialiștilor disponibili, selectați doctorul în dependență de problema
              dvs. de sănătate.
            </p>
          </div>
          <div class="preview">
            <img src="./resources/images/how-works-2.png" alt="Înregistrează-te" />
          </div>
        </div>
        <div class="how-works-block">
          <div class="caption">
            <h4 class="title">3. Descrie problema</h4>
            <ul class="description list-disc pl-5 lg:pl-8">
              <li>
                Alegeți modalitate consultației de care doriți să beneficiați (chat sau video).
              </li>
              <li>Explicați problema în detalii și atașați investigații, imagini/video, etc.</li>
            </ul>
          </div>
          <div class="preview">
            <img src="./resources/images/how-works-3.png" alt="Înregistrează-te" />
          </div>
        </div>
        <div class="how-works-block">
          <div class="caption">
            <h4 class="title">4. Îndeplinește ancheta</h4>
            <p class="description">
              Această informație va permite doctorului să vă ofere un sfat competent ținând cont
              și de istoricul stării dvs. de sănătate.
            </p>
          </div>
          <div class="preview">
            <img src="./resources/images/how-works-1.png" alt="Înregistrează-te" />
          </div>
        </div>
        <div class="how-works-block">
          <div class="caption">
            <h4 class="title">5. Achită și obține consultația</h4>
            <p class="description">
              Confirmarea plății o primiți pe email-ul cu care vă înregistrați. La fel pe email
              primiți și notificările privind inițierea chat-ului cu doctorul.
            </p>
          </div>
          <div class="preview">
            <img src="./resources/images/how-works-5.png" alt="Înregistrează-te" />
          </div>
        </div>
      </main>
      <footer class="mt-12 flex justify-center lg:mt-36">
        <button class="btn btn-default">Găsește doctorul aici!</button>
      </footer>
    </div>
  </section>
  <!-- How it works Section End -->

  <!-- Banner Start -->
  <section
    class="banner relative bg-[url('../src/resources/images/banner.jpg')] bg-cover bg-center bg-no-repeat"
  >
    <div
      class="pointer-events-none absolute top-0 left-0 h-full w-full bg-gradient-to-r from-black/60"
    ></div>
    <div class="dc-container h-full">
      <div class="relative z-10 flex h-full flex-col items-start justify-center py-28 px-4">
        <header>
          <h2 class="mb-4 text-2xl font-bold text-white md:mb-8 md:text-4xl">Fii sănătos!</h2>
        </header>
        <main>
          <p class="max-w-[610px] text-lg text-white md:text-2xl">
            DoctorChat este aici cu o armată de medici buni și soluții medicale la un click
            distanță. Menține starea ta de bine oriunde a-i fi! Sănătatea este unul din cele mai
            importante resurse proprii pentru o viață plăcută. Alege să fii asistat în procesele
            tale de optimizare a stării de sănătate.
            <a class="font-bold" href="#">Alege DoctorChat!</a>
          </p>
        </main>
      </div>
    </div>
  </section>
  <!-- Banner End -->

  <!-- Testiomians Start -->
  <section class="py-14 pb-24 lg:py-36">
    <div class="dc-container">
      <header>
        <h2 class="section-title mb-10 lg:mb-16">Ce zic clienții despre doctorii noștri</h2>
      </header>
      <main>
        <div class="relative">
          <div id="testimonials" class="swiper testimonials-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonials-slide">
                  <h3 class="title">Victoria Brocovschii</h3>
                  <p class="description">
                    Urmeaza sa primesc tratamentul, sper sa fie eficient. Multumesc
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonials-slide">
                  <h3 class="title">Andrian Chiriac</h3>
                  <p class="description">
                    Consultația online a fost la nivel înalt. Domnul doctor a fost explicit și mia
                    oferit răspunsurile într-un timp scurt . Mulțumesc mult pentru profesionalism.
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonials-slide">
                  <h3 class="title">Ala Siric</h3>
                  <p class="description">
                    Foarte mulțumită. Doamna doctor profesionista. Recomand
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonials-slide">
                  <h3 class="title">Andrian Chiriac</h3>
                  <p class="description">
                    Consultația online a fost la nivel înalt. Domnul doctor a fost explicit și mia
                    oferit răspunsurile într-un timp scurt . Mulțumesc mult pentru profesionalism.
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonials-slide">
                  <h3 class="title">Ala Siric</h3>
                  <p class="description">
                    Foarte mulțumită. Doamna doctor profesionista. Recomand
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-button-prev">
              <img src="./resources/svgs/arrow-left.svg" alt="Previous Slide" />
            </div>
            <div class="swiper-button-next">
              <img src="./resources/svgs/arrow-right.svg" alt="Next Slide" />
            </div>
          </div>
        </div>
      </main>
    </div>
  </section>
  <!-- Testiomians End -->

  <!-- Banner Start -->
  <section class="banner banner-with-bg relative bg-[#92D4D2]/50 bg-cover bg-center bg-no-repeat">
    <div class="dc-container h-full">
      <div
        class="flex h-full flex-col items-start justify-center py-28 px-4 md:items-center md:text-center"
      >
        <header>
          <h2 class="mb-9 text-4xl font-bold text-doctorchat-red md:mb-8 md:text-7xl">
            Informat înseamnă echipat.
          </h2>
        </header>
        <main>
          <p class="mx-auto max-w-3xl text-doctorchat-gray md:text-2xl">
            Citește despre cele mai actuale probleme ale sezonului. Află cauze ca să știi cum să
            te protejezi. Cunoaște remedii pentru situații simple și foarte incipiente. Cunoaște
            despre simptome ca să știi când e momentul potrivit ca să ceri ajutor. Ai grijă de
            sănătatea tea
          </p>
        </main>
      </div>
    </div>
  </section>
  <!-- Banner End -->

  <!-- Blogs Start -->
  <section>
    <div class="blogs-list">
      <article class="blog">
        <div class="caption">
          <a href="#">
            <h3 class="title">Cinci sfaturi pentru a vă menține sănătatea pe timp de toamnă.</h3>
          </a>
          <p class="description">
            Afară e toamnă. Este momentul propice pentru răspândirea virușilor și răcelilor. Iată
            5 sfaturi cum poate fi menținută sănătatea toamna.
          </p>
          <button class="btn btn-small">Află mai mult</button>
        </div>
        <div class="preview">
          <img src="./resources/images/blog-1.jpg" alt="Blog 1" />
        </div>
      </article>
      <article class="blog">
        <div class="caption">
          <a href="#">
            <h3 class="title">Cele mai frecvente afecțiuni de toamnă la copii.</h3>
          </a>
          <p class="description">
            Mulți părinți își fac griji în legătură cu bolile de sezon atunci când cei mici intră
            în contact cu virușii și bacteriile care declanșează cele mai frecvente afecțiuni de
            sezon. Din fericire, multe dintre acestea pot fi prevenite și tratate cu ușurință.
          </p>
          <button class="btn btn-small">Află mai mult</button>
        </div>
        <div class="preview">
          <img src="./resources/images/blog-2.jpg" alt="Blog 1" />
        </div>
      </article>
      <article class="blog">
        <div class="caption">
          <a href="#">
            <h3 class="title">5 Cele mai comune boli ale toamnei.</h3>
          </a>
          <p class="description">
            Toamna aduce cu sine fluctuații de temperatură și umiditate dar și schimbarea
            presiunii atmosferice. Conform cercetătorilor, presiunea atmosferică poate influența
            activitatea mentală umană, cauzand schimbări semnificative la nivelul atenției și
            memoriei pe termen scurt.
          </p>
          <button class="btn btn-small">Află mai mult</button>
        </div>
        <div class="preview">
          <img src="./resources/images/blog-3.jpg" alt="Blog 1" />
        </div>
      </article>
    </div>
  </section>
  <!-- Blogs End -->

  <!-- Separator Start -->
  <div class="flex items-center justify-center px-2 py-14 md:py-28">
    <picture>
      <source media="(min-width: 768px)" srcset="./resources/svgs/section-separator.svg" />
      <img src="./resources/svgs/section-separator-mobile.svg" alt="DoctorChat Logo" />
    </picture>
  </div>
  <!-- Separator End -->
@endsection