@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#7f7f7f] dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
