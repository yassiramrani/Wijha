@extends('layouts.app')

@section('content')
<main class="container mx-auto p-6 max-w-xl">

    <h1 class="text-3xl font-bold mb-6">Visa Information</h1>

    @if(isset($result['error']) && $result['error'])
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            <strong>Error:</strong> {{ $result['message'] ?? 'Unable to fetch visa information.' }}
        </div>
    @else
        <div class="bg-white shadow-md rounded p-6 space-y-4 border border-gray-200">

            <h2 class="text-xl font-semibold mb-4">
                Passport of: {{ $result['passport_of'] }} ({{ $result['passport_code'] }})
            </h2>

            <p><strong>Destination:</strong> {{ $result['destination'] }}</p>
            <p><strong>Capital:</strong> {{ $result['capital'] }}</p>
            <p><strong>Currency:</strong> {{ $result['currency'] }}</p>
            <p><strong>Visa Information:</strong> {{ $result['visa'] }}</p>
            <p><strong>Stay Duration:</strong> {{ $result['stay_of'] }}</p>
            <p><strong>Passport Validity:</strong> {{ $result['pass_valid'] }}</p>
            <p><strong>Phone Code:</strong> {{ $result['phone_code'] }}</p>
            <p><strong>Timezone:</strong> {{ $result['timezone'] }}</p>
            <p><strong>Exceptions:</strong> {{ $result['except_text'] }}</p>

            @if(!empty($result['embassy']))
                <p><strong>Embassy Info:</strong> 
                    <a href="{{ $result['embassy'] }}" target="_blank" class="text-blue-600 underline">Visit Embassy</a>
                </p>
            @endif

            @if(!empty($result['link']))
                <p><strong>More Info:</strong> 
                    <a href="{{ $result['link'] }}" target="_blank" class="text-blue-600 underline">Travel Buddy Link</a>
                </p>
            @endif

        </div>
    @endif

</main>
@endsection
