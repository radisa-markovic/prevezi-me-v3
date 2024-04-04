@once
    @php
        function isRouteActive($route)
        {
            return Route::current()->getName() === $route;
        }    
    @endphp
@endonce

@props(['route'])
<li class="navigation__item">
    <a 
        href="{{route($route)}}"
        class="navigation__link {{isRouteActive($route)? "active-route" : ""}}"
    >
        {{ $slot }}
    </a>
</li>