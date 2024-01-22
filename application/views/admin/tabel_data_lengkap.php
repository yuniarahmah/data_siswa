<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    body {
        overflow-x: auto;
    }

    .container {
        min-width: 20rem;
        max-width: 65rem;
        margin: 1rem auto;
        padding: 30px 7.5rem 5px 7.5rem;
    }

    .heading {
        padding: 1.3em;
    }


    .heading,
    .survey-form {
        background-color: transparent;
        padding: 13px 3px 1.8px 3px;
        border-radius: 1rem;
        margin-bottom: 4%;
        box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.15);
    }

    .heading {
        position: relative;
        justify-content: center;
    }

    .main-heading {
        font-size: 30px;
        margin-bottom: 5;
        text-align: center;
        font-weight: 700;
    }

    .table {
        width: 20%;
        padding: 1.3em 9px 1.8rem 9px;
    }

    @media only screen and (max-width: 390px) {
        h1 {
            width: 300px;
            margin-right: 60%;
        }

        .table .w-45 {
            margin: auto;
            width: 100%;
            padding: 50%;
        }

    }

    .button-edit,
    .button-delete {
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: background-color 0.3s ease;
        padding: 8px 12px;
        border-radius: 5px;
    }

    .button-edit {
        background-color: #3498db;
        /* Edit button color */
    }

    .button-delete {
        background-color: #e74c3c;
        /* Delete button color */
    }

    .button-edit:hover,
    .button-delete:hover {
        background-color: darken(#3498db, 10%);
        /* Darken the color on hover */
    }

    .button-edit .icon,
    .button-delete .icon {
        font-size: 18px;
        margin-right: 5px;
    }

    .responsive-table {
        overflow-x: auto;
        white-space: nowrap;
    }

    .responsive-table th,
    .responsive-table td {
        min-width: 150px;
        /* Sesuaikan lebar minimal untuk sel */
        text-align: center;
    }
</style>

<body>
    <?php $this->load->view('sidebar'); ?>
    <!-- tabel siswa -->
    <div class="container text-center">
        <h1 id="title" class="main-heading text-white dark:bg-gray-800 bg-indigo-600 b-20 mb-10 rounded-lg">Tabel data siswa</h1>
    </div>

    <div class="w-full sm:w-2/3 mx-auto mt-4 p-4 text-center">
        <div class="w-full overflow-x-auto overflow-y-auto sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl">
            <table class="text-sm text-left text-gray-800 dark:text-gray-700 heading w-full">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800 bg-indigo-600 h-50">
                        <th class="px-10 py-4">No</th>
                        <th class="px-10 py-4">Nama Siswa</th>
                        <th class="px-10 py-4">Nama Ibu</th>
                        <th class="px-10 py-4">Nama Ayah</th>
                        <th class="px-10 py-4">Alamat</th>
                        <th class="px-10 py-4">aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php $no = 0;
                    foreach ($user as $row) : $no++ ?>
                        <tr class="cursor-pointer bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 ml-2%">
                            <td class="px-10 py-3"><?php echo $no ?></td>
                            <td class="px-10 py-3"><?php echo $row->nama_siswa ?></td>
                            <td class="px-10 py-3"><?php echo $row->nama_ibu ?></td>
                            <td class="px-10 py-3"><?php echo $row->nama_ayah ?></td>
                            <td class="px-10 py-3"><?php echo $row->alamat ?></td>
                            <td class="px-10 py-3 flex items-center justify-center space-x-2">
                                <button onclick="hapus(<?php echo $row->id ?>)" class="button-delete">
                                    <span class="icon">
                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- tabel siswa -->

    <!-- tabel guru -->
    <div class="container text-center">
        <h1 id="title" class="main-heading text-white dark:bg-gray-800 bg-indigo-600 b-20 mb-10 rounded-lg">Tabel data Guru</h1>
    </div>

    <div class="w-full sm:w-2/3 mx-auto mt-4 p-4 text-center">
        <div class="overflow-y-auto responsive-table">
            <table class="text-sm text-left text-gray-800 dark:text-gray-700 heading w-full">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800 bg-indigo-600 h-50">
                        <th class="px-10 py-4">No</th>
                        <th class="px-10 py-4">Nama Guru</th>
                        <th class="px-10 py-4">Nik</th>
                        <th class="px-10 py-4">Gender</th>
                        <th class="px-10 py-4">No Hp</th>
                        <th class="px-10 py-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php $no = 0;
                    foreach ($guru as $row) : $no++ ?>
                        <tr class="cursor-pointer bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 ml-2%">
                            <td class="px-10 py-3"><?php echo $no ?></td>
                            <td class="px-10 py-3"><?php echo $row->nama_guru ?></td>
                            <td class="px-10 py-3"><?php echo $row->nik ?></td>
                            <td class="px-10 py-3"><?php echo $row->gender ?></td>
                            <td class="px-10 py-3"><?php echo $row->no_hp ?></td>
                            <td class="px-10 py-3 flex items-center justify-center space-x-2">
                                <a href="<?php echo base_url('admin/edit_guru/') . $row->id ?>" class="button-edit">
                                    <span class="icon">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                </a>
                                <button onclick="hapus_g(<?php echo $row->id ?>)" class="button-delete">
                                    <span class="icon">
                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- tabel guru -->

    <!-- tabel mapel -->
    <div class="container text-center">
        <h1 id="title" class="main-heading text-white dark:bg-gray-800 bg-indigo-600 b-20 mb-10 rounded-lg">Tabel data Mapel</h1>
    </div>

    <div class="w-full sm:w-2/3 mx-auto mt-4 px-20 text-center">
        <div class="w-full overflow-x-auto overflow-y-auto sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl">
            <table class="text-sm text-left text-gray-800 dark:text-gray-700 heading w-full">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800 bg-indigo-600 h-50">
                        <th class="px-10 py-4">No</th>
                        <th class="px-10 py-4">Nama Guru Mapel</th>
                        <th class="px-10 py-4">Nama Mapel</th>
                        <th class="px-10 py-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    <?php $no = 0;
                    foreach ($akademik as $row) : $no++ ?>
                        <tr class="cursor-pointer bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 ml-2%">
                            <td class="px-10 py-3"><?php echo $no ?></td>
                            <td class="px-10 py-3"><?php echo namaguru_getbyid($row->id_nama_guru); ?></td>
                            <td class="px-10 py-3"><?php echo $row->nama_mapel ?></td>
                            <td class="px-10 py-3 flex items-center justify-center space-x-2">
                                <a href="<?php echo base_url('admin/edit_akademik/') . $row->id ?>" class="button-edit">
                                    <span class="icon">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                </a>
                                <button onclick="hapus_a(<?php echo $row->id ?>)" class="button-delete">
                                    <span class="icon">
                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- tabel mapel -->

    <!-- Tabel Ekstra -->
    <div class="container text-center">
        <h1 id="title" class="main-heading text-white dark:bg-gray-800 bg-indigo-600 b-20 mb-10 rounded-lg">Tabel data Ekstrakulikuler</h1>
    </div>

    <div class="w-full sm:w-2/3 mx-auto mt-4 p-4 text-center">
        <div class="overflow-x-auto overflow-y-auto sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl">
            <table class="text-sm text-left text-gray-800 dark:text-gray-700 heading w-full">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800 bg-indigo-600">
                        <th class="px-4 py-2 sm:px-10 sm:py-4">No</th>
                        <th class="px-4 py-2 sm:px-10 sm:py-4">Ekstrakurikuler</th>
                        <th class="px-4 py-2 sm:px-10 sm:py-4">Nama Pembimbing</th>
                        <th class="px-4 py-2 sm:px-10 sm:py-4">Jam pelaksanaan</th>
                        <th class="px-4 py-2 sm:px-10 sm:py-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800 justify-content-center">
                    <?php $no = 0;
                    foreach ($ekstra as $row) : $no++ ?>
                        <tr class="cursor-pointer bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 ml-2%">
                            <td class="px-4 py-2 sm:px-10 sm:py-3"><?php echo $no ?></td>
                            <td class="px-4 py-2 sm:px-10 sm:py-3"><?php echo $row->nama_ekstra ?></td>
                            <td class="px-4 py-2 sm:px-10 sm:py-3"><?php echo $row->pembimbing ?></td>
                            <td class="px-4 py-2 sm:px-10 sm:py-3"><?php echo $row->waktu ?></td>
                            <td class="px-4 py-2 sm:px-10 sm:py-3 flex items-center justify-center space-x-2">
                                <a href="<?php echo base_url('admin/edit_ekstra/') . $row->id ?>" class="button-edit">
                                    <span class="icon">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                </a>
                                <button onclick="hapus_e(<?php echo $row->id ?>)" class="button-delete">
                                    <span class="icon">
                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tabel Ekstra -->


    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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

        function hapus(id) {
            Swal.fire({
                title: 'Yakin nama siswa ini Ingin Dihapus?',
                text: "data ini tidak bisa dikembalikan lagi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Berhasil Menghapus',
                        text: 'Data berhasil dihapus.',
                        icon: 'success',
                        timer: 1500, // Adjust the duration in milliseconds (e.g., 1500 for 1.5 seconds)
                        showConfirmButton: false,
                    }).then(function() {
                        window.location.href = "<?php echo base_url('admin/hapus_siswa/') ?>" + id;
                    });
                }
            });
        }


        function hapus_g(id) {
            Swal.fire({
                title: 'Yakin nama guru ini Dihapus?',
                text: "data ini tidak bisa dikembalikan lagi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Berhasil Menghapus',
                        text: 'Data berhasil dihapus.',
                        icon: 'success',
                        timer: 1500, // Adjust the duration in milliseconds (e.g., 1500 for 1.5 seconds)
                        showConfirmButton: false,
                    }).then(function() {
                        window.location.href = "<?php echo base_url('admin/hapus_guru/') ?>" + id;
                    });
                }
            });
        }

        function hapus_a(id) {
            Swal.fire({
                title: 'Yakin Ingin menghapus mapel ini?',
                text: "data ini tidak bisa dikembalikan lagi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Berhasil Menghapus',
                        text: 'Data berhasil dihapus.',
                        icon: 'success',
                        timer: 1500, // Adjust the duration in milliseconds (e.g., 1500 for 1.5 seconds)
                        showConfirmButton: false,
                    }).then(function() {
                        window.location.href = "<?php echo base_url('admin/hapus_akademik/') ?>" + id;
                    });
                }
            });
        }

        function hapus_e(id) {
            Swal.fire({
                title: 'Yakin Ingin Mengahapus data ini?',
                text: "data ini tidak bisa dikembalikan lagi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Berhasil Menghapus',
                        text: 'Data berhasil dihapus.',
                        icon: 'success',
                        timer: 1500, // Adjust the duration in milliseconds (e.g., 1500 for 1.5 seconds)
                        showConfirmButton: false,
                    }).then(function() {
                        window.location.href = "<?php echo base_url('admin/hapus_ekstra/') ?>" + id;
                    });
                }
            });
        }

        function handleSearchChange() {
            var input = document.getElementById('searchInput').value;

            // Make an asynchronous request to the server
            $.ajax({
                url: "<?php echo base_url('your_controller/search') ?>", // Update with your controller method
                type: "POST",
                data: {
                    searchInput: input
                },
                success: function(data) {
                    // Update the table with the returned data
                    updateTable(data);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        function updateTable(data) {
            // Update your table with the data received from the server
            // For simplicity, assuming data is HTML content for the table
            document.getElementById('yourTableBodyId').innerHTML = data;
        }
    </script>

</body>

</html>