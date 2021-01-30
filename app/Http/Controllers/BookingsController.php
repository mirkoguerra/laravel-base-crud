<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $guests = Booking::all();

      $columns = [
        'id' => '#',
        'guest' => 'Nome e Cognome',
        'room_number' => 'Numero Stanza',
        'from' => 'Data di Arrivo',
        'to' => 'Data di Uscita',
        'details' => 'Dettagli'
      ];

      return view('index', compact(['guests', 'columns']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $newGuest = new Booking();

      $newGuest->guest_full_name = $request->input('guest_full_name');
      $newGuest->guest_credit_card = $request->input('guest_credit_card');
      $newGuest->room = $request->input('room');
      $newGuest->from_date = $request->input('from_date');
      $newGuest->to_date = $request->input('to_date');
      $newGuest->more_details = $request->input('more_details');

      $newGuest->save();

      $guests = Booking::all();

      $columns = [
        'id' => '#',
        'guest' => 'Nome e Cognome',
        'room_number' => 'Numero Stanza',
        'from' => 'Data di Arrivo',
        'to' => 'Data di Uscita',
        'details' => 'Dettagli'
      ];

      return view('index', compact(['guests', 'columns']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $guest_details = Booking::find($id);

       return view('show', compact('guest_details'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

  public function showw($id)
  {
    $guest_details = Booking::find($id);

    return view('show', compact('guest_details'));
  }
}
