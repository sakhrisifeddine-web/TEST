<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylx.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Climate+Crisis:YEAR@1979&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav>
    <div class="navbar">
      <a href="index.php" id="navbrand"> Auto luxe</a>
      <div class="nav-links">
        <button> <a href="index.php" >Accueil</a>
        </button>
        <button>
          <a href="cars.php">Cars</a>
        </button>
        
        <button>
          <a href="index.php#contact">Contact Us</a>
        </button>
        
        <button>
          <a href="index.php#about">About Us</a>
        </button>
        
        <button>
          <a href="login.php" >Connexion</a>
        </button>
      </div>
      </div>
    </nav>
<div class="filter">
    <h1>Cars</h1>
    <div class="label-body">
      <div class="label-i">
       <label >Enter your country</label> 
        <select name="country" id="country-select">
            <option value="other">  other</option>
            <option value="alg">    algeria</option>
            <option value="sa">     saudi arabia</option>
            <option value="usa">    usa</option>
        </select> 
      </div>
        <button id="show-cars-btn">Show Cars</button>
        <div id="cars-list"></div>      
</div>
</div>
  <section>
<div class="CARS">
          <h2>our cars</h2>
           <div class="car-card">
             <a href="car_info.php">
               <div class="car-body">
                  <img src="images/ibiza.png" alt="Série 5 520i">
                </div>    
              <div class="car-meta">
                <div class="car-meta-i">
                  <span class="car-name">
                        Seat Ibiza 
</span>
                   <span class="car-year">
                      2023
</span>
                  
                </div>
                <div class="car-price">
                   <span class="car-amt">6 200 000</span>
                </div>
              </div>
              <span class="go">Voir Détails →</span>
              </a>
            </div>
            </section>

   <footer style="background-color: rgb(1, 11, 61);">
    <form  >
      <h3 style="color: rgb(77, 133, 182);">Envoyez-nous un message  </h3>
      <input type="text" placeholder="Votre nom">
      <input type="email" placeholder="Votre email">
      <input type="text" placeholder="Votre message">
      <input type="submit" value="Envoyer">
    </form>
    <div class="contact">
    <h3>Contactez-Nous</h3>
    <p> Adresse : Alger, Algérie</p>
    <p> Téléphone : +213 55 12 34 56</p>
    <p> Email : contact@goldenauto.dz</p>
    <p> Horaires :  09h00 – 18h00</p>
  </div>
  
  <div style="color: aliceblue; text-align: center">
    &copy; 2026  Auto luxe project 
  </div>
  </body>
  </html>