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
        <div class="flex py-4 px-10 blueBG rounded-sm text-xl text-gray-200">
            ORDER STATUS
        </div>
    </section>

    <div class="grid grid-cols-3 gap-4 justify-around p-10">
        <div class="col-span-2">
            <h5 class="mb-2 text-2xl font-bold tracking-tight bluefont">CURRENT ORDER QUEUE</h5>
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

                        <td class="px-6 py-4">{{ $order->name }}</td>
                        <td class="px-6 py-4">{{ $order->price }}</td>
                        <td class="px-6 py-4">{{ $order->qty }}</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                @switch($order->status)
                                    @case('SELESAI')
                                        <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div>
                                        @break
                                        
                                    @case('BELUM SELESAI')
                                        <div class="h-2.5 w-2.5 rounded-full bg-orange-500 mr-2"></div>
                                        @break
                                
                                    @case('PROSES')
                                        <div class="h-2.5 w-2.5 rounded-full bg-orange-500 mr-2"></div>
                                        @break
                                    @case('PENGIRIMAN')
                                        <div class="h-2.5 w-2.5 rounded-full bg-blue-500 mr-2"></div>
                                        @break
                                
                                    @default
                                        <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div>

                                @endswitch
                                 {{ $order->status }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <button type="submit" class="greyButton">CONFIRM</button>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


    </div>
</body>

</html>