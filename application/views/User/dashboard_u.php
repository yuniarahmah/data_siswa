<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa Baru</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <?php $this->load->view('sidebaru'); ?>
  <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
      <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
          <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <div class="text-right">
          <p class="text-2xl"><?php echo $user; ?></p>
          <p>Siswa Baru</p>
        </div>
      </div>
      <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
          <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
          </svg>
        </div>
        <div class="text-right">
          <p class="text-2xl"><?php echo $admin; ?></p>
          <p>Jumlah Siswa yang masuk</p>
        </div>
      </div>
      <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
          <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
          </svg>
        </div>
        <div class="text-right">
          <p class="text-2xl"><?php echo $guru; ?></p>
          <p>Jumlah guru</p>
        </div>
      </div>
      <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
          <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <div class="text-right">
          <p class="text-2xl"><?php echo $ekstra; ?></p>
          <p>Ekstrakulikuler</p>
        </div>
      </div>
    </div>
    <!-- ./Statistics Cards -->

    <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">

      <!-- Social Traffic -->
      <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
        <div class="rounded-t mb-0 px-0 border-0">
          <div class="flex flex-wrap items-center px-4 py-2">
            <div class="relative w-full max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Mendaftar Melalui</h3>
            </div>
            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
              <!-- <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button> -->
            </div>
          </div>
          <div class="block w-full overflow-x-auto">
            <table class="items-center w-full bg-transparent border-collapse">
              <thead>
                <tr>
                  <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">metode</th>
                  <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">orang</th>
                  <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-gray-700 dark:text-gray-100">
                  <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Prestasi</th>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">75</td>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                    <div class="flex items-center">
                      <span class="mr-2">40%</span>
                      <div class="relative w-full">
                        <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                          <div style="width: 40%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-100">
                  <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Zonasi</th>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">120</td>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                    <div class="flex items-center">
                      <span class="mr-2">55%</span>
                      <div class="relative w-full">
                        <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                          <div style="width: 40%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-100">
                  <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Perpindahan</th>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">50</td>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                    <div class="flex items-center">
                      <span class="mr-2">30%</span>
                      <div class="relative w-full">
                        <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                          <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-700"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- ./Social Traffic -->
      <!-- Social Traffic -->
      <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
        <div class="rounded-t mb-0 px-0 border-0">
          <div class="flex flex-wrap items-center px-4 py-2">
            <div class="relative w-full max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Lokasi pendaftar</h3>
            </div>
            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
              <!-- <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button> -->
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
      </div>
      <!-- ./Social Traffic -->
    </div>

    <!-- tabel -->
    <div class="mt-4 mx-4">
      <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
          <table class="w-full">
            <thead>
              <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-10 py-3">No</th>
                <th class="px-10 py-3">Nama Siswa</th>
                <th class="px-10 py-3">Nama Ibu</th>
                <th class="px-10 py-3">Nama Ayah</th>
                <th class="px-10 py-3">Alamat</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
              <?php $no = 0;
              foreach ($orangtua as $row) : $no++ ?>
                <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                  <td class="px-7 py-3"><?php echo $no ?></td>
                  <td class="px-7 py-3"><?php echo nama_full_siswa_id($row->id_nama_siswa) ?></td>
                  <td class="px-7 py-3"><?php echo $row->nama_ibu ?></td>
                  <td class="px-7 py-3"><?php echo $row->nama_ayah ?></td>
                  <td class="px-7 py-3"><?php echo $row->alamat ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
        <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
          <div id="pagination-info" class="flex items-center col-span-3"> Showing 1-10 of 100 </div>
          <div id="pagination-buttons" class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <ul class="inline-flex items-center">
              <li>
                <button onclick="changePage('prev')" class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                  Previous
                </button>
              </li>
              <li>
                <button onclick="changePage(1)" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
              </li>
              <li>
                <button onclick="changePage(2)" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
              </li>
              <li>
                <button onclick="changePage(3)" class="px-3 py-1 text-white dark:text-gray-800 transition-colors duration-150 bg-blue-600 dark:bg-gray-100 border border-r-0 border-blue-600 dark:border-gray-100 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
              </li>
              <li>
                <button onclick="changePage(4)" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
              </li>
              <li>
                <span class="px-3 py-1">...</span>
              </li>
              <li>
                <button onclick="changePage(8)" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
              </li>
              <li>
                <button onclick="changePage(9)" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
              </li>
              <li>
                <button onclick="changePage('next')" class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                  Next
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- tabel -->

    <!-- Task Summaries -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 p-4 gap-4 text-black dark:text-white">
      <div class="md:col-span-2 xl:col-span-3">
        <h3 class="text-lg font-semibold">Peraturan sekolah</h3>
        <h3 class="text-lg font-semibold">Keperluan Atau Kebutuhan Anak selama MPLS</h3>
        <h3 class="text-lg font-semibold">Dan jadwal Kegiatan</h3>
      </div>
      <div class="md:col-span-2 xl:col-span-1">
        <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
          <div class="flex justify-between py-1 text-black dark:text-white">
            <h3 class="text-sm font-semibold">Sedikit Penjelasan Peraturan Sekolah</h3>
            <svg class="h-4 fill-current text-gray-600 dark:text-gray-500 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
            </svg>
          </div>
          <div class="text-sm text-black dark:text-gray-50 mt-2">
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Berhijab bagi yang perempuan apabila non muslim rambut harus berwarna hitam. Apabila melanggar maka akan di beri hukuman atau sanksi</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">bagi yang laki-laki celana tidak boleh terlalu ketat</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
              boleh membawa sepeda motor namun harus memarkirkannnya dengan benar. Apabila tidak benar maka akan di denda dengan nomimal yang sudah ditentukan
              <!-- <div class="text-gray-500 dark:text-gray-200 mt-2 ml-2 flex justify-between items-start">
                <span class="text-xs flex items-center">
                  <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                  </svg>
                  3/5
                </span>
                <img src="https://i.imgur.com/OZaT7jl.png" class="rounded-full" />
              </div> -->
            </div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Wajib menggunakan atribut lengkap karena setiap pagi akan dilaksanakan pengecekan atribut. Bagi yang tidak lengkap maka akan Diberi hukuman berdiri ditengah lapangan selama 30 menit</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
              Dilarang membawa rokok apalagi merokok disekolah. Apabila ketahuan maka orang tua dari anak tersebut akan dipanggila ke sekolah untuk diberi teguran
              <!-- <div class="text-gray-500 dark:text-gray-200 mt-2 ml-2 flex justify-between items-start">
                <span class="text-xs flex items-center">
                  <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                  </svg>
                  0/3
                </span>
              </div> -->
            </div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">dilarang membully temannya baik itu kakak kelas,seangkatan maupun adik kelas. Apabila melanggar maka akan di teruskan kepada yang berwajib</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">dilarang membawa benda tajam dan benda haram seperti miras dan sabit. Jika ketahuan membawa benda tersabut maka akan diberi peringatan dan juga pengurangan poin</div>
            <p>Itu dulu yang kana disampaikan peraturan lebih lengkap akan dibagikan ketika sudah resmi menjadi murid sekolah ini Terimakasih...</p>
          </div>
        </div>
      </div>
      <div>
        <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
          <div class="flex justify-between py-1 text-black dark:text-white">
            <h3 class="text-sm font-semibold">Keperluan Yang Dibutuhkan Pada Masa MPLS</h3>
            <svg class="h-4 fill-current text-gray-600 dark:text-gray-500 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
            </svg>
          </div>
          <div class="text-sm text-black dark:text-gray-50 mt-2">
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Pukul 06:30 sudah sampai sekolahan dengan baju yang rapih dan sopan.</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Bersepatu bebas untuk warna bebas</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
              Membawa buku untuk mencatat yang dibutuhkan
              <!-- <div class="flex justify-between items-start mt-2 ml-2 text-white text-xs">
                <span class="bg-pink-600 rounded p-1 text-xs flex items-center">
                  <svg class="h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 2c-.8 0-1.5.7-1.5 1.5v.688C7.344 4.87 5 7.62 5 11v4.5l-2 2.313V19h18v-1.188L19 15.5V11c0-3.379-2.344-6.129-5.5-6.813V3.5c0-.8-.7-1.5-1.5-1.5zm-2 18c0 1.102.898 2 2 2 1.102 0 2-.898 2-2z" />
                  </svg>
                  2
                </span>
              </div> -->
            </div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Menyiapkan name tag sendiri dari rumah sebagai tanda pengenal</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
              Membawa bekal sarapan ke sekolah untuk dimakan bersama di sekolah
              <!-- <div class="text-gray-500 mt-2 ml-2 flex justify-between items-start">
                <span class="text-xs flex items-center">
                  <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                  </svg>
                  0/3
                </span>
              </div> -->
            </div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">Membawa jajan apa saja agar bisa dimakan bersama teman kelompok</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">menyiapkan baju bebas dan celana training bebas</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">setelah pembagian kelompok akan ada tugas untuk ketrampilan antar kelompok siswa diharapkan untuk lebih dekat dengan teman satu kelompoknya</div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">diharapkan membawa payung karena cuaca sedangantidak mentu</div>
            <p class="mt-3 text-gray-600 dark:text-gray-400">itulah yang diperlukan apabila ada perubahan akan di infokan digrup sekolah</p>
          </div>
        </div>
      </div>
      <div>
        <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
          <div class="flex justify-between py-1 text-black dark:text-white">
            <h3 class="text-sm font-semibold">Jadwal</h3>
            <svg class="h-4 fill-current text-gray-600 dark:text-gray-500 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
            </svg>
          </div>
          <div class="text-sm text-black dark:text-gray-50 mt-2">
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
              Pertemuan pertama
              <div class="text-gray-500 dark:text-gray-200 mt-2 ml-2 flex justify-between items-start">
                <span class="text-xs flex items-center">
                  <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                  </svg>
                  Pembagian kelompok MPLS dan waktu untuk berkenalan antar semua murid baru
                </span>
              </div>
            </div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
              Pertemuan kedua
              <div class="text-gray-500 dark:text-gray-200 mt-2 ml-2 flex justify-between items-start">
                <span class="text-xs flex items-center">
                  <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                  </svg>
                  Melakukan room tour mengikuti pemandu yang telah di beri tugas
                </span>
              </div>
            </div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
              Pertemuan ketiga
              <div class="text-gray-500 dark:text-gray-200 mt-2 ml-2 flex justify-between items-start">
                <span class="text-xs flex items-center">
                  <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                  </svg>
                  pengenalan sejarah sekolah
                </span>
              </div>
            </div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
              Pertemuan ke empat
              <div class="text-gray-500 dark:text-gray-200 mt-2 ml-2 flex justify-between items-start">
                <span class="text-xs flex items-center">
                  <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                  </svg>
                  senam pagi bersama dan melalukan game bersama
                </span>
              </div>
            </div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
              Pertemuan kelima
              <div class="text-gray-500 dark:text-gray-200 mt-2 ml-2 flex justify-between items-start">
                <span class="text-xs flex items-center">
                  <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                  </svg>
                  berkeliling sekitar sekolah
                </span>
              </div>
            </div>
            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
              Pertemuan keenam
              <div class="text-gray-500 dark:text-gray-200 mt-2 ml-2 flex justify-between items-start">
                <span class="text-xs flex items-center">
                  <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                  </svg>
                  perkenalan dengan semua guru yang ada, pengenalan ekstrakurikuler, dan pentas seni.
                </span>
              </div>
            </div>
            <!-- <p class="mt-3 text-gray-600 dark:text-gray-400">Add a card...</p> -->
          </div>
        </div>
      </div>
    </div>
    <!-- ./Task Summaries -->

    <!-- Client Table -->
    <!-- <div class="mt-4 mx-4">
      <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
          <table class="w-full">
            <thead>
              <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">Client</th>
                <th class="px-4 py-3">Amount</th>
                <th class="px-4 py-3">Status</th>
                <th class="px-4 py-3">Date</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
              <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                      <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                    </div>
                    <div>
                      <p class="font-semibold">Hans Burger</p>
                      <p class="text-xs text-gray-600 dark:text-gray-400">10x Developer</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">$855.85</td>
                <td class="px-4 py-3 text-xs">
                  <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Approved </span>
                </td>
                <td class="px-4 py-3 text-sm">15-01-2021</td>
              </tr>
              <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                      <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;facepad=3&amp;fit=facearea&amp;s=707b9c33066bf8808c934c8ab394dff6" alt="" loading="lazy" />
                      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                    </div>
                    <div>
                      <p class="font-semibold">Jolina Angelie</p>
                      <p class="text-xs text-gray-600 dark:text-gray-400">Unemployed</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">$369.75</td>
                <td class="px-4 py-3 text-xs">
                  <span class="px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full"> Pending </span>
                </td>
                <td class="px-4 py-3 text-sm">23-03-2021</td>
              </tr>
              <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                      <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1502720705749-871143f0e671?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;s=b8377ca9f985d80264279f277f3a67f5" alt="" loading="lazy" />
                      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                    </div>
                    <div>
                      <p class="font-semibold">Dave Li</p>
                      <p class="text-xs text-gray-600 dark:text-gray-400">Influencer</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">$775.45</td>
                <td class="px-4 py-3 text-xs">
                  <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700"> Expired </span>
                </td>
                <td class="px-4 py-3 text-sm">09-02-2021</td>
              </tr>
              <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                      <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                    </div>
                    <div>
                      <p class="font-semibold">Rulia Joberts</p>
                      <p class="text-xs text-gray-600 dark:text-gray-400">Actress</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">$1276.75</td>
                <td class="px-4 py-3 text-xs">
                  <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Approved </span>
                </td>
                <td class="px-4 py-3 text-sm">17-04-2021</td>
              </tr>
              <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm">
                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                      <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1566411520896-01e7ca4726af?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                    </div>
                    <div>
                      <p class="font-semibold">Hitney Wouston</p>
                      <p class="text-xs text-gray-600 dark:text-gray-400">Singer</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">$863.45</td>
                <td class="px-4 py-3 text-xs">
                  <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"> Denied </span>
                </td>
                <td class="px-4 py-3 text-sm">11-01-2021</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
          <div id="pagination-info" class="flex items-center col-span-3"> Showing 1-10 of 100 </div>
          <div id="pagination-buttons" class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <ul class="inline-flex items-center">
              <li>
                <button onclick="changePage('prev')" class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                  Previous
                </button>
              </li>
              <li>
                <button onclick="changePage(1)" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
              </li>
              <li>
                <button onclick="changePage(2)" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
              </li>
              <li>
                <button onclick="changePage(3)" class="px-3 py-1 text-white dark:text-gray-800 transition-colors duration-150 bg-blue-600 dark:bg-gray-100 border border-r-0 border-blue-600 dark:border-gray-100 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
              </li>
              <li>
                <button onclick="changePage(4)" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
              </li>
              <li>
                <span class="px-3 py-1">...</span>
              </li>
              <li>
                <button onclick="changePage(8)" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
              </li>
              <li>
                <button onclick="changePage(9)" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
              </li>
              <li>
                <button onclick="changePage('next')" class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                  Next
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->
    <!-- ./Client Table -->

    <!-- Contact Form -->
    <div class="mt-8 mx-4">
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
        <!-- <form class="p-6 flex flex-col justify-center">
          <div class="flex flex-col">
            <label for="name" class="hidden">Full Name</label>
            <input type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
          </div>

          <div class="flex flex-col mt-2">
            <label for="email" class="hidden">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
          </div>

          <div class="flex flex-col mt-2">
            <label for="tel" class="hidden">Number</label>
            <input type="tel" name="tel" id="tel" placeholder="Telephone Number" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
          </div>

          <button type="submit" class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Submit</button>
        </form> -->
      </div>
    </div>
    <!-- ./Contact Form -->

    <!-- External resources -->
    <!-- <div class="mt-8 mx-4">
      <div class="p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
        <h4 class="text-lg font-semibold">Have taken ideas & reused components from the following resources:</h4>
        <ul>
          <li class="mt-3">
            <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://tailwindcomponents.com/component/sidebar-navigation-1" target="_blank">
              <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <span class="inline-flex pl-2">Sidebar Navigation</span>
            </a>
          </li>
          <li class="mt-2">
            <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://tailwindcomponents.com/component/contact-form-1" target="_blank">
              <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <span class="inline-flex pl-2">Contact Form</span>
            </a>
          </li>
          <li class="mt-2">
            <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://tailwindcomponents.com/component/trello-panel-clone" target="_blank">
              <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <span class="inline-flex pl-2">Section: Task Summaries</span>
            </a>
          </li>
          <li class="mt-2">
            <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://windmill-dashboard.vercel.app/" target="_blank">
              <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <span class="inline-flex pl-2">Section: Client Table</span>
            </a>
          </li>
          <li class="mt-2">
            <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://demos.creative-tim.com/notus-js/pages/admin/dashboard.html" target="_blank">
              <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <span class="inline-flex pl-2">Section: Social Traffic</span>
            </a>
          </li>
          <li class="mt-2">
            <a class="flex items-center text-blue-700 dark:text-gray-100" href="https://mosaic.cruip.com" target="_blank">
              <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <span class="inline-flex pl-2">Section: Recent Activities</span>
            </a>
          </li>
        </ul>
      </div>
    </div> -->
    <!-- ./External resources -->
  </div>
  </div>
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