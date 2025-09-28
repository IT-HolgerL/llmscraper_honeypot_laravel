<?php

namespace App\Http\Controllers;

use App\Models\Visitorlog;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VisitorLogController extends Controller
{
    public function index()
    {
        try {
            $Visitorlogs = Visitorlog::all();
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'data' => $Visitorlogs,
            'message' => 'Succeed'
        ], JsonResponse::HTTP_OK);
    }
    public function view(): RedirectResponse|\Illuminate\Contracts\View\View
    {
        $Visitorlogs = Visitorlog::all();
        return view("home", ["visitorlogs" => $Visitorlogs]);
    }

    public function show($id)
    {
        try {
            $Visitorlogs = Visitorlog::find($id);
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'data' => $Visitorlogs,
            'message' => 'Succeed'
        ], JsonResponse::HTTP_OK);
    }

    public function store(Request $request)
    {
        try {
            $Visitorlogs = Visitorlog::create($request->all());
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'data' => $Visitorlogs,
            'message' => 'Succeed'
        ], JsonResponse::HTTP_OK);
    }

    public function update(Request $request, $id)
    {
        try {
            $Visitorlogs = Visitorlog::find($id)
                ->update($request->all());
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'data' => $Visitorlogs,
            'message' => 'Succeed'
        ], JsonResponse::HTTP_OK);
    }

    public function destroy($id)
    {
        try {
            $Visitorlogs = Visitorlog::destroy($id);
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'data' => $Visitorlogs,
            'message' => 'Succeed'
        ], JsonResponse::HTTP_OK);
    }
}
