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

    @php
        $members = auth()
            ->user()
            ->members()
            ->with(['memberType', 'activeMembership.membership'])
            ->get();
        $totalMembers = $members->count();
        $membersStatus = [
            'active' => $members->where('status', 'active')->count(),
            'inactive' => $members->where('status', 'inactive')->count(),
            'banned' => $members->where('status', 'banned')->count(),
        ];
        $newMembersThisMonth = $members->where('joined_at', '>=', now()->startOfMonth())->count();
    @endphp
    <section class="members-page">
        <h1>Our Members</h1>
        <section class="stats-cards">
            <div class="stats-card">

                <p class="stats-value">{{ $totalMembers }}</p>
                <h2 class="stats-title">Total Members</h2>
            </div>
            <div class="stats-card">

                @foreach ($membersStatus as $memberStat => $count)
                    <div class="status-item">
                        <span class="status-label">{{ ucfirst($memberStat) }}:</span>
                        <span class="status-count">{{ $count }}</span>
                    </div>
                @endforeach
                <h2 class="stats-title">Members Status</h2>
            </div>
            <div class="stats-card">

                <p class="stats-value">{{ $newMembersThisMonth }}</p>
                <h2 class="stats-title">New Members This Month</h2>
            </div>

        </section>


        <livewire:member-table />

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
