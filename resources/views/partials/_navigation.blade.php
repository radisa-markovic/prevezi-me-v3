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
        @guest
            <x-navigation-item
                :route="'loginPage'"
            >
                Prijavi se
            </x-navigation-item>
            <x-navigation-item
                :route="'registerPage'"
            >
                Napravi nalog
            </x-navigation-item>
        @endguest
        @auth    
            <x-navigation-item
                :route="'newRide'"
            >
                Postavi vožnju
            </x-navigation-item>
            <li class="navigation__item">
                <span>
                    {{ auth()->user()->name }}
                </span>
                <form
                    method="POST"
                    action="{{route('logout')}}"
                >
                    @csrf
                    <button type="submit">
                        Odjavi se
                    </button>
                </form>
            </li>
        @endauth
    </ul>
</nav>