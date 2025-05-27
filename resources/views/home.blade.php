<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <?php echo "vite werkt niet" ?>
    @endif
</head>
<body class="bg-gradient-to-br from-blue-100 to-blue-300 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-xl p-8 max-w-md w-full">
        <h2 class="text-3xl font-extrabold text-center mb-8 text-blue-700">Inloggen</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-5">
                <label for="email" class="block text-sm font-medium text-gray-700">E-mailadres</label>
                <input type="email" name="email" id="email" required autofocus
                    class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" />
            </div>
            <div class="mb-5">
                <label for="password" class="block text-sm font-medium text-gray-700">Wachtwoord</label>
                <input type="password" name="password" id="password" required
                    class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" />
            </div>
            <div class="mb-6 flex justify-between items-center">
                <label class="flex items-center text-sm">
                    <input type="checkbox" name="onthoud" class="mr-2 rounded border-gray-300">
                    Onthoud mij
                </label>
                <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">
                    Wachtwoord vergeten?
                </a>
            </div>
            <div class="flex gap-2 mb-4">
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2">
                    💾 Inloggen
                </button>
                <a href="/" class="w-full bg-gray-200 text-gray-700 py-2 px-4 rounded-lg font-semibold hover:bg-gray-300 transition flex items-center justify-center gap-2">
                    ❌ Annuleren
                </a>
            </div>
            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                   class="w-full bg-green-500 text-white py-2 px-4 rounded-lg font-semibold hover:bg-green-600 transition text-center flex items-center justify-center gap-2">
                    📝 Registreren
                </a>
            @endif
        </form>
    </div>
</body>
</html>