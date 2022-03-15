@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="post">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" class="rounded-full" alt="" width="40" height="40">
                <h2 class="ml-4">Want to Participate?</h2>
            </header>

            <div class="mt-6">
                                    <textarea name="body"
                                              class="w-full text-small focus:outline-none focus:ring"
                                              rows="5"
                                              placeholder="Quick, think of something to say!"
                                              required>
                                    </textarea>

                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <x-submit-button>Post</x-submit-button>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Log in</a> to leave a comment
    </p>
@endauth
