@extends('dashboard')
@section('content')

<div class="flex flex-col px-8 pt-6 pb-8 my-2 mt-12 mb-4 bg-white rounded-lg shadow-lg">
  <div class="text-center mb-10">
    <h1 class="text-4xl font-bold text-gray-800">Republic of the Philippines</h1>
    <h2 class="text-2xl font-semibold text-gray-800">Barangay Business Permit</h2>
  </div>

  <div class="text-lg leading-loose text-gray-700">
    <p class="mb-6">
        This permit is hereby granted to <span class="font-semibold">{{ $permits->user->firstName }} {{ $permits->user->lastName }}</span> 
        of <span class="font-semibold">{{ $permits->location }}</span> province to operate the business named 
        <span class="font-semibold">{{ $permits->businessName }}</span>. This permit is issued upon payment of the required license fee in 
        advance or quarterly, subject to the provisions of existing laws and ordinances, unless sooner revoked or cancelled for cause.
    </p>

    <p class="mb-6">
        This PERMIT, together with the official receipt issued by the Office of the Treasurer, shall be displayed in a conspicuous place 
        where the business is being operated.
    </p>

    <p class="mb-6">
        Issued this {{ \Carbon\Carbon::now()->toFormattedDateString() }} at the Province Name.
    </p>

    <p class="mb-10">
        Date: {{ \Carbon\Carbon::now()->toFormattedDateString() }}
    </p>

    <div class="text-center">
        <a href="{{ route('download.business_permit_pdf', ['id' => $permits->id]) }}" class="px-6 py-3 text-white bg-blue-600 rounded hover:bg-blue-700">Download PDF</a>
    </div>
  </div>
</div>

@endsection
