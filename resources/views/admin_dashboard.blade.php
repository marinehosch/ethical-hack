<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">Dashboard Administrateur</h1>
        
        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($users as $user)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <p class="text-gray-900 dark:text-white text-xl">{{ $user->email }}</p>
                        <p class="text-gray-500 dark:text-gray-300">{{ $user->created_at }}</p>
                        <form action="{{ route('admin.updateRole', $user) }}" method="POST" class="mt-4">
                            @csrf
                            <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Rôle</label>
                            <select name="role" id="role" class="form-select mt-1 block w-full">
                                <option value="Administrateur" {{ $user->role == 'Administrateur' ? 'selected' : '' }}>Administrateur</option>
                                <option value="Editeur" {{ $user->role == 'Editeur' ? 'selected' : '' }}>Editeur</option>
                                <option value="Lecteur" {{ $user->role == 'Lecteur' ? 'selected' : '' }}>Lecteur</option>
                                <option value="Invité" {{ $user->role == 'Invité' ? 'selected' : '' }}>Invité</option>
                                <option value="Désactivé" {{ $user->role == 'Désactivé' ? 'selected' : '' }}>Désactivé</option>
                            </select>
                            <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Modifier
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
