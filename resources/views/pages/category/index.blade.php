<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Product') }}
        </h2>
    </x-slot>

    <!-- DataTables 
    <x-slot name="script">
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
    </x-slot> -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10 ml-4 lg:ml-0">
                <a href="{{ route('dashboard.category.create') }}" class="bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700">+ Tambah Category</a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <!-- <table class="w-full table-auto">
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
                                    <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 transition duration-500 ease select-none hover:bg-gray-800 hover:border-gray-800 focus:outline-none focus:shadow-outline" href="{{ route('dashboard.category.edit', $item->id) }}">Edit</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center py-2">Data Tidak Tersedia</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table> -->
                    <section class="antialiased bg-gray-100 text-gray-600 h-screen px-4">
                        <div class="flex flex-col justify-center h-full">
                            <!-- Table -->
                            <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                                <header class="px-5 py-4 border-b border-gray-100">
                                    <h2 class="font-semibold text-gray-800">Customers</h2>
                                </header>
                                <div class="p-3">
                                    <div class="overflow-x-auto">
                                        <table class="table-auto w-full">
                                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                                <tr>
                                                    <th class="p-2 whitespace-nowrap">
                                                        <div class="font-semibold text-left">Name</div>
                                                    </th>
                                                    <th class="p-2 whitespace-nowrap">
                                                        <div class="font-semibold text-left">Email</div>
                                                    </th>
                                                    <th class="p-2 whitespace-nowrap">
                                                        <div class="font-semibold text-left">Spent</div>
                                                    </th>
                                                    <th class="p-2 whitespace-nowrap">
                                                        <div class="font-semibold text-center">Country</div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-sm divide-y divide-gray-100">
                                                <tr>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg" width="40" height="40" alt="Alex Shatov"></div>
                                                            <div class="font-medium text-gray-800">Alex Shatov</div>
                                                        </div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-left">alexshatov@gmail.com</div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-left font-medium text-green-500">$2,890.66</div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-lg text-center">🇺🇸</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-06.jpg" width="40" height="40" alt="Philip Harbach"></div>
                                                            <div class="font-medium text-gray-800">Philip Harbach</div>
                                                        </div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-left">philip.h@gmail.com</div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-left font-medium text-green-500">$2,767.04</div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-lg text-center">🇩🇪</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-07.jpg" width="40" height="40" alt="Mirko Fisuk"></div>
                                                            <div class="font-medium text-gray-800">Mirko Fisuk</div>
                                                        </div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-left">mirkofisuk@gmail.com</div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-left font-medium text-green-500">$2,996.00</div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-lg text-center">🇫🇷</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-08.jpg" width="40" height="40" alt="Olga Semklo"></div>
                                                            <div class="font-medium text-gray-800">Olga Semklo</div>
                                                        </div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-left">olga.s@cool.design</div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-left font-medium text-green-500">$1,220.66</div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-lg text-center">🇮🇹</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-09.jpg" width="40" height="40" alt="Burak Long"></div>
                                                            <div class="font-medium text-gray-800">Burak Long</div>
                                                        </div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-left">longburak@gmail.com</div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-left font-medium text-green-500">$1,890.66</div>
                                                    </td>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="text-lg text-center">🇬🇧</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>