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
    <div class="w-full mt-20 mb-10 px-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            <?php foreach ($user as $users) : ?>
                <div class="bg-white overflow-hidden rounded-lg shadow-xs w-full md-screen">
                    <?php if (empty($users->foto)) : ?>
                        <!-- Gunakan foto default jika tidak ada foto -->
                        <img class="w-full h-48 object-cover object-center px-4" src="<?= base_url('image/p.png') ?>" alt="Foto Default">
                    <?php else : ?>
                        <!-- Gunakan foto dari data jika tersedia -->
                        <img class="w-full h-48 object-cover object-center px-4" src="<?php echo $users->foto ?>" alt="Foto <?php echo $users->nama_siswa ?>">
                    <?php endif; ?>
                    <div class="p-4">
                        <h4 class="text-lg font-semibold text-center mb-5"><?php echo $users->nama_siswa ?></h4>
                        <p class="text-sm text-gray-600 mb-4">NISN: <?php echo $users->nisn ?></p>
                        <p class="text-sm text-gray-600 mb-4">Gender: <?php echo $users->gender ?></p>
                        <p class="text-sm text-gray-600 mb-4">Nilai Akhir: <?php echo $users->nilai_a ?></p>
                        <p class="text-sm text-gray-600 mb-4">TTL: <?php echo $users->ttl ?></p>
                        <p class="text-sm text-gray-600 mb-4">Nama Ibu: <?php echo $users->nama_ibu ?></p>
                        <p class="text-sm text-gray-600 mb-4">Nama Ayah: <?php echo $users->nama_ayah ?></p>
                        <p class="text-sm text-gray-600 mb-4">Alamat: <?php echo $users->alamat ?></p>
                    </div>
                </div>
            <?php endforeach ?>
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