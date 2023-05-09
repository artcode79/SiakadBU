<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Add Mahasiswa</h2>
    </x-slot>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <!-- main -->
                <form action="#" method="post">
                    @csrf
                    <div class="mb-6">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-100"
                            placeholder="Nama">
                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                        <br>
                        <label for="nim"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIM</label>
                        <input type="text" name="nim" id="nim"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-100"
                            placeholder="NIM">
                        @error('nim') <span class="text-red-500">{{ $message }}</span> @enderror
                        <br>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-100"
                            placeholder="Email">
                        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                        <button type="submit" class="btn btn-outline btn-primary btn-xs sm:btn-sm md:btn-md lg:btn-lg">
                            <i class="bi bi-arrow-right"> submit
                            </i></button>
                    </div>
            </div>
        </div>

</x-app-layout>