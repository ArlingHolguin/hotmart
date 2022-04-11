<div class="relative w-full mt-10 space-y-8">
    {{-- {!! Form::open(['route' => 'form.store'], 'method' => 'put') !!} --}}
    {{-- {!! Form::open(['route' => 'form.store', 'autocomplete' => 'off', 'files' => 'true']) !!} --}}
        @honeypot
    <div class="relative">
        <label class="font-medium text-gray-900">Nombre Completo</label>
        <input type="text" @error('name') border-red-500 @enderror"  class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-500 bg-pink-200 rounded-lg  border-pink-200 focus:border-pink-700 focus:outline-none focus:ring-1 focus:ring-pink-500 focus:ring-opacity-50"
            placeholder="Ingresa tu nombre completo" wire:model="name">
            @error('name')

                    <p style="font-size: 8pt; color: red;">{{ __($message) }}</p>
                @enderror
    </div>
    <div class="relative">
        <label class="font-medium text-gray-900">Correo electrónico</label>
        <input type="email" @error('email') border-red-500 @enderror"  class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-500 bg-pink-200 rounded-lg border-pink-200 focus:border-pink-700 focus:outline-none focus:ring-1 focus:ring-pink-500 focus:ring-opacity-50"
            placeholder="Ingresa tu correo electrónico" wire:model="email">
            @error('email')
                <p style="font-size: 8pt; color: red;">{{ __($message) }}</p>
            @enderror
    </div>
    
    <div class="relative mt-8">
       
           {{-- <button type="submit" wire:click="store"
                class=" inline-block w-full px-5 py-4 text-lg font-medium text-center text-white transition duration-200 bg-pink-500 rounded-lg hover:bg-pink-600 ease">
                Recibir Ebook
        </button> --}}
        <button type="submit" wire:click="store" wire:loading.class="cursor-not-allowed" 
        wire:loading.attr="disabled"
        wire:target="save"  class=" w-full inline-flex items-center justify-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-white bg-pink-500 hover:bg-pink-400 transition ease-in-out duration-150">
            <svg wire:loading wire:target="store" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Recibir eBook
          </button>
        
        
     
       
        
    </div>
    {{-- {!! Form::close() !!} --}}
  
    
</div>