<header>

  <ul>
    @foreach(config('configuration.routes') as $route)
    <li class="{{ Route::currentRouteName() == $route['pathId'] ? 'active' : '' }}"><a href="{{ route($route['pathId']) }}">{{ $route['displayText'] }}</a></li>
    @endforeach
    <li>
      <form class="" action="{{ route('bookings.index') }}" method="get">
        @csrf
        @method('get')
        <input autocomplete="off" type="search" name="q" value="">
        <button type="submit" name="button">Filtra</button>
      </form>
    </li>
  </ul>

</header>
