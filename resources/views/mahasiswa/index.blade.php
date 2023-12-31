<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Data Mahasiswa") }}
                </div>
            </div>
        </div>
    </div>


        <div class="py-1">
            <div class="max-w-7xl mx-auto  lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h1 class="text-2xl font-semibold mb-4">Daftar Mahasiswa</h1>
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">ID</th>
                                    <th class="border px-4 py-2">NPM</th>
                                    <th class="border px-4 py-2">Nama</th>
                                    <th class="border px-4 py-2">Jurusan</th>
                                    <th class="border px-4 py-2">Dibuat</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($mahasiswa as $mhs)
                                <tr>
                                    <td class="border px-4 py-2">{{ $mhs->id }}</td>
                                    <td class="border px-4 py-2">{{ $mhs->npm }}</td>
                                    <td class="border px-4 py-2">{{ $mhs->nama }}</td>
                                    <td class="border px-4 py-2">{{ $mhs->jurusan }}</td>
                                    <td class="border px-4 py-2">
                                        {{ $mhs->created_at->diffForHumans() }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        

</x-app-layout>
