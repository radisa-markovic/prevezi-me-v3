@props(['caption', "name", "value" => old($name), "type" => "text"])

<div class="form-field">
    <label for="{{$name}}">
        {{ $caption }}
    </label>
    <input 
        type="{{$type}}" 
        name="{{$name}}" 
        id="{{$name}}"
        value="{{$value}}"
    />
    @error("$name")
        <p class="form-error">
            {{ $message }}
        </p>
    @enderror
</div>