<header>
  <section class="navigation">
    <article class="nav-container">
      <div class="brand">
        <a href="{{ route('home') }} ">
          <img src="img/misc/pvr-letters-logo.svg" alt="">
        </a>
      </div>
      <nav>
        <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
        <ul class="nav-list">
          <li>
            <a href="">Home</a>
          </li>
          <li>
            <a href="{{ route('history') }} ">About Us</a>
          </li>
          <li>
            <a href="#!">Accommodations</a>
            <ul class="nav-dropdown">
              <li>
                <a href="{{ route('main house')}} ">Main House</a>
              </li>
              <li>
                <a href="{{ route('bunk_house')}} ">Bunk House</a>
              </li>
              <li>
                <a href="{{ route('party pad')}} ">Party Pad</a>
              </li>
              {{-- <li>
                <a href="{{ route('ranch')}} ">Around the Ranch</a>
              </li> --}}
            </ul>
          </li>
          <li>
            <a href="#!">Ranch Activities</a>
            <ul class="nav-dropdown">
              <li>
                <a href="{{ route('shooting')}} ">Shooting Range</a>
              </li>
              <li>
                <a href="{{ route('bunk_house')}} ">Riding</a>
              </li>
              <li>
                <a href="{{ route('party pad')}} ">Hunting</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="{{ route('info')}} ">Ranch Info</a>
          </li>
          <li>
            <a href="{{ route('contact')}} ">Contact Us</a>
          </li>
        </ul>
      </nav>
    </article>
  </section>
</header>