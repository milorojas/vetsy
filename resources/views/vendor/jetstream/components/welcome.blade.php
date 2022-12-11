<div class="p-6 sm:px-20 bg-white">
    <div class="text-2xl">
        {{ __("Welcome, :name", ["name" => Auth::user()->name])  }} 👋
    </div>
</div>
