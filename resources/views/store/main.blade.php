<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    @vite('resources/css/app.css')

</head>

<body>
    <x-_navigation.navbar></x-_navigation.navbar>

    <section class="mt-40">
        <div class="flex items-center justify-start bg-white p-3 m-3 space-x-3 rounded-md border-blue-400 border-2 shadow-md">
            <a href="#">
                <img class="rounded-lg object-cover w-20 shadow-md" src="/img/placeholder_img.png" alt="" />
            </a>
            <h3 class="font-bold">Penjual 01</h3>
        </div>
        <div class="grid grid-cols-4 gap-4 justify-evenly px-4 py-8 my-20 bg-slate-200">
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md">
                <a href="#">
                    <div class="max-w-sm max-h-96">
                        <img class="rounded-t-lg object-cover w-96" src="/img/placeholder_img.png" alt="" />
                    </div>
                </a>

                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight bluefont">WEED ALBUM</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">Rp 75.000,00</p>
                    <p class="mb-3 font-normal text-gray-700">Sumatera Utara</p>
                    <p class="mb-3 font-normal text-gray-700">Terjual 10</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>