<x-layout class="narrow-container">
    <div class="form-holder">
        <h1>
            Prijava
        </h1>
    
        <form 
            method="POST"
            action="{{route('authenticate')}}"  
            class="form"  
        >
            @csrf
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
    
            <button 
                type="submit"
                class="primary-button"    
            >
                Prijavi se
            </button>
        </form>
    </div>
</x-layout>