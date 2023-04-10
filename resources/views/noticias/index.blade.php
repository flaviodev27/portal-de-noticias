@include('components.head')

    <h1 class="text-5xl font-extrabold text-center py-4">Lista de Notícias</h1>



    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($noticias as $noticia)
            <div class="max-w-min  mx-auto bg-white rounded-md shadow-md">
                <div class="p-6 break-all">
                    <h2 class="text-xl font-bold mb-2">{{$noticia->titulo}}</h2>
                    <h3 class="text-sm text-gray-500 mb-4">{{$noticia->username}}</h3>
                    <p class="text-gray-600 mb-4">{{$noticia->conteudo}}</p>
                </div>
                <div class="flex justify-end px-6 pb-6">
                    <button class="mr-2 px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded">Editar</button>
                    <button class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded">Apagar</button>
                </div>
            </div>
        @endforeach
    </div>


</body>
</html>