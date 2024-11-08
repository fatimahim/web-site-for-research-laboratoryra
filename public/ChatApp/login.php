<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Espace de Chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email :</label>
          <input type="text" name="email" placeholder="Entrer votre email" required>
        </div>
        <div class="field input">
          <label>Mot de pass :</label>
          <input type="password" name="password" placeholder="Entrer votre mot de pass" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Connexion">
        </div>
      </form>
      <div class="link">Vous-avez pas deja un compte? <a href="index.php">Inscrivez-vous</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
