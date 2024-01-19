<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    body {
        overflow-x: hidden;
    }

    .container {
        min-width: 20rem;
        max-width: 65rem;
        margin: 1rem auto;
        padding: 30px 7.5rem 5px 7.5rem;
    }

    .heading {
        padding: 1.3em 9px 1.8rem 9px;
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
    }

    .main-heading {
        font-size: 30px;
        margin-bottom: 5;
        text-align: center;
        font-weight: 700;
    }
</style>

<body>
    <?php $this->load->view('sidebaru'); ?>
    <div class="container">
        <h1 id="title" class="main-heading text-white dark:bg-gray-800 bg-indigo-500 b-20 mb-10 rounded-lg">Tabel data Siswa</h1>
    </div>
    <div class="w-45 mb-10 pl-10 pr-10">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table id="example_pelanggan" class="w-full text-sm text-left text-gray-800 dark:text-gray-700">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800 bg-indigo-500 h-50">
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
                                <td onclick="navigateToPage('<?php echo base_url('user/data_lengkap/' . $row->id) ?>')" class="px-10 py-3"><?php echo $row->nama_siswa ?></td>
                                <td class="px-10 py-3"><?php echo $row->nama_ibu ?></td>
                                <td class="px-10 py-3"><?php echo $row->nama_ayah ?></td>
                                <td class="px-10 py-3"><?php echo $row->alamat ?></td>
                                <td class="px-6 py-3">
                                    <a href="<?php echo base_url('user/edit_data/') . $row->id ?>" class="bg-indigo-800 hover:-700 text-white font-bold py-2 px-3 rounded">
                                        <span class="">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                    </a>
                                    <button onclick="hapus(<?php echo $row->id ?>)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded ml-3">
                                        <span class="">
                                            <i class="fas fa-trash-alt"></i>
                                        </span>
                                    </button>
                                    <!-- <a href="tambah_item_tambahan" class="btn-style ml-2 pl-1 bg-indigo-800 hover:bg-blue-700 font-bold text-white rounded py-2 px-3">
                                        <span class="">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        Tambah
                                    </a> -->
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Datatables -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script>
        const setup = () => {
            const getTheme = () => {
                if (window.localStorage.getItem('dark')) {
                    return JSON.parse(window.localStorage.getItem('dark'));
                }
                return window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            };

            const setTheme = (value) => {
                window.localStorage.setItem('dark', value);
            };

            const toggleTheme = () => {
                if (!loading) {
                    this.isDark = !this.isDark;
                    document.body.classList.toggle('dark', this.isDark);
                    setTheme(this.isDark);
                }
            };

            return {
                loading: true,
                isDark: getTheme(),
                toggleTheme,
            };
        };

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
                title: 'Yakin Data Ingin Dihapus?',
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
                        window.location.href = "<?php echo base_url('user/hapus_data/') ?>" + id;
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

        $(document).ready(function() {

            var table = $('#example_pelanggan').DataTable({
                    responsive: false
                })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>

</body>

</html>