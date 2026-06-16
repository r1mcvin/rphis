<?php

namespace App\Services;

use App\Models\Faltas;
use Carbon\Carbon;
use Exception;

class FaltasServices
{
    public function request(array $data)
    {
        try {

        } catch (Exception $e) {

        }
    }

    private function generateControlNumber(string $code)
    {
        //C-M260613
        $now = Carbon::now();
        // A-2606-001
        // $controlNumber = $code . '-' . $now->format('ym') . '-' . str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
        $controlNumber = $code . '-' . $now->format('ym') . '-0001';

        // check if there is existing control number in the database
        $existing_control_num = Faltas::where('control_number', 'like', $code . '-' . $now->format('ym') . '-%')->orderBy('control_number', 'desc')->first();
    }
}
