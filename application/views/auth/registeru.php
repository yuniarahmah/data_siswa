<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa Baru</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

        .LoginPageInnerContainer .card .header {
            font-size: 32px;
            font-weight: 500;
        }

        .LoginPageInnerContainer .card .subHeader {
            color: #9aa4ad;
            margin-top: 5px;
            margin-bottom: 40px;
        }

        .LoginPageInnerContainer .card .inputContainer {
            color: #3f3f45;
            margin: 20px 0px;
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


            .card {
                justify-content: center;
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
            color: #3498db;
            /* Warna teks link */
            text-decoration: none;
            /* Hilangkan garis bawah link */
        }
    </style>

<body>
    <div class="ImageContianer LoginPageInnerContainer">
        <div class="card">
            <div class="LoginFormInnerContainer">

                <u class="text-bold bg-white lg:bg-transparent" style="font-size: 32px; font-weight: 500;">Register</u>
                <header class="subHeader">Silahkan resgiterasi untuk membuat akun di website ini dan selamat bergabung</header>

                <form action="<?php echo base_url('auth/aksi_registeru') ?>" method="post">
                    <div class="inputContainer">
                        <label class="label header-text" for="username"><img src="https://cdn2.iconfinder.com/data/icons/e-commerce-line-4-1/1024/user4-512.png" class="labelIcon"><span>Username
                            </span></label>
                        <input autocomplete="off" required type="text" name="username" class="input" id="username" placeholder="Enter your nama lengkap">
                    </div>
                    <div class="inputContainer">
                        <label class="label header-text" for="nama_lengkap"><img src="https://cdn2.iconfinder.com/data/icons/e-commerce-line-4-1/1024/user4-512.png" class="labelIcon"><span>Nama Lengkap
                            </span></label>
                        <input autocomplete="off" required type="text" name="nama_lengkap" class="input" id="nama_lengkap" placeholder="Enter your nama lengkap">
                    </div>
                    <div class="inputContainer">
                        <label class="label header-text" for="emailAddress"><img src="https://i.imgur.com/Hn13wvm.png" class="labelIcon"><span>Email
                            </span></label>
                        <input required type="email" name="email" class="input" id="emailAddress" placeholder="Enter your Email Address">
                    </div>
                    <div class="inputContainer">
                        <label class="label header-text" for="passwordfAddress">
                            <img src="https://i.imgur.com/g5SvdfG.png" class="labelIcon"><span>Password</span></label>
                        <div class="password-input-container">
                            <input type="password" required name="password" class="input" id="password" placeholder="Enter your Password">
                            <i class="password-toggle-login fa fa-eye-slash" onclick="togglePassword()"></i>
                        </div>
                    </div>

                    <p class="subArteris">*Gunakan kombinasi minimal 8 karakter dengan huruf dan angka</p>
                    <button name="submit" type="submit" class="LoginButton">Register</button>

                </form>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    <?php if ($this->session->flashdata('error_email')) : ?>
        Swal.fire({
            icon: 'error',
            title: 'Registrasi Gagal',
            text: '<?= $this->session->flashdata('error_email'); ?>',
            timer: 2500,
            showConfirmButton: false,
            timerProgressBar: true
        });
    <?php endif; ?>


    function togglePassword() {
        var passwordInput = document.getElementById("password");
        var passwordToggle = document.querySelector(".password-toggle-login");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggle.classList.remove("fa-eye-slash");
            passwordToggle.classList.add("fa-eye");
        } else {
            passwordInput.type = "password";
            passwordToggle.classList.remove("fa-eye");
            passwordToggle.classList.add("fa-eye-slash");
        }
    }
</script>

</html>