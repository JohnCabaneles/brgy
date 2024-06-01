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

</x-home-layout>
