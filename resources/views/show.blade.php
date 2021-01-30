@extends('layouts.main')

@section('title', 'dettagli')

@section('content')
<main class="guest-details">
  <h1>ID: {{ $guest_details->id }}</h1>
  <h1>Nome e Cognome: {{ $guest_details->guest_full_name }}</h1>
  <h1>Numero della Carta di Credito: {{ $guest_details->guest_credit_card }}</h1>
  <h1>Numero della stanza: {{ $guest_details->room }}</h1>
  <h1>Data di Arrivo: {{ $guest_details->from_date }}</h1>
  <h1>Data di partenza: {{ $guest_details->to_date }}</h1>
  <h1>Dettagli:</h1>
  <p>{{ $guest_details->more_details }}</p>
</main>
@endsection
