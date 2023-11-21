<?php 
require "../config.php";

     $id = $_GET['id'];
     function hapus($id){
          global $conn;
          $sql = "DELETE FROM event WHERE id ='$id'";
          mysqli_query($conn,$sql);
          return mysqli_affected_rows($conn);
     }
     if (hapus($id) > 0) {
          echo "<script>alert('Data berhasil di hapus !');
                    document.location.href='draf.php'</script>";
          }
     else{
          echo "<script>alert('Data gagal di hapus !');
          document.location.href='draf.php'</script>";
     }

?>