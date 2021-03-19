<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://unpkg.com/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet" />
    @include('sweetalert::alert')

</head>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7">
    <!--
  UI Design Prototype
  Link : https://dribbble.com/shots/10452538-React-UI-Components
-->
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <!-- JUDUL -->
                    <div class="flex items-center space-x-5">
                        <div
                            class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
                            i
                        </div>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Tambahkan Acara Baru</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">
                                PT. Acara Maju Bersama
                            </p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('event.store') }}">
                        @csrf
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="flex flex-col">
                                    <label class="leading-loose">Nama Acara</label>
                                    <input name="nama_acara" type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="" />
                                </div>

                                <div class="flex items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label class="leading-loose">Mulai</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="text" name="tgl_mulai"
                                                class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                placeholder="2021/12/31" />
                                            <div class="absolute left-3 top-2">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose">Berakhir</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="text" name="tgl_akhir"
                                                class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                                placeholder="2021/12/31" />
                                            <div class="absolute left-3 top-2">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Deskripsi Acara</label>
                                    <input type="text" name="desc_acara"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        placeholder="Optional" />
                                </div>
                            </div>
                            <div class="pt-4 flex items-center space-x-4">
                                <a href="{{ route('event.index') }}"
                                    class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">

                                    List Data
                                </a>
                                <input type="submit" value="save"
                                    class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>
