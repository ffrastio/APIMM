<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Product') }}
        </h2>
    </x-slot>

    {{-- DataTables --}}
    {{-- <x-slot name="script">
        <script>
            //DataTables
            var dataTable = $('#table').DataTable({
                ajax: {
                    url: {!! url()->current() !!},
                },
                colums: [{
                        data: 'id',
                        name: 'id',
                        width: '5%'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: 'false',
                        searchable: 'false',
                        width: '25%'
                    }
                ]
            })
        </script>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('dashboard.category.create') }}"
                    class="bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700">+ Tambah Category</a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <table class="w-full table-auto">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 transition duration-500 ease select-none hover:bg-gray-800 hover:border-gray-800 focus:outline-none focus:shadow-outline"
                                            href="{{ route('dashboard.category.edit', $item->id) }}">Edit</a>
                                    </td>
                                </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
