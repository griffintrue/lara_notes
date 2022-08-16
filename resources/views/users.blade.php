<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Exposed!<br/><br/>

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <th>Name</th>
                            <th>Email</th>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <tr>
                            @endforeach
                        </tbody>

                    </table>

                    <br/><br/>
                    <x-button><a href="{{ route('login') }}">Back</a></x-button>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
