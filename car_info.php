<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylx.css?v=1"> 
   <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Climate+Crisis:YEAR@1979&display=swap" rel="stylesheet">
</head>
<body>
    <?php include("navbar.php");
          include("functions.php");
          showCarInfo($_GET['id']);
    ?>

    
        <section style="clear: both; margin-top: 50px;">
            <div class="saimilaire">
            <h2>Meilleures Offresaimilaire</h2>
              <?php displaySimilarCars($_GET['id']); ?>
            </div>
        </section>

         <footer>
  <form>
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
</footer>
        

        
       
                



        














</body>
</html>
