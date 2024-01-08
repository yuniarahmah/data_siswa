<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa Baru</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


  <style>
    * {
      margin: 0px;
      font-family: "DM Sans", sans-serif;
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
      top: 50%;
      right: 10px;
      /* Menyesuaikan posisi ikon ke kanan */
      transform: translateY(-50%);
      cursor: pointer;
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
      min-height: 100%;
    }

    .LoginPageInnerContainer .ImageContianer {
      width: 40%;
      background-color: rgba(31, 41, 55);
      min-height: 100%;
      padding: 5%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .LoginPageInnerContainer .ImageContianer .GroupImage {
      width: 85%;
      display: block;
    }

    .LoginPageInnerContainer .LoginFormContainer {
      flex-grow: 2;
      background-color: white;
      min-height: 100%;
      padding: 5%;
      background: url(https://i.imgur.com/BKyjjFa.png) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    .LoginPageInnerContainer .LoginFormContainer .LogoContainer .logo {
      height: 60px;
      margin-bottom: 30px;
    }

    .LoginPageInnerContainer .LoginFormContainer .header {
      font-size: 32px;
      font-weight: 500;
    }

    .LoginPageInnerContainer .LoginFormContainer .subHeader {
      color: #9aa4ad;
      margin-top: 5px;
      margin-bottom: 40px;
    }

    .LoginPageInnerContainer .LoginFormContainer .inputContainer {
      color: #3f3f45;
      margin: 20px 0px;
    }

    .LoginPageInnerContainer .LoginFormContainer .inputContainer .label {
      display: flex;
      width: 100%;
      justify-content: flex-start;
      align-items: center;
      margin-right: 7px;
      margin-bottom: 10px;
    }

    .LoginPageInnerContainer .LoginFormContainer .inputContainer .label .labelIcon {
      width: 20px;
      margin-right: 10px;
      display: block;
    }

    .LoginPageInnerContainer .LoginFormContainer .inputContainer .input {
      display: block;
      width: calc(100% - 20px);
      font-size: 15px;
      padding: 10px;
      border: 1px solid #d6d7db;
      border-radius: 5px;
      margin-top: 5px;
      outline: 0px !important;
    }

    .LoginPageInnerContainer .LoginFormContainer .OptionsContainer {
      display: flex;
      justify-content: space-between;
    }

    .LoginFormContainer {
      display: flex;
      align-items: center;
    }

    .LoginFormInnerContainer {
      max-width: 500px;
    }

    .LoginPageInnerContainer .LoginFormContainer .checkbox {
      width: 15px;
      height: 15px;
      margin: 0px;
      display: block;
      border: 1px solid #d6d7db;
    }

    .LoginPageInnerContainer .LoginFormContainer .checkboxContainer {
      display: flex;
      justify-content: flex-start;
      align-items: center;
    }

    .LoginPageInnerContainer .LoginFormContainer .checkboxContainer label {
      display: block;
      padding: 0px 5px;
      color: #9aa4ad;
    }

    .LoginPageInnerContainer .LoginFormContainer .ForgotPasswordLink {
      color: #e7483b;
      text-decoration: none;
    }

    .LoginFormContainer .LoginFormInnerContainer .LoginButton {
      margin-top: 30px;
      display: block;
      width: 100%;
      padding: 10px;
      border-radius: 20px;
      font-weight: bold;
      color: white;
      background-color: rgba(31, 41, 55);
      border: 0px;
      outline: 0px;
      cursor: pointer;
    }

    .LoginFormContainer .LoginFormInnerContainer .LoginButton:active {
      background-color: rgba(31, 41, 55);
    }


    @media only screen and (max-width: 1200px) {
      .LoginPageInnerContainer .ImageContianer {
        width: 50%;
      }
    }

    @media only screen and (max-width: 800px) {
      .LoginPageInnerContainer .ImageContianer {
        display: none;
      }

      .form-group {
        position: relative;
      }

      .password-toggle-login {
        position: absolute;
        top: 55%;
        transform: translateY(-50%);
        right: 0.5rem;
        cursor: pointer;
      }


      .LoginFormContainer {
        justify-content: center;
      }
    }

    .LoginPageContainer::-webkit-scrollbar {
      width: 5px;
    }

    .LoginPageContainer::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    .ImageContianer .LoginPageContainer::-webkit-scrollbar-thumb {
      background: #2e1f7a;
    }

    .LoginPageContainer::-webkit-scrollbar-thumb:hover {
      background: #4520ff;
    }

    .header-text {
      font-weight: bold;
      font-size: 15px;
    }

    .forgetPass {
      font-size: 15px;
      color: #4F709C;
      font-weight: bold;
    }

    .forgetPass a {
      color: #4F709C;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="LoginPageContainer">
    <div class="LoginPageInnerContainer">
      <div class="ImageContianer">
        <img src="<?php echo base_url() ?>image/foto1.png" class="GroupImage">
      </div>
      <div class="LoginFormContainer">
        <div class="LoginFormInnerContainer">

          <header class="header">Login</header>
          <header class="subHeader">Selamat Datang di <b>Website data siswa baru</b> Silahkan lengkapi data anda
          </header>

          <form action="<?php echo base_url('auth/fungsi_login') ?>" method="post">
            <div class="inputContainer">
              <label class="label header-text" for="emailAddress"><img src="https://i.imgur.com/Hn13wvm.png" class="labelIcon"><span>Email
                </span></label>
              <input required type="email" name="email" autocomplete="off" class="input" id="emailAddress" placeholder="Enter your Email Address">
            </div>
            <div class="inputContainer">
              <label class="label header-text" for="emailAddress">
                <img src="https://i.imgur.com/g5SvdfG.png" class="labelIcon"><span>Password</span></label>
              <div class="password-input-container">
                <input required type="password" name="password" class="input" id="password" placeholder="Enter your Password">
                <i class="password-toggle-login fa fa-eye-slash" onclick="togglePassword()"></i>
              </div>
            </div>
            <div class="inputContainer">
              <label class="label header-text" for="sekolah">
                <img src="https://cdn-icons-png.flaticon.com/512/2189/2189181.png" class="labelIcon"><span>Sekolah</span>
              </label>
              <select name="sekolah" id="sekolah" class="input">
                <option value="pilih sekolah">pilih sekolah</option>
                <option value="swasta">Swasta</option>
                <option value="negeri">Negeri</option>
              </select>
            </div>
            <a href="forgot_password" class="forgetPass">Lupa password?</a>
            <a href="<?php echo base_url('auth/registeru') ?>" class="forgetPass">Belum punya akun?</a>

            <button name="submit" type="submit" class="LoginButton">Login</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</body>
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

</html>