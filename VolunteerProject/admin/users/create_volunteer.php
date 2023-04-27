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
    <?php
      include "C:/xampp/htdocs/Internship/VolunteerProject/admin/includes/footer.php";
    ?>
</body>

</html>