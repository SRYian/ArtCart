<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller add coupon</title>
    @vite('resources/css/app.css')

</head>

<body>
    <x-_navigation.navbar></x-_navigation.navbar>

    <section class="mt-40">

    </section>

    <div class="flex flex-col items-center justify-around p-10">

        <h5 class="mb-2 text-2xl font-bold tracking-tight bluefont">ADD NEW COUPON CODE</h5>
        <form id="input" method="POST" class="my-10">
            <div class="flex space-x-2 justify-center">
                <div class="flex flex-col space-y-2">
                    <label for="couponCode">Code</label>
                    <input required name="couponCode" id="code" class="px-2 py-4 rounded-md bg-gray-200 focus:outline-none focus:bg-gray-300">

                    <label for="maxuse">Max uses</label>
                    <input type="number" name="maxUse" class="px-2 py-4 bg-gray-200  border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500" placeholder="1" required>

                    <label for="price_cut">Price</label>
                    <input required name="priceCut" id="price_cut" class="px-2 py-4 rounded-md bg-gray-200 focus:outline-none focus:bg-gray-300">

                    <label for="valid_date">Valid Until</label>
                    <input type="date" id="validDate" name="valid_date" class="px-2 py-4 rounded-md bg-gray-200 focus:outline-none focus:bg-gray-300" value="2023-07-22" min="2023-01-01" max="2023-12-31">
                </div>
            </div>
        </form>
    </div>
    <div class="flex m-4 justify-around">
        <a href="/seller">
            <button type="submit" class="greyButton">BACK</button>
        </a>
        <button type="submit" form="input" class="greyButton">OK</button>
    </div>
</body>

</html>