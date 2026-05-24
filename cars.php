<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylx.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Document</title>
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
<div class="container" style="margin-top: 70px; display: flex; align-items: center; flex-direction: row; background-color: #f0f0f0; padding: 20px; border-radius: 10px;">
    <h1>Cars</h1><br><br>
      <label style="margin: 5 px;">Enter your country</label> <br>
        <select name="country" id="country-select">
            <option value="other">  other</option>
            <option value="alg">    algeria</option>
            <option value="sa">     saudi arabia</option>
            <option value="usa">    usa</option>
        </select> 
        <label style="margin-right: 10px;">Enter your country</label> <br>
        <select name="country" id="country-select">
            <option value="other">  other</option>
            <option value="alg">    algeria</option>
            <option value="sa">     saudi arabia</option>
            <option value="usa">    usa</option>
        </select> 
        <label style="margin-right: 10px;">Enter your country</label> <br>
        <select name="country" id="country-select">
            <option value="other">  other</option>
            <option value="alg">    algeria</option>
            <option value="sa">     saudi arabia</option>
            <option value="usa">    usa</option>
        </select> 
        <label style="margin-right: 10px;">Enter your country</label> <br>
        <select name="country" id="country-select">
            <option value="other">  other</option>
            <option value="alg">    algeria</option>
            <option value="sa">     saudi arabia</option>
            <option value="usa">    usa</option>
        </select> 
        <button id="show-cars-btn">Show Cars</button>
        <div id="cars-list"></div>      
</div>
  <section>
<div class="DEALS">
          <h2>our cars</h2>
           <div class="car-card">
             <a href="car_info.html">
               
               <div class="car-body">
                  <img src="images/ibiza.png" alt="Série 5 520i">
                </div>    
              <div class="car-meta">
                <span>📅 2023</span>
              </div>
              <div class="car-price">
                <span class="car-amt">6 200 000</span>
              </div>
              <span class="go">Voir Détails →</span>
              </a>
            </div>
            </section>
</body>
   <footer style="background-color: rgb(1, 11, 61);">
    <form  >
      <h3 style="color: rgb(77, 133, 182);">Envoyez-nous un message  </h3>
      <input type="text" placeholder="Votre nom">
      <input type="email" placeholder="Votre email">
      <input type="text" placeholder="Votre message">
      <input type="submit" value="Envoyer">
    </form>