<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Bands Pagina</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">

<div class="container mx-auto mt-8">
    <div class="max-w-md mx-auto bg-white rounded-md shadow-md p-8">
        <h1 class="text-4xl font-bold mb-4 text-center">Bands</h1>

        <!-- Formulier voor het maken van een band -->
        <form action="{{ route('bands.store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-bold mb-2">Naam:</label>
                <input type="text" name="name" id="name" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="genre" class="block text-sm font-bold mb-2">Genre:</label>
                <input type="text" name="genre" id="genre" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="founded" class="block text-sm font-bold mb-2">Opgericht:</label>
                <input type="number" name="founded" id="founded" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="active_till" class="block text-sm font-bold mb-2">Actief Tot:</label>
                <input type="text" name="active_till" id="active_till" class="w-full p-2 border rounded">
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Creëren</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
