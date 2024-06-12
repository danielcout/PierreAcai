<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Pierre Açaí</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header class="flex bg-zinc-200 w-full p-3 flex-1 items-center justify-center">
    <nav class="container relative h-14 flex items-center justify-between">
        
        <div class="hidden border-b md:block md:static md:py-0 md:border-none md:w-auto md:ml-auto" id="nav-menu">
            <ul class="flex items-center justify-around text-center gap-12 md:flex-row menu_mode">
                <li>
                <a class="font-bold" href="{{ url('/quemsomos') }}">Quem Somos</a>
                </li>
                <li>
                <a class="font-bold" href="{{ url('/contato') }}">Contato</a>
                </li>
            </ul>
            <div class="absolute top[0.7rem] right-4 text-2xl cursor-pointer md:hidden" id="nav-close">
            <span class="material-symbols-outlined">close</span>
            </div>
        </div>
    </nav>
</header>


<div class="flex flex-col justify-center py-32 sm:px-6 lg:px-8 bg-gatofundo bg-cover ">

<div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
  <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
    <form method="POST" action="{{route('site.contato')}}">
      @csrf
      <div>
        <label class="block text-sm font-medium text-gray-700" for="username">
          Nome Completo
        </label>
        <div class="mt-1">
          <input class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-900 focus:border-rose-900 sm:text-sm" required="" autocomplete="username" type="text" name="username" id="username">
        </div>
      </div>

      <div class="mt-6">
        <label class="block text-sm font-medium text-gray-700" for="email">
          Email 
        </label>
        <div class="mt-1">
          <input class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-900 focus:border-rose-900 sm:text-sm" required="" autocomplete="email" type="email" name="email" id="email">
        </div>
      </div>

      <div class="mt-6">
        <label class="block text-sm font-medium text-gray-700" for="confirm-email">
          Telefone
        </label>
        <div class="mt-1">
          <input class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-900 focus:border-rose-900 sm:text-sm" required="" autocomplete="tel" type="text" name="tel" id="tel">
        </div>
      </div>

      <div class="mt-6">
        <label class="block text-sm font-medium text-gray-700" for="password">
          Endereço
        </label>
        <div class="mt-1">
          <input class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-900 focus:border-rose-900 sm:text-sm" required="" autocomplete="current-password" type="text" >
        </div>
      </div>

      <div class="mt-6">
        <label class="block text-sm font-medium text-gray-700" for="dob">
          Data de nascimento
        </label>
        <div class="mt-1">
          <input class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-rose-900 focus:border-rose-900 sm:text-sm" required="" type="date" name="dob" id="dob">
        </div>
      </div>
      
      <div class="flex items-center justify-center mt-6">
<span class="mr-3 text-gray-700 font-medium">Gênero:</span>
<label class="inline-flex items-center">
  <input type="radio" class="form-radio h-5 w-5 text-rose-600" name="gender" value="Masculino">
  <span class="ml-2 text-gray-700">Masculino</span>
</label>
<label class="inline-flex items-center ml-6">
  <input type="radio" class="form-radio h-5 w-5 text-rose-600" name="gender" value="Feminino">
  <span class="ml-2 text-gray-700">Feminino</span>
</label>
</div>

<!-- Termos
      <div class="mt-6 flex items-center justify-between">
        <div class="flex items-center">
          <input class="h-4 w-4 text-rose-900 focus:ring-rose-700 border-gray-300 rounded" type="checkbox" name="terms-and-condition" id="terms-and-condition">
          <label class="ml-2 block text-sm text-gray-900" for="terms-and-condition">
            I agree to the terms and conditions
          </label>
        </div>
      </div>
-->

      <div class="mt-6">
        <button class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-rose-900 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-700" type="submit">
         Enviar
        </button>
      </div>
    </form>
  </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>









