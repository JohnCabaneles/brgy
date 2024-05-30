@extends('dashboard')
@section('content')
<div class="bg-white shadow-lg rounded px-8 mt-12 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="mb-6">
      <h1 class="text-2xl">Add new Event</h1>
    </div>
    <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
        @csrf
      <div>
        <div class="grid grid-cols-2 mb-6">

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="title">
            Title
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="title" id="title" type="text" placeholder="Please enter event title">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="image">
              Image
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="image" id="image" type="file">
        </div>
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0 pb-5">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="description">
              Description
            </label>
            <textarea class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red resize-none rounded h-44 py-3 px-4 mb-3" name="description" id="description" type="text" placeholder="Please enter event description"></textarea>
        </div>
      </div>

      <button class="bg-blue-500 p-2 text-white rounded-lg hover:bg-blue-600">Submit</button>
    </form>
  </div>
  <hr />
  <div class="pt-2">
      <div class="table w-full p-2">
          <h1 class="pb-3 text-2xl">All IDs</h1>
          <table class="w-full border">
              <thead>
                  <tr class="bg-gray-50 border-b">
                    <th class="p-2 border-r w-1/12 text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            ID #
                        </div>
                    </th>

                    <th class="p-2 border-r w-4/12 text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                           Event Title
                        </div>
                    </th>

                    <th class="p-2 border-r w-4/12 text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                           Image
                        </div>
                    </th>

                    <th class="p-2 border-r w-1/12 text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Action
                        </div>
                    </th>
                  </tr>
              </thead>
              <tbody>
                    @foreach( $events as $key => $event)
                        <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                            <td class="border-r">{{ $event->id }}</td>
                            <td class="border-r">{{ $event->title}}</td>
                            <td class="border-r ">
                                <img src="{{ asset('storage/' . $event->image) }}" alt="" class="w-24 h-12">
                            </td>
                            <td class="flex justify-center space-x-2 p-2">
                                <a href="{{ route('events.edit', $event->id)}}">
                                    <button class="bg-blue-500 hover:bg-blue-600 p-2 text-white hover:shadow-lg rounded-lg text-xs font-thin">Edit</button>
                                </a>
                                <form action="{{ route('events.destroy', $event->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-600 p-2 text-white hover:shadow-lg rounded-lg text-xs font-thin">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
              </tbody>
          </table>
      </div>
  </div>
@endsection
