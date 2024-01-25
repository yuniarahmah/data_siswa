<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa Baru</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<style>
  * {
    margin: 0px;
    font-family: "DM Sans", sans-serif;
  }

  body {
    background: #4F46E5;
  }

  .form-group {
    position: relative;
  }

  .password-input-container {
    position: relative;
  }

  .password-input-container input {
    padding-right: 30px;
    /* Menambahkan ruang di sebelah kanan untuk ikon mata */
  }

  .password-toggle-login {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #666;
  }

  .LoginPageContainer {
    height: 100vh;
    overflow: auto;
  }

  .showPassword {
    margin-left: 19.5rem;
  }

  .LoginPageInnerContainer {
    display: flex;
    margin-top: 6%;
    min-height: 100%;
    margin-left: 34%;
    margin-right: 34%;
  }

  .LoginPageInnerContainer .ImageContianer {
    width: 10%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .LoginPageInnerContainer .ImageContianer .GroupImage {
    width: 85%;
    display: block;
  }

  .LoginPageInnerContainer .card {
    flex-grow: 2;
    background: #C7D2FE;
    /* Ubah nilai RGBA sesuai kebutuhan transparansi */
    min-height: 100%;
    padding: 5%;
    border-radius: 2%;
    /* background: url() no-repeat center center fixed; */
    /* -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; */
  }

  .LoginPageInnerContainer .card .LogoContainer .logo {
    height: 60px;
    margin-bottom: 30px;
  }

  .LoginPageInnerContainer .card .subheader {
    font-size: 32px;
    font-weight: 500;
  }

  .LoginPageInnerContainer .card .subHeader {
    color: #4F46E5;
    margin-top: 5px;
    margin-bottom: 40px;
    font-size: 32px;
  }

  .LoginPageInnerContainer .card .inputContainer {
    color: #3f3f45;
    margin: 20px 0px;
    width: 30rem;
  }

  .LoginPageInnerContainer .card .inputContainer .label {
    display: flex;
    width: 100%;
    justify-content: flex-start;
    align-items: center;
    margin-right: 7px;
    margin-bottom: 10px;
  }

  .LoginPageInnerContainer .card .inputContainer .label .labelIcon {
    width: 20px;
    margin-right: 10px;
    display: block;
  }

  .LoginPageInnerContainer .card .inputContainer .input {
    display: block;
    width: calc(100% - 20px);
    font-size: 15px;
    padding: 10px;
    border: 1px solid #d6d7db;
    border-radius: 5px;
    margin-top: 5px;
    outline: 0px !important;
  }

  .LoginPageInnerContainer .card .OptionsContainer {
    display: flex;
    justify-content: space-between;
  }

  .card {
    display: flex;
    align-items: center;
  }

  .LoginFormInnerContainer {
    max-width: 1000px;
    /* background-color: #666; */
    padding: 10px 15px 20px 15px;
  }

  .LoginPageInnerContainer .card .checkbox {
    width: 15px;
    height: 15px;
    margin: 0px;
    display: block;
    border: 1px solid #d6d7db;
  }

  .LoginPageInnerContainer .card .checkboxContainer {
    display: flex;
    justify-content: flex-start;
    align-items: center;
  }

  .LoginPageInnerContainer .card .checkboxContainer label {
    display: block;
    padding: 0px 5px;
    color: #9aa4ad;
  }

  .LoginPageInnerContainer .card .ForgotPasswordLink {
    color: #e7483b;
    text-decoration: none;
  }

  .card .LoginFormInnerContainer .LoginButton {
    margin-top: 30px;
    display: block;
    width: 100%;
    padding: 10px;
    border-radius: 20px;
    font-weight: bold;
    color: white;
    background: #4F46E5;
    border: 0px;
    outline: 0px;
    cursor: pointer;
  }

  .card .LoginFormInnerContainer .LoginButton:active {
    background-color: rgba(31, 41, 55);
  }


  @media only screen and (max-width: 900px) {
    .LoginPageInnerContainer .ImageContianer {
      width: 37.5%;
      /* Adjusted for responsiveness */
    }
  }

  @media only screen and (max-width: 600px) {
    .LoginPageInnerContainer {
      margin-left: auto;
      margin-right: auto;
      padding-top: 30%;
    }

    .form-group {
      position: relative;
    }

    .password-toggle-login {
      position: absolute;
      top: 55%;
      transform: translateY(-50%);
      right: 0.75rem;
      cursor: pointer;
    }

    .card {
      justify-content: center;
      margin-left: 5%;
      margin-right: 5%;
    }

    .inputContainer {
      color: #9aa4ad;
      /* margin-top: 5px; */
      margin-bottom: 40px;
      max-width: 18rem;
    }
  }

  .LoginPageContainer::-webkit-scrollbar {
    width: 5px;
  }

  .header-text {
    font-weight: bold;
    font-size: 15px;
  }

  .forgetPass {
    display: block;
    /* Jadikan elemen block agar bisa memiliki lebar dan tinggi */
    margin-top: 10px;
    /* Jarak atas setiap link */
    color: #4F46E5;
    /* Warna teks link */
    text-decoration: none;
    /* Hilangkan garis bawah link */
  }
</style>

<body>
  <div class="ImageContianer LoginPageInnerContainer bg-gray-200">
    <div class="card">
      <div class="LoginFormInnerContainer">

        <u class="text-bold bg-white lg:bg-transparent" style="font-size: 32px; font-weight: 500;">Login</u>
        <!-- <header class="subHeader">Silahkan Login dengan akun anda masukkan email yang sesuai dengan email akun anda</header> -->

        <form action="<?php echo base_url('auth/fungsi_login') ?>" method="post">
          <div class="inputContainer">
            <label class="label header-text" for="emailAddress"><img src="https://i.imgur.com/Hn13wvm.png" class="labelIcon"><span>Email
              </span></label>
            <input required type="email" name="email" class="input" id="emailAddress" placeholder="Enter your Email Address">
          </div>
          <div class="inputContainer">
            <label class="label header-text" for="emailAddress">
              <img src="https://i.imgur.com/g5SvdfG.png" class="labelIcon"><span>Password</span></label>
            <div class="password-input-container">
              <input required type="password" name="password" class="input" id="password" placeholder="Enter your Password">
              <i class="password-toggle-login fa fa-eye-slash" onclick="togglePassword()"></i>
            </div>
          </div>
          <a href="<?php echo base_url('auth/registeru') ?>" class="forgetPass">Belum punya akun?</a>

          <button name="submit" type="submit" class="LoginButton">Login</button>

        </form>
      </div>
    </div>
  </div>

  <script>
    <?php if ($this->session->flashdata('success_pass')) { ?>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil Mengganti Password!',
        text: '<?php echo $this->session->flashdata('success'); ?>',
        showConfirmButton: false,
        timer: 2500
      }).then(() => {
        window.location.href = '<?php echo base_url(); ?>';
      });
    <?php } ?>


    <?php if ($this->session->flashdata('error')) : ?>
      // Tampilkan SweetAlert jika terdapat error dari session
      Swal.fire({
        icon: 'error',
        title: 'Login Gagal',
        text: '<?= $this->session->flashdata('error'); ?>',
        timer: 2500, // Waktu tampilan SweetAlert dalam milidetik (3.5 detik)
        showConfirmButton: false, // Menghilangkan tombol "OK"
        timerProgressBar: true // Menampilkan progress bar
      }).then((result) => {
        if (result.dismiss === Swal.DismissReason.timer) {
          window.location.href = 'http://localhost/data_siswa_baru/'; // Redirect atau lakukan tindakan lain jika diperlukan setelah SweetAlert hilang
        }
      });
    <?php endif; ?>

    <?php if ($this->session->flashdata('success')) : ?>
      // Tampilkan SweetAlert jika login berhasil
      Swal.fire({
        icon: 'success',
        title: 'Registrasi Berhasil',
        text: '<?= $this->session->flashdata('success'); ?>',
        timer: 2500, // Waktu tampilan SweetAlert dalam milidetik (3.5 detik)
        showConfirmButton: false, // Menghilangkan tombol "OK"
        timerProgressBar: true // Menampilkan progress bar
      }).then((result) => {
        if (result.dismiss === Swal.DismissReason.timer) {
          window.location.href = 'http://localhost/data_siswa_baru/'; // Redirect atau lakukan tindakan lain jika diperlukan setelah SweetAlert hilang
        }
      });
    <?php endif; ?>

    function displaySweetAlert() {
      const success_logout = "<?php echo $this->session->flashdata('success_logout'); ?>";

      if (success_logout) {
        Swal.fire({
          title: 'Berhasil Keluar',
          text: success_logout,
          icon: 'success',
          showConfirmButton: false,
          timer: 2500
        });
      }
    }

    // Memanggil fungsi saat halaman siap
    window.onload = function() {
      displaySweetAlert();
    };
  </script>
  <script type="text/javascript">
    function togglePassword() {
      var passwordField = document.getElementById('password');
      var passwordToggle = document.querySelector('.password-toggle-login');

      if (passwordField.type === "password") {
        passwordField.type = "text";
        passwordToggle.classList.remove('fa-eye-slash');
        passwordToggle.classList.add('fa-eye');
      } else {
        passwordField.type = "password";
        passwordToggle.classList.remove('fa-eye');
        passwordToggle.classList.add('fa-eye-slash');
      }
    }
  </script>
</body>

</html>