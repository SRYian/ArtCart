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

    <section class="mt-40">

    </section>
    <div class="flex py-4 px-10 blueBG rounded-sm text-xl text-gray-200">
        STEP 1/3
    </div>
    <div class="grid grid-cols-3 gap-4 justify-around p-10">
        <div class="col-span-2">

            <h5 class="mb-2 text-2xl font-bold tracking-tight bluefont">CART</h5>
            <table class="table-fixed border-collapse w-full text-left text-gray-500 my-10">
                <thead class="text-xs text-gray-700 bg-gray-200 uppercase">
                    <tr>
                        <th class="px-6 py-3 border-b-4 border-blue-500">Product</th>
                        <th class="px-6 py-3 border-b-4 border-blue-500">Price</th>
                        <th class="px-6 py-3 border-b-4 border-blue-500">Qty</th>
                        <th class="px-6 py-3 border-b-4 border-blue-500">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-50 border-b hover:bg-gray-100">
                        <td class="px-6 py-4">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                        <td class="px-6 py-4">Rp75.000,00</td>
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">Rp75.000,00</td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="greyButton">BACK</button>
        </div>
        <div class="col-span-1 max-w-sm bg-gray-200 rounded-lg p-12 flex flex-col space-y-10 justify-center shadow-md">
            <p class="font-bold">SUMMARY</p>
            <p>Items: 1</p>
            <p>Total: Rp72.000,00</p>
            <div class="relative flex space-x-3">
                <input type="text" id="default-review" class="block w-full p-4 text-sm text-gray-900 rounded-none bg-gray-300 focus:outline-none" placeholder="Enter coupon code">
                <button type="submit" class="greyButton ">Submit</button>
            </div>
            <button type="submit" class="greyButton">NEXT</button>
        </div>

    </div>
</body>

</html>