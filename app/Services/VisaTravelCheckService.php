<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class VisaTravelCheckService
{
    public function checkVisa($passport_code, $destination)
    {
        $url = 'https://zylalabs.com/api/5415/visa+travel+check+api/7020/visa+check'
             . '?passport=' . urlencode($passport_code)
             . '&destination=' . urlencode($destination);

        $response = Http::withoutVerifying()
            ->withHeaders([
                'Authorization' => 'Bearer 8802|DO9wg9txyL78wNdPonV4Tukf9jHflEvFZKq4MIgA', // Add your API key
                'Accept' => 'application/json',
            ])
            ->get($url);

        if ($response->successful()) {
            return $response->json();
        }

        return [
            'error' => true,
            'message' => 'API request failed with status ' . $response->status(),
            'body' => $response->body(), // This might contain more specific error info
            'headers' => $response->headers(), // Check response headers
        ];
    }
}