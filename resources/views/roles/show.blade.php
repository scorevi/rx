@extends('layouts.app')

@section('content')
    <div class="mb-6">
        <h1 class="text-2xl font-bold mb-2">Role Details</h1>
        <div class="bg-gray-50 rounded-lg p-6 border border-gray-200 shadow">
            <p class="mb-4"><span class="font-semibold text-gray-700">Name:</span> {{ $role->name }}</p>
            <div class="flex gap-2">
                <a href="{{ route('roles.edit', $role) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white font-semibold px-4 py-2 rounded-lg shadow">Edit</a>
                <a href="{{ route('roles.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-4 py-2 rounded-lg shadow">Back to Roles</a>
            </div>
        </div>
    </div>
@endsection 