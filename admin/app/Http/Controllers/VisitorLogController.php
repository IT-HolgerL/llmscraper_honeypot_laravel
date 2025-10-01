<?php

namespace App\Http\Controllers;

use App\Models\Visitorlog;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class VisitorLogController extends Controller
{
    public function index()
    {
        Log::debug('Accessing visitor logs');
        try {
            $Visitorlogs = Visitorlog::all()->sortBy('created_at');
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
    public function downloadCSV(): BinaryFileResponse
    {
        Log::debug('Creating file for download');
        $data = Visitorlog::all();
        $filePath = public_path() . env('CSV_Download_Path', '/downloads/logs.csv');
        Log::info('Try to open file in ' . $filePath);
        $file = fopen($filePath, 'w');

        $dataArray = $data->toArray();
        $headers = array_keys((array) $dataArray[0]); // Get the column headers from the first row
        fputcsv($file, $headers);

        foreach ($dataArray as $row) {
            fputcsv($file, $row, );
        }
        fclose($file);
        $headers = [
            'Content-Type' => 'application/csv',
        ];
        return response()->download($filePath, 'logs.csv', $headers);
    }
}
