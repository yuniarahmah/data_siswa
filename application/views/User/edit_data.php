<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Ruang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
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

<body class="relative min-h-screen overflow-hidden">
    <?php $this->load->view('sidebaru'); ?>
    <main class="contain-all max-h-screen overflow-y-auto">
        <div class="w-25 mb-10 dark:bg-gray-500">
            <div class="card mb-20 px-5 ">
                <h3 class="text-center text-2xl font-bold mb-4 dark:text-white">Edit Data Siswa</h3>
                <?php foreach ($user as $row) : ?>
                    <form action="<?php echo base_url('user/aksi_edit_data/' . $row->id); ?>" method="post" id="survey-form" class="survey-form w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full px-1">
                                <label for="foto" class="block font-bold text-gray-800">Foto</label>
                                <?php if (!empty($row->foto)) : ?>
                                    <img src="<?php echo base_url('user/tabel_siswa/' . $row->foto); ?>" alt="Foto <?php echo $row->nama_siswa; ?>" class="w-32 h-32 object-cover object-center mb-2">
                                <?php endif; ?>
                                <input type="file" name="foto" id="foto" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                            </div>
                            <div class="w-full px-1">
                                <label for="nama_siswa" class="block font-bold text-gray-800">Nama Siswa</label>
                                <input autocomplete="off" value="<?= $row->nama_siswa ?>" type="text" name="nama_siswa" id="nama_siswa" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                            </div>
                            <div class="w-full px-1">
                                <label for="nisn" class="block font-bold text-gray-800">NISN</label>
                                <input autocomplete="off" value="<?= $row->nisn ?>" type="text" name="nisn" id="nisn" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                            </div>
                            <div class="w-full px-1">
                                <label for="gender" class="block font-bold text-gray-800">Gender</label>
                                <select name="gender" value="<?php $row->gender ?>" id="gender" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                                    <option value="<?= $row->gender ?>">pilih Gender</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="w-full px-1">
                                <label for="nilai_a" class="block font-bold text-gray-800">Nilai Akhir</label>
                                <input autocomplete="off" value="<?= $row->nilai_a ?>" type="text" name="nilai_a" id="nilai_a" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                            </div>
                            <div class="w-full px-1">
                                <label for="ttl" class="block font-bold text-gray-800">Tempat/tanggal lahir</label>
                                <input autocomplete="off" value="<?= $row->ttl ?>" type="text" name="ttl" id="ttl" class="w-full min-h-8 border-b-2 border-gray-300 text-gray-800">
                            </div>
                            <div class="w-full px-1">
                                <label for="nama_ayah" class="block font-bold text-gray-800">Nama Ayah</label>
                                <input autocomplete="off" value="<?= $row->nama_ayah ?>" type="text" name="nama_ayah" id="nama_ayah" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                            </div>
                            <div class="w-full px-1">
                                <label for="nama_ibu" class="block font-bold text-gray-800">Nama Ibu</label>
                                <input autocomplete="off" value="<?= $row->nama_ibu ?>" type="text" name="nama_ibu" id="nama_ibu" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                            </div>
                            <div class="w-full px-1">
                                <label for="alamat" class="block font-bold text-gray-800">Alamat</label>
                                <input autocomplete="off" value="<?= $row->alamat ?>" type="text" name="alamat" id="alamat" class="w-full min-h-8 p-4 border-b-2 border-gray-300 text-gray-800">
                            </div>
                        </div>
                        <div class="text-center mt-1">
                            <input type="submit" id="submit" class="submit" value="Submit">
                        </div>
                    </form>
                <?php endforeach ?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <script>
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
    </script>

</body>

</html>