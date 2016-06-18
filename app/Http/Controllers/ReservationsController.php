<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

use App\Http\Requests;

class ReservationsController extends Controller
{
    public function index(){
        
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    
    }
    
        public function add(){
        
        $reservations = Reservation::all();
        return view('reservations.addReservation', compact('reservations'));
    
    }
    
        public function store(Request $request){
        
            return $request->all();   
    
    }
    
}
