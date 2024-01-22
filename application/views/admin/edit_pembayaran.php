<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- cdn fontawesome -->
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
    <div class="w-25 mb-10 dark:bg-gray-500">
        <div class="card mb-20 px-20 ">
            <h3 class="text-center text-2xl font-bold mb-4 dark:text-white">Edit Pembayaran</h3>
            <?php foreach ($pembayaran as $row) : ?>
                <form action="<?php echo base_url('admin/aksi_edit_pembayaran/' . $row->id); ?>" method="post" id="survey-form" class="survey-form w-full">
                    <div class="flex flex-wrap">
                        <div class="w-full px-1">
                            <label for="nama_siswa" class="block font-bold text-gray-800">Nama Siswa</label>
                            <select name="nama_siswa" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                                <?php foreach ($user as $users) : ?>
                                    <option value="<?= $users->id . ' - ' . $users->nama_siswa ?>"><?= $users->id . ' - ' . $users->nama_siswa ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="w-full px-1">
                            <label for="jenis_pembayaran" class="block font-bold text-gray-800">Jenis Pembayaran</label>
                            <select name="jenis_pembayaran" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                                <?php if ($row->jenis_pembayaran === "pembayaran_uang_gedung") : ?>
                                    <option value="pembayaran_uang_gedung" selected>Pembayaran Uang Gedung</option>
                                    <option value="pembayaran_uang_sragam">Pembayaran Seragam</option>
                                <?php elseif ($row->jenis_pembayaran === "pembayaran_uang_sragam") : ?>
                                    <option value="pembayaran_uang_gedung">Pembayaran Uang Gedung</option>
                                    <option value="pembayaran_uang_sragam" selected>Pembayaran Seragam</option>
                                <?php else : ?>
                                    <option value="" selected disabled>Pilih Pembayaran</option>
                                    <option value="pembayaran_uang_gedung">Pembayaran Uang Gedung</option>
                                    <option value="pembayaran_uang_sragam">Pembayaran Seragam</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="w-full px-1">
                            <label for="total_pembayaran" class="block font-bold text-gray-800">Total Pembayaran</label>
                            <input type="text" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800" id="total_pembayaran" name="total_pembayaran" value="<?php echo $row->total_pembayaran; ?>">
                        </div>
                        <div class="w-full px-1">
                            <label for="status" class="block font-bold text-gray-800">Status Pembayaran</label>
                            <input type="text" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800" id="status" name="status" value="<?php echo $row->status; ?>">
                        </div>
                    </div>
                    <div class="text-center mt-1">
                        <input type="submit" id="submit" class="submit " value="Submit">
                    </div>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</body>
<!--Datatables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

<script>
    function formatRupiah(input) {
        // Remove non-numeric characters and leading zeros
        const value = input.value.replace(/\D|^0+/g, '');

        // Format as Rupiah
        input.value = 'Rp ' + number_format(value, 0, ',', '.');

        // Update the value attribute for form submission
        input.setAttribute('value', value);
    }

    function number_format(number, decimals, dec_point, thousands_sep) {
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
        const n = !isFinite(+number) ? 0 : +number;
        const prec = !isFinite(+decimals) ? 0 : Math.abs(decimals);
        const sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep;
        const dec = (typeof dec_point === 'undefined') ? '.' : dec_point;
        let s = '';

        const toFixedFix = function(n, prec) {
            const k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };

        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        const re = /(-?\d+)(\d{3})/;
        while (re.test(s[0])) {
            s[0] = s[0].replace(re, '$1' + sep + '$2');
        }

        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }

        return s.join(dec);
    }

    function navigateToPage(url) {
        window.location.href = url;
    }
</script>

</html>