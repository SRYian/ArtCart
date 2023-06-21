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
                <h3 class="font-bold">Penjual 01</h3>
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
        <tbody>
            @foreach ($products as $product)
            <tr class="bg-gray-50 border-b hover:bg-gray-100">
                <td class="px-6 py-4">{{ $product->getName() }}</td>
                <td class="px-6 py-4">{{ $product->getPrice() }}</td>
                <td class="px-6 py-4">{{ $product->getStock() }} </td>
                <td class="px-6 py-4">
                    <a href="/seller/product/edit/{{$product->getId()->id()}}">
                        <button class="bluebutton text-white">EDIT</button>
                    </a>
                    <a href="">
                        <button class="redbutton text-white">REMOVE</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/home">
        <button type="submit" class="greyButton">HOME</button>
    </a>

</body>

</html>