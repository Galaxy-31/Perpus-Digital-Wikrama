@extends('layouts.index')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <img src="assets/img/wikrama.JPG" alt="wikrama" class="bright" style="width: 1400px; height: 640px;" /> -->

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;}video{max-width:100%;}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                overflow: hidden;
                background-color: #ffffff; /* Warna latar belakang putih */
            }
            .bright {
                filter: brightness(60%);
            }
            .left-image {
                float: left;
                margin-left: 40px;
                display: flex;
            }
            .login {
                padding-right: 50px;
                padding-top: 50px;
            }
            .datang {
                margin-top: 40px;
                padding-top: 20%;
                color: navy;
            }
            .populer {
                text-align: left;
                margin-left: 50px;
            }
            header {
                border-bottom: 1px solid gray;
                width: 100%;
                margin-top: -90px; /* Contoh nilai negatif untuk membuat border lebih rapat ke atas */
                padding-top: 10px; /* Atur padding atas jika diperlukan */
            }
            * {
                box-sizing: border-box;
            }

            /* Kelas style untuk container */
            .search-container {
                display: flex; /* Menerapkan flexbox */
                margin: auto; /* Posisi container ke tengah */
                max-width: 500px; /* Perpanjang kotak pencarian */
            }

            .search-container input[type=text] {
                padding-left: 30px;
                padding-right: 100px;
                font-size: 15px;
                border: 1px solid grey;
                flex: 1; /* Input akan mengambil sebanyak mungkin ruang tersedia */
                border-top-left-radius: 30px; /* Perbesar radius sudut kiri atas */
                border-bottom-left-radius: 30px; /* Perbesar radius sudut kiri bawah */
            }   

            .search-container button {
                padding: 15px 20px; /* Padding atas dan bawah 15px, padding kiri dan kanan 20px */
                background: #ffffff; /* Warna latar belakang putih */
                color: #000000; /* Warna teks hitam */
                font-size: 20px;
                border: 1px solid grey;
                border-left: none;
                cursor: pointer;
                border-top-right-radius: 30px; /* Perbesar radius sudut kanan atas */
                border-bottom-right-radius: 30px; /* Perbesar radius sudut kanan bawah */
            }

            .search-container button:hover {
                background: #f1f1f1; /* Warna latar belakang abu-abu saat hover */
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top sm:items-center py-4 sm:pt-0">
                <div class="left-image hidden fixed top-0 py-4 sm:block" style="display: flex; padding: 20px;">
                    <img src="assets/img/logo_wikrama.png" alt="logo" style="width: 95px; height: 95px; margin-top: 13px; margin-left: 10px;">
                    <div class="ml-2">
                        <h2 style="font-size: 28px; font-weight: bold; margin-bottom: 4px; margin-left: 15px; padding-top: 10px;">SMK WIKRAMA 1 GARUT</h2>
                        <h2 style="font-size: 20px; margin-top: 4px; margin-left: 15px;">PERPUSTAKAAN DIGITAL</h2>
                    </div>
                </div>

                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block login" style="display: flex;">
                        @auth
                            <a href="{{ url('/home') }}" class="text-lg">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="mr-2 text-lg">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-lg">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                
            <div class="mx-auto mt-8">
                <div class="datang flex justify-center">
                    <h2>SELAMAT DATANG!</h2>
                </div>
                <div class="flex justify-center">
                    <h2>PERPUSTAKAAN DIGITAL<br/>SMK WIKRAMA 1 GARUT</h2>
                </div>
                <div class="flex justify-center">
                    <div class="search-container">
                        <input type="text" placeholder="Cari Judul Buku" name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="populer">
            <h2>Paling Populer</h2>
        </div>       
    </body>
</html>