<?php
    session_start();
    include('../config/koneksi.php');

    // ambil data
    $username_user = htmlspecialchars($_POST['username_user']);
    $password_user = md5(htmlspecialchars($_POST['password_user']));
    //$password_user = htmlspecialchars($_POST['password_user']);

    // periksa username dan password
    $query = "SELECT * FROM user WHERE username_user = '$username_user' AND password_user = '$password_user'";
    $hasil = mysqli_query($koneksi, $query);
    //$data_user = mysqli_fetch_assoc($hasil);
    if(mysqli_num_rows($hasil)==1){
        // echo "Login Berhasil";
        // echo $username_user;
        // echo $password_user;
        header('Location:../app/index.php?page=dashboard');
        $user = mysqli_fetch_array($hasil);
        $_SESSION['nama'] = $user['nama_user'];
        $_SESSION['level'] = $user['level_user'];
    }
    else if($username_user== '' || $password_user== ''){
        header('Location:..//index.php?error=2');
    }
    else{
      //echo "Login Tidak Berhasil";
      header('Location:../index.php?error=1');
    }


    // cek
    // if ($data_user != null) {
    //   // jika user dan password cocok
    //   $_SESSION['user'] = $data_user;
    //   header('Location:../index.php');
    // } else {
    //   // jika user dan password tidak cocok
    //   echo "<script>window.alert('Username atau password salah'); window.location.href='../login'</script>";
    // }
?>