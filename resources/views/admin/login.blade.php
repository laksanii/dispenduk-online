<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">


    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="flex justify-center items-center h-screen bg-gray-200 px-6">
        <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
            <div class="flex justify-center gap-3 items-center">
                <img src="{{ asset('logo.png') }}" alt="" class="w-10">
                <span class="text-gray-700 font-semibold text-2xl">Admin Dispenduk Bangkalan</span>
            </div>

            @foreach ($errors as $error)
                $error
            @endforeach

            <form class="mt-4" action="/admin/login" method="POST">
                <label class="block">
                    <span class="text-gray-700 text-sm">Email</span>
                    <input type="email" name="email" class="form-input mt-1 block w-full rounded-md focus:border-indigo-600">
                </label>

                <label class="block mt-3">
                    <span class="text-gray-700 text-sm">Password</span>
                    <input type="password" name="password" class="form-input mt-1 block w-full rounded-md focus:border-indigo-600">
                </label>

                <div class="mt-6">
                    <button type="submit"
                        class="py-2 px-4 text-center bg-indigo-600 rounded-md w-full text-white text-sm hover:bg-indigo-500">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
