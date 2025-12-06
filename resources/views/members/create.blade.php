@php
    $layout = auth()->check() ? 'layouts.app' : 'layouts.guest';
@endphp

@extends($layout)




@section('title', 'Nuvora')
@section('description', 'Welcome to Nuvora, your gateway to innovative solutions.')

@push('styles')
    <!-- Page-specific CSS -->
@endpush


@section('content')


    <section class="members-create-page">
        <h2>Add Member</h2>

        <form action="" method="POST">
            @csrf


            <!-- Personal Details -->
            <h3>Personal Details</h3>
            <x-input-field name="first_name" label="First Name" placeholder="First Name" type="text"
                value="{{ old('first_name') }}" required />

            <x-input-field name="last_name" label="Last Name" placeholder="Last Name" type="text"
                value="{{ old('last_name') }}" required />

            <x-input-field name="email" label="Email" placeholder="Email" type="email" value="{{ old('email') }}"
                required />

            <x-input-field name="phone_number" label="Phone Number" placeholder="Phone Number" type="text"
                value="{{ old('phone_number') }}" />

            <x-input-field name="birthdate" label="Birthdate" placeholder="Birthdate" required datepicker
                value="{{ old('birthdate') }}" />

            <!-- Membership Details -->
            <h3>Membership Details</h3>
            <x-input-field name="card_number" label="Card Number" placeholder="Card Number" required datepicker
                value="{{ old('birthdate') }}" />

            <x-select-field name="status" label="Status" :options="['active' => 'Active', 'inactive' => 'Inactive', 'banned' => 'Banned']" :selected="old('status', 'active')" required />

            <x-select-field name="member_type_id" label="Member Type" :options="$memberTypes->pluck('name', 'id')" :selected="old('member_type_id')"
                placeholder="Select a member type" required />


            <div class="mb-3">
                <label for="country_id" class="form-label">Country</label>
                <select name="country_id" class="form-select">
                    <option value="">Select...</option>
                    {{-- 
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>
                            {{ $country->name }}
                        </option>
                    @endforeach
                    --}}
                </select>
            </div>


            <!-- Address Details -->
            <h3>Address Details</h3>
            <x-select-field name="address_type" label="Address Type" :options="['main' => 'Main', 'billing' => 'Billing', 'other' => 'Other']" :selected="old('membership_id')"
                placeholder="Select an address type" required />
            <x-input-field name="address" label="Address" placeholder="Address" type="text" value="{{ old('address') }}"
                required />
            <x-input-field name="address2" label="Address 2" placeholder="Address 2" type="text"
                value="{{ old('address2') }}" />
            <x-input-field name="city" label="City" placeholder="City" type="text" value="{{ old('city') }}"
                required />
            <x-input-field name="postal_code" label="Postal Code" placeholder="Postal Code" type="text"
                value="{{ old('postal_code') }}" required />


            <!-- Bank Details -->
            <h3>Bank Details</h3>
            <!-- Todo: add account type selection type bollean is primary or secondary -->
            <x-input-field name="iban" label="IBAN" placeholder="IBAN" type="text" value="{{ old('iban') }}"
                required />
            <x-input-field name="bic" label="BIC" placeholder="BIC" type="text" value="{{ old('bic') }}"
                required />
            <x-input-field name="account_holder_name" label="Account Holder Name" placeholder="Account Holder Name"
                type="text" value="{{ old('account_holder_name') }}" required />



            <button type="submit" class="btn btn-1-green btn-xsm">Save Member</button>
        </form>
    </section>
@endsection


@push('scripts')
    <!-- Page-specific JS if needed -->

    <script>
        document.addEventListener('keydown', function(event) {
            if ((event.ctrlKey || event.metaKey) && event.key === 'k') {
                event.preventDefault();
                document.getElementById('member-search-bar').focus();
            }
        });
    </script>
@endpush
