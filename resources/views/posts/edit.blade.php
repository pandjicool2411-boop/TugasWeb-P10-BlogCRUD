@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <x-card>
        <h1 class="text-2xl font-bold mb-4">Edit Post</h1>

        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block font-medium mb-1">Judul</label>
                <input type="text" name="title" value="{{ old('title', $post->title) }}"
                       class="w-full border rounded px-3 py-2 @error('title') border-red-500 @enderror">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium mb-1">Isi</label>
                <textarea name="body" rows="6"
                          class="w-full border rounded px-3 py-2 @error('body') border-red-500 @enderror">{{ old('body', $post->body) }}</textarea>
                @error('body')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-2">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
                <a href="{{ route('posts.index') }}" class="bg-gray-300 px-4 py-2 rounded">Batal</a>
            </div>
        </form>
    </x-card>
@endsection