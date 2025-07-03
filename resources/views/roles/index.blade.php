@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Roles</h1>
        <a href="{{ route('roles.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg shadow">Create New Role</a>
    </div>
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
    @endif
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="py-3 px-4 border-b">#</th>
                    <th class="py-3 px-4 border-b">Role Name</th>
                    <th class="py-3 px-4 border-b text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($roles as $role)
                    <tr class="hover:bg-gray-50">
                        <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border-b">{{ $role->name }}</td>
                        <td class="py-2 px-4 border-b text-center">
                            <a href="{{ route('roles.show', $role) }}" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-3 py-1 rounded mr-1">View</a>
                            <a href="{{ route('roles.edit', $role) }}" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white font-semibold px-3 py-1 rounded mr-1">Edit</a>
                            <form action="{{ route('roles.destroy', $role) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold px-3 py-1 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="py-4 px-4 text-center text-gray-500">No roles found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-6">
        {{ $roles->links('pagination::tailwind') }}
    </div>
@endsection 