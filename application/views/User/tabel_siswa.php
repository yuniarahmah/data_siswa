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
        overflow-x: hidden;
    }
</style>
</style>

<body>
    <?php $this->load->view('sidebaru'); ?>
    <div class="bg-white rounded flex items-center ml-10 w-full max-w-xl mr-4 p-3 mt-10 shadow-sm border border-gray-200">
        <button class="outline-none focus:outline-none">
            <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </button>
        <input type="search" id="searchInput" name="" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
    </div>
    <div class="w-25 mt-5 pl-10 pr-10">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800 bg-blue-500">
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
                            <tr onclick="navigateToPage('<?php echo base_url('user/data_lengkap/' . $row->id) ?>')" class="cursor-pointer bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 ml-2%">
                                <td class="px-10 py-3"><?php echo $no ?></td>
                                <td class="px-10 py-3"><?php echo $row->nama_siswa ?></td>
                                <td class="px-10 py-3"><?php echo $row->nama_ibu ?></td>
                                <td class="px-10 py-3"><?php echo $row->nama_ayah ?></td>
                                <td class="px-10 py-3"><?php echo $row->alamat ?></td>
                                <td class="px-6 py-3">
                                    <a href="<?php echo base_url('user/edit_data/') . $row->id ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded">
                                        <span class="">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                    </a>
                                    <button onclick="hapus(<?php echo $row->id ?>)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded ml-3">
                                        <span class="">
                                            <i class="fas fa-trash-alt"></i>
                                        </span>
                                    </button>
                                    <!-- <a href="tambah_item_tambahan" class="btn-style ml-2 pl-1 bg-blue-500 hover:bg-blue-700 font-bold text-white rounded py-2 px-3">
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
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
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
                title: 'Apakah Mau Dihapus?',
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
                        icon: 'success',
                        title: 'Berhasil Menghapus',
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(function() {
                        window.location.href = "<?php echo base_url('user/hapus_data/') ?>" + id;
                    });
                }
            });
        }

        function filterTable() {
            // Get input value and convert to lowercase for case-insensitive matching
            var input = document.getElementById('searchInput').value.toLowerCase();

            // Get all table rows
            var rows = document.querySelectorAll('tbody tr');

            // Loop through rows and hide/show based on the search input
            rows.forEach(function(row) {
                var rowData = row.textContent.toLowerCase();
                if (rowData.includes(input)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        // Attach the filterTable function to the input's oninput event
        document.getElementById('searchInput').addEventListener('input', filterTable);
    </script>

</body>

</html>