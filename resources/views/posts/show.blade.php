@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <x-card>
        <h1 class="text-2xl font-bold mb-2">{{ $post->title }}</h1>
        <p class="text-gray-500 text-sm mb-4">{{ $post->created_at->format('d M Y, H:i') }}</p>
        <p class="text-gray-700 whitespace-pre-line">{{ $post->body }}</p>

        <div class="mt-6 flex gap-2">
            <a href="{{ route('posts.edit', $post) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>

            <form action="{{ route('posts.destroy', $post) }}" method="POST"
                  onsubmit="return confirm('Yakin hapus post ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Hapus</button>
            </form>

            <a href="{{ route('posts.index') }}" class="bg-gray-300 px-4 py-2 rounded">Kembali</a>
        </div>
    </x-card>
@endsection