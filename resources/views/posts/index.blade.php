@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
    <x-alert />

    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Daftar Post</h1>
        <a href="{{ route('posts.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">
            + Tambah Post
        </a>
    </div>

    @forelse ($posts as $post)
        <x-card>
            <h2 class="text-xl font-semibold">
                <a href="{{ route('posts.show', $post) }}" class="text-blue-600 hover:underline">
                    {{ $post->title }}
                </a>
            </h2>
            <p class="text-gray-500 text-sm mb-2">{{ $post->created_at->format('d M Y') }}</p>
            <p class="text-gray-700">{{ Str::limit($post->body, 100) }}</p>

            <div class="mt-3 space-x-2">
                <a href="{{ route('posts.edit', $post) }}" class="text-yellow-600">Edit</a>

                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline"
                      onsubmit="return confirm('Yakin hapus post ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600">Hapus</button>
                </form>
            </div>
        </x-card>
    @empty
        <p class="text-gray-500">Belum ada post.</p>
    @endforelse

    <div class="mt-4">
        {{ $posts->links() }}
    </div>
@endsection