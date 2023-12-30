@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 white:border-gray-700 white:bg-gray-900 white:text-gray-300 focus:border-indigo-500 white:focus:border-indigo-600 focus:ring-indigo-500 white:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
