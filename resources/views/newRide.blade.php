<x-layout>
    <div class="form-holder">
        <h1>Postavi vožnju</h1>
        <form 
            method="POST"
            action="{{route('createRide')}}"
            class="create-ride-form"
        >
            <x-form-field
                :caption="'Od:'"
                :name="'rideFrom'"
            />
            <x-form-field
                :caption="'Do:'"
                :name="'rideTo'"
            />
            <x-form-field
                :caption="'Raspoloživih mesta'"
                :name="'capacity'"
            />

            <button type="submit">
                Postavi vožnju
            </button>
        </form>
    </div>
</x-layout>