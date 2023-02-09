@props(['disabled' => false])

<input
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge(
	    [
		    'class' => 'appearance-none border border-gray-300 focus:border-gray-400 outline-none px-2 py-1 mt-1 focus:ring ' .
		               'focus:ring-sky-200 transition-all duration-300 rounded-md',
		],
	) !!}>
