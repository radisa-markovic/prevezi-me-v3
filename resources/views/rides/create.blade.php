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
            <x-form-field
                :caption="'Cena po putniku'"
                :name="'price_per_passenger'"
            />

            <label>Datum polaska:</label>
            <input 
                type="date" 
                name="departure_time" 
                id="departure_time"
            />
            <p>Sat i minut polaska:</p>
            <div style="display: flex;gap:30px;">
                <input 
                    type="number" 
                    name="departureHour" 
                    id="departureHour"
                    style="width:50%;"
                />
                <span style="font-size:25px;font-weight:700;">
                    :
                </span>
                <input 
                    type="number" 
                    name="departureMinute" 
                    id="departureMinute"
                    style="width:50%;"
                />
            </div>

            <p>Opis (nije obavezno):</p>
            <div style="display: flex;gap:30px;">
                <textarea 
                    name="description" 
                    id="description" 
                    cols="30" 
                    rows="10"
                >
                    {{ old('description') }}
                </textarea>
            </div>
            

            <button 
                type="submit" 
                class="primary-button"
            >
                Postavi vožnju
            </button>
        </form>
    </div>
</x-layout>