@extends("layouts.app")

@section("title", "blog")

@section("content")
    <div class="flex w-full justify-between py-12">
        <div class="flex-1 space-y-9">
            @foreach ($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        </div>

        <div>
            <h2 class="mb-4 text-2xl font-semibold">recent comments:</h2>

            @forelse ($recentComments as $comment)
                <div class="mb-3 pb-3">
                    <p class="font-semibold">
                        {{ $comment->user->username }}
                        <span class="font-normal">commented on</span>
                        <a
                            href="{{ route("post.show", $comment->post->id) }}"
                            class="text-blue-500"
                        >
                            {{ Str::limit($comment->post->title, 30) }}
                        </a>
                    </p>
                    <p class="text-gray-700">
                        {{ Str::limit($comment->body, 50) }}
                    </p>
                    <p class="text-right text-sm text-gray-400">
                        {{ $comment->created_at->diffForHumans() }}
                    </p>
                </div>
            @empty
                <p class="text-gray-600">no recent comments</p>
            @endforelse
        </div>
    </div>
@endsection
