<x-layout>
    <section 
        class="rides" 
    >
        <h1 class="section-heading--main">
            Vožnje
        </h1>
        <div class="rides__filter-holder">
            
        </div>
        <div class="rides-holder">
            @foreach($rides as $ride)
                <article class="ride-holder">
                    <div class="container">
                        <h2 class="ride-caption">
                            <span>
                                {{$ride['starting_point']}}
                            </span>
                            &rAarr;
                            <span>
                                {{$ride['destination']}} 
                            </span>
                        </h2>
                        <p>Polazak:</p>
                        <time style="display: block;font-size:20px;">
                            {{ $ride['departure_time'] }}
                        </time>
        
                        <p>Cena po putniku:</p>
                        <span style="display: block; font-size: 20px;">
                            {{ number_format($ride['price_per_passenger'], 2, ',', '.')  }} RSD
                        </span>
                        
                        <p>
                            Raspoloživih mesta:
                        </p>
                        <p style="font-size:20px;">
                            {{ $ride['passenger_space'] }}
                        </p>
        
                        <div class="ride-guest-options">
                            <a 
                                href="{{route('getRide', ["id" => $ride['id'] ])}}"
                                class="primary-button"    
                            >
                                Pogledaj
                            </a>
                            <a 
                                href="{{route('editRide', ["id" => $ride['id'] ])}}"
                                class="secondary-button"    
                            >
                                Ažuriraj
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        {{-- <div>
            {{ $rides->links() }}
        </div> --}}
    </section>
</x-layout>