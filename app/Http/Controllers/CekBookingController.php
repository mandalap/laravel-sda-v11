<?php

namespace App\Http\Controllers;

use App\Models\BookingTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class CekBookingController extends Controller
{
    //
    public function index()
    {
        return view('pages.check-booking.index');
    }

    public function caribooking(Request $request)
    {
        $data = $request->all();

         $validator = Validator::make($request->all(), [
             'code_booking' => 'required',
         ]);

         if ($validator->fails()) {
            Alert::toast('Data tidak boleh kosong.', 'info')->autoClose(10000)->timerProgressBar();
            return redirect()->route('check-booking')->withInput();
        }

        $booking = BookingTransaction::where('invoice', $request->code_booking)->first();

        if (!$booking) {
            Alert::toast('Booking tidak ditemukan.', 'error')->autoClose(10000)->timerProgressBar();
            return redirect()->route('check-booking')->withInput();
        }

        return view('pages.check-booking.result', compact('booking'));
    }
}
