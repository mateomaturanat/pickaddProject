<!-- component -->
<section class="bg-white dark:bg-gray-900">
    <ul class="mx-8 lg:mx-32 md:mx-32 sm:mx-32 xl:mx-64">
        @foreach ($canchas as $cancha)
            <div class="flex border border-gray-400 rounded mb-10">
                {{-- Imagen --}}
                <div class="w-2/5">
                    <img class=" h-full text-center items-center object-cover object-center"
                        src="https://images.unsplash.com/photo-1528656685602-17a25fe7abcd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80"
                        alt="">
                </div>
                {{-- Informacion de Cancha --}}
                <div class="w-3/5 bg-gray-300">
                    <ul class="content-center items-center">
                        <li class="p-5"><b>{{ $cancha->nombre }}</b></li>
                        <li class="pl-5 pb-5"><b>Descripcion: </b>{{ $cancha->descripcion }}</li>
                        <li class="pl-5 pb-5"><b>Precio: </b>{{ $cancha->precio }}</li>
                        <li class="pl-5 pb-5"><b>Medidas: </b>{{ $cancha->medida_1 }}mts x {{ $cancha->medida_2 }}mts
                        </li>
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
            </div>
        @endforeach
        {{ $canchas->links() }}
    </ul>
</section>
