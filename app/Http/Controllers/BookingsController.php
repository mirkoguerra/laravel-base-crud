<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;

use App\Http\Requests\BookingFormRequest;

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
    public function store(BookingFormRequest $request)
    {
      $validated = $request->validated();

      $newGuest = new Booking();

      $newGuest->guest_full_name = $validated['guest_full_name'];
      $newGuest->guest_credit_card = $validated['guest_credit_card'];
      $newGuest->room = $validated['room'];
      $newGuest->from_date = $validated['from_date'];
      $newGuest->to_date = $validated['to_date'];
      $newGuest->more_details = $validated['more_details'];

      $newGuest->save();

      return redirect()->route('bookings.index');
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
      $guest_to_edit = Booking::find($id);

      return view('edit', compact('guest_to_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingFormRequest $request, $id)
    {
      $validated = $request->validated();

      $oldGuest = Booking::find($id);

      $oldGuest->guest_full_name = $validated['guest_full_name'];
      $oldGuest->guest_credit_card = $validated['guest_credit_card'];
      $oldGuest->room = $validated['room'];
      $oldGuest->from_date = $validated['from_date'];
      $oldGuest->to_date = $validated['to_date'];
      $oldGuest->more_details = $validated['more_details'];


      $oldGuest->save();

      return redirect()->route('bookings.index');
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
}
