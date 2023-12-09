<a href="{{ $link }}" class="inline-flex items-center px-3 py-3 border bg-{{$current_bg}} text-sm font-lg rounded-md text-{{$current_text}} hover:bg-green-500 hover:text-white focus:outline-none transition ease-in-out duration-150 w-40">
    <span class="mr-2 p-1 rounded-md bg-blue-500">
        <img class="h-5 fill-white" src="{{ asset('img/icons/' . $icon . '-icon.svg') }}" alt="">
    </span>
    <p class="mt-1">
        {{ $label }}    
    </p>
</a>
