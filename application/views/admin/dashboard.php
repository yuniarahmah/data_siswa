<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa Baru</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<style>
  body {
    overflow-x: auto;
  }

  .container {
    min-width: 20rem;
    max-width: 65rem;
    padding-right: 40%;
  }

  .heading {
    position: relative;
  }

  .main-heading {
    font-size: 15px;
    margin-bottom: 5;
    text-align: center;
    font-weight: 700;
  }
</style>

<body>
  <?php $this->load->view('sidebar'); ?>
  <main class="contain-all max-h-screen overflow-y-auto">
    <div class="h-full mr-25 mt-14 mb-10 md:ml-14">
      <!-- Statistics Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 m-5 text-white">
        <div class="bg-indigo-600 p-5 m-2 flex justify-between items-center shadow ">
          <div>
            <h3 class="font-bold">Jumlah siswa</h3>
            <p class="text-white"><?php echo $user; ?></p>
          </div>
          <i class="fa-solid fa-users p-4 bg-dark-200 rounded-md" style="font-size: 24px;"></i>
        </div>
        <div class="bg-indigo-600 p-5 m-2 flex justify-between items-center shadow">
          <div>
            <h3 class="font-bold">Jumlah Guru</h3>
            <p class="text-white"><?php echo $guru; ?></p>
          </div>
          <i class="fa-solid fa-user-tie p-4 bg-dark-200 rounded-md w-10" style="font-size: 24px;"></i>
        </div>
        <div class="bg-indigo-600 p-5 m-2 flex justify-between items-center shadow">
          <div>
            <h3 class="font-bold">Mapel</h3>
            <p class="text-white"><?php echo $akademik; ?></p>
          </div>
          <i class="fa-solid fa-calendar-check p-4 bg-dark-200 rounded-md w-10" style="font-size: 24px;"></i>
        </div>
      </div>
      <!-- ./Statistics Cards -->

      <!-- <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4"> -->
      <!-- Social Traffic -->
      <!-- <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
      <div class="rounded-t mb-0 px-0 border-0">
        <div class="flex flex-wrap items-center px-4 py-2">
          <div class="relative w-full max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Lokasi pendaftar</h3>
          </div>
          <div class="relative w-full max-w-full flex-grow flex-1 text-right">
            <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
          </div>
        </div>
        <div class="block w-full overflow-x-auto">
          <table class="items-center w-full bg-transparent border-collapse">
            <thead>
              <tr>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Lokasi</th>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Orang</th>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-gray-700 dark:text-gray-100">
                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Dalam Kota</th>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">145</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  <div class="flex items-center">
                    <span class="mr-2">55%</span>
                    <div class="relative w-full">
                      <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                        <div style="width: 55%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="text-gray-700 dark:text-gray-100">
                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Luar Kota</th>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">110</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  <div class="flex items-center">
                    <span class="mr-2">45%</span>
                    <div class="relative w-full">
                      <div class="overflow-hidden h-2 text-xs flex rounded bg-pink-200">
                        <div style="width: 45%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="text-gray-700 dark:text-gray-100">
                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Luar provinsi</th>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">4</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  <div class="flex items-center">
                    <span class="mr-2">2%</span>
                    <div class="relative w-full">
                      <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                        <div style="width: 10%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div> -->
      <!-- ./Social Traffic -->
      <!-- </div> -->

      <!-- tabel -->
      <div class="w-45 mt-10 px-8 overflow-x-auto">
        <div class="w-full rounded-lg shadow-xs">
          <div class="overflow-x-hidden">
            <table class="min-w-full table-auto text-sm text-left text-gray-800 dark:text-gray-700">
              <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-600 bg-indigo-600 h-50">
                  <th class="px-4 py-5">No</th>
                  <th class="px-4 py-5">Ekstrakurikuler</th>
                  <th class="px-4 py-5">Nama Pembimbing</th>
                  <th class="px-4 py-5">Jam pelaksanaan</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                <?php $no = 0;
                foreach ($ekstra as $row) : $no++ ?>
                  <tr class="cursor-pointer bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 ml-2%">
                    <td class="px-4 py-5"><?php echo $no ?></td>
                    <td class="px-4 py-5"><?php echo $row->nama_ekstra ?></td>
                    <td class="px-4 py-5"><?php echo $row->pembimbing ?></td>
                    <td class="px-4 py-5"><?php echo $row->waktu ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Contact Form -->
      <div class="mt-8 mx-7">
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
      <!-- /Contact Form -->
    </div>
  </main>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script>
    const body = document.querySelector('body'),
      sidebar = document.querySelector('nav'), // Fix: use document.querySelector instead of body.querySelector
      toggle = document.querySelector(".toggle"),
      searchBtn = document.querySelector(".search-box"),
      modeSwitch = document.querySelector(".toggle-switch"),
      modeText = document.querySelector(".mode-text");

    toggle.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });

    searchBtn.addEventListener("click", () => {
      sidebar.classList.remove("close");
    });

    modeSwitch.addEventListener("click", () => {
      body.classList.toggle("dark");

      if (body.classList.contains("dark")) {
        modeText.innerText = "Dark mode";
      } else {
        modeText.innerText = "Light mode";
      }
    });


    function navigateToPage(url) {
      window.location.href = url;
    }
  </script>
</body>

</html>