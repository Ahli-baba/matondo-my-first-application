<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Tailwind CSS Layout</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <header class="bg-white shadow-md">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-xl font-bold text-gray-800">My Website</a>

            <div class="flex items-center space-x-4">
                <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md font-medium">Home</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md font-medium">About</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md font-medium">Contact</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-semibold text-gray-700 mb-2">
                {{ $heading }}
            </h1>
        
        </div>
            {{ $slot }}
    </main>

    

</body>
</html>