<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-green-600 focus:outline-none focus:border-green-600 focus:shadow-outline-green disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
