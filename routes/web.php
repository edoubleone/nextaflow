<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;
use App\Services\GhlService;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [PageController::class, 'home'])->name('home');


Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/services', [PageController::class, 'services'])->name('services');

Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');

Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');

Route::get('/security', [PageController::class, 'security'])->name('security');

Route::get('/terms', [PageController::class, 'terms'])->name('terms');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('contacts/create', [ContactController::class, 'create'])->name('contacts.create');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Newsletter subscription
Route::post('/subscribe', [ContactController::class, 'subscribe'])->name('subscribe');

 // View the form
// Route::post('/contact', [AppointmentController::class, 'store'])->name('contact.submit');

Route::get('/appointment', [AppointmentController::class, 'appointment'])->name('appointment');

// Test GHL API Integration
Route::get('/test-ghl-api', function () {
    try {
        $ghlService = new GhlService();
        
        // Test basic API connectivity by trying to fetch products
        $result = $ghlService->getProducts();
        
        if ($result) {
            return response()->json([
                'status' => 'success',
                'message' => 'GHL API integration is working!',
                'data' => $result
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'GHL API returned no data. Check logs for details.',
            ], 400);
        }
    } catch (\Exception $e) {
        \Illuminate\Support\Facades\Log::error('GHL API Test Error: ' . $e->getMessage());
        return response()->json([
            'status' => 'error',
            'message' => 'GHL API test failed: ' . $e->getMessage(),
        ], 500);
    }
});