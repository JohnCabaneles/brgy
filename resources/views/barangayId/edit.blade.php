@extends('dashboard')
@section('content')
<div class="bg-white shadow-lg rounded px-8 mt-12 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="mb-6">
      <h1 class="text-2xl">Update Barangay ID.</h1>
    </div>
    <form method="POST" action="{{ route('brgyId.update', auth()->user()->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
      <div class="-mx-3 grid grid-cols-4 mb-6">

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="firstName">
            First Name
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="firstName" id="firstName" type="text" placeholder="Please enter first name" value="{{$user->firstName}}">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="lastName">
              Last Name
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="lastName" id="lastName" type="text" placeholder="Please enter last name" value="{{$user->lastName}}">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="gender">
              Gender
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="gender" id="gender" type="text" placeholder="Please enter gender" value="{{$user->gender}}">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
                Email
            </label>
            <div class="appearance-none block w-full bg-gray-200 text-gray-darker border border-gray rounded py-3 px-4 mb-3">
                {{$user->email}}
            </div>
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="age">
              Age
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="age" id="age" type="number" placeholder="Please enter age" value="{{$user->age}}">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="contactNumber">
              Contact #
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="contactNumber" id="contactNumber" type="text" placeholder="Please enter contact number" value="{{$user->contactNumber}}">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="address">
              Address
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="address" id="address" type="text" placeholder="Please enter address" value="{{$user->address}}">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="apartment">
              Apartment,etc.
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="apartment" id="apartment" type="text" placeholder="Please enter apartment" value="{{$user->apartment}}">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="city">
              City
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="city" id="city" type="text" placeholder="Please enter city" value="{{$user->city}}">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="province">
              Province
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="province" id="province" type="text" placeholder="Please enter province" value="{{$user->province}}">
        </div>

        <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="zipCode">
              Zip Code
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="zipCode" id="zipCode" type="text" placeholder="Please enter address" value="{{$user->zipCode}}">
        </div>
      </div>
      <button class="bg-blue-500 p-2 text-white rounded-lg hover:bg-blue-600">Submit</button>
    </form>
  </div>

@endsection
