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

  /* Gaya umum untuk teks */
  .text-lg {
    font-size: 1.125rem;
    /* Atur ukuran font untuk ukuran default atau mobile */
  }

  /* Media query untuk tablet (ukuran layar lebih besar dari 600px) */
  @media (min-width: 200px) {
    .text-lg {
      font-size: 1.25rem;
      /* Sesuaikan ukuran font untuk tablet */
    }
  }

  /* Media query untuk desktop (ukuran layar lebih besar dari 1024px) */
  @media (min-width: 824px) {
    .text-lg {
      font-size: 1.5rem;
      /* Sesuaikan ukuran font untuk desktop */
    }
  }
</style>

<body>
  <?php $this->load->view('sidebaru'); ?>
  <main class="contain-all max-h-screen overflow-y-auto px-5">
    <!-- Task Summaries -->
    <div class="md:col-span-2 xl:col-span-3 flex flex-col md:flex-row px-5 md:px-5 py-5 md:py-5 gap-4">
      <h3 class="text-lg font-bold text-indigo-300 md:px-0 md:py-0" style="font-size: 3rem;">Informasi</h3>
      <h3 class="text-lg font-bold text-indigo-300 md:px-0 md:py-0" style="font-size: 3rem;">Sekolah</h3>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-5 gap-6 text-black dark:text-white">
      <div class="md:col-span-2 xl:col-span-1">
        <div class="rounded bg-indigo-200 dark:bg-gray-800 p-6 overflow-x-auto">
          <div class="flex justify-center py-1 text-black dark:text-white mb-5">
            <h3 class="text-sm font-semibold">Guru</h3>
          </div>
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-indigo-100 dark:bg-gray-700">
              <tr>
                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                  Nama Guru Yang mengajar
                </th>
              </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-600 divide-y divide-gray-200 dark:divide-gray-700">
              <?php $no = 0;
              foreach ($guru as $row) : $no++ ?>
                <tr>
                  <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                    <?php echo $row->nama_guru; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="md:col-span-2 xl:col-span-1">
        <div class="rounded bg-indigo-200 dark:bg-gray-800 p-6">
          <div class="flex justify-center py-1 text-black dark:text-white mb-5">
            <h3 class="text-sm font-semibold">Mata Pelajaran</h3>
          </div>
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-indigo-100 dark:bg-gray-700">
              <tr>
                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                  Nama Mata Pelajaran yang akan dipelajari
                </th>
              </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-600 divide-y divide-gray-200 dark:divide-gray-700">
              <?php $no = 0;
              foreach ($akademik as $row) : $no++ ?>
                <tr>
                  <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                    <?php echo $row->nama_mapel; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="md:col-span-2 xl:col-span-1">
        <div class="rounded bg-indigo-200 dark:bg-gray-800 p-6">
          <div class="flex justify-center py-1 text-black dark:text-white mb-5">
            <h3 class="text-sm font-semibold">Ekstrakurikuler</h3>
          </div>
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-indigo-100 dark:bg-gray-700">
              <tr>
                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                  Nama Ekstrakurikuler
                </th>
              </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-600 divide-y divide-gray-200 dark:divide-gray-700">
              <?php $no = 0;
              foreach ($ekstra as $row) : $no++ ?>
                <tr>
                  <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">
                    <?php echo $row->nama_ekstra; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- ./Task Summaries -->

    <!-- Table -->
    <div class="w-full mx-full px-5 text-center">
      <div class="w-full rounded-lg overflow-x-auto" style="overflow-x: auto;">
        <div class="w-full overflow-x-auto overflow-y-auto sm:max-w-screen-sm md:max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl">
          <table class="w-full overflow-x-auto table-auto text-sm text-left text-gray-800 dark:text-gray-700">
            <thead>
              <tr class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800 bg-indigo-600 h-50">
                <th class="px-10 sm:px-6 py-5">No</th>
                <th class="px-10 sm:px-6 py-5">Nama Siswa</th>
                <th class="px-10 sm:px-6 py-5">Nama Ibu</th>
                <th class="px-10 sm:px-6 py-5">Nama Ayah</th>
                <th class="px-10 sm:px-6 py-5">Alamat</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
              <?php
              $no = 0;
              $maxRows = 5; // Jumlah maksimum baris yang ingin ditampilkan
              foreach ($user as $row) :
                $no++;
                if ($no <= $maxRows) :
              ?>
                  <tr class="cursor-pointer bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 ml-2%">
                    <td class="px-10 sm:px-6 py-8 sm:py-4"><?php echo $no ?></td>
                    <td class="px-10 sm:px-6 py-8 sm:py-4"><?php echo $row->nama_siswa ?></td>
                    <td class="px-10 sm:px-6 py-8 sm:py-4"><?php echo $row->nama_ibu ?></td>
                    <td class="px-10 sm:px-6 py-8 sm:py-4"><?php echo $row->nama_ayah ?></td>
                    <td class="px-10 sm:px-6 py-8 sm:py-4"><?php echo $row->alamat ?></td>
                  </tr>
              <?php
                endif;
              endforeach;
              ?>

              <!-- <?php if (count($user) > $maxRows) : ?>
                <tr>
                  <td colspan="5" class="text-center">
                    <a href="#" id="viewAllLink">Lihat selengkapnya <i class="fa-solid fa-forward"></i></a>
                  </td>
                </tr>
                <script>
                  document.getElementById('viewAllLink').addEventListener('click', function(event) {
                    event.preventDefault();

                    // Menampilkan SweetAlert untuk konfirmasi
                    Swal.fire({
                      title: 'Konfirmasi',
                      text: 'Apakah Anda yakin ingin melihat semua data siswa?',
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Ya, Tampilkan!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        // Mengarahkan ke halaman tabel siswa
                        window.location.href = '<?php echo base_url('user/tabel_siswa') ?>';
                      }
                    });
                  });
                </script>
              <?php endif; ?> -->
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- ./Table -->

    <!-- Contact Form -->
    <div class="mt-8 mx-5">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
          <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">Informasi lebih lanjut</h1>
          <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">Silahkan hubungi orang yang bersangkutan</p>

          <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <div class="ml-4 text-md tracking-wide font-semibold w-40">Lokasi anda</div>
          </div>

          <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <div class="ml-4 text-md tracking-wide font-semibold w-40">+6251 3456 7890</div>
          </div>

          <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            <div class="ml-4 text-md tracking-wide font-semibold w-40">sekolah@gmail.com</div>
          </div>
        </div>
      </div>
    </div>
    <!-- ./Contact Form -->
  </main>
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
      const currentPage = parseInt(currentText.match(/\d+/)[0]);
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
  </script>
</body>

</html>