<div
    class="{{ $show ? "pointer-events-auto opacity-100" : "pointer-events-none opacity-0" }} fixed inset-0 z-50 flex items-center justify-center bg-black/50 transition-opacity duration-300"
    wire:click.self="close"
>
    <div
        class="{{ $show ? "scale-100" : "scale-95" }} w-full max-w-md transform rounded-xl bg-white p-8 text-center shadow-lg transition-transform duration-300"
    >
        {{-- header --}}
        <h2 class="mb-6 text-center text-xl font-semibold">
            {{ $mode === "login" ? "sign in to your account" : "create a new account" }}
        </h2>

        {{-- form --}}
        <form wire:submit.prevent="submit" class="space-y-3">
            <div class="mb-2">
                {{-- username --}}
                <input
                    type="text"
                    id="username"
                    wire:model="username"
                    class="w-full rounded-2xl border border-gray-300 px-4 py-2 text-gray-800 focus:outline-none"
                    placeholder="username"
                />
            </div>

            <!-- password -->
            <div>
                <input
                    type="password"
                    id="password"
                    wire:model="password"
                    class="w-full rounded-2xl border border-gray-300 px-4 py-2 text-gray-800 focus:outline-none"
                    placeholder="password"
                />
            </div>

            <!-- submit button -->
            <button
                type="submit"
                class="inline-block w-full rounded-2xl bg-purple-600 px-4 py-2 font-medium text-white transition hover:bg-purple-700"
            >
                {{ $mode === "login" ? "sign in" : "sign up" }}
            </button>
        </form>

        <span
            wire:click="{{ $mode === "login" ? "switchToSignUp" : "switchToLogin" }}"
            class="mt-3 inline-block cursor-pointer text-sm text-[#555] transition hover:text-[#444]"
        >
            {{ $mode === "login" ? "don't have an account? sign up" : "already have an account? sign in" }}
        </span>
    </div>
</div>
