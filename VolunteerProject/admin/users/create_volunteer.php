<?php
include "../functions/connections.php";
include "../functions/functions.php";


$name = $surname = $fatherName = $leader = $email = $phoneNumber = $startTime = $finishTime = $imageName = $gender = $nameError = $surnameError = $fatherNameError = $leaderError = $emailError = $phoneNumberError = $startTimeError = $finishTimeError = $imageError = $genderError = $success = $error = "";



if ($_SERVER[ "REQUEST_METHOD" ] == "POST") {

  //Name
  if ($_POST[ 'name' ] == '') {
    $nameError = "Name is required";
  }
  else {
    $name = clearInput( $_POST[ "name" ] );
    if (!preg_match( '/^[a-zA-ZəƏçÇşŞöÖıİğĞüÜ\s]+$/', $name )) {
      $nameError = "Only letters allowed";
    }
  }

  //Surname
  if ($_POST[ 'surname' ] == '') {
    $surnameError = "Surname is required";
  }
  else {
    $surname = clearInput( $_POST[ "surname" ] );
    if (!preg_match( '/^[a-zA-ZəƏçÇşŞöÖıİğĞüÜ\s]+$/', $surname )) {
      $surnameError = "Only letters allowed";
    }
  }

  //Father Name
  if ($_POST[ 'fatherName' ] == '') {
    $fatherNameError = "Father name is required";
  }
  else {
    $fatherName = clearInput( $_POST[ "fatherName" ] );
    if (!preg_match( '/^[a-zA-ZəƏçÇşŞöÖıİğĞüÜ\s]+$/', $fatherName )) {
      $fatherNameError = "Only letters allowed";
    }
  }

  //Leader
  if ($_POST[ 'leader' ] == '') {
    $leaderError = "Leader is required";
  }
  else {
    $leader = clearInput( $_POST[ "leader" ] );
    if (!preg_match( '/^[a-zA-ZəƏçÇşŞöÖıİğĞüÜ\s]+$/', $leader )) {
      $leaderError = "Only letters allowed";
    }
  }

  //Email
  if ($_POST[ "email" ] == "") {
    $emailError = "Email is required";
  }
  else {
    $email = clearInput( $_POST[ "email" ] );
    if (!filter_var( $email, FILTER_VALIDATE_EMAIL )) {
      $emailError = "Invalid email format";
    }
  }

  //Phone Number
  if ($_POST[ "phoneNumber" ] == "") {
    $phoneNumberError = "Phone number is reqiured";
  }
  else {
    $phoneNumber = clearInput( $_POST[ "phoneNumber" ] );
  }

  //Start Time
  if ($_POST[ "startTime" ] == "") {
    $startTimeError = "Start time is reqiured";
  }
  else {
    $startTime = date( 'Y-m-d', strtotime( clearInput( $_POST[ "startTime" ] ) ) );
  }

  //Finish Time
  if ($_POST[ "finishTime" ] == "") {
    $finishError = "Finish time is reqiured";
  }
  else {
    $finishTime = date( 'Y-m-d', strtotime( clearInput( $_POST[ "finishTime" ] ) ) );
  }

  //Image


  $uploadingFileLocation = "C:/xampp/htdocs/Internship/VolunteerProject/uploads/" . $_FILES[ "uploadingFile" ][ "name" ];

  $fileFormat = strtolower( pathinfo( $uploadingFileLocation, PATHINFO_EXTENSION ) );

  if (file_exists( $uploadingFileLocation )) {
    $imageError = "Uploaded file name is alread exist. Try to rename image";
  }
  else if ($_FILES[ "uploadingFile" ][ "size" ] > 500000) {
    $imageError = "Your image is large. Try to send under 5mb images";

  }
  else if ($fileFormat != "jpg" && $fileFormat != "png") {
    $imageError = "Only jpg and png formats allowed";
  }
  else if (move_uploaded_file( $_FILES[ "uploadingFile" ][ "tmp_name" ], $uploadingFileLocation )) {
    $imageName = $_FILES[ "uploadingFile" ][ "name" ];
  }
  else {
    $imageError = "Could not upload your image";
  }

  //Gender
  if ($_POST[ "gender" ] == "") {
    $genderError = "Gender is reqiured";
  }
  else {
    $gender = $_POST[ "gender" ];
  }


  if (empty($nameError) && empty($surnameError) && empty($fatherNameError) && empty($leaderError) && empty($emailError) && empty($phoneNumberError) && empty($startTimeError) && empty($finishTimeError) && empty($imageError) && empty($genderError)) {
    $sql = "INSERT INTO `volunteerinfos`(`name`, `surname`, `fatherName`, `leader`, `email`, `phoneNumber`, `startTime`, `finishTime`, `imageName`, `gender`) VALUES ('$name','$surname','$fatherName','$leader','$email','$phoneNumber','$startTime','$finishTime','$imageName','$gender')";
    if ($conn->query( $sql ) === TRUE) {
      $success = "Successfull Operation";
    }
    else {
      $error = "Unsuccesfull Operation";
    }
  }
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


    <div>
      <p id="content">İstifadəçi məlumatlarının redaktəsi</p>
      <span class="abb"> Əsas səhifə/ İstifadəçilər</span>
      <div class="container">
        <div class="content">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Ad <span class="error">*
                    <?php echo $nameError ?>
                  </span></span>

                <input type="text" name="name" value="<?php echo $name ?>" required>
              </div>
              <div class="input-box">
                <span class="details">Soyad <span class="error">*
                    <?php echo $surnameError ?>
                  </span> </span>

                <input type="text" name="surname" value="<?php echo $surname ?>" required>
              </div>
              <div class="input-box">
                <span class="details">Ata adı <span class="error">*
                    <?php echo $fatherNameError ?>
                  </span></span>

                <input type="text" name="fatherName" value="<?php echo $fatherName ?>" required>
              </div>
              <div class="input-box">
                <span class="details">Rəhbər <span class="error">*
                    <?php echo $leaderError ?>
                  </span></span>

                <input type="text" name="leader" value="<?php echo $leader ?>" required>
              </div>
              <div class="input-box">
                <span class="details">Email <span class="error">*
                    <?php echo $emailError ?>
                  </span></span>

                <input type="text" name="email" value="<?php echo $email ?>" required>
              </div>
              <div class="input-box">
                <span class="details">Telefon nömrəsi <span class="error">*
                    <?php echo $phoneNumberError ?>
                  </span></span>

                <input type="text" name="phoneNumber" value="<?php echo $phoneNumber ?>" required>
              </div>
              <div class="input-box">
                <span class="details">Başlama tarixi <span class="error">*
                    <?php echo $startTimeError ?>
                  </span></span>

                <input type="date" name="startTime" required>
              </div>
              <div class="input-box">
                <span class="details">Bitirmə tarixi <span class="error">*
                    <?php echo $finishTimeError ?>
                  </span></span>

                <input type="date" name="finishTime" required>
              </div>
              <div class="input-box">
                <span class="details">Foto şəkil <span class="error">*
                    <?php echo $imageError ?>
                  </span></span>

                <input class="file-selector-button" style="border: none !important; height: 30px;" type="file"
                  name="uploadingFile" required>
              </div>
            </div>
            <div class="gender-details">
              <input type="radio" name="gender" value="Kişi" id="dot-1">
              <input type="radio" name="gender" value="Qadın" id="dot-2">
              <span class="gender-title">Cinsiyyət <span class="error">*
                  <?php echo $genderError ?>
                </span></span>

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
            <span class="succes">
              <?php echo $success; ?>
            </span>
            <span class="error">
              <?php echo $error; ?>
            </span>
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