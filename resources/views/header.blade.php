<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
      </head>
<body>

    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Logo</span>
          </a>
          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900" href=/>Home</a>
            <a class="mr-5 hover:text-gray-900" href=/about>About</a>
            <a class="mr-5 hover:text-gray-900" href=/portfolio>Portfolio</a>
            <a class="mr-5 hover:text-gray-900" href=/contact>Contact</a>
          </nav>
          <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Login
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
      </header>


      @yield('content')
    

      <footer class="text-gray-600 body-font">
        <div class="container px-5 py-5 mx-auto flex items-center sm:flex-row flex-col">
          <p class="text-sm text-gray-500 mt-4">© 2020 Tailblocks —
            <a href="https://twitter.com/dbsulistyo" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@dbsulistyo</a>
          </p>
          
        </div>
      </footer>

</body>
</html>