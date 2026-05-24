<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylx.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
<nav>
    <div class="navbar">
      <a href="index.html" id="navbrand"> Auto luxe</a>
      <div class="nav-links">
        <button> <a href="index.html" >Accueil</a>
        </button>
        <button>
          <a href="cars.html">Cars</a>
        </button>
        
        <button>
          <a href="index.html#contact">Contact Us</a>
        </button>
        
        <button>
          <a href="index.html#about">About Us</a>
        </button>
        
        <button>
          <a href="login.html" >Connexion</a>
        </button>
      </div>
    </div>
  </nav>
      <div class="car-info-img" style="float: left; width: 30%; padding: 50px;">
        <h1>land cruiser</h1>
        <img src="https://placehold.co/400x200?text=Land+Cruiser" alt="Land Cruiser">
        <span style="font-size: 22px; color: #555;">description</span>
        <p style="font-size: 18px; color: #777;">Le Land Cruiser 300 est un SUV robuste et luxueux de Toyota, offrant une performance exceptionnelle et un confort supérieur pour les aventures tout-terrain.</p>
       </div>

        <div class="car-info-details" style="float: right; margin: 80px;">
           <table style="width: 100% ;">
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Caractéristique</th>
                <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Détails</th>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Moteur</td>
                <td style="border: 1px solid #ddd; padding: 8px;">V6 biturbo de 3,5 litres</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">color</td>
                <td style="border: 1px solid #ddd; padding: 8px;">Rouge</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">brand</td>
                <td style="border: 1px solid #ddd; padding: 8px;">Toyota</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Catégorie</td>
                <td style="border: 1px solid #ddd; padding: 8px;">SUV</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">carburant</td>
                <td style="border: 1px solid #ddd; padding: 8px;">Essence</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">year</td>
                <td style="border: 1px solid #ddd; padding: 8px;">2026</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Prix</td>
                <td style="border: 1px solid #ddd; padding: 8px;">4 850 000</td>
            </tr>
           </table>
           <div class="car-actions" style="margin-top: 20px;">
            qte: <input type="number" value="1" min="1" style="width: 60px; padding: 5px; margin-right: 10px;">
            <button style="padding: 10px 20px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer;">Ajouter au Panier</button>
            <button style="padding: 10px 20px; background-color: #28A745; color: white; border: none; border-radius: 5px; cursor: pointer;">Acheter Maintenant</button>
           </div>
        </div>
        <section style="clear: both; margin-top: 50px;">
            <div class="saimilaire">
            <h2>Meilleures Offresaimilaire</h2>
             <div class="car-card">
            <a href="car_info.html">
              <div class="car-body">
              <img src="images/ibiza.png" alt="">
              </div>    
            <div class="car-meta">

              <span> 2023</span>
            </div>
            <div class="car-price">
              <span class="car-name">ibiza</span><br>
              <span class="car-amt">6 200 000</span>
            </div>
            <span class="go">Voir Détails →</span>
            </a>
          </div>
           <div class="car-card">
            <a href="car_info.html">
              <div class="car-body">
              <img src="images/ibiza.png" alt="">
              </div>    
            <div class="car-meta">

              <span> 2023</span>
            </div>
            <div class="car-price">
              <span class="car-name">ibiza</span><br>
              <span class="car-amt">6 200 000</span>
            </div>
            <span class="go">Voir Détails →</span>
            </a>
          </div>
           <div class="car-card">
            <a href="car_info.html">
              <div class="car-body">
              <img src="images/ibiza.png" alt="">
              </div>    
            <div class="car-meta">

              <span> 2023</span>
            </div>
            <div class="car-price">
              <span class="car-name">ibiza</span><br>
              <span class="car-amt">6 200 000</span>
            </div>
            <span class="go">Voir Détails →</span>
            </a>
          </div>
           <div class="car-card">
            <a href="car_info.html">
              <div class="car-body">
              <img src="images/ibiza.png" alt="">
              </div>    
            <div class="car-meta">

              <span> 2023</span>
            </div>
            <div class="car-price">
              <span class="car-name">ibiza</span><br>
              <span class="car-amt">6 200 000</span>
            </div>
            <span class="go">Voir Détails →</span>
            </a>
          </div>
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
    <div class="contact" style="color: aliceblue;">
      <h3>Contactez-Nous</h3>
      <p> Adresse : Alger, Algérie</p>
      <p> Téléphone : +213 55 12 34 56</p>
      <p> Email : contact@goldenauto.dz</p>
      <p> Horaires :  09h00 – 18h00</p>
    </div>
    
    <div style="color: aliceblue; text-align: center; background-color: darkgrey;">
      &copy; 2026 Golden Auto — Tous droits réservés
    </div>
  </footer>

                   
                       
        

        
       
                



        














</body>
</html>
