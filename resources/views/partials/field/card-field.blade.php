<!-- component -->
@foreach ($sport_fields as $sport_field)
    <div class="max-w-sm w-full lg:max-w-full lg:flex mt-4">
        <div class="h-48 lg:h-auto lg:w-2/6 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
            style="background-image: url('{{ asset($sport_field->image_url) }}')" title="Woman holding a mug">
        </div>
        <div
            class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <p class="text-sm text-gray-600 flex items-center">
                    <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                    </svg>
                    Members only
                </p>
                <div class="text-gray-900 font-bold text-xl mb-2">{{ $sport_field->name }}</div>
                <p class="text-gray-700 text-base">{{ $sport_field->description }}</p> <br>
                <p class="text-gray-700 text-base"><span class="text-gray-900 font-black">Precio:</span> 20.000</p>
                <p class="text-gray-700 text-base"><span class="text-gray-900 font-black">Dimensiones:</span> 20 x 30
                </p>
                <div class="flex justify-end">
                    <button
                        class="mx-5 bg-yellow-300 text-gray-500 font-semibold hover:text-gray-700 py-2 px-8 border border-yellow-400 hover:border-transparent rounded">
                        Ver Cancha
                    </button>
                    <button
                        class="mx-5 bg-green-500 text-white hover:bg-green-600  font-semibold hover:text-white py-2 px-8 border rounded">
                        Reservar
                    </button>
                </div>
            </div>
        </div>
    </div>
@endforeach

<div class="mt-4">
    {{ $sport_fields->links() }}
</div>
{{-- <ul class="mx-8 lg:mx-32 md:mx-32 sm:mx-32 xl:mx-64">
    @foreach ($sport_fields as $sport_field)
        <div class="flex border border-gray-400 rounded mb-10">
            {{-- Imagen --}}
{{-- <div class="w-2/5">
                <img class=" h-full text-center items-center object-cover object-center"
                    src="https://images.unsplash.com/photo-1528656685602-17a25fe7abcd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80"
                    alt="">
            </div> --}}
{{-- Informacion de Cancha --}}
{{-- <div class="w-3/5 bg-gray-300">
                <ul class="content-center items-center">
                    <li class="p-5"><b>{{ $sport_field->name }}</b></li>
                    <li class="pl-5 pb-5"><b>Descripcion: </b>{{ $sport_field->description }}</li>
                    <li class="pl-5 pb-5"><b>Precio: </b>{{ $sport_field->price }}</li>
                </ul>
                <div class="mb-5 flex justify-end">
                    <button
                        class="mx-5 bg-yellow-300 text-gray-500 font-semibold hover:text-gray-700 py-2 px-8 border border-yellow-400 hover:border-transparent rounded">
                        Ver Cancha
                    </button>
                    <button
                        class="mx-5 bg-green-500 text-white hover:bg-green-600  font-semibold hover:text-white py-2 px-8 border rounded">
                        Reservar
                    </button>
                </div>
            </div>
        </div> --}}
{{-- @endforeach --}}
{{-- </ul> --}}
