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
                    @auth
                        @if(auth()->user()->id === $ride->user_id)
                            <form
                                method="POST"
                                action="{{route('deleteRide', ['id' => $ride->id])}}"
                            >
                                @csrf
                                @method('DELETE')
                                <button 
                                    type="submit"
                                    class="delete-button"    
                                >
                                    Obriši
                                </button>
                            </form>
                            <a 
                                href="{{route('editRide', ["id" => $ride['id'] ])}}"
                                class="secondary-button"    
                            >
                                Ažuriraj
                            </a>
                        @endif
                    @endauth
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

                        <p>Vozač:</p>
                        <a 
                            href="{{route('getUser', ['id' => $ride->user_id])}}"
                        >
                            {{ $ride->user->name }}
                        </a>

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