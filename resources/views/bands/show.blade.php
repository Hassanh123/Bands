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
        <h1 class="text-4xl font-bold mb-4 text-center">Band Informatie</h1>

        <div class="mt-8">
            <table class="table-auto w-full">
                <tbody>
                    <tr>
                        <td class="font-bold">Naam:</td>
                        <td>{{ $band->name }}</td>
                    </tr>
                    <tr>
                        <td class="font-bold">Genre:</td>
                        <td>{{ $band->genre }}</td>
                    </tr>
                    <tr>
                        <td class="font-bold">Oprichtingsjaar:</td>
                        <td>{{ $band->founded }}</td>
                    </tr>
                    <tr>
                        <td class="font-bold">Actief tot:</td>
                        <td>{{ $band->active_till }}</td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>

</body>
</html>
