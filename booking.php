<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="book-style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Booking</title>
  </head>
  <body>
    
    <nav>    
    <a href="homepage.php" class="nav__logo" data-hover="日本">日本</a>
      <ul class="nav__links">
        <li class="link"><a href="subscription.php">Subscription</a></li>
        <li class="link"><a href="#">Contact Us</a></li>
      </ul>
    </nav>
    <header class="section__container header__container">
      <div class="header__image__container">
        <div class="header__content">
          <h1>Enjoy Your Dream Vacation</h1>
          <p>Book Hotels, Flights and stay packages at lowest price.</p>
        </div>
        <div class="booking__container">
          <form>
            <div class="form__group">
              <div class="input__group">
                <input type="text" />
                <label>Location</label>
              </div>
              <p>Where are you going?</p>
            </div>
            <div class="form__group">
              <div class="input__group">
                <input type="text" />
                <label>Check In</label>
              </div>
              <p>Add date</p>
            </div>
            <div class="form__group">
              <div class="input__group">
                <input type="text" />
                <label>Check Out</label>
              </div>
              <p>Add date</p>
            </div>
            <div class="form__group">
              <div class="input__group">
                <input type="text" />
                <label>Guests</label>
              </div>
              <p>Add guests</p>
            </div>
          </form>
          <button class="btn"><i class="ri-search-line"></i></button>
        </div>
      </div>
    </header>

    <section class="section__container popular__container">
      <h2 class="section__header">Popular Hotels</h2>
      <div class="popular__grid">
        <div class="popular__card">
          <img src="assets/hotel1_acekyoto.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Ace Hotel Kyoto</h4>
              <h4>$549</h4>
            </div>
            <p>Kyoto, Japan</p>
          </div>
        </div>
        <div class="popular__card">
          <img src="assets/hotel2_granbell.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Kyoto Granbell Hotel</h4>
              <h4>$499</h4>
            </div>
            <p>Kyoto, Japan</p>
          </div>
        </div>
        <div class="popular__card">
          <img src="assets/hotel3_hyatt.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Hyatt Regency Hotel</h4>
              <h4>$599</h4>
            </div>
            <p>Kyoto, Japan</p>
          </div>
        </div>
        <div class="popular__card">
          <img src="assets/hotel4_ritz.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>The Ritz-Carlton Okinawa</h4>
              <h4>$549</h4>
            </div>
            <p>Okinawa, Japan</p>
          </div>
        </div>
        <div class="popular__card">
          <img src="assets/hotel5_fufu.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Fufu Kawaguchiko</h4>
              <h4>$649</h4>
            </div>
            <p>Mount Fuji, Japan</p>
          </div>
        </div>
        <div class="popular__card">
          <img src="assets/hotel6_wanosato.jpg" alt="popular hotel" />
          <div class="popular__content">
            <div class="popular__card__header">
              <h4>Wanosato</h4>
              <h4>$449</h4>
            </div>
            <p>Takayama, Japan</p>
          </div>
        </div>
      </div>
    </section>

    <section class="client">
      <div class="section__container client__container">
        <h2 class="section__header">Client Reviews 
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
      </h2>
        <div class="client__grid">
          <div class="client__card">
            <img src="assets/client-1.jpg" alt="client" />
            <p>
              The booking process was seamless, and the confirmation was
              instant. I highly recommend WDM&Co for hassle-free hotel bookings.
            </p>
          </div>
          <div class="client__card">
            <img src="assets/client-2.jpg" alt="client" />
            <p>
              The website provided detailed information about hotel, including
              amenities, photos, which helped me make an informed decision.
            </p>
          </div>
          <div class="client__card">
            <img src="assets/client-3.jpg" alt="client" />
            <p>
              I was able to book a room within minutes, and the hotel exceeded
              my expectations. I appreciate WDM&Co's efficiency and reliability.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container">
      <div class="reward__container">
        <p>100+ discount codes</p>
        <h4>Join rewards and discover amazing discounts on your booking</h4>
        <a href="subscription.php">
        <button class="reward__btn">Join</button>
        </a>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h3>WDM&Co</h3>
          <p>
            WDM&Co is a premier hotel booking website that offers a seamless and
            convenient way to find and book accommodations worldwide.
          </p>
          <p>
            With a user-friendly interface and a vast selection of hotels,
            WDM&Co aims to provide a stress-free experience for travelers
            seeking the perfect stay.
          </p>
        </div>
        <div class="footer__col">
          <h4>Company</h4>
          <p>About Us</p>
          <p>Our Team</p>
          <p>Blog</p>
          <p>Book</p>
          <p>Contact Us</p>
        </div>
        <div class="footer__col">
          <h4>Legal</h4>
          <p>FAQs</p>
          <p>Terms & Conditions</p>
          <p>Privacy Policy</p>
        </div>
        <div class="footer__col">
          <h4>Resources</h4>
          <p>Social Media</p>
          <p>Help Center</p>
          <p>Partnerships</p>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2023 Web Design Mastery. All rights reserved.
      </div>
    </footer>
  </body>
</html>
