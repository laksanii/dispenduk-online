<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disdukcapil Kabupaten/Kota</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/3e53fcc07c.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('dispenduk.components.navbar')


    <main class="px-10 xl:px-[6rem] pb-7">
        <div class="header py-4">
            {{ $header }}
        </div>
        <div class="announcement border-4 rounded-lg border-sky-400 text-center hidden">
            <div class="bg-sky-400 w-[50%] mx-auto py-1 text-white font-semibold tracking-wider rounded-b-md text-xl">
                Pengumuman
            </div>
            <div class="message text-center my-7 text-lg px-24 text-violet-400 font-medium">
                Untuk setiap permohonan layanan harap ditunggu dan jangan melakukan permohonan lebih dari satu kali
            </div>
        </div>
        {{ $slot }}
    </main>
</body>

</html>
