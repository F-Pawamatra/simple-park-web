<?php

namespace App\Http\Controllers;

use App\Models\LightMonitoring;
use App\Models\Slot;
use App\Models\UserEntry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProvideDataController extends Controller
{
    public function getSlot() {
        $selectedSlot = Slot::where('is_occupied', false)
            ->get(['id'])
            ->first();

        return response()->json([
            'selected_slot' => $selectedSlot->id,
        ], 200);
    }

    public function userCheckIn(Request $request) {
        $timeNow = Carbon::now();
        try {
            UserEntry::create([
                'id_slot' => $request->id_slot,
                'check_in_at' => $timeNow
            ]);
        } catch (Throwable $e) {
            return response()->json(['error' => true], 500);
        }

        Slot::where('id', $request->id_slot)
            ->update(['is_occupied' => true]);
        return response()->json(['error' => false], 201); 
    }

    public function userCheckOut(Request $request) {
        $timeNow = Carbon::now();
        try {
            $lastRecord = UserEntry::where('id_slot', $request->id_slot)
                ->orderBy('check_in_at', 'DESC')
                ->first();
            $lastRecord->check_out_at = $timeNow;
            $lastRecord->save();
        } catch (Throwable $e) {
            return response()->json(['error' => true], 500);
        }

        Slot::where('id', $request->id_slot)
            ->update(['is_occupied' => false]);
        return response()->json(['error' => false], 200); 
    }
    
    public function turnOnLight(Request $request) {
        try {
            LightMonitoring::where('id', 1)
                ->update(['status' => true]);
        } catch (Throwable $e) {
            return response()->json(['error' => true], 500);
        }

        return response()->json(['error' => false], 200);
    }

    public function turnOffLight(Request $request) {
        try {
            LightMonitoring::where('id', 1)
                ->update(['status' => false]);
        } catch (Throwable $e) {
            return response()->json(['error' => true], 500);
        }

        return response()->json(['error' => false], 200);
    }
}
