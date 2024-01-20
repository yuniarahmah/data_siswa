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
</style>

<body>
    <?php $this->load->view('sidebar'); ?>
    <div class="container">
        <h1 id="title" class="main-heading text-white dark:bg-gray-800 bg-indigo-600 b-20 mb-10 rounded-lg">Tabel Pembayaran</h1>
    </div>
    <div class="w-45 mt-17 pl-10 pr-10">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="overflow-x-auto">
                <table class="w-full table-auto text-sm text-left text-gray-800 dark:text-gray-700 ">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800 bg-indigo-600 h-50">
                            <th class="px-6 py-3 text-left">No</th>
                            <th class="px-6 py-3 text-left">Nama Siswa</th>
                            <th class="px-6 py-3 text-left">Jenis Pembayaran</th>
                            <th class="px-6 py-3 text-left">Jumlah Pembayaran</th>
                            <th class="px-6 py-3 text-left">Status</th>
                            <th class="px-6 py-3 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php $no = 0;
                        foreach ($pembayaran as $row) : $no++ ?>
                            <tr class="cursor-pointer bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 ml-2%">
                                <td class="px-6 py-4"><?php echo $no ?></td>
                                <td class="px-6 py-4"><?php echo nama_full_siswa_id($row->id_nama_siswa) ?></td>
                                <td class="px-6 py-4"><?php echo $row->jenis_pembayaran ?></td>
                                <td class="px-6 py-4"><?php echo $row->total_pembayaran ?></td>
                                <td class="px-6 py-4"><?php echo $row->status ?></td>
                                <td class="px-10 py-3 flex items-center justify-center space-x-2">
                                    <a href="<?php echo base_url('admin/edit_pembayaran/') . $row->id ?>" class="button-edit">
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
            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
</body>

</html>