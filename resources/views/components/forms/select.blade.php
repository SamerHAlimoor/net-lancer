@props([
    'id' => '', 'label', 'name', 'selected' => '', 'options' => []
])

@if (isset($label))
<label for="{{ $id }}">{{ $label }}</label>
@endif
<select 
    id="{{ $id }}" 
    name="{{ $name }}" 
    aria-label="{{$label}}"
    {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }}
>
<option value="">No Parent</option>
    @foreach ($options as $value => $text)
    <option value="{{ $value }}" @if($value == old($name, $selected)) selected @endif>{{ $text }}</option>
    @endforeach
</select>
@error($name)
<p class="invalid-feedback">{{ $message }}</p>
@enderror