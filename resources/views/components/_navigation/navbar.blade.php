<nav class="bg-white px-2 sm:px-4 py-3 fixed w-full z-20 top-0 left-0 border-b-2 border-blue-500">
    <h3 class="bluefont"></h3>

    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/" class="flex items-center">
            <!-- <img src="../logo/bear.png" class="mr-3 h-6 sm:h-9" alt="Logo" /> -->
            <span class="bluefont self-center text-xl font-semibold whitespace-nowrap">
                Circle Name
            </span>
        </a>
        <div class="flex md:order-2 space-x-2">
            <button type="button" class="text-white bluebutton focus:ring-blue-300 font-medium rounded-lg text-base px-8 py-2.5 text-center mr-3 md:mr-0" onClick={Login}>
                Log In
            </button>
            <button type="button" class="text-white bg-slate-100">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="" viewBox="0 0 20 20">
                    <path fillRule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clipRule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                <li>
                    <a href="/home" class="text-base font-semibold bluefont inline-block p-4 px-10 py-4 rounded-t-lg border-b-2 border-transparent hover:text-blue-500 hover:border-blue-400" id="contacts-tab" aria-current="page">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="text-base font-semibold bluefont inline-block p-4 px-10 py-4 rounded-t-lg border-b-2 border-transparent hover:text-blue-500 hover:border-blue-400 cursor-not-allowed" id="contacts-tab">
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="#" class="text-base font-semibold bluefont inline-block p-4 px-10 py-4 rounded-t-lg border-b-2 border-transparent hover:text-blue-500 hover:border-blue-400 cursor-not-allowed" id="contacts-tab">
                        Member
                    </a>
                </li>
                <li>
                    <a href="#" class="text-base font-semibold bluefont inline-block p-4 px-10 py-4 rounded-t-lg border-b-2 border-transparent hover:text-blue-500 hover:border-blue-400 cursor-not-allowed" id="contacts-tab">
                        Store
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>