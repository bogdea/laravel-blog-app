@extends("layouts.app")

@section("title", "blog")

@section("content")
    <div class="w-full space-y-9 py-12">
        @foreach ($posts as $post)
            <x-post-card :post="$post" />
        @endforeach
    </div>
@endsection
