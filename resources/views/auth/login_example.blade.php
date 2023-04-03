<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&display=swap" rel="stylesheet" /> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>HMIFUNEJ | Login Page</title>
  </head>
  <body>
    <div class="max-w-lg mt-28 border border-slate-200 rounded-xl mx-auto shadow-md font-inter p-5">
      <img src="{{asset('assets/logos/Logo HMIF Compress.png')}}" alt="HMIFUNEJ" class="mx-auto mb-6" width="150px" />
      <form action="">
        <label for="email">
          <span class="block mb-1 text-slate-700">Email</span>
          <input type="email" id="email" class="px-3 py-2 mb-2 border shadow rounded w-full block text-sm focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500" />
          <!-- <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">email invalid</p> -->
        </label>
        <label for="password">
          <span class="block mb-1 text-slate-700">Password</span>
          <input type="password" id="password" class="px-3 py-2 mb-2 border shadow rounded w-full block text-sm focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500" />
        </label>
        <input type="checkbox" id="checkbox" class="px-3 py-2 mb-2" />
        <label for="checkbox">Remember Me</label>
        <div class="text-right">
          <a href="" class="hover:underline mx-2">Forgot your password?</a>
          <button class="inline-block my-4 bg-slate-600 px-5 py-2 rounded-md text-white font-semibold hover:bg-slate-500 active:bg-slate-700">LOG IN</button>
        </div>
      </form>
    </div>
  </body>
</html>
