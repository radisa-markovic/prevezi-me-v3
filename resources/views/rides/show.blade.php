<x-layout>
    <article>
        <a href="{{route('editRide', ["id" => $ride['id'] ])}}">
            Ažuriraj
        </a>
        <form
            method="POST"
            action="{{route('deleteRide', ['id' => $ride->id])}}"
        >
            @csrf
            @method("DELETE")
            <button type="submit">
                Obriši
            </button>
        </form>
        <h1>
            {{$ride['starting_point']}}&nbsp;:&nbsp;
            {{$ride['destination']}}
        </h1>
        <p>
            Raspoloživih mesta: {{ $ride['passenger_space']}}
        </p>
    </article>
</x-layout>