<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    @vite('resources/css/app.css')

</head>

<body>
    <x-_navigation.navbar></x-_navigation.navbar>

    <section class="mt-40">
        <div class="flex py-4 px-10 blueBG rounded-sm text-xl text-gray-200">
            STEP 1/3
        </div>
    </section>

    <div class="grid grid-cols-3 gap-4 justify-around p-10">
        <div class="col-span-2">

            <h5 class="mb-2 text-2xl font-bold tracking-tight bluefont">CART</h5>
            <table class="table-fixed border-collapse w-full text-left text-gray-500 my-10">
                <thead class="text-xs text-gray-700 bg-gray-200 uppercase">
                    <tr>
                        <th class="px-6 py-3 border-b-4 border-blue-500">Product</th>
                        <th class="px-6 py-3 border-b-4 border-blue-500">Price</th>
                        <th class="px-6 py-3 border-b-4 border-blue-500">Qty</th>
                        <th class="px-6 py-3 border-b-4 border-blue-500">Status</th>
                        <th class="px-6 py-3 border-b-4 border-blue-500">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)

                    <tr class="bg-gray-50 border-b hover:bg-gray-100">
                        <td class="px-6 py-4">{{$order->name}}</td>
                        <td class="px-6 py-4">{{$order->price}}</td>
                        <td class="px-6 py-4">
                            <input placeholder={{$order->qty}} required type="number" id="first_product" class="bg-gray-200 w-14 border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1" >
                        </td>
                        <td class="px-6 py-4">{{$order->status}}</td>
                        <td class="px-6 py-4">
                            <button class="redbutton text-white">REMOVE</button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <a href="/home">
                <button  type="submit" class="greyButton">BACK</button>
            </a>
        </div>
        <form method="POST" class="col-span-1 max-w-sm bg-gray-200 rounded-lg p-12 flex flex-col space-y-10 justify-start shadow-md">
            <p class="font-bold">SUMMARY</p>
            <p>Items: {{$itemcount}}</p>
            <p>Total: {{$total}}</p>
            <div class="relative flex space-x-3">
                <input type="text" id="default-review" class="block w-full p-4 text-sm text-gray-900 rounded-none bg-gray-300 focus:outline-none" placeholder="Enter coupon code">
                <button type="submit" class="greyButton ">Submit</button>
            </div>
            <a href="/delivery" >
                <button  type="submit" class="greyButton w-full">NEXT</button>
            </a>
        </form>
        

    </div>
</body>

</html>