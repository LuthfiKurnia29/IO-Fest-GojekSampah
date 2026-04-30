<?php

namespace App\Services\Implementations;

use App\Models\TransaksiSampah;
use App\Services\Interfaces\IBookingService;

class BookingService implements IBookingService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function createBooking(array $data){
        return TransaksiSampah::create($data);
    }
}
