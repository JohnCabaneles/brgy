@extends('dashboard')
@section('content')
<div class="mb-6">
    <h1 class="text-2xl">Request a business permit.</h1>
  </div>
  <form method="POST" action="#" enctype="multipart/form-data">
      @csrf
    <div class="-mx-3 grid grid-cols-3 mb-6">

      <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="businessName">
          Business Name
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="businessName" id="businessName" type="text" placeholder="Please enter business name" required>
      </div>

      <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="location">
            Business Address
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="location" id="location" type="text" placeholder="Please enter business name" required>
      </div>

      <div class="md:w-1/2 lg:w-full px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="owner">
            Owner Name
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="owner" id="owner" type="text" placeholder="Please enter Owner Name" value="{{$user->firstName . ' ' . $user->lastName}}">
      </div>

    </div>
    <button class="bg-blue-500 p-2 text-white rounded-lg hover:bg-blue-600">Submit</button>
  </form>
@endsection