<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-_navigation.navbar></x-_navigation.navbar>
    <div class="grid grid-cols-3 gap-4 justify-evenly px-4 my-40">
        <section>
            <a href="#">
                <img class="rounded-lg object-cover w-96 shadow-md" src="/img/placeholder_img.png" alt="" />
            </a>
        </section>
        <div>
            <section>
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight bluefont">WEED ALBUM</h5>
                </a>
                <div class="my-6">
                    <p class="mb-3 font-normal text-gray-700">Rp 75.000,00</p>
                    <p class="mb-3 font-normal text-gray-700">Stock: 50000</p>
                </div>
                <div class="my-10">
                    <a href="#" class="text-base font-semibold bluefont inline-block p-4 px-10 py-4 rounded-t-lg border-b-2 border-transparent hover:text-blue-500 hover:border-blue-400 cursor-not-allowed" id="contacts-tab">
                        Detail
                    </a>
                    <p class="mb-3 font-normal text-gray-700">Category: Album</p>
                    <p class="mb-3 font-normal text-gray-700">Weight: 1000 KG</p>
                    <p class="mb-3 font-normal text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non tellus proin tortor, feugiat rutrum tortor cras semper. Egestas penatibus curabitur mollis bibendum viverra in eu sit. Condimentum leo scelerisque scelerisque blandit eget aliquam mollis urna, quis. Mattis phasellus eget sed quis cras dolor gravida.</p>
                </div>
            </section>
            <section>
                <div class="flex align-middle justify-start bg-white p-3 space-x-3 rounded-md border-blue-400 border-2 shadow-md">
                    <a href="#">
                        <img class="rounded-lg object-cover w-20 shadow-md" src="/img/placeholder_img.png" alt="" />
                    </a>
                    <p class="font-bold">Penjual 01</p>
                </div>
            </section>
            <section>
                <div class="my-10">
                    <a href="#" class="text-base font-semibold bluefont inline-block p-4 px-10 py-4 rounded-t-lg border-b-2 border-transparent hover:text-blue-500 hover:border-blue-400 cursor-not-allowed" id="contacts-tab">
                        Review
                    </a>
                </div>
                <form class=" mb-10 mx-3">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative ">
                        <input type="text" id="default-review" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-200 focus:outline-none focus:bg-gray-300 border-transparent" placeholder="leave a short review" required>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 px-4 py-1 bluebutton">Submit</button>
                    </div>
                </form>
                <!-- ini element yg akan di repeat -->
                <div class="flex flex-col align-middle justify-start bg-slate-200 p-3 space-x-3 rounded-md mx-3 border-blue-400 border-2">
                    <div class="p-4 space-x-2 flex items-center justify-start">
                        <a href="#">
                            <img class="rounded-full object-cover w-20 shadow-md" src="/img/placeholder_img.png" alt="" />
                        </a>
                        <p class="font-bold">Joko eksentrik</p>
                    </div>
                    <p class="font-normal p-5 bg-slate-300 rounded-md">Weedy is great 10/10</p>
                </div>
            </section>

        </div>
        <section>
            <div class="max-w-sm bg-gray-300 rounded-lg p-12 flex flex-col space-y-10 justify-center shadow-md">
                <p class="font-bold">SUMMARY</p>
                <p>Subtotal: Rp72.000,00</p>
                <button type="submit" class="greyButton">BUY</button>
            </div>
        </section>
    </div>
</body>

</html>