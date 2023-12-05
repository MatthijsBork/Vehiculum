<form method="POST" action="{{ $action }}" enctype="multipart/form-data">
    @csrf

    <div class="tab-content">
        <div class="mb-4">
            <x-input-label for="title">Titel</x-input-label>
            <input type="text" id="title" name="title" value="{{ $car->title ?? old('title') }}"
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            @error('title')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <x-input-label for="mileage">Kilometerstand</x-input-label>
            <input type="text" id="mileage" name="mileage" value="{{ $car->mileage ?? old('mileage') }}"
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            @error('mileage')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <x-input-label for="year">Bouwjaar</x-input-label>
            <input type="text" id="year" name="year" value="{{ $car->year ?? old('year') }}"
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            @error('year')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <x-input-label for="plate">Kenteken</x-input-label>
            <input type="text" id="plate" name="plate" value="{{ $car->plate ?? old('plate') }}"
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            @error('plate')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <x-input-label for="mot">Laatste APK</x-input-label>
            <input type="date" id="mot" name="mot"
                value="{{ isset($quotation->mot) ? date('Y-m-d', strtotime($quotation->mot)) : old('mot') }}"
                class="px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-400 focus:border-blue-400">
            @error('mot')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="text-right">
        <a class="text-red-500 hover:underline mr-4" href="{{ route('dashboard.users') }}">Annuleren</a>
        <x-primary-button type="submit">Opslaan</x-primary-button>
    </div>
</form>
