<x-layout>
    <div class="form-holder">
        <h1>Ažuriraj vožnju</h1>
        <form 
            method="POST"
            action="{{route('updateRide', ['id' => $ride->id])}}"
            class="create-ride-form"
        >
            @csrf
            @method('PUT')
            <x-form-field
                :caption="'Od:'"
                :name="'starting_point'"
                :value="$ride->starting_point"
            />
            <x-form-field
                :caption="'Do:'"
                :name="'destination'"
                :value="$ride->destination"
            />

            <x-form-field
                :caption="'Cena po putniku'"
                :name="'price_per_passenger'"
                :value="$ride->price_per_passenger"
            />

            <x-form-field
                :caption="'Raspoloživih mesta'"
                :name="'passenger_space'"
                :value="$ride->passenger_space"
            />

            <button type="submit">
                Ažuriraj vožnju
            </button>
        </form>
    </div>
</x-layout>