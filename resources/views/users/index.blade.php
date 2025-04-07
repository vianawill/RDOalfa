@extends('layouts.app')

@section('content')

<!-- Adiciona isso para garantir que o scroll geral não atrapalhe no mobile -->
<body class="overflow-hidden">
    <div class="container mx-auto p-4 lg:pl-[300px] mt-10 lg:mt-7 lg:max-w-6xl">

        <!-- Boas-vindas -->
        <div class="flex items-center justify-center space-x-3">
            <i class="text-3xl bi bi-people-fill text-gray-200"></i>
            <h1 class="text-3xl font-bold text-gray-200">Usuários</h1>
        </div>

        <!-- Barra de busca + botão -->
        <div class="mt-6 button-container">
            <div class="flex justify-between items-center px-9 py-2 gap-4 flex-wrap">
                <!-- INPUT PESQUISAR -->
                <div class="flex items-center bg-bdinput p-2.5 rounded-md w-full max-w-full sm:max-w-xl flex-1">
                    <i class="text-gray-100 bi bi-search text-sm"></i>
                    <input id="searchInput"
                        class="text-gray-200 text-[15px] ml-4 w-full bg-transparent focus:outline-none"
                        placeholder="Pesquisar" />
                </div>

                <!-- BOTÃO NOVO RDO -->
                <a href="/rdo/create"
                    class="bg-txtblue text-white px-4 py-2 rounded-full shadow-lg text-sm font-bold whitespace-nowrap
                       flex items-center justify-center
                       sm:px-6 sm:py-2 sm:text-md
                       w-10 h-10 sm:w-auto sm:h-auto
                       overflow-hidden transition-all duration-200">
                    <i class="bi bi-plus-circle text-lg sm:mr-2"></i>
                    <span class="hidden sm:inline">Novo Usuário</span>
                </a>
            </div>
        </div>

        <!-- Grid com scroll apenas na lista -->
        <div class="mt-7 grid grid-cols-1 gap-7 px-3 lg:px-0 w-full mx-auto">

            <div class="bg-input shadow-blue-custom p-6 rounded-lg w-full h-full flex flex-col justify-between lg:max-w-3xl mx-auto">

                <!-- Lista com altura reduzida e scroll próprio -->
                <ul class="overflow-y-auto pr-2 -mr-2 scrollbar-hide max-h-[60vh] space-y-2">


                    <!-- seus <li> para teste -->
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
                    <li class="p-2 border-txtblue bg-bdinput border rounded flex justify-between">
                        <span class="text-gray-100">RDO #12344 - Obra B</span>
                        <span class="text-sm text-gray-400">Ontem</span>
                        <i class="text-3xl text-txtblue bi bi-arrow-up-right-circle"></i>
                    </li>
                    <li class="p-2 border-txtblue bg-bdinput border rounded flex justify-between">
                        <span class="text-gray-100">RDO #12344 - Obra B</span>
                        <span class="text-sm text-gray-400">Ontem</span>
                        <i class="text-3xl text-txtblue bi bi-arrow-up-right-circle"></i>
                    </li>
                    <li class="p-2 border-txtblue bg-bdinput border rounded flex justify-between">
                        <span class="text-gray-100">RDO #12344 - Obra B</span>
                        <span class="text-sm text-gray-400">Ontem</span>
                        <i class="text-3xl text-txtblue bi bi-arrow-up-right-circle"></i>
                    </li>
                    <li class="p-2 border-txtblue bg-bdinput border rounded flex justify-between">
                        <span class="text-gray-100">RDO #12344 - Obra B</span>
                        <span class="text-sm text-gray-400">Ontem</span>
                        <i class="text-3xl text-txtblue bi bi-arrow-up-right-circle"></i>
                    </li>
                    <li class="p-2 border-txtblue bg-bdinput border rounded flex justify-between">
                        <span class="text-gray-100">RDO #12344 - Obra B</span>
                        <span class="text-sm text-gray-400">Ontem</span>
                        <i class="text-3xl text-txtblue bi bi-arrow-up-right-circle"></i>
                    </li>
                    <li class="p-2 border-txtblue bg-bdinput border rounded flex justify-between">
                        <span class="text-gray-100">RDO #12344 - Obra B</span>
                        <span class="text-sm text-gray-400">Ontem</span>
                        <i class="text-3xl text-txtblue bi bi-arrow-up-right-circle"></i>
                    </li>
                    <li class="p-2 border-txtblue bg-bdinput border rounded flex justify-between">
                        <span class="text-gray-100">RDO #12344 - Obra B</span>
                        <span class="text-sm text-gray-400">Ontem</span>
                        <i class="text-3xl text-txtblue bi bi-arrow-up-right-circle"></i>
                    </li>
                    <!-- + outros RDOs -->
                </ul>

            </div>

        </div>
    </div>
</body>
@endsection
