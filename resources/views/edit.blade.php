@extends('layouts.main')

@section('title', 'nuova prenotazione')

@section('content')

<main class="create">
  <form class="" action="{{ route('bookings.update', $guest_to_edit->id) }}" method="post">
    @csrf
    @method('put')

    <div class="full-name">
      <label for="full-name">Nome e Cognome</label>
      @error('guest_full_name')
      <p>errore in "Nome e Cognome" ---></p>
      @enderror
      <input autocomplete="off" type="text" id="full-name" name="guest_full_name" value="{{ $guest_to_edit->guest_full_name }}">
    </div>

    <div class="credit-card">
      <label for="credit-card">Numero Carta</label>
      @error('guest_credit_card')
      <p>errore in "Numero Carta" ---></p>
      @enderror
      <input autocomplete="off" type="text" id="credit-card" name="guest_credit_card" value="{{ $guest_to_edit->guest_credit_card }}">
    </div>

    <div class="room">
      <label for="room">Numero Stanza</label>
      @error('room')
      <p>errore in "Numero Stanza" ---></p>
      @enderror
      <input autocomplete="off" type="text" id="room" name="room" value="{{ $guest_to_edit->room }}">
    </div>

    <div class="from-date">
      <label for="from-date">Data di Arrivo</label>
      @error('from_date')
      <p>errore in "Data di Arrivo" ---></p>
      @enderror
      <input autocomplete="off" type="text" id="from-date" name="from_date" value="{{ $guest_to_edit->from_date }}">
    </div>

    <div class="to-date">
      <label for="to-date">Data di Uscita</label>
      @error('to_date')
      <p>errore in "Data di Uscita" ---></p>
      @enderror
      <input autocomplete="off" type="text" id="to-date" name="to_date" value="{{ $guest_to_edit->to_date }}">
    </div>

    <div class="details">
      <label for="details">Dettagli</label>
      <textarea autocomplete="off" id="details" name="more_details" rows="8" cols="60">{{ $guest_to_edit->more_details }}</textarea>
      @error('more_details')
      <p>errore in "Dettagli"</p>
      @enderror
    </div>

    <div class="button">
      <button type="submit" name="button">Procedi</button>
    </div>

  </form>
</main>

@endsection
