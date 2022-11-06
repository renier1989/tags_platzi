<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<script src="https://cdn.tailwindcss.com"></script>

<body class="bg-gray-200 py-10">
    <div class="mx-auto max-w-lg bg-white p-5 rounded shadow">
        <div >
            <form action="tags" method="POST" class="flex mb-4">
                @csrf
                <input type="text" name="name" class="rounded-l bg-gray-200 p-4 w-full outline-none" placeholder="Nueva etiqueta">
                <input type="submit" value="Agregar" class=" rounded-r px-8 bg-blue-500 text-white outline-none   ">
            </form>
        </div>

        <h4 class="text-lg text-center mb-4"> Listado de Etiquetas</h4>



        <div>
            <table>
                @forelse ($tags as $tag)
                <tr>
                    <td class="py-4 px-2 border">
                        <p >{{$tag->name}}</p>
                    </td>
                    <td class="py-4 px-2 border">
                        <p >{{$tag->slug}}</p>
                    </td>
                    <td class="py-4 px-2 ">
                        <form action="tags/{{$tag->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="px-4 rounded-lg bg-red-500 text-white">
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>
                        <p>No hay etiquetas</p>
                    </td>
                </tr>
                @endforelse
            </table>
        </div>

    </div>

</body>

</html>