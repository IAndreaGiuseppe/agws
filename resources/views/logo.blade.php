<a href="{{ route('website.homepage') }}" class="block font-black text-2xl txt-dark-container">
    <div class="flex items-center">
        <span class="w-10 mr-2 txt-dark-container">
            @include('agws::svg.spacehead')

        </span>

        <span>{{ config('app.name') }}</span>
    </div>
</a>
