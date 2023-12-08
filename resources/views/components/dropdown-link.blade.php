<a {{ $attributes->merge([
    'class' => 'block w-full px-4 py-2 text-left text-sm leading-5 hover:bg-red-500 hover:text-white focus:outline-none focus:bg-black transition duration-150 ease-in-out',
    'style' => 'color: black; background-color: ' . $bgColor]) }}>
    {{ $slot }}
</a>
