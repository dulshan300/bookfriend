<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bookfriends</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-inter">

    <div class="max-w-4xl mx-auto px-6 grid grid-cols-8 gap-12 mt-16">


        <div class="col-span-2 border-r border-slate-200 space-y-6">

            @auth



                <ul>
                    <li>
                        <span
                            class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1">{{ auth()->user()->name }}</span>
                    </li>
                    <li>
                        <a class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1" href="#">Feed</a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1" href="#">My books</a>
                    </li>
                    <li>
                        <a class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1" href="#">Add a book</a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1"
                            href="#">Friend</a>
                    </li>

                </ul>

                <ul>
                    <li>
                        <a class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1"
                            href="#">Logout</a>
                    </li>
                </ul>
            @endauth

            @guest

            <ul>
                <li>
                    <span
                        class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1">Home</span>
                </li>
               
            </ul>

            <ul>
                <li>
                    <a class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1"
                        href="#">Login</a>
                </li>
                <li>
                    <a class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1"
                        href="{{ route('register') }}">Register</a>
                </li>
            </ul>
                
            @endguest


        </div>


        <div class="col-span-6">

            @isset($header)
                <h1 class="font-bold text-2xl text-slate-800">

                    {{ $header }}

                </h1>
            @endisset


            {{ $slot }}



        </div>
    </div>




</body>

</html>
