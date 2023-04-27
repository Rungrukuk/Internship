<!DOCTYPE html>
<html lang="en">



<body>


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