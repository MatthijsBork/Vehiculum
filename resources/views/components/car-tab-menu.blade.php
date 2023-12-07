<div class="mb-4">
    <x-nav-link class="pb-3" :href="route('dashboard.cars.info', compact('car'))" :active="request()->routeIs('dashboard.cars.info*')">
        Informatie
    </x-nav-link>
    <x-nav-link class="pb-3" :href="route('dashboard.cars.properties', compact('car'))" :active="request()->routeIs('dashboard.cars.properties*')">
        Specificaties
    </x-nav-link>
    <x-nav-link class="pb-3" :href="route('dashboard.cars.photos', compact('car'))" :active="request()->routeIs('dashboard.cars.photos')">
        Foto's
    </x-nav-link>
    <hr>
</div>
