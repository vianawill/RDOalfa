@extends('layouts.app')

@auth

<body>

  <div class="container mx-auto p-4 lg:pl-[300px] mt-10 lg:mt-7 lg:max-w-6xl">

    <!-- Boas-vindas -->
    <h1 class="text-3xl font-bold text-center text-gray-200">Olá,
      <span class="font-bold text-txtblue">{{ Auth::user()->name }}!</span>
    </h1>
    <p class="text-gray-300 text-center">Aqui está um resumo das suas atividades recentes.</p>

    <!-- Grid dos cards -->
    <div class="grid grid-cols-1 gap-7 mt-7 px-3 lg:px-0 w-full mx-auto">

      <!-- Notificações -->
      <div class="bg-input shadow-blue-custom p-6 rounded-lg w-full h-[260px] flex flex-col justify-between lg:max-w-3xl mx-auto">
        <h2 class="text-gray-100 text-lg font-bold mb-2">
          <i class="text-lg bi bi-bell-fill"></i> Notificações
        </h2>
        <ul class="space-y-2 overflow-y-auto flex-grow">
          <li class="relative p-2 border-txtblue border bg-bdinput rounded flex justify-between">
            <div class="absolute top-0 left-0 w-4 h-4 bg-red-600 rounded" style="clip-path: polygon(0 0, 100% 0, 0 100%);"></div>
            <span class="text-gray-200">RDO #12345 precisa de aprovação!</span>
            <button class="bg-txtblue text-white px-3 py-1 rounded text-sm">Ver</button>
          </li>
          <li class="p-2 border-txtblue bg-bdinput border rounded flex justify-between">
            <span class="text-gray-200">Equipamento novo cadastrado.</span>
            <button class="bg-txtblue text-white px-3 py-1 rounded text-sm">Ver</button>
          </li>
        </ul>
      </div>

      <!-- Últimos RDOs -->
      <div class="bg-input shadow-blue-custom p-6 rounded-lg w-full h-[220px] flex flex-col justify-between lg:max-w-3xl mx-auto">
        <h2 class="text-gray-100 text-lg font-bold mb-2">
          <i class="text-lg bi bi-file-earmark-text-fill"></i> Últimos RDO's
        </h2>
        <ul class="space-y-2 overflow-y-auto flex-grow">
          <li class="p-2 border-txtblue bg-bdinput border rounded flex justify-between">
            <span class="text-gray-100">RDO #12345 - Obra A</span>
            <span class="text-sm text-gray-400">Hoje</span>
            <i class="text-3xl text-txtblue bi bi-arrow-up-right-circle"></i>
          </li>
          <li class="p-2 border-txtblue bg-bdinput border rounded flex justify-between">
            <span class="text-gray-100">RDO #12344 - Obra B</span>
            <span class="text-sm text-gray-400">Ontem</span>
            <i class="text-3xl text-txtblue bi bi-arrow-up-right-circle"></i>
          </li>
        </ul>
      </div>

    </div>

    <!-- Botão fixo -->
    <div class="mt-5 fixed bottom-6 left-1/2 transform -translate-x-1/2 lg:left-[calc(298px+40%)] lg:-translate-x-1/2 flex justify-center">
      <a href="/rdo/create" class="bg-txtblue text-white px-6 py-2 lg:px-16 rounded-full shadow-lg text-md font-bold">
        <i class="bi bi-plus-circle"></i> Novo RDO
      </a>
    </div>

  </div>
</body>
@endauth
