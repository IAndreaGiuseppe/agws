<div class="mt-16 sm:mt-20 sm:flex">
    <div class="relative w-full p-6">
        <div class="planet mars"></div>
    </div>

    <div class="relative w-full p-6">
        <div>
            <span class="inline-block w-10 txt-dark-container text-agp-dark">
                @include('svg.spacehead')
            </span>
        </div>

        <h1 class="font-black text-5xl mb-4">
            <div class="inline-block txt-dark-container text-agp-dark">
                <div>{{ __( "Andrea" ) }}</div>
                <div>{{ __( "Giuseppe" ) }}</div>
            </div>
        </h1>

        <p class="py-2">
            <a href="https://twitter.com/andrea_gius" target="_blank" class="txt-red-container text-agp-red">@andrea_gius</a>
        </p>

        <p class="py-2">
            <a href="tel:+393920460819" class="flex items-center text-agp-red">
                <span class="inline-block w-10 mr-2 txt-red-container">
                    @include('svg.phone')
                </span>

                {{ __( "Call Me" ) }}
            </a>
        </p>

        <p class="py-2 font-thin text-xl txt-dark-container text-agp-dark">{{ __( "Interstellar Full-Stack Web Developer" ) }}</p>

    </div>
</div>
