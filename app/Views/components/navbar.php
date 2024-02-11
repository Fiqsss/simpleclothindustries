<nav
    class="bg-white absolute right-0 left-0 z-50 dark:bg-gray-900 dark:border-gray-700 border border-b-black"
  >
    <div
      class="max-w-screen-xl h-full px-5 flex flex-wrap items-center justify-between mx-auto"
    >
      <a
        href="/"
        class="bg-[#AF0606] flex items-center space-x-3 rtl:space-x-reverse py-[0.7rem] px-[2rem]"
      >
      <img class="w-7" src="../assets/img/logo/logowhite.png" alt="" />

        <span
          class="self-center text-md font-semibold whitespace-nowrap text-white dark:text-white"
          >Simple Cloth Industries</span
        >
      </a>
      <button
        data-collapse-toggle="navbar-dropdown"
        type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-dropdown"
        aria-expanded="false"
      >
        <span class="sr-only">Open main menu</span>
        <svg
          class="w-5 h-5"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 17 14"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15"
          />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <ul
          class="flex flex-col font-medium p-4 md:p-0 mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 my-10 md:my-0"
        >
          <li>
            <a
              class="block <?php echo ($title == 'Home') ? 'text-white bg-[#AF0606] md:bg-transparent md:text-black md:border-b-[#AF0606] md:border-b-4' : ''; ?> py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white "
              href="/"
              >Home</a
            >
          </li>
          <li>
            <a
              class="block <?php echo ($title == 'Harga') ? 'text-white bg-[#AF0606] md:bg-transparent md:text-black md:border-b-[#AF0606] md:border-b-4' : ''; ?> py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white "
              href="harga"
              >Harga</a
            >
          </li>
          <li>
            <a
              class="block <?php echo ($title == 'Catalog') ? 'text-white bg-[#AF0606] md:bg-transparent md:text-black md:border-b-[#AF0606] md:border-b-4' : ''; ?>  py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white "
              href="catalog"
              >Catalog </a
            >
          </li>
          <li>
            <a class="block <?php echo ($title == 'Portofolio') ? 'text-white bg-[#AF0606] md:bg-transparent md:text-black md:border-b-[#AF0606] md:border-b-4' : ''; ?> py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white " href="portofolio">Portofolio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>