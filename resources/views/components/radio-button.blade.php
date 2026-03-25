@props([
    'name', 
    'value', 
    'checked' => false
])

<label class="inline-flex items-center cursor-pointer group">
    <input 
        type="radio" 
        name="{{ $name }}" 
        value="{{ $value }}" 
        {{ $checked ? 'checked' : '' }}
        class="sr-only peer"
    >

    <div class="
        w-[32px] h-[32px] rounded-full border-[2px] border-gray-400
        relative flex items-center justify-center
        transition-all duration-200
        
        peer-checked:border-blue-600
    ">
        <div class="w-[16px] h-[16px] rounded-full bg-blue-600 scale-0 peer-checked:group-[]:scale-100 transition-transform duration-200"></div>
    </div>
</label>