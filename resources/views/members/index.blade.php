<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Memebers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Search Form -->
                <form method="POST" action="{{ route('members') }}" class="mb-4">
                    @csrf
                    <select name="type" class="px-8 py-2 border rounded">
                        <option>name</option>
                        <option>tier</option>
                    </select>
                    <input type="text" name="search" placeholder="Search members..." class="px-4 py-2 border rounded">
                    <button type="submit" class="px-4 py-2 bg-blue-500 rounded">Search</button>
                </form>

                <table>
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">UID</th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Power</th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">Tier</th>
                    </tr>
                    </thead>
                    <tbody id="table-body" class="bg-white">
                        @foreach ($members as $member)
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-900"> {{ $member['uid'] }} </td>
                                <td class="px-6 py-4 text-sm text-gray-900"> {{ $member['name'] }} </td>
                                <td class="px-6 py-4 text-sm text-gray-900"> {{ $member['power'] }} </td>
                                <td class="px-6 py-4 text-sm text-gray-900"> {{ $member['tier'] }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
