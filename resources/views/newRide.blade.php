<x-layout>
    <div class="form-holder">
        <h1>Postavi vožnju</h1>
        <form 
            method="POST"
            action="{{route('createRide')}}"
            class="create-ride-form"
        >
            @csrf
            <x-form-field
                :caption="'Od:'"
                :name="'starting_point'"
            />
            <x-form-field
                :caption="'Do:'"
                :name="'destination'"
            />
            <x-form-field
                :caption="'Raspoloživih mesta'"
                :name="'passenger_space'"
            />

            <button type="submit">
                Postavi vožnju
            </button>
        </form>
    </div>
</x-layout>