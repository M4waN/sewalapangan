<?php

class HelpTool{

  function rupiah($angka)
  {
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
  }

  function imgUpload($namaimg)
  {
    error_reporting(0);


    // $namaimg = $_POST['nama_makanan'] . ".jpg";
    $folder = "../images/";
    $upload_image = "desc_" . $_FILES['gambar']['name'];
    // tentukan ukuran width yang diharapkan
    $width_size = 120;

    // tentukan di mana image akan ditempatkan setelah diupload
    $filesave = $folder . "desc_" . $namaimg;
    move_uploaded_file($_FILES['gambar']['tmp_name'], $filesave);

    // menentukan nama image setelah dibuat
    $resize_image = $folder . "cart_" . $namaimg /* uniqid(rand()) */ ;

    // mendapatkan ukuran width dan height dari image
    list( $width, $height ) = getimagesize($filesave);

    // mendapatkan nilai pembagi supaya ukuran skala image yang dihasilkan sesuai dengan aslinya
    $k = $width / $width_size;

    // menentukan width yang baru
    $newwidth = $width / $k;

    // menentukan height yang baru
    $newheight = $height / $k;

    // fungsi untuk membuat image yang baru
    $thumb = imagecreatetruecolor($newwidth, $newheight);
    $source = imagecreatefromjpeg($filesave);
    // $source = imagecreatefromjpeg($filesave);


    // men-resize image yang baru
    imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    // menyimpan image yang baru
    imagejpeg($thumb, $resize_image);

    imagedestroy($thumb);
    imagedestroy($source);

  }

}
