@extends('dashboard')
@section('content')
<button>
    <a href="/officials" class="bg-gray-400 hover:bg-gray-500 p-2 rounded-lg">back</a>
</button>
<div class="bg-white shadow-md rounded px-8 mt-12 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="mb-6">
        <h1 class="text-2xl">Edit official.</h1>
    </div>
    <form method="POST" action="{{ route('officials.update', $officials->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
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
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="position">
                  Position
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="position" id="position" type="text" placeholder="Please enter position">
            </div>
    
            <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="idNumber">
                  ID #
                </label>
                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="idNumber" id="idNumber" type="text" placeholder="Please enter id number">
            </div>
    
          </div>
      <button class="bg-blue-500 p-2 text-white rounded-lg hover:bg-blue-600">Update</button>
    </form>  
  </div>
@endsection