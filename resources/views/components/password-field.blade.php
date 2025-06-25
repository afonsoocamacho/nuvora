@props([
    'name' => 'password',
    'label' => 'Password',
    'required' => false,
    'create' => false,
])

<div x-data="createPasswordField({ create: {{ $create ? 'true' : 'false' }} })" class="form-group">
    <label for="{{ $name }}" class="input-label">
        {{ $label }}
        @if ($required)
            <span class="required">*</span>
        @endif
    </label>

    <div class="input-wrapper">
        <span class="input-icon-left">
            <!-- Lock Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-lock" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="2"
                    d="M12 17v1m-5-6V9a5 5 0 0110 0v3m-10 0h10a2 2 0 012 2v6a2 2 0 01-2 2H7a2 2 0 01-2-2v-6a2 2 0 012-2z" />
            </svg>
        </span>

        <input :type="show ? 'text' : 'password'" id="{{ $name }}" name="{{ $name }}"
            class="input-field input-field-create-password" x-model="password"
            :placeholder="create ? 'Create a password' : 'Enter your password'" @input="create && validateNewPassword()"
            {{ $required ? 'required' : '' }}>

        <button type="button" class="input-icon-right" @click="show = !show">
            <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="icon-eye" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke="currentColor" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.269 2.943 9.542 7-1.273 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="icon-eye-off" fill="none"
                viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-width="2"
                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.972 9.972 0 012.602-4.368m2.737-2.183A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.957 9.957 0 01-1.347 2.566M15 12a3 3 0 00-3-3M9.879 9.879A3 3 0 0015 15m-4.879-4.879L4 4m16 16L4 4" />
            </svg>
        </button>
    </div>

    <!-- Live Feedback (Only for Create) -->
    <template x-if="create">
        <div>
            <p x-show="password.length === 0" class="start-typing-message">Start typing...</p>
            <ul class="password-rules" x-show="password.length > 0">
                <li :class="{ 'valid': rules.length }">At least 8 characters</li>
                <li :class="{ 'valid': rules.upper }">One uppercase letter</li>
                <li :class="{ 'valid': rules.number }">One number</li>
                <li :class="{ 'valid': rules.symbol }">One special character</li>
            </ul>
        </div>
    </template>

    @error($name)
        <p class="error-message">{{ $message }}</p>
    @enderror


</div>
