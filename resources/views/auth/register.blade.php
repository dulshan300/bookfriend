<x-layouts.app>

    @guest

        <x-slot name="header">
           Sign Up
        </x-slot>

        <div class="mt-8">

            <form action="/register" class="space-y-4" method="post">
                @csrf

                <div class="space-y-1">
                    <label for="name" class="block">Your Name</label>
                    <input type="text" name="name" id="name" placeholder="e.g. Michal" class="rounded block w-full">
                </div>
                
                <div class="space-y-1">
                    <label for="email" class="block">Email</label>
                    <input type="email" name="email" id="email" placeholder="e.g. you@emil.com" class="rounded block w-full">
                </div>

                <div class="space-y-1">
                    <label for="password" class="block">Password</label>
                    <input type="password" name="password" id="password"  class="rounded block w-full">
                </div>

                <button type="submit" class="bg-slate-200 px-3 py-2 rounded">
                    Create account
                </button>

            </form>

        </div>

    @endguest

</x-layouts.app>
