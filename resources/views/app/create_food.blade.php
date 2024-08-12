@extends('layouts/app')
@section('content')

<div class="max-width side-page">
  <h1>Přidat novou recenzi</h1>
  <form class="form" action="">
    <div class="form">
      <label for="score">Hodnocení</label>
      <input min="0" max="100" required placeholder="0 - 100" type="number" id="score" name="score">
      <label for="review">Text Recenze</label>
      <input placeholder="Krátký popis dojmů" required type="text" id="review" name="review">
      <!-- TODO: Add alergens -->
    </div>
    <button type="submit">Přidat jídlo</button>
    
  </form>
</div>

@endsection