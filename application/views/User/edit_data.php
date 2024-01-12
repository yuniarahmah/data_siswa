<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Ruang</title>

    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "DM Sans", sans-serif;
            background-color: #E4F1FF;
            color: #222;
            padding: 0 0px;
        }

        .container {
            min-width: 20rem;
            max-width: 65rem;
            margin: 1rem auto;
            padding: 30px 7.5rem 5px 7.5rem;
        }

        .heading,
        .survey-form {
            background-color: #fff;
            padding: 1.3em 3rem 1.8rem 3rem;
            border-radius: 1rem;
            margin-bottom: 2.5rem;
            box-shadow: 0 0 20px 5px rgba(0, 0, 0, 0.15);
        }

        .heading {
            position: relative;
        }

        .survey-form {
            font-size: 15px;
        }

        .green-bar {
            background-color: #4F709C;
            height: 1rem;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }

        .main-heading {
            font-size: 2rem;
            margin-bottom: 1rem;
            height: 1.5rem;
        }

        .main-description {
            margin-bottom: 2rem;
        }

        .instructions {
            font-size: 1.5rem;
            margin-top: 1rem;
        }

        .required {
            font-size: 1.6rem;
            color: #d61212;
        }

        label {
            display: block;
            font-size: 1.1rem;
            margin: 30px 0;
            line-height: 1px;
        }

        input {
            display: block;
            width: 100%;
            height: 29px;
            margin: 5px 0;
            font-size: 1.6rem;
            line-height: 1px;
        }

        .nama,
        .satuan,
        .deskripsi {
            min-height: 2rem;
            padding: 1rem 0;
            border: none;
            border-bottom: 1px solid #bcb9b9;
        }

        textarea {
            display: block;
            width: 100%;
            margin: 5px 0;
            font-size: 1.6rem;
            line-height: 1px;
        }

        .submit {
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #f4f4f4;
            background-color: #4F709C;
            border: 3px solid #4F709C;
            border-radius: 1rem;
            width: 8rem;
            height: 2.5rem;
            padding: 8px 2rem;
            margin: 40px auto 10px auto;
            cursor: pointer;
            transition: all .3s;
        }

        .submit:hover {
            background-color: transparent;
            color: #222;
        }

        /* Spesifikasi ditingkatkan untuk tombol "submit" */
        .survey-form .submit {
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #f4f4f4;
            background-color: #4F709C;
            border: 3px solid #4F709C;
            border-radius: 1rem;
            width: 8rem;
            height: 2.5rem;
            padding: 8px 2rem;
            margin: 40px auto 10px auto;
            cursor: pointer;
            transition: all .3s;
        }

        .survey-form .submit:hover {
            background-color: transparent;
            color: #222;
        }

        /* style comboboxs */
        input {
            padding: 5px;
            height: 35px;
            border-bottom: 1px solid;
            outline: none;
        }

        datalist {
            /* position: absolute; */
            background-color: white;
            border-top: none;
            width: 350px;
            padding: 5px;
            max-height: 10rem;
            overflow-y: auto
        }

        option {
            background-color: white;
            padding: 4px;
            margin-bottom: 1px;
            font-size: 14px;
            cursor: pointer;
        }

        .contain-all {
            overflow-y: scroll;
            height: 70rem;
        }

        @media only screen and (max-width: 800px) {

            .container {
                padding: 1rem 1rem 0px 1rem;
            }


            .heading {
                padding: 1.3em 9px 1.8rem 9px;
            }

            .survey-form {
                padding: 1.3em 15px 1.8rem 15px;

            }

            .main-heading {
                font-size: 22px;
                margin-bottom: 0;
                text-align: center;
            }

            label {
                font-size: 16px;
            }
        }
    </style>
</head>

<body class="relative min-h-screen overflow-hidden">
    <?php $this->load->view('sidebaru'); ?>

    <main class="contain-all max-h-screen overflow-y-auto">
        <div class="container">
            <header class="heading">
                <div class="green-bar"></div>
                <h1 id="title" class="main-heading">Form Tambahan Peminjaman</h1>
            </header>

            <?php foreach ($user as $row) : ?>
                <form action="<?php echo base_url('user/aksi_edit_data') ?>" method="post" id="survey-form" class="survey-form w-full">
                    <div class="flex flex-wrap">
                        <div class="w-full px-1">
                            <label for="nama_siswa" class="block font-bold text-gray-800">Nama Siswa</label>
                            <input autocomplete="off" type="text" name="nama_siswa" id="nama_siswa" placeholder="ketik nama siswa" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                        </div>
                        <div class="w-full px-1">
                            <label for="nisn" class="block font-bold text-gray-800">NISN</label>
                            <input autocomplete="off" type="text" name="nisn" id="nisn" placeholder="Inputkan Ruang dulu" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                        </div>
                        <div class="w-full px-1">
                            <label for="gender" class="block font-bold text-gray-800">Gender</label>
                            <select name="gender" id="gender" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                                <option value="" disabled selected>pilih Gender</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="w-full px-1">
                            <label for="nilai_a" class="block font-bold text-gray-800">Nilai Akhir</label>
                            <input autocomplete="off" type="text" name="ttl_display" id="ttl_display" placeholder="Pilih tanggal" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                        </div>
                        <div class="w-full px-1">
                            <label for="ttl" class="block font-bold text-gray-800">Tempat/tanggal lahir</label>
                            <input autocomplete="off" type="date" name="ttl" id="ttl" placeholder="ketik nilai akhir" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                        </div>
                        <div class="w-full px-1">
                            <label for="nama_ayah" class="block font-bold text-gray-800">Nama Ayah</label>
                            <input autocomplete="off" type="text" name="nama_ayah" id="nama_ayah" placeholder="Inputkan Ruang dulu" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                        </div>
                        <div class="w-full px-1">
                            <label for="nama_ibu" class="block font-bold text-gray-800">Nama Ibu</label>
                            <input autocomplete="off" type="text" name="nama_ibu" id="nama_ibu" placeholder="Inputkan Ruang dulu" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                        </div>
                        <div class="w-full px-1">
                            <label for="alamat" class="block font-bold text-gray-800">Alamat</label>
                            <input autocomplete="off" type="text" name="alamat" id="alamat" placeholder="Inputkan Ruang dulu" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                        </div>
                    </div>
                    <div class="text-center mt-1">
                        <input type="submit" id="submit" class="submit " value="Submit">
                    </div>
                </form>
            <?php endforeach ?>
        </div>
    </main>
    <script src="<?php echo base_url('path/to/your/js/script.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function confirmSubmission(event) {
            // Mencegah pengiriman formulir secara default
            event.preventDefault();

            // Mendapatkan nilai input
            var namaValue = $('input[name="nama"]').val();
            var jenisValue = $('select[name="jenis"]').val();
            var satuanValue = $('input[name="satuan"]').val(); // Fix variable name
            var deskripsiValue = $('textarea[name="deskripsi"]').val();


            // Memeriksa apakah pengguna telah mengganti setidaknya satu data
            if (namaValue == "<?php echo $row->nama ?>" &&
                satuanValue == "<?php echo $row->satuan ?>" &&
                jenisValue == "<?php echo $row->jenis ?>" &&
                deskripsiValue == "<?php echo $row->deskripsi ?>") {
                Swal.fire({
                    title: 'Peringatan!',
                    text: 'Anda harus mengganti setidaknya satu data sebelum mengirim formulir.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
            } else {
                // Jika setidaknya satu data telah diubah, tampilkan konfirmasi SweetAlert
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: 'Anda ingin mengirimkan formulir ini?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, kirim!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Mengirimkan formulir menggunakan AJAX jika pengguna menekan "Ya"
                        $.ajax({
                            type: 'POST',
                            url: $('#survey-form').attr('action'),
                            data: $('#survey-form').serialize(),
                            success: function(response) {
                                // Menangani respons dari server jika diperlukan
                                Swal.fire({
                                    title: 'Berhasil Mengganti!',
                                    text: 'Informasi Anda berhasil diperbarui.',
                                    icon: 'success',
                                    showConfirmButton: false,
                                    timer: 2000
                                }).then(() => {
                                    // Setelah pemberitahuan sukses, mengalihkan ke halaman tertentu
                                    window.location.href = '<?php echo base_url('operator/tambahan') ?>';
                                });
                            },
                            error: function(error) {
                                // Menangani kesalahan jika diperlukan
                                Swal.fire('Error!', 'Gagal memperbarui informasi.', 'error');
                            }
                        });
                    }
                    // Jika pengguna mengeklik "Batal" atau menutup SweetAlert, tidak melakukan apa-apa
                });
            }
        }

        input.onfocus = function() {
            browsers.style.display = 'block';
            input.style.borderRadius = "5px 5px 0 0";
        };
        for (let option of browsers.options) {
            option.onclick = function() {
                input.value = option.value;
                browsers.style.display = 'none';
                input.style.borderRadius = "5px";
            }
        };

        input.oninput = function() {
            currentFocus = -1;
            var text = input.value.toUpperCase();
            for (let option of browsers.options) {
                if (option.value.toUpperCase().indexOf(text) > -1) {
                    option.style.display = "block";
                } else {
                    option.style.display = "none";
                }
            };
        }
        var currentFocus = -1;
        input.onkeydown = function(e) {
            if (e.keyCode == 40) {
                currentFocus++
                addActive(browsers.options);
            } else if (e.keyCode == 38) {
                currentFocus--
                addActive(browsers.options);
            } else if (e.keyCode == 13) {
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (browsers.options) browsers.options[currentFocus].click();
                }
            }
        }

        function addActive(x) {
            if (!x) return false;
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            x[currentFocus].classList.add("active");
        }

        function removeActive(x) {
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("active");
            }
        }
    </script>

    <!-- script comboboxs no ruang -->
    <script>
        const checkbox = document.getElementById('checkbox');

        checkbox.addEventListener('change', function() {
            if (checkbox.checked) {
                // Checkbox is checked
                console.log('Checkbox is checked. Selected value: ' + combo.value);
            } else {
                // Checkbox is unchecked
                console.log('Checkbox is unchecked.');
            }
        });

        input1.onfocus = function() {
            browsers1.style.display = 'block';
            input1.style.borderRadius = "5px 5px 0 0";
        };
        for (let option of browsers1.options) {
            option.onclick = function() {
                input1.value = option.value;
                browsers1.style.display = 'none';
                input1.style.borderRadius = "5px";
            }
        };

        input1.oninput = function() {
            currentFocus = -1;
            var text = input1.value.toUpperCase();
            for (let option of browsers1.options) {
                if (option.value.toUpperCase().indexOf(text) > -1) {
                    option.style.display = "block";
                } else {
                    option.style.display = "none";
                }
            };
        }
        var currentFocus = -1;
        input1.onkeydown = function(e) {
            if (e.keyCode == 40) {
                currentFocus++
                addActive(browsers1.options);
            } else if (e.keyCode == 38) {
                currentFocus--
                addActive(browsers1.options);
            } else if (e.keyCode == 13) {
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (browsers1.options) browsers1.options[currentFocus].click();
                }
            }
        }

        function addActive(x) {
            if (!x) return false;
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            x[currentFocus].classList.add("active");
        }

        function removeActive(x) {
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("active");
            }
        }
    </script>

    <!-- script disable -->

    <script>
        $(document).ready(function() {
            // Menangkap perubahan pada input di atasnya
            $('#input').on('input', function() {
                // Mengaktifkan atau menonaktifkan input berdasarkan kondisi
                $('#no_ruang').prop('disabled', !$(this).val());
            });
        });
    </script>

</body>

</html>