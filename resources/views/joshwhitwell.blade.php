<x-app-layout
  :include-navigation="false"
  :include-progress-bar="true"
  class="font-serif"
>
  <x-slot name="header">
    <div
      class="align-center mx-auto flex h-screen max-h-screen w-full max-w-7xl justify-center py-6 px-4 sm:px-6 lg:px-8"
    >
      <a
        class="align-center flex max-h-full max-w-full cursor-default justify-center"
        href="{{ auth()->check() ? url('/dashboard') : route('login') }}"
      >
        <x-logo
          :use-hover="true"
          :color="$globalColorTheme"
          class="max-h-full max-w-full"
        />
      </a>
    </div>
  </x-slot>

  <section>
    <h1 class="page-title">
      Josh Whitwell<br />
      <span class="page-title__subtext">Web Developer</span>
    </h1>
  </section>
  <section
    class="section section--work"
    id="work"
  >
    <h2 class="section-title">Work</h2>
    <ul class="section-list">
      <li class="list-item">
        <div class="list-item__text">
          Web Developer<br />Journey Group
        </div>
        <div class="list-item__subtext">2021 – Present</div>
      </li>
      <li class="list-item">
        <div class="list-item__text">
          Program Manager<br />Mind &amp; Life Institute
        </div>
        <div class="list-item__subtext">2018 – 2020</div>
      </li>
    </ul>
  </section>
  <section
    class="section"
    id="education"
  >
    <h2 class="section-title">Education</h2>
    <ul class="section-list">
      <li class="list-item">
        <div class="list-item__text">
          University of California, Berkeley<br />Master of
          Arts, Asian
          Studies
        </div>
        <div class="list-item__subtext">2016 – 2018</div>
      </li>
      <li class="list-item">
        <div class="list-item__text">
          University of Virginia<br />Bachelor of Arts,
          Religious Studies
        </div>
        <div class="list-item__subtext">2012 – 2016</div>
      </li>
    </ul>
  </section>
  <section
    class="section"
    id="contact"
  >
    <h2 class="section-title">Contact</h2>
    <ul class="section-list">
      <li class="list-item">
        <div class="list-item__subtext">
          <a href="mailto:josh.whitwell@gmail.com">Email</a>
        </div>
        <div class="list-item__subtext">
          <a href="https://github.com/joshwhitwell">Github</a>
        </div>
        <div class="list-item__subtext">
          <a
            href="https://www.linkedin.com/in/joshuawhitwell/">LinkedIn</a>
        </div>
      </li>
    </ul>
  </section>

  <x-slot name="footer">
    &copy; {{ date('Y') }} Josh Whitwell
  </x-slot>
</x-app-layout>
