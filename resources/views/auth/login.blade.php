<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="absolute h-screen w-screen bg-[url('/public/img/bg.png')] bg-cover  ">ssss</div>

    <div class="absolute flex items-center justify-center h-screen w-screen backdrop-blur-sm">
        <div class="flex flex-col justify-items-center">
            <form class="max-w-screen-sm mx-auto bg-gray-100 p-8 px-16 rounded-md shadow-md shadow-gray-50 bg-[url('../assets/bear.png)]" action="{{ route('login') }}" method="Post" onSubmit={Auth}>

                <h3 class="text-3xl bluefont font-bold text-center py-2">
                    MEMBER LOGIN
                </h3>
                <div class="flex flex-col text-gray-400 py-2">
                    <label class="text-gray-500  font-semibold text-left" htmlFor="">
                        Email
                    </label>
                    <input class="rounded-md text-gray-500 bg-gray-300 mt-2 p-1 focus:border-x-green-400 focus:bg-gray-400 focus:outline-none " type="text" placeholder="email" value="" name="email" id="email" required />
                </div>
                <div class="flex flex-col text-gray-400 py-2 ">
                    <label class="text-gray-500 font-semibold text-left" htmlFor="">
                        Password
                    </label>
                    <input class="rounded-md text-gray-500 bg-gray-300 mt-2 p-1 focus:border-x-green-400 focus:bg-gray-400 focus:outline-none " type="password" placeholder="password" value="" name="password" id="password" required />
                </div>
                <button type="submit" class="bluebutton w-full my-9 py-2 bg-green-400 shadow-md hover:bg-green-500 shadow-blue-500/50 hover:shadow-blue-500/40 text-white font-semibold rounded-full border-none focus:outline-none">
                    Log In
                </button>
            </form>
        </div>
    </div>

</body>

</html>
