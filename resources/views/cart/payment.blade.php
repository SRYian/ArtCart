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
            STEP 3/3
        </div>
    </section>

    <div class="grid grid-cols-3 gap-4 justify-around p-10">
        <div class="col-span-2">

            <h5 class="mb-2 text-2xl font-bold tracking-tight bluefont">CART</h5>
            <form class="my-10 w-1/3">
                <div class="flex flex-col space-y-2">
                    <label for="courier">Courier</label>
                    <select name="delivery" id="delivery" class="px-2 py-4 rounded-md">
                        <option value="japanm">知の名持</option>
                        <option value="albayar">Albayar</option>
                        <option value="gobek">印度尼西亚 gobek</option>
                    </select>
                </div>
            </form>
            <button type="submit" class="greyButton">BACK</button>
        </div>
        <div class="col-span-1 max-w-sm bg-gray-200 rounded-lg p-12 flex flex-col space-y-10 justify-start shadow-md">
            <p class="font-bold">SUMMARY</p>
            <p>Delivery: Rp0</p>
            <p>Coupon: -Rp72.000,00</p>
            <p>Total: Rp0</p>
            <button type="submit" class="greyButton">PAY</button>
        </div>

    </div>
</body>

</html>