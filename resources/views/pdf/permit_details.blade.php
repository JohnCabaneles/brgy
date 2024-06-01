<!DOCTYPE html>
<html>
<head>
    <style>
        .flex {
            display: flex;
        }
        .flex-col {
            flex-direction: column;
        }
        .px-8 {
            padding-left: 2rem;
            padding-right: 2rem;
        }
        .pt-6 {
            padding-top: 1.5rem;
        }
        .pb-8 {
            padding-bottom: 2rem;
        }
        .my-2 {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }
        .mt-12 {
            margin-top: 3rem;
        }
        .mb-4 {
            margin-bottom: 1rem;
        }
        .bg-white {
            background-color: #ffffff;
        }
        .rounded-lg {
            border-radius: 0.5rem;
        }
        .shadow-lg {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .text-center {
            text-align: center;
        }
        .mb-10 {
            margin-bottom: 2.5rem;
        }
        .text-4xl {
            font-size: 2.25rem;
            line-height: 2.5rem;
        }
        .font-bold {
            font-weight: 700;
        }
        .text-gray-800 {
            color: #2d3748;
        }
        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }
        .font-semibold {
            font-weight: 600;
        }
        .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem;
        }
        .leading-loose {
            line-height: 2;
        }
        .text-gray-700 {
            color: #4a5568;
        }
        .mb-6 {
            margin-bottom: 1.5rem;
        }
        .mb-10 {
            margin-bottom: 2.5rem;
        }
        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        .py-3 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }
        .text-white {
            color: #ffffff;
        }
        .bg-blue-600 {
            background-color: #2563eb;
        }
        .rounded {
            border-radius: 0.25rem;
        }
        .hover\:bg-blue-700:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body>
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
        </div>
    </div>
</body>
</html>
