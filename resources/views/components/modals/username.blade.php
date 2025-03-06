<div id="usernameModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
    <div class="p-6 rounded shadow-lg w-80 border-1 border-solid">
        <h2 class="text-xl font-semibold mb-4">Enter Username</h2>
        <form action="{{ route('username.submit', ['game'=> $game]) }}" id="usernameForm" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-white-700 mb-1">Username</label>
                <input type="text" id="username" name="username"
                       class="w-full border border-purple-300 p-2 rounded"
                       placeholder="Your username" required>
            </div>
            <div class="flex justify-end space-x-2">
                <button type="submit" class="px-4 py-2 bg-purple-500 text-white rounded">
                    Enter
                </button>
            </div>
        </form>
    </div>
</div>
@vite("resources/js/username")
