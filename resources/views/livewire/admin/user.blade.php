<div class="grow grid grid-cols-12 gap-1">
    <x-sidebar></x-sidebar>

    <div class="col-span-12 sm:col-span-6 md:col-span-8 lg:col-span-10 p-2">
        <div>
            <div class="border-b border-gray-200 p-5">
                <h3 class="text-lg font-medium leading-6 text-gray-900">{{ __("Users") }} 👥</h3>
                <p class="mt-2 max-w-4xl text-sm text-gray-500">{{ __("Here you can add and organize :model", ["model" => __("Users")]) }}</p>
            </div>
        </div>

        <div class="mt-6">
            <livewire:admin.user-table></livewire:admin.user-table>
        </div>
    </div>
</div>
