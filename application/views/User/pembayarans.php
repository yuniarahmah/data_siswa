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
    .h1 {
        font-size: large;
    }
</style>

<body x-data="setup()" x-init="$watch('isDark', value => toggleTheme(value))" :class="{ 'dark': isDark }">
    <?php $this->load->view('sidebaru'); ?>
    <div class="px-10 py-10 w-full">
        <h1 class="bg-indigo-600 text-white text-center">DATA PEMBAYARAN</h1>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-indigo-200">
                <th class="px-6 py-3 text-left">No</th>
                <th class="px-6 py-3 text-left">Nama Siswa</th>
                <th class="px-6 py-3 text-left">Jenis Pembayaran</th>
                <th class="px-6 py-3 text-left">Jumlah Pembayaran</th>
                <th class="px-6 py-3 text-left">Status</th>
                <th class="px-6 py-3 text-left">Aksi</th>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php $no = 0;
                foreach ($pembayaran as $row) : $no++ ?>
                    <tr>
                        <td class="px-6 py-4"><?php echo $no ?></td>
                        <td class="px-6 py-4"><?php echo nama_full_siswa_id($row->id_nama_siswa) ?></td>
                        <td class="px-6 py-4"><?php echo $jenis_p ?></td>
                        <td class="px-6 py-4"><?php echo $jumlah_p ?></td>
                        <td class="px-6 py-4"><?php echo $status_p ?></td>
                        <td class="px-6 py-4">
                            <a href="<?php echo base_url('keuangan/ubah_pembayaran/') . $row->id ?>" class="text-blue-500 hover:underline"><i class="fas fa-pen"></i></a>
                            <button onclick="hapus(<?php echo $row->id ?>)" class="text-red-500 ml-2 hover:underline">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
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
                toggleTheme(value) {
                    this.isDark = value
                    setTheme(value)
                },
            }
        }
    </script>
</body>

</html>