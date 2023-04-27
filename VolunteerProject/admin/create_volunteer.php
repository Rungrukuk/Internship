<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css&javascript/create_volunteer.css">
  <title>Users</title>
</head>

<body>
  <nav>
    <div class="header">
      <svg onclick="changeList()" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
        class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
      </svg>
      <svg onclick="changeX()" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
        class="bi bi-x-lg" viewBox="0 0 16 16">
        <path
          d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
      </svg>
      <h1>IKIS</h1>
      <input class="form-control" type="text" placeholder="Search">
      <p id="logOut">Log Out</p>
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
        <path fill-rule="evenodd"
          d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
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
            <li><a href="#">Components</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Tables</a></li>
            <li><a href="#">Forms</a></li>
            <li><a href="#">Pages</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>

    <div>
      <p id="content">İstifadəçi məlumatlarının redaktəsi</p>
      <span class="abb"> Əsas səhifə/ İstifadəçilər</span>
      <div class="container">
        <div class="content">
          <form action="#">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Ad</span>
                <input type="text" required>
              </div>
              <div class="input-box">
                <span class="details">Soyad</span>
                <input type="text" required>
              </div>
              <div class="input-box">
                <span class="details">Ata adı</span>
                <input type="text" required>
              </div>
              <div class="input-box">
                <span class="details">Rəhbər</span>
                <input type="text" required>
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="text" required>
              </div>
              <div class="input-box">
                <span class="details">Telefon nömrəsi</span>
                <input type="text" required>
              </div>
              <div class="input-box">
                <span class="details">Başlama tarixi</span>
                <input type="date" required>
              </div>
              <div class="input-box">
                <span class="details">Bitirmə tarixi</span>
                <input type="date" required>
              </div>
              <div class="input-box">
                <span class="details">Foto şəkil</span>
                <input class="file-selector-button" style="border: none !important; height: 30px;" type="file" required>
              </div>
            </div>
            <div class="gender-details">
              <input type="radio" name="gender" id="dot-1">
              <input type="radio" name="gender" id="dot-2">
              <span class="gender-title">Cinsiyyət</span>
              <div class="category">
                <label for="dot-1">
                  <span class="dot one"></span>
                  <span class="gender">Kişi</span>
                </label>
                <label for="dot-2">
                  <span class="dot two"></span>
                  <span class="gender">Qadın</span>
                </label>
              </div>
            </div>
            <div class="button">
              <input type="submit" value="Yadda saxla">
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="css&javascript/create_volunteer.js"></script>
</body>

</html>