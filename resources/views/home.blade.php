<x-home-layout>
  <!-- Jumbotron -->
  <div
    class="relative h-[800px] overflow-hidden rounded-lg bg-cover bg-no-repeat bg-center p-12 text-center text-white"
    style="background-image: url('{{ asset('images/brgy-hero.jpg') }}');">
    <div
      class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-black/60 bg-fixed">
      <div class="flex h-full items-center justify-center">
        <div class="text-white">
          <h2 class="mb-4 text-4xl font-semibold">WELCOME TO OUR BARANGAY</h2>
          <h4 class="mb-6 text-xl font-semibold">Discover the heart of our community</h4>
          <button
            type="button"
            class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-300 hover:text-neutral-200 focus:border-neutral-300 focus:text-neutral-200 focus:outline-none focus:ring-0 active:border-neutral-300 active:text-neutral-200 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600"
            data-twe-ripple-init
            data-twe-ripple-color="light">
            Learn more
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->

  <section id="events" class="h-full mb-20">
    <div class="md:container md:mx-auto">
      <h1 class="mt-20 text-3xl font-bold text-center">Community Events</h1>

      <!-- Swiper -->
      <div class="swiper mySwiper mt-10">
        <div class="swiper-wrapper">
          @foreach ($events as $event)
            <div class="swiper-slide relative">
              <div class="w-full h-[600px] relative">
                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="w-full h-full object-cover rounded-lg">
                <div class="absolute bottom-0 left-0 right-0 p-4 bg-black bg-opacity-50 text-white rounded-b-lg">
                  <h2 class="text-xl font-semibold">{{ $event->title }}</h2>
                  <p class="text-sm">{{ $event->description }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

  <section class="h-screen"></section>

  @include('components.home-footer')


</x-home-layout>
