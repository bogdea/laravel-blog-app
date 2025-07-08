@extends("layouts.app")

@section("title", $post->title)

@section("content")
    <div class="max-w-3xl self-start py-12">
        <h1 class="mb-6 text-3xl font-bold">{{ $post->title }}</h1>
        <p class="mb-4 text-lg">
            {{ $post->content }}
        </p>

        <div class="text-right text-sm text-gray-400">
            {{ $post->published_at->format("M j, Y") }}
        </div>
    </div>
@endsection
