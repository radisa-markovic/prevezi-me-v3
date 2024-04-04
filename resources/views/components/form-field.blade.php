@props(['caption', "name"])

<div class="form-field">
    <label for="{{$name}}">
        {{ $caption }}
    </label>
    <input 
        type="text" 
        name="{{$name}}" 
        id="{{$name}}"
        value="{{old($name)}}"
    />
</div>