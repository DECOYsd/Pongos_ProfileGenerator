<x-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Personal Profile Generator</h1>

        <form action="/" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                <input type="number" id="age" name="age" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="program" class="block text-sm font-medium text-gray-700">Program</label>
                <input type="text" id="program" name="program" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Gender</label>
                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" name="gender" value="male" required class="form-radio">
                        <span class="ml-2">Male</span>
                    </label>
                    <label class="inline-flex items-center ml-4">
                        <input type="radio" name="gender" value="female" class="form-radio">
                        <span class="ml-2">Female</span>
                    </label>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Hobbies (at least 5)</label>
                <div class="mt-2 space-y-2">
                    @for($i = 1; $i <= 5; $i++) <input type="text" name="hobbies[]" placeholder="Hobby {{ $i }}"
                        required
                        class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        @endfor
                </div>
            </div>

            <div>
                <label for="biography" class="block text-sm font-medium text-gray-700">Short Biography</label>
                <textarea id="biography" name="biography" rows="4" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>

            <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add
                Profile</button>
        </form>

        @if(session('profiles'))
        <div class="mt-8">
            <h2 class="text-xl font-bold mb-4">Saved Profiles</h2>
            @foreach(session('profiles') as $profile)
            <div class="bg-gray-50 p-4 rounded-md mb-4">
                <h3 class="font-semibold">{{ $profile['name'] }}</h3>
                <p><strong>Age:</strong> {{ $profile['age'] }}</p>
                <p><strong>Program:</strong> {{ $profile['program'] }}</p>
                <p><strong>Email:</strong> {{ $profile['email'] }}</p>
                <p><strong>Gender:</strong> {{ ucfirst($profile['gender']) }}</p>
                <p><strong>Hobbies:</strong> {{ implode(', ', $profile['hobbies']) }}</p>
                <p><strong>Biography:</strong> {{ $profile['biography'] }}</p>
            </div>
            @endforeach

            <form action="/clear" method="POST" class="mt-4">
                @csrf
                <button type="submit"
                    class="bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Clear
                    All Profiles</button>
            </form>
        </div>
        @endif
    </div>
</x-layout>