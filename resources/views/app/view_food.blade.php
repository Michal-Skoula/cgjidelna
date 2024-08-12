@extends('layouts/app')
@section('content')

<div class="showcase max-width">
  <div class="food-item">
    <div class="image-container">
      <img src="assets/food-placeholder.png" alt="name_of_food_item">
    </div>
    <div class="food-item-description">
      <h1>Zeleninová miska s kuřecím masem</h1>
      <div class="metrics flex-row">
        <div class="metric score flex-row">
          <img class="icon" src="assets/ico-review-great.svg" alt="Score: Great">
          <p class="great">89%</p>
        </div>
        <div class="metric reviews flex-row">
          <img class="icon" src="assets/ico-reviews.svg" alt="Review">
          <p>10 recenzí</p>
        </div>
        <div class="metric allergies flex-row">
          <img class="icon" src="assets/ico-allergies.svg" alt="Allergen">
          <p>2 alergeny</p>
        </div>
      </div>
    </div>
  </div>
  <div class="flex-row-space-between">
    <h2 class="review-title">Recenze (3)</h2>
    <a href="new-review-form.html">Přidat vlastní recenzi</a>
  </div>
  
  <article class="user-review">
    <div class="flex-row">
      <h2>Michal Škoula</h2>
      <h2>
        <div class="metric score">
          <img class="icon" src="assets/ico-review-great.svg" alt="Score: Great">
          <p class="great">89%</p>
        </div>
      </h2>
    </div>
    <p class="review-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam eget nisl. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Etiam ligula pede, sagittis quis, interdum ultricies, scelerisque eu. Mauris metus.</p>
  </article>
  <article class="user-review">
    <div class="flex-row">
      <h2>Karel Novák</h2>
      <h2>
        <div class="metric score">
          <img class="icon" src="assets/ico-review-great.svg" alt="Score: Great">
          <p class="great">89%</p>
        </div>
      </h2>
    </div>
    <p class="review-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam eget nisl. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Etiam ligula pede, sagittis quis, interdum ultricies, scelerisque eu. Mauris metus.</p>
  </article>
</div>

@endsection