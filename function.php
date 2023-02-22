<?php
session_start();

//Membuat koneksi ke database
$conn = mysqli_connect('localhost','root','','varexpress');

//Menambah customer baru
if(isset($_POST['adddatacustomer'])){
    $kodemarking = $_POST['kodemarking'];
    $nik = $_POST['nik'];
    $namacustomer = $_POST['namacustomer'];
    $nomortelepon = $_POST['nomortelepon'];
    $agama = $_POST['agama'];
    $email = $_POST['email'];
    $alamatcustomer = $_POST['alamatcustomer'];
    

    $addtotable = mysqli_query($conn,"insert into customer (kodemarking, nik, namacustomer, nomortelepon, agama, email, alamatcustomer) values('$kodemarking','$nik','$namacustomer','$nomortelepon','$agama','$email','$alamatcustomer')");
    if($addtotable){
        header('location:datacustomer.php');
    } else {
        echo 'Gagal';
        header('location:datacustomer.php');
    }
};

//menambah harga
if(isset($_POST['adddatoharga'])){

    $kodemarking = $_POST['kodemarking'];
    $namacustomer = $_POST['namacustomer'];
    $kategoribarang = $_POST['kategoribarang'];
    $hargabarang = $_POST['hargabarang'];

    $addtohargacustomer = mysqli_query($conn,"insert into hargacustomer (kodemarking, namacustomer, kategoribarang, hargabarang) values('$kodemarking','$namacustomer','$kategoribarang','$hargabarang')");
    if($addtohargacustomer){
        header('location:hargacustomer.php');
    } else {
        echo 'Gagal';
        header('location:hargacustomer.php');
    }
};

//menambah data gudang flashcargo
if(isset($_POST['adddatapesanan'])){
    $kodeshipment = $_POST['kodeshipment'];
    $nomorresi = $_POST['nomorresi'];
    $kodenota = $_POST['kodenota'];
    $kodemarking = $_POST['kodemarking'];
    $tanggalgudang = $_POST['tanggalgudang'];
    $koli = $_POST['koli'];
    $barang = $_POST['barang'];
    $totalcbm = $_POST['totalcbm'];
    $berat = $_POST['berat'];
    $arrivalest = $_POST['arrivalest'];
    
    $addtoflashcargo = mysqli_query($conn,"insert into gudangflashcargo
    (kodeshipment, nomorresi, kodenota, kodemarking, tanggalgudang, koli, barang, totalcbm, berat, arrivalest)
    values('$kodeshipment','$nomorresi','$kodenota','$kodemarking','$tanggalgudang','$koli',
    '$barang','$totalcbm','$berat','$arrivalest')");
    if($addtoflashcargo){
        header('location:gudangflashcargo.php');
    } else {
        echo 'Gagal';
        header('location:gudangflashcargo.php');
    }
};

//menambah data gudang fasdeli
if(isset($_POST['adddatapesanan'])){
    $kodeshipment = $_POST['kodeshipment'];
    $nomorresi = $_POST['nomorresi'];
    $kodenota = $_POST['kodenota'];
    $kodemarking = $_POST['kodemarking'];
    $tanggalgudang = $_POST['tanggalgudang'];
    $koli = $_POST['koli'];
    $barang = $_POST['barang'];
    $totalcbm = $_POST['totalcbm'];
    $berat = $_POST['berat'];
    $arrivalest = $_POST['arrivalest'];

    $addtopesanandua = mysqli_query($conn,"insert into gudangfasdeli 
    (kodeshipment, nomorresi, kodenota, kodemarking, tanggalgudang, koli, barang, totalcbm, berat, arrivalest)
    values('$kodeshipment','$nomorresi','$kodenota','$kodemarking','$tanggalgudang',
    '$koli','$barang','$totalcbm','$berat','$arrivalest')");
    if($addtopesanandua){
        header('location:gudangfasdeli.php');
    } else {
        echo 'Gagal';
        header('location:gudangfasdeli.php');
    }
};

//update data customer
if(isset($_POST['ubahdata'])){
    $idcus = $_POST['idcus'];
    $kodemarking = $_POST['kodemarking'];
    $nik = $_POST['nik'];
    $namacustomer = $_POST['namacustomer'];
    $nomortelepon = $_POST['nomortelepon'];
    $agama = $_POST['agama'];
    $email = $_POST['email'];
    $alamatcustomer = $_POST['alamatcustomer'];
    
    $ubah = mysqli_query($conn,"UPDATE customer SET
    kodemarking = '$kodemarking',
    nik = '$nik',
    namacustomer = '$namacustomer',
    nomortelepon = '$nomortelepon',
    agama = '$agama',
    email = '$email',
    alamatcustomer = '$alamatcustomer'
    WHERE idcus = '$idcus'");
    if($ubah){
        header('location:datacustomer.php');
    } else {
        echo 'Gagal';
        header('location:datacustomer.php');
    }
}

?>