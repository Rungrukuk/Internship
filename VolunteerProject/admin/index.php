<?php

session_start();
if(!isset($_SESSION['user_login'])){
    header('Location: admin');
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
  include "C:/xampp/htdocs/Internship/VolunteerProject/admin/includes/head.php";
?>
<body> 
<?php
  include "C:/xampp/htdocs/Internship/VolunteerProject/admin/includes/nav.php";
?>

    <main>
      <?php
    include "C:/xampp/htdocs/Internship/VolunteerProject/admin/includes/sidebar.php";
    ?>
      <div class="container">
        <div class="fa-1">
          <div class="follower">
            <span class="text">Follower<hr></span>
            <p class="numbers">1500</p>
    
          </div>
          <div class="viewer">
            <span class="text">Viewer<hr></span>
            <p class="numbers">1283</p>
          </div>
          <div class="news">
            <span class="text">News<hr></span>
            <p class="numbers">1992</p>
          </div>
        </div>
<!--   
        <div class="inputArea">
          <input class="input" type="text">
        </div> -->

        <table class="table">
           <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead> 
          <tbody>
            <tr>
              <th>1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th>2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th>3</th>
              <td >Larry the Bird</td>
              <td>@twitter</td>
              <td>ASG</td>
            </tr>
          </tbody>
        </table>
      </div>
      
    </main>
    <!-- <div onclick="toggleTheme('light');" class="darkMode"> -->

    </div>
    <?php
      include "C:/xampp/htdocs/Internship/VolunteerProject/admin/includes/footer.php";
    ?>
</body>
</html>
