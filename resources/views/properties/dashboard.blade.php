<x-dashboard-layout>
    <x-slot name="titleSlot">
        Eigenschappen
    </x-slot>
    <x-slot name="buttonSlot">
        <x-primary-link href="{{ route('dashboard.properties.create') }}">Nieuwe eigenschap</x-primary-link>
    </x-slot>
    <x-slot name="searchSlot">
        <x-search :action="null"></x-search>
    </x-slot>
    @if (!isset($properties[0]))
        <div class="w-full p-10 text-center bg-white rounded-lg">
            <h1 class="text-xl font-bold text-blue-500">Veel leegte...</h1>
            <p class="mb-4">Er zijn geen eigenschappen gevonden</p>
        </div>
    @else
        <table class="w-full text-left bg-white table-auto sm:rounded-lg">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3">Naam</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($properties as $property)
                    <tr class="border-b even:bg-gray-50">
                        <td class="px-4 py-3">{{ $property->name }}</td>
                        <td class="flex justify-end py-3 text-right">
                            <a title="Bewerken" href="{{ route('dashboard.properties.edit', compact('property')) }}"
                                class="text-blue-700 hover:underline">
                                <x-edit-icon></x-edit-icon>
                            </a>
                            <a title="Verwijderen"
                                href="{{ route('dashboard.properties.delete', compact('property')) }}"
                                class="text-red-500 hover:underline"
                                onclick="return confirm('Weet u zeker dat u dit wilt verwijderen?');">
                                <x-trash-icon></x-trash-icon>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="my-4">
            {{ $properties->links() }}
        </div>
    @endif
</x-dashboard-layout>
