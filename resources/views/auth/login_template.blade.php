<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HMIFUNEJ | Login Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet" />
  </head>
  <body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family: 'Lato', sans-serif">
    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 rounded-lg shadow-2xl">
      <img src="{{asset('assets/logos/Logo HMIF Compress.png')}}" alt="HMIFUNEJ" class="mx-auto mb-6" width="150px" />
      <section class="mt-10">
        <form class="flex flex-col" method="POST" action="#">
          <div class="mb-6 pt-3 rounded bg-gray-200">
            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
            <input type="text" id="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-500 transition duration-500 px-3 pb-3" />
          </div>
          <div class="mb-6 pt-3 rounded bg-gray-200">
            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
            <input type="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-500 transition duration-500 px-3 pb-3" />
          </div>
          <div class="flex justify-between">
            <div class="text-sm text-slate-600 hover:text-slate-700 mb-6">
              <input type="checkbox" id="checkbox" />
              <label for="checkbox">Remember Me</label>
            </div>
            <a href="#" class="text-sm text-slate-600 hover:text-slate-700 hover:underline mb-6">Forgot your password?</a>
          </div>
          <!-- <button class="bg-slate-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">LOG IN</button> -->
          <button class="w-full my-4 bg-green-500 px-5 py-2 rounded-md text-white font-semibold hover:bg-slate-500 active:bg-slate-700 shadow-lg hover:shadow-xl transition duration-200">LOG IN</button>
        </form>
      </section>
    </main>
  </body>
</html>
