<div>
    <nav class="bg-[#0D47A1] px-2 sm:px-4 py-2.5 fixed w-full z-20 top-24 left-0 border-b border-gray-200">
        <div class="container flex flex-wrap items-center justify-between md:justify-center mx-auto">
            <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col gap-20 p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-[#0D47A1] ">
                    <li>
                        <a href="/"
                            class="block py-2 pl-3 pr-4 text-[#C4C4C4] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 font-inter">Beranda</a>
                    </li>
                    <li>
                        <a href="/profile"
                            class="block py-2 pl-3 pr-4 text-[#C4C4C4] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 font-inter">Profile</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarGukar"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 md:w-auto text-[#C4C4C4]">Gukar
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbarGukar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-70"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/gukar/guru"
                                        class="block px-4 py-2 hover:bg-gray-100 text-black border-b">Guru</a>
                                </li>
                                <li>
                                    <a href="/gukar/karyawan"
                                        class="block px-4 py-2 hover:bg-gray-100 text-black">Karyawan</a>
                                </li>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarSiswa"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 md:w-auto text-[#C4C4C4]">Siswa
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbarSiswa"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-70"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/siswa"
                                        class="block px-4 py-2 hover:bg-gray-100 text-black border-b">Siswa</a>
                                </li>
                                <li>
                                    <a href="/siswa/prestasi"
                                        class="block px-4 py-2 hover:bg-gray-100 text-black border-b">Prestasi</a>
                                </li>
                                <li>
                                    <a href="/siswa/kulikuler"
                                        class="block px-4 py-2 hover:bg-gray-100 text-black">Ekstrakulikuler</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="/galeri"
                            class="block py-2 pl-3 pr-4 text-[#C4C4C4] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 font-inter">Galeri</a>
                    </li>
                    <li>
                        <a href="/login"
                            class="block py-2 pl-3 pr-4 text-[#C4C4C4] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 font-inter">Alumni</a>
                    </li>
                    <li>
                        <a href="/ppdb"
                            class="block py-2 pl-3 pr-4 text-[#C4C4C4] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 font-inter">QA PPDB</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
