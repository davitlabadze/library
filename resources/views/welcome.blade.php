<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Library</title>
</head>

<body class="bg-orange-100">
    <div class="mt-12">
        <nav class="flex justify-between px-24">
            <h1 class="text-3xl font-black">E-Library</h1>
            <div class="flex space-x-5">
                <div>text</div>
                <img src="{{ asset('image/avatar.jpeg') }}" class="w-32 h-auto rounded-full" alt="">

            </div>
            {{-- <div>
                <img src="" alt="">

            </div> --}}
        </nav>
    </div>
</body>

</html>
