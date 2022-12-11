<div class="col-span-12 px-4 sm:col-span-6 md:col-span-4 lg:col-span-2 min-h-full border-r">
    <nav class="space-y-1" aria-label="Sidebar">
        <x-sidebar-group :name="__('Authorization')">
            <x-sidebar-link class="mb-1" href="{{ route('dashboard') }}" :active="request()->routeIs('')" :total="20">
                👥  {{ __('Users') }}
            </x-sidebar-link>
        </x-sidebar-group>
    </nav>
</div>
