<!DOCTYPE html>
<html lang="pt-BR" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>30 Dias de Laravel</title>
    <!-- Importação do Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
    <div class="min-h-full">
        <!-- Barra de Navegação Superior -->
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <!-- Logo / Identificação -->
                            <span class="text-white font-bold text-xl">Laracasts</span>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-link href="/" :active="request()->is('/')" type="a">Home</x-nav-link>
                                <x-nav-link href="/about" :active="request()->is('about')" type="a">About</x-nav-link>
                                <x-nav-link href="/contact" :active="request()->is('contact')" type="a">Contact</x-nav-link>
                                <x-nav-link href="/jobs" :active="request()->is('jobs')" type="a">Jobs</x-nav-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Cabeçalho Dinâmico (Título da Página) -->
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                    {{ $heading }}
                </h1>
            </div>
        </header>

        <!-- Conteúdo Principal Dinâmico ($slot) -->
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>