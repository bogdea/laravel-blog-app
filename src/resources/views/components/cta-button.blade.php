@props(["href" => "#"])

<a
    href="{{ $href }}"
    class="inline-block rounded-full bg-purple-600 px-6 py-2 font-medium text-white transition hover:bg-purple-700"
>
    {{ $slot }}
</a>
