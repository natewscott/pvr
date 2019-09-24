<header>
    <a href="{{ route('home')}} " class="logo o-link" id="brand">
      <img src="img/misc/PVR - Lines - White.svg" alt="Paris Valley Ranch Logo" title="Paris Valley Ranch Logo">
    </a>
    <nav class="c-top-nav o-container t-slideH">
        <a href="#" class="c-mobile-navlist-trigger nav-right o-link">&#9776;</a>
        <ul class="c-navlist">
            <li class="c-navlist__item">
                <a href="{{ route('home')}} " class="c-navlist__link o-link">Home</a>
            </li>
            <li class="c-navlist__item">
                <a href="#" class="c-navlist__link o-link has-dd">Accommodations</a>
                <ul class="c-dropdown">
                    <li class="c-dropdown__item">
                        <a href="{{ route('main house')}} " class="c-dropdown__link o-link">Main House</a>
                    </li>
                    <li class="c-dropdown__item">
                        <a href="{{ route('bunk_house')}}" class="c-dropdown__link o-link">Bunk House</a>
                    </li>
                    <li class="c-dropdown__item">
                        <a href="{{ route('party pad')}}" class="c-dropdown__link o-link">Party Pad</a>
                    </li>
                </ul>
            </li>
            <li class="c-navlist__item">
                <a href="#" class="c-navlist__link o-link has-dd">Ranch Activities</a>
                <ul class="c-navlist__dropdown c-dropdown">
                    <li class="c-dropdown__item">
                        <a href="{{ route('hunting')}} " class="c-dropdown__link o-link">Hunting</a>
                    </li>
                    <li class="c-dropdown__item">
                        <a href="{{ route('riding')}} " class="c-dropdown__link o-link">Riding</a>
                    </li>
                    <li class="c-dropdown__item">
                        <a href="{{ route('shooting')}} " class="c-dropdown__link o-link">Shooting Range</a>
                    </li>
                </ul>
            </li>
            <li class="c-navlist__item">
                <a href="{{ route('about')}} " class="c-navlist__link o-link">About</a>
            </li>
            <li class="c-navlist__item">
                <a href="{{ route('info')}} " class="c-navlist__link o-link">Ranch Info</a>
            </li>
            <li class="c-navlist__item">
                <a href="{{ route('contact')}} " class="c-navlist__link o-link">Contact</a>
            </li>
        </ul>
    </nav>
</header>
