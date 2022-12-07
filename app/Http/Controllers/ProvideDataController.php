<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use App\Models\UserEntry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProvideDataController extends Controller
{
    public function getAvailableSlots() {
        $availableSlots = Slot::where('is_occupied', false)
            ->get(['id'])
            ->toArray();
        $availableSlots = array_column($availableSlots, 'id');

        return response()->json([
            'available_slots' => $availableSlots
        ]);
    }

    public function userCheckIn(Request $request) {
        $data = json_decode($request->getContent(), true);

        if ($this->userEntryValidate($data)) {
            $timeNow = Carbon::now();
            try {
                UserEntry::create([
                    'rfid_uid' => $data['rfid_uid'],
                    'id_slot' => $data['slot'],
                    'check_in_at' => $timeNow
                ]);
            } catch (Throwable $e) {
                return response()->json(['error' => true], 500);
            }

            Slot::where('id', $data['slot'])
                ->update(['is_occupied' => true]);
            return response()->json(['error' => false], 201); 
        } else {
            return response()->json(['error' => true], 400); 
        }
    }

    public function userCheckOut(Request $request) {
        $data = json_decode($request->getContent(), true);

        if ($this->userEntryValidate($data)) {
            $timeNow = Carbon::now();
            try {
                $lastRecord = UserEntry::where('rfid_uid', $data['rfid_uid'])
                    ->where('id_slot', $data['slot'])
                    ->orderBy('check_in_at', 'DESC')
                    ->first();
                $lastRecord->check_out_at = $timeNow;
                $lastRecord->save();
            } catch (Throwable $e) {
                return response()->json(['error' => true], 500);
            }

            Slot::where('id', $data['slot'])
                ->update(['is_occupied' => false]);
            return response()->json(['error' => false], 201); 
        } else {
            return response()->json(['error' => true], 400); 
        }
    }

    public function userEntryValidate($data) {
        if (isset($data['slot']) && isset($data['rfid_uid'])) {
            return true;
        }  
    }
}
