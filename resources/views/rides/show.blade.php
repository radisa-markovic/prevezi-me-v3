<x-layout class="main-ride-container">
    {{-- <a href="{{route('editRide', ["id" => $ride['id'] ])}}">
        Ažuriraj
    </a>
    <time>
        Postavljeno: {{ $ride['created_at'] }}
    </time> --}}
    {{-- <form
        method="POST"
        action="{{route('deleteRide', ['id' => $ride->id])}}"
    >
        @csrf
        @method("DELETE")
        <button type="submit">
            Obriši
        </button>
    </form> --}}
    <div class="two-columns blackish-shadow">
        <div class="single-ride-cta">
            <h1 
                class="section-heading--main" 
                style="display: flex;flex-direction: column;text-align: center;"
            >
                <span>
                    {{$ride['starting_point']}} 
                </span>
                <span style="margin: auto;">
                    &dArr;
                </span>
                <span>
                    {{$ride['destination']}}
                </span>
            </h1>
            <time style="display: block;font-size:20px;text-align: center; margin-bottom: 15px;">
                {{ $ride['departure_time'] }}
            </time>

            <form
                action="{{route('reserveRide', ['rideID' => $ride->id])}}"
                method="POST"
                style="text-align: center;"
            >
                @csrf
                <button type="submit" class="primary-button" style="padding: 10px;">
                    Rezerviši vožnju
                </button>
            </form>
        </div>
        <div class="single-ride-description">
            <div class="ride-main--separator">
                <p style="font-size: 20px;">Cena po putniku:</p>
                <span style="display: block; font-size: 30px;color:white;">
                    {{ number_format($ride['price_per_passenger'], 2, ',', '.')  }} RSD
                </span>
            </div>
            
            <div class="ride-main--separator">
                <p style="font-size: 20px;">
                    Raspoloživih mesta:
                </p>
                <p style="font-size: 30px;color:white;">
                    {{ $ride['passenger_space'] }}
                </p>
            </div>
        </div>
    </div>

</x-layout>