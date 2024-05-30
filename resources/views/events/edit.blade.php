@extends('dashboard')
@section('content')

<a href="/events" class="mt-10"><i class="fa-solid fa-chevron-left"></i></a>

<div class="bg-white shadow-lg rounded px-8 mt-12 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="mb-6">
      <h1 class="text-2xl">Update Event</h1>
    </div>
    <form method="POST" action="{{ route('events.update', $event->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
      <div>
        <div class="grid grid-cols-2 mb-6 gap-6">
            <div class="flex flex-col justify-start">
                <img class="w-48 mb-6 mr-6" src="{{asset('storage/'. $event->image)}}" alt="">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="image">
                    Image
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="image" id="image" type="file">
            </div>

            <div class="flex flex-col justify-end">
                <div>
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="title">
                        Title
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="title" id="title" type="text" value="{{ $event->title }}">
                </div>
            </div>
        </div>

        <div class="md:w-1/2 lg:w-full mb-6 md:mb-0 pb-5">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="description">
              Description
            </label>
            <textarea class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red resize-none rounded h-44 py-3 px-4 mb-3" name="description" id="description" type="text">{{ $event->description }}</textarea>
        </div>
      </div>

      <button class="bg-blue-500 p-2 text-white rounded-lg hover:bg-blue-600">Update Event</button>
    </form>
  </div>

@endsection
