@extends("layouts.app")

@section("title", "home")

@section("content")
    <div class="w-full">
        <h2 class="mb-8 text-4xl font-semibold">
            still think muscle growth comes from
            <br />
            microtears?
        </h2>

        <p class="text-lg">
            you've been misled. muscle growth isn't about breaking your body
            <br />
            every session — it's about progressive overload, proper recovery,
            <br />
            and real nutrition.
        </p>

        <p class="my-5 text-lg">
            no microtears is a science-based fitness blog for people done with
            bro-science
            <br />
            and ready to train smarter.
        </p>

        <x-cta-button href="/blog">start reading</x-cta-button>
    </div>
@endsection
