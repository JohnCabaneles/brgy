@extends('dashboard')
@section('content')
<div class="flex flex-col justify-center items-center mx-auto mt-5">
    <h1 class="text-2xl font-bold mb-5">Request submitted successfully</h1>
    <p class="mb-2">Go back to main page</p>
    <div class="px-4 py-2 mt-5 bg-blue-500 hover:bg-blue-600 border rounded-lg">
        <a href="/home" class="text-white">Main page</a>
    </div>
</div>
@endsection