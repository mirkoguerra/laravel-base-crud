@extends('layouts.main')

@section('title', 'nuova prenotazione')

@section('content')

<main class="create">
  <form class="" action="{{ route('store') }}" method="post">
    @csrf

    <div class="full-name">
      <label for="full-name">Nome e Cognome</label>
      <input autocomplete="off" type="text" id="full-name" name="guest_full_name">
    </div>

    <div class="credit-card">
      <label for="credit-card">Numero Carta</label>
      <input autocomplete="off" type="text" id="credit-card" name="guest_credit_card">
    </div>

    <div class="room">
      <label for="room">Numero Stanza</label>
      <input autocomplete="off" type="text" id="room" name="room">
    </div>

    <div class="from-date">
      <label for="from-date">Data di Arrivo</label>
      <input autocomplete="off" type="text" id="from-date" name="from_date">
    </div>

    <div class="to-date">
      <label for="to-date">Data di Uscita</label>
      <input autocomplete="off" type="text" id="to-date" name="to_date">
    </div>

    <div class="details">
      <label for="details">Dettagli</label>
      <textarea autocomplete="off" id="details" name="more_details" rows="8" cols="60"></textarea>
    </div>

    <div class="button">
      <button type="submit" name="button">Procedi</button>
    </div>

  </form>
</main>

@endsection
