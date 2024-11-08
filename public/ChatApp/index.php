<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Espace de Chat :</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Prénom :</label>
            <input type="text" name="fname" placeholder="Votre prénom" required>
          </div>
          <div class="field input">
            <label>Nom :</label>
            <input type="text" name="lname" placeholder="Votre nom" required>
          </div>
        </div>
        <div class="field input">
          <label>Email :</label>
          <input type="text" name="email" placeholder="Entrer votre email" required>
        </div>
        <div class="field input">
          <label>Mot de pass</label>
          <input type="password" name="password" placeholder="Votre mot de passe" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Choisir Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Inscription">
        </div>
      </form>
      <div class="link">Vous-avez deja inscrit? <a href="login.php">Connectez-vous</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
