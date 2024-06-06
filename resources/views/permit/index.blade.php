@extends('dashboard')
@section('content')
<div class="pt-2">
    <div class="table w-full p-2">
        <h1 class="pb-3 text-2xl">All Permit</h1>
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-50 border-b">
                  <th class="p-2 border-r w-1/12 text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                          ID #
                      </div>
                  </th>

                  <th class="p-2 border-r w-3/12 text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                          Owner Name
                      </div>
                  </th>

                  <th class="p-2 border-r w-3/12 text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                          Business Name
                      </div>
                  </th>

                  <th class="p-2 border-r w-3/12 text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                          Business Address
                      </div>
                  </th>

                  <th class="p-2 border-r w-3/12 text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Payment
                    </div>
                  </th>

                  <th class="p-2 border-r text-sm font-thin text-gray-500">
                      <div class="flex items-center justify-center">
                          Action
                      </div>
                  </th>
                </tr>
            </thead>
            <tbody>
                  @foreach( $permits as $key => $permit)
                      <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                          <td class="border-r">{{ $permit->id}}</td>
                          <td class="border-r">{{ $permit->user->firstName}} {{ $permit->user->lastName}}</td>
                          <td class="border-r">{{ $permit->businessName}}</td>
                          <td class="border-r">{{ $permit->location}}</td>
                          <td class="border-r">
                                <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
                                    @if($permit->payment == 'pending')
                                    <form method="POST" action="{{ route('permits.update', $permit->id) }}">
                                        @method('PATCH')
                                        @csrf
                                        <button value="paid" name="payment" id="payment" class="bg-red-500 hover:bg-red-600 p-2 text-white hover:shadow-lg rounded-lg text-xs font-thin">
                                            Click if paid
                                        </button>
                                    </form>
                                    @else()
                                        <button class="bg-green-600 hover:bg-green-700 p-2 text-white hover:shadow-lg rounded-lg text-xs font-thin">
                                            paid
                                        </button>
                                    @endif
                                </div>
                          </td>
                          <td class="flex justify-center space-x-2 p-2">
                            <a href="{{ route('permits.show', $permit->id)}}">
                                <button class="p-2 text-xs font-thin text-white bg-blue-500 rounded-lg hover:bg-blue-600 hover:shadow-lg">View</button>
                            </a>

                            <form action="{{ route('permits.destroy', $permit->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 hover:bg-red-600 p-2 text-white hover:shadow-lg rounded-lg text-xs font-thin">Remove</button>
                            </form>
                          </td>
                      </tr>
                  @endforeach
            </tbody>
        </table>
        
        <div class="mt-6">
            {{$permits->links()}}
        </div>
    </div>
</div>
@endsection