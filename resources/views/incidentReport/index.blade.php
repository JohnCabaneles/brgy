@extends('dashboard')
@section('content')

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
