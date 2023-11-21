<?php
require "../config.php";

function update($data){
     global $conn;
          $id = $data['id'];
          $nama = $data['NamaEvent'];
          $tanggal = $data['Tanggal'];
          $deskripsi = $data['Deskripsi'];
          $FileLama = $data['FileLama'];
          if ($_FILES['File']['error'] === 4) {
               $file = $FileLama;
          }
          else{
               $file = upload();
          }
          $sql = "UPDATE event SET  nama_kegiatan ='$nama',
                                        tanggal ='$tanggal',
                                        deskripsi ='$deskripsi',
                                        file_lampiran='$file'
                                        WHERE id = '$id'";
                         
                         mysqli_query($conn,$sql);
                         
          return mysqli_affected_rows($conn);
}

function upload()
          {
               $ekstesni_true = ['jpg','jpeg','png','pdf','docx','xlx','csv','ppt'];
               $nama = $_FILES['File']['name'];
               $size = $_FILES['File']['size'];
               $temp = $_FILES['File']['tmp_name'];
               $ekstensi = explode(".",$nama);
               $ekstensi =   strtolower(end($ekstensi));
               if (!in_array($ekstensi,$ekstesni_true)) {
                    echo "<script>
                              alert('Format file yang anda masukkan tidak sesuai !');
                         </script>";
                         if($size > 1000000){
                              echo "<script>
                              alert('Anda harus memasukkan file lebih kecil dari 1 MB !');
                              </script>";
                         }
                    
                         
               }
                    $NamaBaru = $nama;
                    $NamaBaru .= '.';
                    $NamaBaru .= $ekstensi;
                    move_uploaded_file($temp,"../file/".$NamaBaru);
               return $NamaBaru;
     }
?>