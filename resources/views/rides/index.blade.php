<x-layout>
    <section class="rides" style="display: grid;grid-template-columns:repeat(6, 1fr)">
        @foreach($rides as $ride)
            <article class="ride-holder">
                <a href="{{route('getRide', ["id" => $ride['id'] ])}}">
                    Pogledaj
                </a>
                <a href="{{route('editRide', ["id" => $ride['id'] ])}}">
                    Ažuriraj
                </a>
                <h2>
                    {{$ride['starting_point']}} : {{$ride['destination']}} 
                </h2>
                <p>
                    Raspoloživih mesta: {{ $ride['passenger_space'] }}
                </p>
            </article>
        @endforeach
    </section>
</x-layout>