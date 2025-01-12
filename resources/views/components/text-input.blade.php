@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-transparent border-gray-700 focus:border-gray-700 focus:ring-black rounded-md shadow-sm']) }}>
