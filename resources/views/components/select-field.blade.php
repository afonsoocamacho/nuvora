@props([
    'label' => '',
    'name',
    'placeholder' => 'Select...',
    'required' => false,
    'disabled' => false,
    'options' => [],
    'selected' => null,
])

@php
    $hasError = $errors->has($name);
@endphp

<div class="form-group {{ $disabled ? 'is-disabled' : '' }} {{ $hasError ? 'has-error' : '' }}">
    <label for="{{ $name }}">
        {{ $label }}
        @if ($required)
            <span class="required">*</span>
        @endif
    </label>

    <div class="input-wrapper select-wrapper">
        <select name="{{ $name }}" id="{{ $name }}" class="input-field" {{ $required ? 'required' : '' }}
            {{ $disabled ? 'disabled' : '' }}>
            <option disabled selected hidden value="">{{ $placeholder }}</option>

            @foreach ($options as $value => $label)
                <option value="{{ $value }}" {{ old($name, $selected) == $value ? 'selected' : '' }}>
                    {{ $label }}
                </option>
            @endforeach
        </select>
    </div>

    @error($name)
        <p class="error-message">{{ $message }}</p>
    @enderror
</div>
