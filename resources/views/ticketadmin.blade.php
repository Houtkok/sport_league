@include('manubar') 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketAdmin</title>
    <link rel="stylesheet" href="/css/adminticket.css">
    
</head>
<body>
    
    <main class="main flow">
  <h1 class="main__heading">Choose your ticket </h1>
  <div class="main__cards cards">
    <div class="cards__inner">
      <div class="cards__card card">
        <h2 class="card__heading">Regular Ticket</h2>
        <p class="card__price">$7.79</p>
        <ul role="list" class="card__bullets flow">
          <li>Random seat order and sort by number</li>
          <li>Normal view</li>
          <li>Natural weather</li>
          <li>Meet a lot of people</li>
          <li>Responsible for your stuff</li>

        </ul>
        <a href="purchase" class="card__cta cta">Edit</a>
      </div>

      <div class="cards__card card">
        <h2 class="card__heading">Premium Ticket</h2>
        <p class="card__price">$14.26</p>
        <ul role="list" class="card__bullets flow">
          <li>choose the seat you like</li>
          <li>For front seat </li>
          <li>Normal view</li>
          <li>Normal weather</li>
          <li>can view player clearly</li>
          <li>Responsible for your stuff</li>
        </ul>
        <a href="purchase" class="card__cta cta">Edit</a>
      </div>
      <div class="cards__card card">
        <h2 class="card__heading">VIP Ticket</h2>
        <p class="card__price">$69.99</p>
        <ul role="list" class="card__bullets flow">
          <li>premium room</li>
          <li>Free food</li>
          <li>air conditioner </li>
          <li>Personal space, family , friend</li>
          <li>Perfect View</li>
          <li>Free service</li>
          <li>Strong security</li>
        </ul>
        <a href="purchase" class="ca6rd__cta cta">Edit</a>
      </div>
    </div>
    <div>
      <button id="SaveTicketadmin"> Save </button>
    </div>
    <div class="overlay cards__inner"></div>
  </div>
</main>
  <script  src="/js/ticket.js"></script>
  @include('footer') 
</body>
</html>