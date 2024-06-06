@extends('dashboard')
@section('content')
<div class="flex flex-col px-8 pt-6 pb-8 my-2 mt-12 mb-4 bg-white rounded shadow-lg">
    <div class="mb-6">
      <h1 class="text-2xl">File Incident.</h1>
    </div>
    <form method="POST" action="{{ route('incidentReport.store') }}" enctype="multipart/form-data">
        @csrf
      <div class="grid grid-cols-1 mb-6 -mx-3">
        <div class="px-3 mb-6 md:w-1/2 lg:w-full md:mb-0">
          <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="subject">
            Subject
          </label>
          <input class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red" name="subject" id="subject" type="text" placeholder="Please enter subject">
        </div>

        <div class="px-3 mb-6 md:w-1/2 lg:w-full md:mb-0">
            <label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="message">
                Message
            </label>
            <textarea class="block w-full px-4 py-3 mb-3 rounded-md appearance-none resize-none bg-grey-lighter h-44 text-grey-darker" name="message" id="message" placeholder="Please enter your message"></textarea>
        </div>
      </div>
      <button class="p-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Submit</button>
    </form>
  </div>
@endsection
