<div class="w-full rounded-3xl border border-[#D3D3D3] p-5">
    <h2 class="mb-2 text-xl font-bold">{{ $post->title }}</h2>
    <p class="text-gray-600">{{ $post->excerpt }}</p>
    <div class="mt-5 flex items-center justify-between">
        <div class="text-sm text-gray-400">
            {{ $post->published_at->format("M j, Y") }}
        </div>
        <a
            href="{{ route("post.show", $post->id) }}"
            class="inline-block font-medium text-purple-600"
        >
            read
        </a>
    </div>
</div>
