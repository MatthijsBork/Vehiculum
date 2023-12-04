<x-guest-layout>
    <x-slot name="menu">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if (!isset($cars[0]))
                    <div class="w-full p-10 text-center bg-white rounded-lg">
                        <h1 class="text-xl font-bold text-blue-500">Veel leegte...</h1>
                        <p class="mb-4">Er zijn geen auto's gevonden</p>
                    </div>
                @else
                    <table class="w-full text-left bg-white table-auto sm:rounded-lg">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3">Naam</th>
                                <th class="px-4 py-3">Contactpersoon</th>
                                <th class="px-4 py-3">E-mail</th>
                                <th class="px-4 py-3">Tel</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                <tr class="items-center border-b even:bg-gray-50">
                                    test
                                    {{-- <td class="max-w-[22vw] px-4 py-3 overflow-hidden">
                                    <a class="text-blue-600 hover:underline"
                                        href="{{ route('dashboard.cars.show', compact('car')) }}">{{ $car->Str::title($value) }}</a>
                                </td>
                                <td class="max-w-[22vw] px-4 py-3 overflow-hidden">{{ $car->brand->name }}</td>
                                <td class="max-w-[22vw] px-4 py-3 overflow-hidden">{{ $company->email }}</td>
                                <td class="max-w-[22vw] px-4 py-3 overflow-hidden">{{ $company->telephone }}</td>
                                <td class="flex justify-end py-3 text-right">
                                    <a href="{{ route('dashboard.companies.show', compact('company')) }}" title="Bekijken"
                                        class="text-blue-700 hover:underline">
                                        <x-eye-icon></x-eye-icon>
                                    </a>
                                    <a href="{{ route('dashboard.companies.edit', compact('company')) }}" title="Bewerken"
                                        class="text-blue-700 hover:underline">
                                        <x-edit-icon></x-edit-icon>
                                    </a>
                                    <a href="{{ route('dashboard.companies.delete', compact('company')) }}"
                                        title="Verwijderen" class="text-red-500 hover:underline"
                                        onclick="return confirm('Weet u zeker dat u dit wilt verwijderen?');">
                                        <x-trash-icon></x-trash-icon>
                                    </a>
                                </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>
