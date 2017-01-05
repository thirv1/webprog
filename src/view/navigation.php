<?php
  $activePage = array(
    "Home" => "Home",
    "Colors" => "Colors",
    "Utilities" => "Utilities",
    "About" => "About",
  )
?>

<nav>
  <div class="row">
    <div class="navi">
      <div class="col-1 menu">
        <img src="../assets/images/crown.png" height="30px" alt="crown">
      </div>
      <div class="col-8 menu">
        <ul>
          <?php foreach ($activePage as $page => $name) {
    $class = $page == $activePage ? 'class="active"' : " ";
      echo "<li><a $class href=\"$page.php\">$name</a></li>";
  }
   ?>

        </ul>
      </div>
      <div class="col-3 menu">
      <ul>
        <li><a href="#cart"><img src="../assets/images/cart.png" height="20px" alt="cart"></a></li>
        <li><a href="#profile"><img src="../assets/images/profile.png" height="20px" alt="profile"></a></li>
        <li><a href="#language"><img src="../assets/images/lang.png" height="20px" alt="language"></a></li>
      </ul>
    </div>
  </div>
</div>


</nav>
