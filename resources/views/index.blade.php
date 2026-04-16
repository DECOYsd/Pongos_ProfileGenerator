<x-layout>
    <div class="max-w-7xl mx-auto p-6">
        <!-- Form Section -->
        <div class="mb-12">
            <h1 class="text-2xl font-bold mb-6 text-center">Personal Profile Generator</h1>

            <form action="/" method="POST" class="space-y-4 max-w-2xl mx-auto">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-200">Name</label>
                    <input type="text" id="name" name="name" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm bg-gray-900 text-white focus:outline-none focus:ring-white focus:border-white">
                </div>

                <div>
                    <label for="age" class="block text-sm font-medium text-gray-200">Age</label>
                    <input type="number" id="age" name="age" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm bg-gray-900 text-white focus:outline-none focus:ring-white focus:border-white">
                </div>

                <div>
                    <label for="program" class="block text-sm font-medium text-gray-200">Program</label>
                    <input type="text" id="program" name="program" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm bg-gray-900 text-white focus:outline-none focus:ring-white focus:border-white">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-200">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm bg-gray-900 text-white focus:outline-none focus:ring-white focus:border-white">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200">Gender</label>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" name="gender" value="male" required class="form-radio text-white">
                            <span class="ml-2">Male</span>
                        </label>
                        <label class="inline-flex items-center ml-4">
                            <input type="radio" name="gender" value="female" class="form-radio text-white">
                            <span class="ml-2">Female</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200">Hobbies (at least 5)</label>
                    <div class="mt-2 space-y-2">
                        @for($i = 1; $i <= 5; $i++) <input type="text" name="hobbies[]" placeholder="Hobby {{ $i }}"
                            required
                            class="block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm bg-gray-900 text-white focus:outline-none focus:ring-white focus:border-white">
                            @endfor
                    </div>
                </div>

                <div>
                    <label for="biography" class="block text-sm font-medium text-gray-200">Short Biography</label>
                    <textarea id="biography" name="biography" rows="4" required
                        class="mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm bg-gray-900 text-white focus:outline-none focus:ring-white focus:border-white"></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-white text-black py-2 px-4 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2">Add
                    Profile</button>
            </form>
        </div>

        <!-- Saved Profiles Section -->
        <div>
            @if(session('profiles'))
            <h2 class="text-xl font-bold mb-6 text-center">Saved Profiles</h2>
            <div class="space-y-6 max-w-4xl mx-auto">
                @foreach(session('profiles') as $profile)
                <div class="bg-gray-800 p-6 rounded-md">
                    <h3 class="font-semibold text-xl mb-4">{{ $profile['name'] }}</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm mb-2"><strong>Age:</strong> {{ $profile['age'] }}</p>
                            <p class="text-sm mb-2"><strong>Program:</strong> {{ $profile['program'] }}</p>
                            <p class="text-sm mb-2"><strong>Email:</strong> {{ $profile['email'] }}</p>
                            <p class="text-sm mb-2"><strong>Gender:</strong> {{ ucfirst($profile['gender']) }}</p>
                        </div>
                        <div>
                            <p class="text-sm mb-2"><strong>Hobbies:</strong> {{ implode(', ', $profile['hobbies']) }}</p>
                            <p class="text-sm"><strong>Biography:</strong> {{ $profile['biography'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-8">
                <form action="/clear" method="POST" class="inline-block">
                    @csrf
                    <button type="submit"
                        class="bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Clear
                        All Profiles</button>
                </form>
            </div>
            @endif
        </div>
    </div>
</x-layout>