@props(['route'])
<li class="navigation__item">
    <a 
        href="{{route($route)}}"
        class="navigation__link {{Route::current()->getName() === $route? "active-route" : ""}}"
    >
        {{ $slot }}
    </a>
</li>