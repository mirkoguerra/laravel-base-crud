@extends('layouts.main')

@section('title', 'home')

@section('content')

<main>

  <div class="index-container">

    <section class="top-container">
      @foreach ($columns as $column)
      <div class="column">
        <h3>{{ $column }}</h3>
      </div>
      @endforeach
    </section>

    <section class="bottom-container">
      @foreach ($guests as $guest)
      <ul class="row">
        <li>{{ $guest->id }}</li>
        <li>{{ $guest->guest_full_name }}</li>
        <li>{{ $guest->room }}</li>
        <li>{{ $guest->from_date }}</li>
        <li>{{ $guest->to_date }}</li>
        <li>
          <a href="{{ route('bookings.show', $guest->id) }}">Dettagli</a>
          <a class="mod" href="{{ route('bookings.edit', $guest->id) }}">Modifica</a>
          <form action="{{ route('bookings.destroy', $guest->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Elimina</button>
          </form>
        </li>
      </ul>
      @endforeach
    </section>

  </div>

</main>

@endsection
