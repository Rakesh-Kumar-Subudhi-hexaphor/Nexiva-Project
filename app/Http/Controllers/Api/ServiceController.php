<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
     public function index()
    {
        $services = Service::select(
            'id',
            'title',
            'slug',
            'icon',
            'image',
            'short_desc',
            'description'
        )->get();

        return response()->json([
            'status' => true,
            'message' => 'Service List',
            'data' => $services
        ]);
    }
     public function serviceDetail($slug)
    {
        $service = Service::where('slug', $slug)->first();

        if (!$service) {
            return response()->json([
                'status' => false,
                'message' => 'Service not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Service Details',
            'data' => [
                'id' => $service->id,
                'title' => $service->title,
                'slug' => $service->slug,
                'icon' => url($service->icon),
                'image' => url($service->image),
                'short_desc' => $service->short_desc,
                'description' => $service->description
            ]
        ]);
    }
}
