<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums Index Pagina</title>
    <!-- Voeg Tailwind CSS toe (vervang door de juiste link) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans bg-gray-100">
    <div class="container mx-auto p-4">

        <!-- Welcome Section -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Welkom op de Albums Index Pagina</h1>
        </div>

        <!-- Album Information Section -->
        <div class="album-info bg-white rounded-lg shadow-md p-6 mb-4">
            <h1 class="album-name text-3xl font-bold text-gray-800 mb-4">Album Naam</h1>
            <p class="album-description text-gray-600 mb-4">Een korte beschrijving van het album en de artiest.</p>

            <!-- Albums Table -->
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr>
                        <th class="border bg-gray-200 px-4 py-2">Naam</th>
                        <th class="border bg-gray-200 px-4 py-2">Jaar</th>
                        <th class="border bg-gray-200 px-4 py-2">Aantal keer verkocht</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($albums as $album)
                    <tr>
                        <td class="border px-4 py-2">
                            <!-- Update Album Form -->
                            <form action="{{ route('albums.update', $album->id) }}" method="POST" class="inline">
                                @csrf
                                @method('PUT')
                                <input type="text" name="name" value="{{ $album->name }}" class="border rounded py-1 px-2 text-sm w-32" required>
                                <input type="text" name="year" value="{{ $album->year }}" class="border rounded py-1 px-2 text-sm w-32" required>
                                <input type="text" name="times_sold" value="{{ $album->times_sold }}" class="border rounded py-1 px-2 text-sm w-32" required>
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline text-sm">Update</button>
                            </form>
                        </td>
                        <td class="border px-4 py-2 space-x-2">
                            <!-- Delete Album Button -->
                            <form action="{{ route('albums.destroy', $album->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline text-sm">Verwijder</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
