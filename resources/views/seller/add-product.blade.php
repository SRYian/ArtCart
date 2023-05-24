<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller add product</title>
    @vite('resources/css/app.css')

</head>

<body>
    <x-_navigation.navbar></x-_navigation.navbar>

    <section class="mt-40">

    </section>

    <div class="flex flex-col gap-4 items-center justify-evenly p-10">
        <h5 class="mb-2 text-2xl font-bold tracking-tight bluefont">ADD NEW PRODUCT</h5>
        <form class="w-100" id="input" class="my-10">
            <div class="flex w-100 space-x-2 justify-evenly">
                <div class="flex items-start justify-center">
                    <label for="dropzone-file" class="p-4 flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 ">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>


                <div class="flex flex-col space-y-2">
                    <label for="name">Name</label>
                    <input required name="name" id="name" class="px-2 py-4 rounded-md bg-gray-200 focus:outline-none focus:bg-gray-300">
                    </input>
                    <label for="quality">Quality</label>
                    <select required name="quality" id="quality" class="px-2 py-4 rounded-md">
                        <option value="new">New</option>
                        <option value="old">Old</option>
                    </select>
                    <label for="price">Price</label>
                    <input required name="price" id="price" class="px-2 py-4 rounded-md bg-gray-200 focus:outline-none focus:bg-gray-300">
                    </input>
                    <label for="1ty">Quantity</label>
                    <input type="number" id="qty" class="px-2 py-4 bg-gray-200  border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="1" required>

                </div>
            </div>
        </form>
    </div>
    <div class="flex m-4 justify-around">
        <button type="submit" class="greyButton">BACK</button>
        <button type="submit" form="input" class="greyButton">OK</button>
    </div>
</body>

</html>