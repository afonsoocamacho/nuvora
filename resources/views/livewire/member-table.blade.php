<div class="members-table">
    <header class="members-table-header">
        <section class="filter-controls">


            <div class="search-bar">
                <div class="">

                    <x-icon name="magnifying-glass" class="search-icon" />


                    <input type="text" wire:model.live.debounce.300ms="search" class="search-input p-small"
                        placeholder="Search by name, email, or card number" id="member-search-bar">

                </div>


                <div class="search-shortcut">⌘ + K</div>

            </div>



            <button class="btn btn-2-black btn-xsm btn-filter" wire:click="resetFilters">
                <x-icon name="refresh" class="icon" />
                Filters
            </button>

            <!--
            TODO:
            - Finish implementing the filter functionality.
            -->

            {{--
            <select wire:model.live="status" class="input">
                <option value="">All</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
                <option value="banned">Banned</option>
            </select>
            --}}


        </section>

        <button class="btn btn-1-green btn-xsm">
            <x-icon name="plus" class="icon" />
            Add Member
        </button>
    </header>

    <table>
        <thead>
            <tr>
                <th>
                    <label class="checkbox">
                        <input type="checkbox" value="" class="checkbox-input">
                        <span class="checkbox-custom green">
                            <svg viewBox="0 0 24 24" class="checkmark" aria-hidden="true">
                                <path d="M5 12l5 5L20 7" stroke="black" stroke-width="3" fill="none" />
                            </svg>
                        </span>
                    </label>
                </th>
                <th wire:click="sortBy('id')" class="sortable">Member #</th>
                <th wire:click="sortBy('card_number')" class="sortable">Card #</th>
                <th wire:click="sortBy('first_name')" class="sortable">Name</th>
                <th wire:click="sortBy('email')" class="sortable">Email</th>
                <th>Member Type</th>
                <th>Membership</th>
                <th wire:click="sortBy('status')" class="sortable">Status</th>
                <th wire:click="sortBy('joined_at')" class="sortable">Joined</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($members as $member)
                <tr>
                    <td>
                        <label class="checkbox">
                            <input type="checkbox" value="{{ $member->id }}" class="checkbox-input">
                            <span class="checkbox-custom">
                                <svg viewBox="0 0 24 24" class="checkmark" aria-hidden="true">
                                    <path d="M5 12l5 5L20 7" stroke="white" stroke-width="3" fill="none" />
                                </svg>
                            </span>
                        </label>
                    </td>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->card_number }}</td>
                    <td>{{ $member->first_name }} {{ $member->last_name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->memberType->name ?? '-' }}</td>
                    <td>{{ $member->activeMembership?->membership?->name ?? '-' }}</td>
                    <td>{{ ucfirst($member->status) }}</td>
                    <td>{{ $member->joined_at?->format('Y-m-d') ?? '-' }}</td>
                    <td class="actions">
                        <button class="btn btn-1-blue btn-xsm" wire:click="edit({{ $member->id }})">

                            <x-icon name="edit" class="icon" />
                            Edit
                        </button>
                        <button class="btn red btn-xsm" wire:click="delete({{ $member->id }})">

                            <x-icon name="trash" class="icon" />
                            Delete
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">No members found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="pagination-wrapper">
        {{-- 
        <select wire:model.live='perPage'>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        --}}
        {{ $members->links('pagination::bootstrap-5') }}
    </div>
</div>
