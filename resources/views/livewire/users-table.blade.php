<div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 px-3">
            
            <div>
                <div class="py-2 w-full sm:px-6 lg:px-8 flex">
                    <div class="w-5/6 mx-1">
                        <input wire:model.debounce.300ms="search" type="text" class="w-full rounded-lg" placeholder="Search Customers...">
                    </div>
                    <div class="mx-1">                        
                        <select wire:model="orderBy" class="rounded-lg">
                            <option value="id">ID</option>
                            <option value="name">Name</option>
                            <option value="email">Email</option>
                            <option value="created_at">Date</option>
                        </select>
                    </div>
                    <div class=" mx-1">
                        <select wire:model="orderAsc" class="rounded-lg">
                            <option value="1">Ascending</option>
                            <option value="0">Descending</option>
                        </select>
                    </div>
                    <div class="mx-1">
                        <select wire:model="perPage" class="rounded-lg">
                            <option>5</option>
                            <option>10</option>
                            <option>15</option>
                        </select>
                    </div>
                </div>

                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Customer ID
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Purchase Date
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $user->id }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $user->name }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $user->email }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">To{{ $user->created_at->diffForHumans() }}</div>
                                </td>
                            </tr>
                        @endforeach
                        <!-- More people... -->
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $users->links() }}
                </div>
            </div>

            </div>

        </div>
    </div>
</div>
