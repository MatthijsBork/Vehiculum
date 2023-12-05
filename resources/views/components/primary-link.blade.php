<a
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-3 bg-blue-600 border border-transparent rounded-lg text-xs text-white tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
