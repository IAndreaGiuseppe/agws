<div class="mt-8 sm:mt-16 sm:flex sm:items-center">
    <div class="relative w-full p-6">
        <div class="planet mars"></div>

        <div>
            <a href="{{ route('courses.laravel') }}">
                <div class="p-4 text-right bg-agp-yellow">
                    <p class="text-xl lg:text-2xl xl:text-xl leading-tight">{{ __( "Il Corso Laravel" ) }} &#128640;</p>
                    <p class="text-3xl lg:text-4xl xl:text-3xl leading-tight font-bold">{{ __( "A journey to reusable packages" ) }}</p>
                </div>
            </a>
        </div>
    </div>

    <div class="relative w-full p-6">
        <div>
            <span class="inline-block w-10 txt-dark-container text-agp-dark">
                @include('agws::svg.spacehead')
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
                    @include('agws::svg.phone')
                </span>

                {{ __( "Call Me" ) }}
            </a>
        </p>

        <p class="py-2 font-thin text-xl txt-dark-container text-agp-dark">{{ __( "Interstellar Full-Stack Web Developer" ) }}</p>
        <p class="py-2 font-thin text-md txt-dark-container text-agp-dark">{{ __( "info{at}andreagiuseppe.com" ) }}</p>
    </div>
</div>

<div class="py-4 flex justify-center">
    <button id="skills-toggle" class="">Skills</button>
</div>
