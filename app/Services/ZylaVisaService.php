<?php
namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ZylaVisaService
{
    private $baseUrl;
    private $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.zyla.base_url');
        $this->apiKey = config('services.zyla.api_key');
    }

    /**
     * Check visa requirements
     *
     * @param string $passport - Country code of passport
     * @param string $destination - Country code of destination
     * @return array
     */
    public function checkVisaRequirements($passport, $destination)
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])->post($this->baseUrl . '/api/5415/visatravelrequestapi/7020/visacheck', [
                'passport' => $passport,
                'destination' => $destination
            ]);

            if ($response->successful()) {
                return [
                    'success' => true,
                    'data' => $response->json()
                ];
            }

            return [
                'success' => false,
                'error' => 'API request failed',
                'status' => $response->status(),
                'message' => $response->body()
            ];

        } catch (\Exception $e) {
            Log::error('Zyla API Error: ' . $e->getMessage());
            
            return [
                'success' => false,
                'error' => 'Service unavailable',
                'message' => $e->getMessage()
            ];
        }
    }
}