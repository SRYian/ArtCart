<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard</title>
    @vite('resources/css/app.css')

</head>

<body>
    <x-_navigation.navbar></x-_navigation.navbar>

    <section class="mt-40">
        <div class="flex items-center justify-start max-w-lg">
            <div class="flex items-center justify-start bg-white p-3 m-3 space-x-3 rounded-md border-blue-400 border-2 shadow-md ">
                <a href="/store">
                    <img class="rounded-lg object-cover w-20 h-20 shadow-md" src="/img/placeholder_img.png" alt="" />
                </a>
                <h3 class="font-bold">{{ $seller->shop_name }}</h3>
            </div>
            <div class="flex flex-col space-y-2">
                <a href="/seller/add-coupon" class="greyButton border-1 px-4 py-2">NEW COUPON</a>
                <a href="/seller/add-product" class="greyButton border-1 px-4 py-2">NEW ITEM</a>
            </div>
        </div>
    </section>

    <table class="table-fixed border-collapse w-full text-left text-gray-500 my-10">
        <thead class="text-xs text-gray-700 bg-gray-200 uppercase">
            <tr>
                <th class="px-6 py-3 border-b-4 border-blue-500">Product</th>
                <th class="px-6 py-3 border-b-4 border-blue-500">Price</th>
                <th class="px-6 py-3 border-b-4 border-blue-500">Stock</th>
                <th class="px-6 py-3 border-b-4 border-blue-500">Action</th>
            </tr>
        </thead>

{{--        <tbody>--}}
{{--            <tr class="bg-gray-50 border-b hover:bg-gray-100">--}}
{{--                <td class="px-6 py-4">The Sliding Mr. Bones (Next Stop, Pottersville)</td>--}}
{{--                <td class="px-6 py-4">Rp75.000,00</td>--}}
{{--                <td class="px-6 py-4">20 </td>--}}
{{--                <td class="px-6 py-4">--}}
{{--                    <button class="bluebutton text-white">EDIT</button>--}}
{{--                    <button class="redbutton text-white">REMOVE</button>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        </tbody>--}}
    </table>
    <button type="submit" class="greyButton">BACK</button>

</body>

</html>
