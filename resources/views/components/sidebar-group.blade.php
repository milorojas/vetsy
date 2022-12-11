@props(['name' => ''])

<div x-data="{ openGroup: false }" class="pb-2 border-b">
    <p class="flex items-center justify-between px-3 pt-6 mb-2 text-sm font-medium text-gray-500">
        <span>{{ $name }}</span>
        <button @click="openGroup = !openGroup">
            <svg
                :class="{'rotate-90': openGroup, '': !openGroup }"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </button>
    </p>
    <div x-show="openGroup">
        {{ $slot  }}
    </div>
</div>
