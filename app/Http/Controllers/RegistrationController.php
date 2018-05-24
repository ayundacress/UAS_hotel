<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\Guest;
use App\Room;
use App\product;
use DB;

class RegistrationController extends Controller
{
    public function test()
    {
        $regist = Registration::All();
        $regist = DB::table('registrations')
            ->join('guests', 'guests.id', '=', 'registrations.guest_id')
            ->join('rooms', 'rooms.id', '=', 'registrations.room_id')
            ->join('products', 'products.id', '=', 'registrations.product_id')
            ->get();
        $data = array(
            'title' => 'Data Registration',
            'no'    => 1,
            'regist'  => $regist
        );
        return view('registrations.test',$data);
    }
    public function index()
    {
        $regist = Registration::All();
        $regist = DB::table('registrations')
            ->join('guests', 'guests.id', '=', 'registrations.guest_id')
            ->join('rooms', 'rooms.id', '=', 'registrations.room_id')
            ->join('products', 'products.id', '=', 'registrations.product_id')
            ->get();
        $data = array(
            'title' => 'Data Registration',
            'no'    => 1,
            'regist'  => $regist
        );
        return view('registrations.index',$data);
    } 

    public function create(){
    	$room 	= Room::All();
    	$guest 	= Guest::All();
        $product = product::All();
    	$data 	= array(
    		'title' => 'Add Registration',
    		'room'	=> $room,
    		'guest'	=> $guest,
            'product' => $product
    	);
    	return view('registrations.tambah',$data);
    }

     public function store()
    {
     Registration::create([
         'day'          => request('day'),
         'room_id'      => request('room_id'),
         'guest_id'    	=> request('guest_id'),
         'product_id'   => request('product_id')
     ]);
     return redirect('/registrations/test');
    }

    public function destroy(Registration $registrasi){
        $registrasi->delete();
        return redirect()->route('registrations.index');
    }

    public function update(Registration $registrasi){
        $registrasi-update([
            'day'    => request('day'),
            'room'   => request('room'),
            'guest'  => request('guest'),
            'product' => request('product')
            
        ]);
        return redirect('/registrations/test');

    }
}
