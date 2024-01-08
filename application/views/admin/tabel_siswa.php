<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa Baru</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
    .babababa {
        margin-left: 20%;
        margin-top: 5%;
    }

    .bababa {
        margin-top: 5%;
    }
    @media only screen and (max-width: 800px) {
        .bababa {
        margin-top: 30%;
    }
    }
</style>

<body>
    <div class="relative min-h-screen md:flex babababa" data-dev-hint="container" style="margin-left:20%;">
        <main id="content" class="max-h-screen overflow-y-auto flex-1 p-6 lg:px-8 bababa">
            <div class="container mx-auto">
                <div class="flex justify-center mb-2 md:justify-start md:pl-6">
                    <div class="shadow p-2 mb-3 bg-body-tertiary rounded">
                        <h1 class="flex justify-center mb-2 md:justify-start md:pl-5">
                            <i class="fa-solid fa-note-sticky"></i> Data Karyawan
                        </h1>
                    </div>
                </div>
                <div class="overflow-x-auto w-full px-4 bg-white rounded-b-lg shadow">
                    <table class="my-4 w-full divide-y divide-gray-300 text-center">
                        <thead class="bg-gray-50 text-center">
                            <tr>
                                <th style="text-align: center;" class="px-3 py-2 text-xs text-gray-500">NO</th>
                                <th style="text-align: center;" class="px-3 py-2 text-xs text-gray-500">USERNAME</th>
                                <th style="text-align: center;" class="px-3 py-2 text-xs text-gray-500">EMAIL</th>
                                <th style="text-align: center;" class="px-3 py-2 text-xs text-gray-500">NAMA DEPAN</th>
                                <th style="text-align: center;" class="px-3 py-2 text-xs text-gray-500">NAMA BELAKANG</th>
                                <th style="text-align: center;" class="px-3 py-2 text-xs text-gray-500">IMAGE</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-300">
                            <?php $no = 0;
                            foreach ($user as $absen) : $no++ ?>
                                <tr class="whitespace-nowrap">
                                    <td class="px-3 py-4 text-sm text-gray-500"><?php echo $no ?></td>
                                    <td class="px-3 py-4">
                                        <div class="text-sm text-gray-900">
                                            <?php echo $absen->username; ?>
                                        </div>
                                    </td>
                                    <td class="px-3 py-4">
                                        <div class="text-sm text-gray-900">
                                            <?php echo $absen->email; ?>
                                        </div>
                                    </td>
                                    <td class="px-3 py-4">
                                        <div class="text-sm text-gray-900">
                                            <?php echo $absen->nama_depan; ?>
                                        </div>
                                    </td>
                                    <td class="px-3 py-4">
                                        <div class="text-sm text-gray-900">
                                            <?php echo $absen->nama_belakang; ?>
                                        </div>
                                    </td>
                                    <td class="px-3 py-4">
                                        <div class="text-sm text-gray-900">
                                            <img src="<?php echo base_url('image/karyawan/' . $absen->image) ?>" width="50px" height="40px">
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function hapus(id) {
            swal.fire({
                title: 'Yakin untuk menghapus data ini?',
                text: "Data ini akan terhapus permanen",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Ya Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil Dihapus',
                        showConfirmButton: false,
                        timer: 1500,

                    }).then(function() {
                        window.location.href = "<?php echo base_url('admin/hapus_admin/') ?>" + id;
                    });
                }
            });
        }
    </script>
    <script>
        function showLogoutConfirmation() {
            swal({
                title: "Logout",
                text: "Are you sure you want to log out?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willLogout) => {
                if (willLogout) {
                    // Redirect to the logout URL after the user confirms
                    window.location.href = "<?php echo base_url('auth/logout'); ?>";
                }
            });
        }

        // Attach the SweetAlert confirmation to the "Logout" button
        document.getElementById('logout-button').addEventListener('click', function(e) {
            e.preventDefault();
            showLogoutConfirmation();
        });
    </script>
</body>

</html>