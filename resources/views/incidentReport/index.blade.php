@extends('dashboard')
@section('content')
<div class="flex flex-col px-8 pt-6 pb-8 my-2 mt-12 mb-4 bg-white rounded shadow-lg">
    <div class="mb-6">
      <h1 class="text-2xl">Fill up the form to add new Barangay ID.</h1>
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
  <hr />
  <div class="pt-2">
      <div class="table w-full p-2">
          <h1 class="pb-3 text-2xl">All IDs</h1>
          <table class="w-full border">
              <thead>
                  <tr class="border-b bg-gray-50">
                    <th class="w-2/12 p-2 text-sm font-thin text-gray-500 border-r">
                        <div class="flex items-center justify-center">
                            ID #
                        </div>
                    </th>

                    <th class="w-4/12 p-2 text-sm font-thin text-gray-500 border-r">
                        <div class="flex items-center justify-center">
                            Subject
                        </div>
                    </th>

                    <th class="w-4/12 p-2 text-sm font-thin text-gray-500 border-r">
                        <div class="flex items-center justify-center">
                            Message
                        </div>
                    </th>

                    <th class="w-2/12 p-2 text-sm font-thin text-gray-500 border-r">
                        <div class="flex items-center justify-center">
                            Action
                        </div>
                    </th>
                  </tr>
              </thead>
              <tbody>
                    @foreach( $incidentReports as $key => $incidentReport)
                        <tr class="text-sm text-center text-gray-600 bg-gray-100 border-b">
                            <td class="border-r">{{ $incidentReport->id}}</td>
                            <td class="border-r">{{ $incidentReport->subject}}</td>
                            <td class="border-r truncate max-w-xs p-2">{{ $incidentReport->message}}</td>
                            <td class="flex justify-center p-2 space-x-2">
                                <a href="{{ route('incidentReport.show', $incidentReport->id)}}">
                                    <button class="p-2 text-xs font-thin text-white bg-blue-500 rounded-lg hover:bg-blue-600 hover:shadow-lg">View</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
              </tbody>
          </table>
      </div>
  </div>
@endsection
