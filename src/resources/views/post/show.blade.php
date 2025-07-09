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

        {{-- show comments --}}
        <h2 class="mb-4 text-2xl font-semibold">
            comments ({{ $post->comments->count() }})
        </h2>

        @forelse ($post->comments as $comment)
            <div class="mb-5 border-l p-3 py-1">
                <p class="text-lg font-semibold">
                    {{ $comment->user->username }}
                </p>
                <p>{{ $comment->body }}</p>
                <p class="text-sm text-gray-400">
                    {{ $comment->created_at->diffForHumans() }}
                </p>
            </div>
        @empty
            <p class="text-gray-600">no comments yet</p>
        @endforelse

        {{-- add new comment --}}
        @auth
            <form
                action="{{ route("comments.store", $post) }}"
                method="POST"
                class="mt-6 space-y-4"
            >
                @csrf
                <textarea
                    name="body"
                    rows="3"
                    class="block w-full resize-none rounded-lg border border-gray-300 bg-gray-50 p-2.5 transition"
                    placeholder="add a comment..."
                    required
                ></textarea>

                <button
                    type="submit"
                    class="inline-block rounded-full bg-purple-600 px-6 py-2 font-medium text-white transition hover:bg-purple-700"
                >
                    post comment
                </button>
            </form>
        @else
            <p class="text-gray-600">log in to post a comment</p>
        @endauth
    </div>
@endsection
