@extends('layouts.app')


@auth

<body>

    <div class="container">

        <div class="container max-w-4xl mx-auto p-4 lg:pl-[300px] mt-5">
  <!-- Mensagem de boas-vindas -->
  <h1 class="text-2xl font-bold text-center">Bem-vindo, Usuário!</h1>
  <p class="text-gray-600 text-center">Aqui está um resumo das suas atividades recentes.</p>

  <!-- Grid Principal -->
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6 justify-center">
    
    <!-- RDOs Recentes -->
    <div class="bg-white p-4 rounded-lg shadow w-full sm:w-[290px] h-[280px] flex flex-col justify-between">
      <h2 class="text-lg font-semibold mb-2">📋 Últimos RDOs</h2>
      <ul class="space-y-2 overflow-y-auto flex-grow">
        <li class="p-2 bg-gray-100 rounded flex justify-between">
          <span>RDO #12345 - Obra A</span>
          <span class="text-sm text-gray-500">Hoje</span>
        </li>
        <li class="p-2 bg-gray-100 rounded flex justify-between">
          <span>RDO #12344 - Obra B</span>
          <span class="text-sm text-gray-500">Ontem</span>
        </li>
      </ul>
    </div>

    <!-- Notificações -->
    <div class="bg-white p-4 rounded-lg shadow w-full sm:w-[280px] h-[280px] flex flex-col justify-between">
      <h2 class="text-lg font-semibold mb-2">🔔 Notificações</h2>
      <ul class="space-y-2 overflow-y-auto flex-grow">
        <li class="p-2 bg-red-100 rounded flex justify-between">
          <span>RDO #12345 precisa de aprovação!</span>
          <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Ver</button>
        </li>
        <li class="p-2 bg-yellow-100 rounded flex justify-between">
          <span>Equipamento novo cadastrado.</span>
          <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Ver</button>
        </li>
      </ul>
    </div>
    
  </div>

  <!-- Botão para criar novo RDO -->
  <div class="fixed bottom-5 right-5 max-w-xs">
    <a href="/rdo/create" class="bg-blue-600 text-white px-6 py-3 rounded-full shadow-lg text-lg">
      ➕ Criar Novo RDO
    </a>
  </div>
</div>


    </div>

</body>
@endauth