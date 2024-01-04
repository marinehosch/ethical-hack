<x-app-layout>
<div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">Dashboard Administrateur</h1>
        <div class="mt-6">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 dark:bg-gray-700 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Email
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 dark:bg-gray-700 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Date de Création
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 dark:bg-gray-700 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Rôle
                        </th>
                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 dark:bg-gray-700 text-left text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        
                        <td class="px-5 py-5 border-b border-gray-200 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-900 dark:text-white whitespace-no-wrap">
                                {{ $user->email }}
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white dark:bg-gray-800 text-sm">
                            <p class="text-gray-900 dark:text-white whitespace-no-wrap">
                                {{ $user->created_at }}
                            </p>
                        </td>
                        <form action="{{ route('admin.updateRole', $user) }}" method="POST">
                                @csrf
                        <td class="px-5 py-5 border-b border-gray-200 bg-white dark:bg-gray-800 text-sm">
                            
                                <select name="role" class="form-select block w-full mt-1">
                                    <option value="Administrateur" {{ $user->role == 'Administrateur' ? 'selected' : '' }}>Administrateur</option>
                                    <option value="Editeur" {{ $user->role == 'Editeur' ? 'selected' : '' }}>Editeur</option>
                                    <option value="Lecteur" {{ $user->role == 'Lecteur' ? 'selected' : '' }}>Lecteur</option>
                                    <option value="Invité" {{ $user->role == 'Invité' ? 'selected' : '' }}>Invité</option>
                                    <option value="Désactivé" {{ $user->role == 'Désactivé' ? 'selected' : '' }}>Désactivé</option>
                                </select>
                           
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white dark:bg-gray-800 text-sm">
                        <button type="submit" class="mt-2 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                    Modifier
                                </button>
                        </td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
