<section id="box">

  <div class="map_address">
<div class="map">
<h2>Location Us !</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.7513557706068!2d24.93329451601756!3d60.20139768197242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46920991ece823df%3A0xd4b4f30731ef9db7!2sBusiness+College+Helsinki!5e0!3m2!1sfi!2sfi!4v1558630853783!5m2!1sfi!2sfi" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
<div class="stayintouch">
  <h2>Stay in touch</h2>
  <div class="dakky">
    <h3>Social Icon</h3>
    <i class="fab fa-facebook-f fa-3x"></i>
    <i class="fab fa-instagram fa-3x"></i>
    <i class="fab fa-linkedin-in fa-3x"></i>
    <i class="fab fa-google-plus-g fa-3x"></i>
    <i class="fab fa-pinterest-p fa-3x"></i>
  </div>

</div>
</div>

<div class="address dark">
  <?php
  $nameErr = $emailErr =  $phoneErr = $messageErr = "";
  $name = $email = $phone = $message = "";
   ?>
    <div class="formContainer">
      <p><span class = "error">* required field.</span></p>
    <form class="" action="feedback_confirmation.php" method="post">

      <div class="row">
        <div class="col-25">
          <label for="name">Name</label>
        </div>
        <div class="col-75">
          <input type="text" name="name" placeholder="nimi">
     <span class = "error">* <?php echo $nameErr;?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="phone">Telephone</label>
        </div>
        <div class="col-75">
          <input type="text" name="phone" placeholder="+358 0000000">
         <span class = "error">* <?php echo $phoneErr;?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="email">Email</label>
        </div>
        <div class="col-75">
          <input type="text" name="email" placeholder="email@email.com">
         <span class = "error">* <?php echo $emailErr;?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="message">Message</label>
        </div>
        <div class="col-75">
          <textarea name="message" rows="15" cols="50" placeholder="miten voi auttaa"></textarea>
          <span class = "error">* <?php echo $messageErr;?></span>
        </div>
      </div>
      <div class="row">
       <input type="submit" value="Submit">
     </div>
    </form>
      </div>
  </div>
</div>
</section>
