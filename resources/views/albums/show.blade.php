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
            <h1 class="text-4xl font-bold mb-4 text-center">Album</h1>

            <div class="mt-8">
                <table class="w-full">
                    <tbody>
                        <tr>
                            <td class="font-bold py-2 px-4">Naam:</td>
                            <td class="py-2 px-4">{{ $album->name }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold py-2 px-4">Jaar:</td>
                            <td class="py-2 px-4">{{ $album->year }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold py-2 px-4">Aantal verkocht:</td>
                            <td class="py-2 px-4">{{ $album->times_sold }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
