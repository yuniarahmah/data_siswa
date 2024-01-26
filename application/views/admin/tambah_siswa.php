<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- cdn fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            background-color: #f4f4f4;
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
            background-color: transparent;
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
            background-color: #4942E4;
            border: 3px solid #4942E4;
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
            background-color: #4942E4;
            border: 3px solid #4942E4;
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
            padding: 10px;
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

<body>
    <?php $this->load->view('sidebar'); ?>
    <div class="w-25 mb-10 dark:bg-gray-800">
        <div class="card px-5 py-5">
            <h3 class="text-center text-2xl font-bold mb-4 dark:text-white">Tambah Siswa</h3>
            <form action="<?php echo base_url('admin/aksi_tambah_siswa') ?>" method="post" id="survey-form" class="survey-form w-full" enctype="multipart/form-data">
                <div class="flex flex-wrap">
                    <div class="w-full px-1">
                        <label for="nama_siswa" class="block font-bold text-gray-800">Nama Siswa</label>
                        <input autocomplete="off" type="text" name="nama_siswa" id="nama_siswa" placeholder="ketik nama siswa" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                    </div>
                    <div class="w-full px-1">
                        <label for="foto" class="block font-bold text-gray-800">Foto</label>
                        <input required type="file" name="foto" id="foto" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                    </div>
                    <div class="w-full px-1">
                        <label for="nisn" class="block font-bold text-gray-800">NISN</label>
                        <input autocomplete="off" type="text" name="nisn" id="nisn" placeholder="ketik nisn" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
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
                        <input autocomplete="off" type="text" name="nilai_a" id="nilai_a" placeholder="ketik nilai akhir" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                    </div>
                    <div class="w-full px-1">
                        <label for="ttl" class="block font-bold text-gray-800">Tempat/tanggal lahir</label>
                        <input autocomplete="off" type="text" name="ttl" id="ttl" placeholder="ketik tanggal lahir" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                    </div>
                    <div class="w-full px-1">
                        <label for="nama_ayah" class="block font-bold text-gray-800">Nama Ayah</label>
                        <input autocomplete="off" type="text" name="nama_ayah" id="nama_ayah" placeholder="ketik nama Ayah" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                    </div>
                    <div class="w-full px-1">
                        <label for="nama_ibu" class="block font-bold text-gray-800">Nama Ibu</label>
                        <input autocomplete="off" type="text" name="nama_ibu" id="nama_ibu" placeholder="ketik nama Ibu" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                    </div>
                    <div class="w-full px-1">
                        <label for="alamat" class="block font-bold text-gray-800">Alamat</label>
                        <input autocomplete="off" type="text" name="alamat" id="alamat" placeholder="ketik  alamat" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                    </div>
                </div>
                <div class="text-center mt-1">
                    <input type="submit" id="submit" class="submit " value="Submit">
                </div>
            </form>
        </div>
    </div>
    </div>
    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

    <!-- Include jQuery before SweetAlert2 and your other scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Dark mode";
            } else {
                modeText.innerText = "Light mode";

            }
        });

        function updatePaginationInfo(start, end, total) {
            document.getElementById('pagination-info').innerText = `Showing ${start}-${end} of ${total}`;
        }

        function changePage(page) {
            const currentText = document.getElementById('pagination-info').innerText;
            const ycurrentPage = parseInt(currentText.match(/\d+/)[0]);
            const pageSize = 10;

            if (page === 'prev' && currentPage > 1) {
                currentPage--;
            } else if (page === 'next') {
                currentPage++;
            } else {
                currentPage = page;
            }

            const start = (currentPage - 1) * pageSize + 1;
            const end = Math.min(currentPage * pageSize, 100);

            updatePaginationInfo(start, end, 100);

            console.log(`Changing to page ${currentPage}`);
        }

        updatePaginationInfo(1, 10, 100);

        function navigateToPage(url) {
            window.location.href = url;
        }

        // $(document).ready(function() {
        //     const form = document.getElementById("survey-form");

        //     form.addEventListener("submit", function(e) {
        //         e.preventDefault();

        //         if (e.submitter.id === "submit") {
        //             // Display SweetAlert confirmation before submitting
        //             Swal.fire({
        //                 title: 'Konfirmasi',
        //                 text: 'Apakah Anda yakin ingin menambah data?',
        //                 icon: 'question',
        //                 showCancelButton: true,
        //                 confirmButtonText: 'Ya',
        //                 cancelButtonText: 'Batal'
        //             }).then(function(result) {
        //                 if (result.isConfirmed) {
        //                     // If user clicks "Ya", proceed with AJAX submission
        //                     document.getElementById("submit").disabled = true;

        //                     $.ajax({
        //                         type: "POST",
        //                         url: "<?php echo base_url('admin/aksi_tambah_siswa') ?>",
        //                         data: new FormData(form),
        //                         contentType: false,
        //                         processData: false,
        //                         dataType: "json",
        //                         success: function(response) {
        //                             if (response.status === 'success') {
        //                                 // Show success SweetAlert and then redirect
        //                                 Swal.fire({
        //                                     title: 'Berhasil',
        //                                     text: response.message,
        //                                     icon: 'success',
        //                                     showConfirmButton: false,
        //                                     timer: 2000
        //                                 }).then(function() {
        //                                     window.location.href = response.redirect;
        //                                 });
        //                             } else {
        //                                 // Display error messages
        //                                 if (response.errors) {
        //                                     response.errors.forEach(function(error) {
        //                                         Swal.fire({
        //                                             title: 'Gagal',
        //                                             text: error,
        //                                             icon: 'error',
        //                                             showConfirmButton: false,
        //                                             timer: 2000
        //                                         });
        //                                     });
        //                                 } else {
        //                                     Swal.fire({
        //                                         title: 'Gagal',
        //                                         text: response.message,
        //                                         icon: 'error',
        //                                         showConfirmButton: false,
        //                                         timer: 2000
        //                                     });
        //                                 }

        //                                 // Re-enable the submit button immediately upon encountering an error
        //                                 document.getElementById("submit").disabled = false;
        //                             }
        //                         }
        //                     });
        //                 }
        //             });
        //         } else if (e.submitter.id === "cancel") {
        //             // Handle the "Batal" button click event here
        //             Swal.fire({
        //                 title: 'Aksi dibatalkan',
        //                 text: 'Anda membatalkan aksi penyimpanan data.',
        //                 icon: 'info',
        //                 showConfirmButton: false,
        //                 timer: 2000
        //             });
        //             // Optionally, you can redirect or perform other actions when canceling
        //         }
        //     });
        // });
    </script>
</body>

</html>