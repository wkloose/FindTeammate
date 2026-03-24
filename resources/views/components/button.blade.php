@props([
    'type' => 'button',
    'disabled' => false
])

<button 
    type="{{ $type }}"
    @if($disabled) disabled @endif
    {{ $attributes->merge([
        'class' => '
            inline-flex items-center justify-center gap-2
            px-6 py-3 rounded-full min-w-[120px]
            
            font-sans text-base font-bold text-white
            
            bg-primary-5 
            
            hover:bg-primary-3
            
            active:bg-primary-5
                        
            transition-all duration-200 ease-in-out
        '
    ]) }}
>
    {{ $slot }}
</button>