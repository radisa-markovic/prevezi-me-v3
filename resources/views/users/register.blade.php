<x-layout class="narrow-container">
    <div class="form-holder">
        <h1>
            Napravi nalog
        </h1>

        <form 
            action="{{route('register')}}" 
            method="POST"
            class="form"
        >
            @csrf
            <x-form-field
                :caption="'Ime'"
                :name="'name'"   
            />
            <x-form-field
                :caption="'Email'"
                :name="'email'"   
                :type="'email'"             
            />
            <x-form-field
                :caption="'Lozinka'"
                :name="'password'"
                :type="'password'"
            />
            <x-form-field
                :caption="'Ponovi lozinku'"
                :name="'password_confirmation'"
                :type="'password'"
            />
            
            <button 
                type="submit" 
                class="primary-button"
            >
                Napravi nalog
            </button>
        </form>
    </div>
</x-layout>