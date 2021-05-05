<div class="flex flex-col px-4 mx-auto ">
    <div class="w-full overflow-x-auto">
        <button class="px-4 py-2 font-semibold tracking-wider text-blue-600 bg-blue-100 rounded hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Create post</button>
    </div>
    <div class='w-full overflow-x-auto'>

        <!-- Table -->
        <table
            class='w-full max-w-4xl mx-auto overflow-hidden bg-white divide-y divide-gray-300 rounded-lg shadow-lg whitespace-nowrap'>
            <thead class="bg-gray-50">
                <tr class="text-left text-gray-600">
                    <th class="px-6 py-4 text-sm font-semibold uppercase">
                        Name
                    </th>
                    <th class="px-6 py-4 text-sm font-semibold uppercase">
                        Title
                    </th>
                    <th class="px-6 py-4 text-sm font-semibold text-center uppercase">
                        status
                    </th>
                    <th class="px-6 py-4 text-sm font-semibold text-center uppercase">
                        role
                    </th>
                    <th class="px-6 py-4 text-sm font-semibold text-center uppercase">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10">
                                <img class='object-cover w-10 h-10 rounded-full' alt='User avatar'
                                    src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>
                            </div>
                            <div>
                                <p class="">
                                    Jane Doe
                                </p>
                                <p class="text-sm font-semibold tracking-wide text-gray-500">
                                    jane20doe@mail.com
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class="">
                            Patwari at Betul
                        </p>
                        <p class="text-sm font-semibold tracking-wide text-gray-500">
                            Management
                        </p>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <span class="px-2 font-semibold text-green-800 bg-green-200 rounded-full">
                            Active
                        </span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        Admin
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="#" class="mr-3 text-purple-800 hover:underline">Edit</a>
                        <a href="#" class="text-red-800 hover:underline">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-3">
                            <div class="inline-flex w-10 h-10">
                                <img class='object-cover w-10 h-10 rounded-full' alt='User avatar'
                                    src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>
                            </div>
                            <div>
                                <p class="">
                                    Jane Doe
                                </p>
                                <p class="text-sm font-semibold tracking-wide text-gray-500">
                                    jane20doe@mail.com
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class="">
                            Patwari at Betul
                        </p>
                        <p class="text-sm font-semibold tracking-wide text-gray-500">
                            Management
                        </p>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <span class="px-2 font-semibold text-green-800 bg-green-200 rounded-full">
                            Active
                        </span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        Admin
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="#" class="mr-3 text-purple-800 hover:underline">Edit</a>
                        <a href="#" class="text-red-800 hover:underline">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
        {{-- Pagination --}}
        <div class="flex flex-col items-center my-4">
            <div class="flex text-gray-700">
                <div class="flex items-center justify-center w-12 h-12 mr-1 bg-gray-200 rounded-full cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-6 h-6 feather feather-chevron-left">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </div>
                <div class="flex h-12 font-medium bg-gray-200 rounded-full">
                    <div
                        class="items-center justify-center hidden w-12 leading-5 transition duration-150 ease-in rounded-full cursor-pointer md:flex ">
                        1</div>
                    <div
                        class="items-center justify-center hidden w-12 leading-5 text-white transition duration-150 ease-in bg-teal-600 rounded-full cursor-pointer md:flex ">
                        2</div>
                    <div
                        class="items-center justify-center hidden w-12 leading-5 transition duration-150 ease-in rounded-full cursor-pointer md:flex ">
                        3</div>
                    <div
                        class="items-center justify-center hidden w-12 leading-5 transition duration-150 ease-in rounded-full cursor-pointer md:flex ">
                        ...</div>
                    <div
                        class="items-center justify-center hidden w-12 leading-5 transition duration-150 ease-in rounded-full cursor-pointer md:flex ">
                        13</div>
                    <div
                        class="items-center justify-center hidden w-12 leading-5 transition duration-150 ease-in rounded-full cursor-pointer md:flex ">
                        14</div>
                    <div
                        class="items-center justify-center hidden w-12 leading-5 transition duration-150 ease-in rounded-full cursor-pointer md:flex ">
                        15</div>
                    <div
                        class="flex items-center justify-center w-12 h-12 leading-5 text-white transition duration-150 ease-in bg-teal-600 rounded-full cursor-pointer md:hidden">
                        2</div>
                </div>
                <div class="flex items-center justify-center w-12 h-12 ml-1 bg-gray-200 rounded-full cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-6 h-6 feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
