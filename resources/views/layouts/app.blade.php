<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CGJidelna</title>
  <link rel="stylesheet" href="css/style.css">
  <script defer src="js/app.js"></script>
</head>
<body>
  <header class="header">
    <nav>
      <a href="/" class="logo" aria-label="Home">
        <img class="logo" src="assets/logo.png" alt="Open Menu">
      </a>
      <div role="searchbox" class="search">
        <form action="/">
          <div class="input">
            <input type="text" placeholder="Vyhledat jídlo">
            <div class="flex-row">
              <button type="button" id="filter-btn" class="button" aria-label="Filter by">
                <img src="assets/ico-filter.svg" alt="Filter">
              </button>
              <button type="submit" class="button" aria-label="Search food">
                <img style="transform:scaleX(-1)" src="assets/ico-search.svg" alt="Search">
              </button>
              <div id="filter-nav" class="filter-gui">
                <h3>Sort by:</h3>
          
                <div class="radial">
                  <label for="top_rated">Best Rated</label>
                  <input checked type="radio" name="sort" id="top_rated">
                </div>
                <div class="radial">
                  <label for="most_rated">Most Rated</label>
                  <input type="radio" name="sort" id="most_rated">
                </div> 
                <div class="radial">
                  <label for="alphabet">Alphabetical</label>
                  <input type="radio" name="sort" id="alphabet">
                </div>
          
                <h3>Order:</h3>
          
                <div class="radial">
                  <label for="high_to_low">High to low</label>
                  <input checked type="radio" name="order" id="high_to_low">
                </div>
                <div class="radial">
                  <label for="low_to_high">Low to high</label>
                  <input type="radio" name="order" id="low_to_high">
                </div>
              </div>
            </div>
          </div>
        </form>  
      </div>
      <button id="profile-open-btn" class="button" aria-label="Your profile">
        <img src="assets/ico-menu.svg" alt="Your Profile">
      </button>
    </nav>
  </header>
  <main>
    <div class="side-nav" id="profile-nav">
      <div>
        <button id="profile-open-btn" class="button" aria-label="Your profile">
          <img src="assets/ico-account.svg" alt="Your Profile">
        </button>
        <h1>Ahoj, [jméno]!</h1>
      </div>
      <div class="links">
        {{-- <a class="wip" href="/">Profil</a> --}}
        <a href="/">Hlavní nabídka</a>
        <a href="add">Přidat jídlo</a>
        <a href="review">Napsat Recenzi</a>
        <a target="_blank" href="https://e-jidelnicek.cz/logged/home">E-jidelníček</a>
      </div>
      <div>
        <p class="">Made by <a href="https://michalskoula.com">Michal Škoula</a></p>
      </div>
    </div>

    @yield('content')

    </div>
  </main>
</body>
