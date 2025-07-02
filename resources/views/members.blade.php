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

    <h1>Your Members</h1>

    <livewire:member-table />


@endsection


@push('scripts')
    <!-- Page-specific JS if needed -->
@endpush
