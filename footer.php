<?php
    if(isset($_POST['submit_contact'])){
        $subject = "From : ". $_POST['name'] . "\nEmail : " . $_POST['email'];
        $message = $_POST['message'];
        mail('contact@goldenauto.dz', $subject, $message);
    }
?>

<footer>
  <form>
    <h3 style="color: rgb(77, 133, 182);">Envoyez-nous un message  </h3>
    <input type="text" name="name" placeholder="Votre nom" required>
    <input type="email" name="email" placeholder="Votre email" required>
    <input type="text" name="massage" placeholder="Votre message" required>
    <input type="submit" name="submit_contact" value="Envoyer" required>
  </form>
  <div class="contact" id="contact">
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