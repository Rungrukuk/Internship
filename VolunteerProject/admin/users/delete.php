<?php
include "../functions/connections.php";
session_start();
if (!isset($_SESSION[ 'user_login' ])) {
    header( 'Location: C:/xampp/htdocs/Internship/VolunteerProject/admin/login.php' );
}
if (isset($_GET[ "id" ])) {
    $id     = $_GET[ "id" ];
    $sql    = "DELETE  FROM volunteerinfos WHERE id = '$id'";
    $result = $conn->query( $sql );

    header( "Location: ../allVolunteers.php" );
}



?>