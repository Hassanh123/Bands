<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Albums Pagina</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">

<div class="container mx-auto mt-8">
    <div class="max-w-md mx-auto bg-white rounded-md shadow-md p-8">
        <h1 class="text-4xl font-bold mb-4 text-center">Albums</h1>

        <!-- Formulier voor het maken van een album -->
        <form action="{{ route('albums.store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-bold mb-2">Naam:</label>
                <input type="text" name="name" id="name" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-bold mb-2">Jaar:</label>
                <input type="number" name="year" id="year" class="w-full p-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="times_sold" class="block text-sm font-bold mb-2">Aantal keer verkocht:</label>
                <input type="number" name="times_sold" id="times_sold" class="w-full p-2 border rounded">
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Creëren</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
