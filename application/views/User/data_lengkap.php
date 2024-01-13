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
        /* Mencegah pengguliran horizontal */
    }
</style>

<body>
    <?php $this->load->view('sidebaru'); ?>
    <div class="w-30 mt-20 mb-10 pl-10 pt-10 pr-10">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800  bg-blue-500 bg-black">
                            <th class="px-5 py-4">No</th>
                            <th class="px-5 py-4">Nama Siswa</th>
                            <th class="px-5 py-4">Nisn</th>
                            <th class="px-5 py-4">gender</th>
                            <th class="px-5 py-4">Nilai Akhir</th>
                            <th class="px-5 py-4">Tempat/Tanggal Lahir</th>
                            <th class="px-5 py-4">Nama Ibu</th>
                            <th class="px-5 py-4">Nama Ayah</th>
                            <th class="px-5 py-4">Alamat</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php $no = 0;
                        foreach ($user as $users) : $no++ ?>
                            <tr class="cursor-pointer bg-gray-50 dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 ml-2%">
                                <td class="px-5 py-3"><?php echo $no ?></td>
                                <td class="px-5 py-3"><?php echo $users->nama_siswa ?></td>
                                <td class="px-5 py-3"><?php echo $users->nisn ?></td>
                                <td class="px-5 py-3"><?php echo $users->gender ?></td>
                                <td class="px-5 py-3"><?php echo $users->nilai_a ?></td>
                                <td class="px-5 py-3"><?php echo $users->ttl ?></td>
                                <td class="px-5 py-3"><?php echo $users->nama_ibu ?></td>
                                <td class="px-5 py-3"><?php echo $users->nama_ayah ?></td>
                                <td class="px-5 py-3"><?php echo $users->alamat ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <script>
        const setup = () => {
            const getTheme = () => {
                if (window.localStorage.getItem('dark')) {
                    return JSON.parse(window.localStorage.getItem('dark'));
                }
                return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            };

            const setTheme = (value) => {
                window.localStorage.setItem('dark', value);
            };

            return {
                loading: true,
                isDark: getTheme(),
                toggleTheme() {
                    this.isDark = !this.isDark;
                    setTheme(this.isDark);
                },
            };
        };

        function updatePaginationInfo(start, end, total) {
            document.getElementById('pagination-info').innerText = `Menampilkan ${start}-${end} dari ${total}`;
        }

        function changePage(page) {
            const currentText = document.getElementById('pagination-info').innerText;
            const currentPage = parseInt(currentText.match(/\d+/)[0]);
            const pageSize = 10;

            if (page === 'sebelumnya' && currentPage > 1) {
                currentPage--;
            } else if (page === 'berikutnya') {
                currentPage++;
            } else {
                currentPage = page;
            }

            const start = (currentPage - 1) * pageSize + 1;
            const end = Math.min(currentPage * pageSize, 100);

            updatePaginationInfo(start, end, 100);

            console.log(`Mengubah ke halaman ${currentPage}`);
        }

        updatePaginationInfo(1, 10, 100);

        function navigateToPage(url) {
            window.location.href = url;
        }
    </script>
</body>

</html>