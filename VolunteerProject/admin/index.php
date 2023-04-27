<?php

session_start();
if(!isset($_SESSION['user_login'])){
    header('Location: admin');
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
include "includes/head.php";
?>

<body> 
    <nav>
      <div class="header">
        <svg onclick="changeList()" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
          <svg onclick="changeX()" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
          </svg>
        <h1>IKIS</h1>
        <input class="form-control" type="text" placeholder="Search">
        <a id="logOut" href = "logout.php" style = "text-decoration: none; color: white;">Log Out</a>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>
      </div>
    </nav>

    <main>
      <div class="menu-bar">
        <div class="row">
          <div class="left" style="background-color: #4E51A2;"><br>
            <h2>Menu</h2><br>
            <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search" title="Type in a category">
            <ul id="myMenu">
              <li><a href="#">Dashboard</a></li>
              <li><a href="create_user">Create User</a></li>
              <li><a href="#">Analytics</a></li>
              <li><a href="#">Tables</a></li>
              <li><a href="#">Forms</a></li>
              <li><a href="#">Pages</a></li>
              <!-- <br><br> -->
              <!-- <hr> -->
            </ul>
          </div>
          </div>
      </div>
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
    <script src="assets/main.js"></script>
</body>
</html>
