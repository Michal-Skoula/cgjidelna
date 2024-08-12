@extends('layouts/app')
@section('content')

<div class="max-width side-page">
  <h1>Přidat nové jídlo</h1>
  <form class="form" action="">
    <div class="form">
      <label for="name">Název jídla dle jídelníčku</label>
      <input required placeholder="File tilápie" type="text" id="name" name="name">
      <label for="photo">Fotka jídla</label>
      <input required type="file" id="photo" name="photo">
      <!-- TODO: Add alergens -->
    </div>
    <button type="submit">Přidat jídlo</button>
  </form>
</div>

@endsection