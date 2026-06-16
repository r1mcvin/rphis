<?php

namespace App\Services;

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

    private function generateControlNumber()
    {
        //C-M260613
        $now = Carbon::now();
        // A-2606-001
        $control_number = 'A-' . $now->format('ym') . '-' . '0001';
    }
}
