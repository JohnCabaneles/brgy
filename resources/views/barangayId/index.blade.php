@extends('dashboard')
@section('content')
<div class="bg-white shadow-lg rounded px-8 mt-12 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="mb-6">
      <h1 class="text-2xl">Fill up the form to add new Barangay ID.</h1>
    </div>
    <form method="POST" action="{{ route('barangayId.store') }}" enctype="multipart/form-data">
        @csrf
      <div class="-mx-3 grid grid-cols-4 mb-6">

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="firstName">
            First Name
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="firstName" id="firstName" type="text" placeholder="Please enter first name">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="lastName">
              Last Name
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="lastName" id="lastName" type="text" placeholder="Please enter last name">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="gender">
              Gender
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="gender" id="gender" type="text" placeholder="Please enter gender">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
              Email
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="email" id="email" type="email" placeholder="Please enter email">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="age">
              Age
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="age" id="age" type="number" placeholder="Please enter age">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="contactNumber">
              Contact #
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="contactNumber" id="contactNumber" type="text" placeholder="Please enter contact number">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="address">
              Address
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="address" id="address" type="text" placeholder="Please enter address">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="apartment">
              Apartment,etc.
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="apartment" id="apartment" type="text" placeholder="Please enter apartment">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="city">
              City
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="city" id="city" type="text" placeholder="Please enter city">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="province">
              Province
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="province" id="province" type="text" placeholder="Please enter province">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="zipCode">
              Zip Code
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="zipCode" id="zipCode" type="text" placeholder="Please enter address">
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
                    <th class="p-2 border-r w-2/12 text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            ID #
                        </div>
                    </th>

                    <th class="p-2 border-r w-3/12 text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Name
                        </div>
                    </th>

                    <th class="p-2 border-r w-3/12 text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Email
                        </div>
                    </th>

                    <th class="p-2 border-r w-3/12 text-sm font-thin text-gray-500">
                        <div class="flex items-center justify-center">
                            Contact
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
                    @foreach( $barangayIds as $key => $barangayId)
                        <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                            <td class="border-r">{{ $barangayId->brgy_id }}</td>
                            <td class="border-r">{{ $barangayId->firstName}} {{$barangayId->lastName}}</td>
                            <td class="border-r"> {{ $barangayId->email}}</td>
                            <td class="border-r">{{ $barangayId->contactNumber}}</td>
                            <td class="flex justify-center space-x-2 p-2">
                                <a href="{{ route('barangayId.edit', $barangayId->id)}}">
                                    <button class="bg-blue-500 hover:bg-blue-600 p-2 text-white hover:shadow-lg rounded-lg text-xs font-thin">Edit</button>
                                </a>

                                <form action="{{ route('barangayId.destroy', $barangayId->id)}}" method="POST">
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
