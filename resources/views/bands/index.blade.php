<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bands Index Pagina</title>
    <!-- Voeg Tailwind CSS toe (vervang door de juiste link) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans bg-gray-100">
    <div class="container mx-auto p-4">

        <!-- Welcome Section -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Welkom op de Band Index Pagina</h1>
            <p class="text-gray-600">Hier vind je informatie over verschillende bands.</p>
        </div>

        <!-- Band Information Section -->
        <div class="band-info bg-white rounded-lg shadow-md p-6 mb-4">
            <h1 class="band-name text-3xl font-bold text-gray-800 mb-4">Band Naam</h1>
            <p class="band-description text-gray-600 mb-4">Een korte beschrijving van de band en hun muziek.</p>

            <!-- Bands Table -->
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr>
                        <th class="border bg-gray-200 px-4 py-2">Naam</th>
                        <th class="border bg-gray-200 px-4 py-2">Genre</th>
                        <th class="border bg-gray-200 px-4 py-2">Opgericht</th>
                        <th class="border bg-gray-200 px-4 py-2">Actief</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($bands as $band)
                    <tr>
                        <td class="border px-4 py-2">
                            <!-- Update Band Form -->
                            <form action="{{ route('bands.update', $band->id) }}" method="POST" class="inline">
                                @csrf
                                @method('PUT')
                                <input type="text" name="name" value="{{ $band->name }}" class="border rounded py-1 px-2 text-sm w-32">
                                <input type="text" name="genre" value="{{ $band->genre }}" class="border rounded py-1 px-2 text-sm w-32">
                                <input type="text" name="founded" value="{{ $band->founded }}" class="border rounded py-1 px-2 text-sm w-32">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline text-sm">Update</button>
                            </form>
                        </td>
                        <td class="border px-4 py-2">
                            <!-- Update and Delete Band Buttons -->
                            <form action="{{ route('bands.destroy', $band->id) }}" method="POST" class="inline">
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
