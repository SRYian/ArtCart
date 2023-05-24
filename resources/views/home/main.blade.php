<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')

</head>

<body>
    <x-_navigation.navbar></x-_navigation.navbar>
    <section id="herosection" class="bg-white bg-[url('/public/img/bg.png')] bg-cover">
        <div class="backdrop-blur-sm grid max-w-screen-xl px-4 py-8 mt-20 mx-auto lg:gap-8 xl:gap-0 lg:py-32 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl text-white font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">Welcome To ArtCart</h1>
                <p class="max-w-2xl mb-6 font-light text-white lg:mb-8 md:text-lg lg:text-xl">Creator Market Expo Indonesia</p>
                <a href="/login" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white hover:text-white rounded-lg bluebutton">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>


            </div>
        </div>
    </section>
    <x-_navigation.searchbar></x-_navigation.searchbar>
    <section id="main" class="px-10 grid lg:grid-cols-4 gap-4">
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
    </section>
    <section id="footer" class="my-20">
        <div class="w-full flex justify-center items-center">
            <svg width="56" height="45" viewBox="0 0 56 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M56 5.33782C53.9406 6.23984 51.7284 6.84932 49.4026 7.1248C51.8023 5.70544 53.5977 3.47153 54.4536 0.839901C52.199 2.16365 49.7315 3.09543 47.1583 3.59473C45.4279 1.76841 43.1359 0.5579 40.6382 0.151131C38.1404 -0.255637 35.5767 0.164095 33.3451 1.34516C31.1134 2.52623 29.3387 4.40255 28.2963 6.68282C27.254 8.96309 27.0025 11.5197 27.5807 13.9558C23.0124 13.7291 18.5433 12.5553 14.4635 10.5108C10.3837 8.46628 6.78442 5.59663 3.89923 2.0881C2.91271 3.77025 2.34546 5.72057 2.34546 7.79766C2.34436 9.66752 2.81019 11.5087 3.70163 13.1579C4.59307 14.8072 5.88254 16.2134 7.45565 17.2518C5.63126 17.1944 3.84713 16.7072 2.25174 15.8305V15.9768C2.25156 18.5994 3.16929 21.1412 4.84921 23.171C6.52914 25.2009 8.86779 26.5937 11.4683 27.1131C9.77591 27.5659 8.00154 27.6326 6.27922 27.3082C7.01294 29.5647 8.44216 31.538 10.3668 32.9517C12.2914 34.3654 14.6151 35.1489 17.0126 35.1923C12.9428 38.3504 7.91657 40.0635 2.74254 40.0559C1.82601 40.0562 0.910256 40.0033 0 39.8975C5.25195 43.2354 11.3656 45.0069 17.6094 45C38.7457 45 50.3004 27.6958 50.3004 12.6881C50.3004 12.2005 50.288 11.708 50.2658 11.2205C52.5134 9.61383 54.4534 7.62432 55.9951 5.34514L56 5.33782Z" fill="#545454" />
            </svg>
            <p>@ASDADAADA</p>
        </div>

    </section>
</body>

</html>