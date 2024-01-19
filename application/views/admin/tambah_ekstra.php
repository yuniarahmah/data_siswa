<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
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
        overflow-x: hidden;
        /* overflow: hidden; */
    }

    .container {
        min-width: 20rem;
        max-width: 65rem;
        margin-bottom: 75rem;
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
        background: #1640D6;
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
    .no_lantai,
    .snack,
    .jam_penggunaan,
    .no_ruang,
    .total_booking,
    /* .foto, */
    .kapasitas {
        min-height: 2rem;
        padding: 1rem 0;
        border: none;
        border-bottom: 1px solid #bcb9b9;
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
        background-color: #1640D6;
        color: white;
    }

    /* Spesifikasi ditingkatkan untuk tombol "submit" */
    .survey-form .submit {
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: white;
        background-color: #4942E4;
        border: 3px solid #4942E4;
        border-radius: 1rem;
        width: 8rem;
        height: 2.5rem;
        padding: 3px 2rem;
        margin: 40px auto 10px auto;
        cursor: pointer;
        transition: all .3s;
    }

    .survey-form .submit:hover {
        background-color: #1640D6;
        color: white;
    }

    .contain-all {
        overflow-y: scroll;
        height: 70rem;
    }

    @media only screen and (max-width: 600px) {
        .w-25 {
            width: 50%;
        }

        .card {
            width: 50%;
            margin: 0;
        }

        .container {
            padding: 1rem;
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

        /* Adjust styles for smaller screens */
        input,
        select {
            width: 100%;
        }

        .submit {
            width: 100%;
            margin: 10px auto;
        }
    }
</style>

<body>
    <?php $this->load->view('sidebar'); ?>
    <div class="w-25 mb-10 dark:bg-gray-500">
        <div class="card mb-20 px-20 ">
            <h3 class="text-center text-2xl font-bold mb-4 dark:text-white">Tambah Ekatrakurikuler</h3>
            <form action="<?php echo base_url('admin/aksi_tambah_ekstra') ?>" method="post" id="survey-form" class="survey-form w-full">
                <div class="flex flex-wrap">
                    <div class="w-full px-1">
                        <label for="nama_ekstra" class="block font-bold text-gray-800">Nama Ekstrakurikuler</label>
                        <input required autocomplete="off" type="text" name="nama_ekstra" id="nama_ekstra" placeholder="ketik ekstrakurikuler baru" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                    </div>
                    <div class="w-full px-1">
                        <label for="pembimbing" class="block font-bold text-gray-800">Nama Pembimbing</label>
                        <input autocomplete="off" type="text" name="pembimbing" id="pembimbing" placeholder="ketik pembimbing" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                    </div>
                    <div class="w-full px-1">
                        <label for="waktu" class="block font-bold text-gray-800">Waktu</label>
                        <input autocomplete="off" type="time" name="waktu" id="waktu" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var inputWaktu = document.getElementById('waktu');

            inputWaktu.addEventListener('input', function() {
                // Use regular expression to enforce HH:mm format
                var regex = /^([01]\d|2[0-3]):?([0-5]\d)?$/;
                var value = inputWaktu.value;

                if (!regex.test(value)) {
                    // If the entered value doesn't match the format, clear the input
                    inputWaktu.value = '';
                }
            });
        });

        $(document).ready(function() {
            var table = $('#example_data').DataTable({
                responsive: false
            }).columns.adjust().responsive.recalc();
        });


        const setup = () => {
            const getTheme = () => {
                if (window.localStorage.getItem('dark')) {
                    return JSON.parse(window.localStorage.getItem('dark'))
                }
                return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
            }

            const setTheme = (value) => {
                window.localStorage.setItem('dark', value)
            }

            return {
                loading: true,
                isDark: getTheme(),
                toggleTheme() {
                    this.isDark = !this.isDark
                    setTheme(this.isDark)
                },
            }
        }

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
        //                         url: "<?php echo base_url('admin/aksi_tambah_ekstra') ?>",
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