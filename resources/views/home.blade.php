<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- component -->
<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            User's Table
        </h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Name</th>
                    <th class="text-left p-3 px-5">Username</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5 text-center">Action</th>
                    
                </tr>

                @foreach ($user as $user)
                <tr class="border-b hover:bg-blue-100 bg-gray-100">
                    <td class="p-3 px-5">{{ $user['name'] }}</td>
                    <td class="p-3 px-5">{{ $user['username'] }}</td>
                    <td class="p-3 px-5">{{ $user['email'] }}</td>
                    <td class="p-3 px-5 flex justify-center">
                        <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</button>
                        <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
</x-layout>
