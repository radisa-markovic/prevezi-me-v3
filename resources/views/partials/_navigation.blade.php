<nav>
    <ul class="navigation__list">
        <li style="margin-right: auto;">
            <a href="{{route('home')}}">
                <img src="{{asset('logo.svg')}}" alt=""/>
            </a>
        </li>
        <x-navigation-item
            :route="'home'"
        >
            Naslovna
        </x-navigation-item>
        <x-navigation-item
            :route="'rides'"
        >
            Nađi vožnju
        </x-navigation-item>
        <x-navigation-item
            :route="'newRide'"
        >
            Postavi vožnju
        </x-navigation-item>
    </ul>
</nav>