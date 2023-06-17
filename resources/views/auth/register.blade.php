<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="absolute h-screen w-screen bg-[url('/public/img/bg.png')] bg-cover">ssss</div>

    <div class="absolute flex items-center justify-center h-screen w-screen backdrop-blur-sm">
        <div class="flex flex-col justify-items-center">
            <form class="max-w-screen-sm mx-auto bg-gray-100 p-8 px-16 rounded-md shadow-md shadow-gray-50 bg-[url('../assets/bear.png)]" action="" onSubmit={Auth}>

                <h3 class="text-3xl bluefont font-bold text-center py-2">
                    MEMBER
                    <br>
                    REGISTRATION
                </h3>
                <div class="flex space-x-4">
                    <div>
                        <div class="flex flex-col text-gray-400 py-2">
                            <label class="text-gray-500  font-semibold text-left" htmlFor="">
                                Username
                            </label>
                            <input class="rounded-md text-gray-500 bg-gray-300 mt-2 p-1 focus:border-x-green-400 focus:bg-gray-400 focus:outline-none " type="text" placeholder="username" value="ssss" name="" id="" required />
                        </div>
                        <div class="flex flex-col text-gray-400 py-2 ">
                            <label class="text-gray-500 font-semibold text-left" htmlFor="">
                                Password
                            </label>
                            <input class="rounded-md text-gray-500 bg-gray-300 mt-2 p-1 focus:border-x-green-400 focus:bg-gray-400 focus:outline-none " type="password" placeholder="password" value="ssss" name="" id="" required />
                        </div>
                        <div class="flex flex-col text-gray-400 py-2 ">
                            <label class="text-gray-500 font-semibold text-left" htmlFor="">
                                Confirm Password
                            </label>
                            <input class="rounded-md text-gray-500 bg-gray-300 mt-2 p-1 focus:border-x-green-400 focus:bg-gray-400 focus:outline-none " type="password" placeholder="password" value="ssss" name="" id="" required />
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col text-gray-400 py-2 ">
                            <label class="text-gray-500 font-semibold text-left" htmlFor="">
                                Type
                            </label>
                            <select required name="account_type" id="account_type" class="mt-2 p-1 bg-gray-300 rounded-md">
                                <option value="regular" class="text-gray-500">Regular</option>
                                <option value="seller" class="text-gray-500">Seller</option>
                            </select>
                        </div>
                        <div class="flex flex-col text-gray-400 py-2 ">
                            <label class="text-gray-500 font-semibold text-left" htmlFor="">
                                City
                            </label>
                            <select required name="account_city" id="account_city" class="mt-2 p-1 bg-gray-300 rounded-md">
                                <option value="Jakarta" class="text-gray-500">Jakarta</option>
                                <option value="Surabaya" class="text-gray-500">Surabaya</option>
                            </select>
                        </div>
                        <div class="flex flex-col text-gray-400 py-2 ">
                            <label class="text-gray-500 font-semibold text-left" htmlFor="">
                                Address
                            </label>
                            <input class="rounded-md text-gray-500 bg-gray-300 mt-2 p-1 focus:border-x-green-400 focus:bg-gray-400 focus:outline-none " type="input" placeholder="Jl. Mandiri 1" value="ssss" name="" id="" required />
                        </div>
                    </div>
                </div>
                
                
                <button type="submit" class="bluebutton w-full my-9 py-2 bg-green-400 shadow-md hover:bg-green-500 shadow-blue-500/50 hover:shadow-blue-500/40 text-white font-semibold rounded-full border-none focus:outline-none">
                    Register
                </button>
            </form>
        </div>
    </div>
</body>

</html>