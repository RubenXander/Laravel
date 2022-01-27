<div>
    <div class="w-full flex justify-center">
        <input wire:model="search" type="text" class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Search pizza by name...">
    </div>

    <div class="w-full flex justify-center">
        <div class="flex flex-col md:flex-wrap md:flex-row p-5">
            @foreach ($pizzas as $pizza)

                <div class="w-full md:w-1/2 lg:w-1/3 md:px-2 py-2">
                    <div class="bg-white rounded shadow p-5 h-full relative">
                        <h5 class="font-black uppercase text-2xl mb-4">
                            {{ $pizza->name }}
                        </h5>

                        <div>
                            <img src="{{$pizza->image}}" class="object-cover h-52 w-96">
                        </div>


                        <h6 class="font-bold text-gray-700 text-xl mb-3">€ {{ $pizza->price }}</h6>
                        <p class="text-gray-900 font-normal mb-12">
                            {{ $pizza->description }}
                        </p>
                        <div class="flex justify-end mt-5 absolute w-full bottom-0 left-0 pb-5">
                            <button wire:click="addToCart({{ $pizza->id }})" class="block uppercase font-bold text-red-600 hover:text-red-500 mr-4">
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

    <div class="w-full flex justify-center pb-6">
        {{ $pizzas->links('layouts.pagination') }}
    </div>
</div>
