<?php
require "../config.php";

function insert($data){
     global $conn;
          $nama = $data['NamaEvent'];
          $tanggal = $data['Tanggal'];
          $deskripsi = $data['Deskripsi'];
          if ($_FILES['File']['error'] === 4) { 
               $file = NULL;
          }
          else{
               $file = upload();
          } 
          $sql = "INSERT INTO event (id,nama_kegiatan,tanggal,deskripsi,file_lampiran)
          VALUES ('','$nama','$tanggal','$deskripsi','$file')";
          mysqli_query($conn,$sql);
          
          $rows = mysqli_affected_rows($conn);
          return $rows;
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
