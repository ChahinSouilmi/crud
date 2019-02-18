<?php
session_start();
include_once 'head.php';
?>
<?php
if (isset($_SESSION['u_id'])) {
echo "<div class='wrapper fadeInDown'>
<div id='formContent'>
<a href='societe.php'><button type='button' class='btn btn-primary'>Ajouter Un Promoteur</button></a>
<a href='pagination.php'><button type='button' class='btn btn-success'>Voir Tous</button>
<a href='crud.php'><button type='button' class='btn btn-warning'>Edit</button>
<a href='infSup.php'><button type='button' class='btn btn-info'>Ajout des Info supplimentaires</button>


</div>
</div>";
}else 
{
  echo "<div class='wrapper fadeInDown'>
  <div id='formContent'>
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class='fadeIn first'>
      <img src='img/Etic.png' id='icon' alt='User Icon' />
    </div>

    <!-- Login Form -->
    <form action='inc/login.inc.php' method='POST'>
      <input type='text' id='login' class='fadeIn second' name='uid' placeholder='login'>
      <input type='password' id='password' class='fadeIn third' name='pwd' placeholder='password'>
      <input type='submit' name='submit' class='fadeIn fourth' value='Log In'>
    </form>

    <!-- Remind Passowrd -->
    <div id='formFooter'>
      <a class='underlineHover' href='#'>Forgot Password?</a>
    </div>

  </div>
</div>";
}

?>


<a href=""></a>
</body>
</html>
