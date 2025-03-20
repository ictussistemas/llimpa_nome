@extends('layouts.app')

@section('title', 'Limpa Nome SPC e SERASA - Recupere seu Crédito')

@section('meta')
    <meta name="description" content="Soluções rápidas e eficientes para negativações no SPC e SERASA. Recupere seu poder de compra e volte a realizar seus sonhos.">
    <meta name="keywords" content="limpa nome, SPC, SERASA, negativação, crédito, dívidas, nome sujo, recuperação de crédito">
    <meta property="og:title" content="Limpa Nome SPC e SERASA - Recupere seu Crédito">
    <meta property="og:description" content="Soluções rápidas e eficientes para negativações no SPC e SERASA. Recupere seu poder de compra e volte a realizar seus sonhos.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <link rel="canonical" href="{{ url('/') }}">
@endsection

@section('content')
<div class="flex flex-col min-h-screen bg-white relative">
    <!-- Topo da Página -->
    <header class="w-full bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-blue-800">
                <a href="{{ route('home') }}" title="Limpa Nome SPC e SERASA - Página Inicial">LIMPA NOME SPC e SERASA</a>
            </h1>
            <nav class="hidden md:flex space-x-6 items-center">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600" title="Página Inicial">Home</a>
                <a href="{{ route('empresa') }}" class="text-gray-700 hover:text-blue-600" title="Sobre Nossa Empresa">Empresa</a>
                <a href="{{ route('blog') }}" class="text-gray-700 hover:text-blue-600" title="Blog com Dicas Financeiras">Blog</a>
                <a href="{{ route('faq') }}" class="text-gray-700 hover:text-blue-600" title="Perguntas Frequentes">FAQ</a>
                <a href="{{ route('contato') }}" class="text-gray-700 hover:text-blue-600" title="Entre em Contato">Contato</a>
                <a href="{{ route('fale-conosco') }}" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-md" title="Fale com um Especialista">Fale Conosco</a>
            </nav>
            <button class="md:hidden bg-white border border-gray-300 p-2 rounded-md" aria-label="Menu" title="Abrir Menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Menu de Categorias -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 shadow-md relative">
            <button onclick="scrollCategories('left')" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-blue-900 text-white p-1 rounded-r-md z-10 hover:bg-blue-800 transition-colors" aria-label="Rolar para a esquerda" title="Ver categorias anteriores">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>

            <div class="container mx-auto px-10">
                <div id="categories-container" class="flex py-3 text-sm whitespace-nowrap overflow-x-auto scrollbar-hide gap-2 md:gap-4">
                    @php
                    $categories = [
                        'Negativação SPC',
                        'Negativação SERASA',
                        'Dívidas Bancárias',
                        'Cartão de Crédito',
                        'Empréstimos',
                        'Financiamentos',
                        'Cheque Especial',
                        'Protestos',
                        'Dívidas Tributárias',
                        'Consultoria Financeira'
                    ];
                    @endphp

                    @foreach($categories as $index => $category)
                    <a href="{{ route('categoria', ['slug' => Str::slug($category)]) }}" 
                       class="text-white transition-all duration-200 px-4 py-2.5 rounded-md flex items-center font-medium min-w-max {{ request()->is('categoria/' . Str::slug($category)) ? 'bg-blue-500 shadow-lg scale-105' : 'hover:bg-blue-700' }}" 
                       title="{{ $category }}">
                        {{ $category }}
                    </a>
                    @endforeach
                </div>
            </div>

            <button onclick="scrollCategories('right')" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-blue-900 text-white p-1 rounded-l-md z-10 hover:bg-blue-800 transition-colors" aria-label="Rolar para a direita" title="Ver mais categorias">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
        </div>

        <!-- Botão de Orçamento centralizado e pulsante - apenas para mobile e tablet -->
        <div class="md:hidden flex justify-center -mb-6 relative z-20">
            <a href="{{ route('orcamento') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-8 text-lg shadow-lg cta-button-pulse rounded-md" title="Solicite um orçamento gratuito">Orçamento</a>
        </div>
    </header>

    <main class="flex-grow">
        <!-- Banner Principal -->
        <section class="relative bg-blue-900 text-white">
            <div class="absolute inset-0 bg-opacity-70 bg-blue-900" style="background-image: url('{{ asset('images/banner-principal.jpg') }}'); background-size: cover; background-position: center; mix-blend-mode: multiply;"></div>
            <div class="container mx-auto px-4 py-16 relative z-10">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0">
                        <h2 class="text-4xl md:text-5xl font-bold mb-4">Limpe seu Nome e Recupere seu Crédito</h2>
                        <p class="text-xl mb-6">Soluções rápidas e eficientes para negativações no SPC e SERASA. Recupere seu poder de compra e volte a realizar seus sonhos.</p>
                        <a href="{{ route('consulta') }}" class="inline-block bg-orange-500 hover:bg-orange-600 text-white text-lg px-8 py-6 rounded-md" title="Consulte sua situação gratuitamente">Consulte Agora</a>
                    </div>
                    <div class="md:w-1/2 flex justify-center">
                        <div class="bg-black rounded-lg overflow-hidden w-full max-w-md aspect-video">
                            <!-- Vídeo explicativo -->
                            <div class="w-full h-full bg-gray-800 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-white opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Introdução -->
        <section class="py-16 bg-gradient-to-b from-white to-blue-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Nossos Serviços Especializados</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">Oferecemos soluções completas para limpar seu nome dos órgãos de proteção ao crédito e ajudar você a recuperar sua vida financeira com segurança e eficiência.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    @php
                    $services = [
                        [
                            'title' => 'Negativação SPC',
                            'image' => 'images/servicos/negativacao-spc.jpg',
                            'description' => 'Resolva problemas de negativação no SPC com nossa assessoria especializada e recupere seu crédito.'
                        ],
                        [
                            'title' => 'Negativação SERASA',
                            'image' => 'images/servicos/negativacao-serasa.jpg',
                            'description' => 'Soluções rápidas para remover seu nome do SERASA e voltar a ter acesso ao crédito.'
                        ],
                        [
                            'title' => 'Empréstimos',
                            'image' => 'images/servicos/emprestimos.jpg',
                            'description' => 'Consultoria para obtenção de empréstimos com as melhores taxas após a limpeza do seu nome.'
                        ],
                        [
                            'title' => 'Limpar Nome',
                            'image' => 'images/servicos/limpar-nome.jpg',
                            'description' => 'Processo completo de limpeza do seu nome em todos os órgãos de proteção ao crédito.'
                        ]
                    ];
                    @endphp

                    @foreach($services as $service)
                    <div class="bg-gradient-to-b from-white to-blue-50 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="h-48 bg-gray-200 relative">
                            <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }} - Limpa Nome SPC e SERASA" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent flex items-end justify-center p-4">
                                <h3 class="text-xl font-bold text-white">{{ $service['title'] }}</h3>
                            </div>
                        </div>
                        <div class="p-5">
                            <p class="text-gray-600 mb-4">{{ $service['description'] }}</p>
                            <a href="{{ route('servico', ['slug' => Str::slug($service['title'])]) }}" class="inline-block bg-orange-500 hover:bg-orange-600 text-white w-full py-2 text-center rounded-md" title="Saiba mais sobre {{ $service['title'] }}">Saiba Mais</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Seção Sobre a Empresa -->
        <section class="py-16 bg-gradient-to-r from-blue-50 to-blue-100">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Sobre Nossa Empresa</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">Conheça nossa história e como nos tornamos referência em soluções para limpeza de nome e recuperação de crédito.</p>
                </div>

                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2">
                        <img src="{{ asset('images/sobre-empresa.jpg') }}" alt="Equipe da Limpa Nome SPC e SERASA" class="rounded-lg shadow-lg w-full h-auto">
                    </div>
                    <div class="md:w-1/2">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Nossa História</h3>
                        <p class="text-gray-600 mb-4">Fundada em 2010, nossa empresa nasceu com o propósito de ajudar brasileiros a recuperarem seu crédito e voltarem a ter acesso ao mercado financeiro. Ao longo dos anos, desenvolvemos metodologias eficientes e seguras para negociação de dívidas e remoção de restrições.</p>
                        <p class="text-gray-600 mb-4">Com uma equipe de especialistas em direito do consumidor e finanças, já ajudamos mais de 50.000 pessoas a limpar seu nome e recomeçar sua vida financeira. Nossa missão é proporcionar um atendimento humanizado e soluções personalizadas para cada cliente.</p>
                        <p class="text-gray-600">Trabalhamos com transparência e ética, sempre buscando os melhores acordos e condições para nossos clientes, respeitando sua capacidade financeira e necessidades específicas.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Clientes e Parceiros -->
        <section class="py-16 bg-gradient-to-b from-white to-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Nossos Clientes e Parceiros</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">Empresas que confiam em nosso trabalho e nos ajudam a oferecer as melhores soluções para nossos clientes.</p>
                </div>

                <div class="relative">
                    <button onclick="prevPartner()" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-blue-900 text-white p-2 rounded-full z-10 hover:bg-blue-800 transition-colors" aria-label="Parceiro anterior" title="Ver parceiro anterior">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </button>
                    
                    <div class="overflow-hidden">
                        <div id="partners-carousel" class="flex transition-transform duration-300 ease-in-out">
                            @php
                            $partners = [
                                ['name' => 'SPC Brasil', 'logo' => 'images/parceiros/spc-brasil.jpg', 'bgColor' => 'bg-blue-50'],
                                ['name' => 'Serasa', 'logo' => 'images/parceiros/serasa.jpg', 'bgColor' => 'bg-red-50'],
                                ['name' => 'Serasa Limpa Nome', 'logo' => 'images/parceiros/serasa-limpa-nome.jpg', 'bgColor' => 'bg-orange-50'],
                                ['name' => 'Acordo Certo', 'logo' => 'images/parceiros/acordo-certo.jpg', 'bgColor' => 'bg-green-50'],
                                ['name' => 'Recovery', 'logo' => 'images/parceiros/recovery.jpg', 'bgColor' => 'bg-purple-50']
                            ];
                            @endphp

                            @foreach($partners as $partner)
                            <div class="w-full md:w-1/3 lg:w-1/4 flex-shrink-0 p-4">
                                <div class="{{ $partner['bgColor'] }} rounded-lg shadow-lg p-6 h-32 flex flex-col items-center justify-center transition-all duration-300 hover:shadow-xl hover:scale-105">
                                    <div class="w-16 h-16 rounded-full overflow-hidden mb-2">
                                        <img src="{{ asset($partner['logo']) }}" alt="{{ $partner['name'] }} - Parceiro da Limpa Nome SPC e SERASA" class="w-full h-full object-cover">
                                    </div>
                                    <div class="text-sm font-bold text-gray-700 text-center">{{ $partner['name'] }}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <button onclick="nextPartner()" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-blue-900 text-white p-2 rounded-full z-10 hover:bg-blue-800 transition-colors" aria-label="Próximo parceiro" title="Ver próximo parceiro">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- Seção de FAQ -->
        <section class="py-16 bg-gradient-to-br from-blue-50 to-blue-100">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Perguntas Frequentes</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">Encontre respostas para as dúvidas mais comuns sobre nossos serviços e processos de limpeza de nome.</p>
                </div>

                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-1/2">
                        <div class="space-y-4">
                            @php
                            $faqs = [
                                [
                                    'question' => 'Como funciona o processo de limpeza de nome?',
                                    'answer' => 'Nosso processo envolve análise da situação, negociação com credores, e acompanhamento até a remoção da negativação dos órgãos de proteção ao crédito.'
                                ],
                                [
                                    'question' => 'Quanto tempo leva para limpar meu nome?',
                                    'answer' => 'O tempo varia conforme cada caso, mas geralmente conseguimos resultados entre 15 e 90 dias, dependendo da complexidade da situação.'
                                ],
                                [
                                    'question' => 'É possível negociar minhas dívidas com desconto?',
                                    'answer' => 'Sim, trabalhamos para conseguir os melhores descontos possíveis, que podem chegar até 90% em alguns casos.'
                                ],
                                [
                                    'question' => 'Preciso pagar adiantado pelos serviços?',
                                    'answer' => 'Não, nossos honorários são cobrados apenas quando conseguimos resultados positivos para o seu caso.'
                                ],
                                [
                                    'question' => 'Vocês atendem em todo o Brasil?',
                                    'answer' => 'Sim, atendemos clientes em todo o território nacional através de nossa plataforma online.'
                                ],
                                [
                                    'question' => 'Quais documentos preciso apresentar?',
                                    'answer' => 'Geralmente solicitamos RG, CPF, comprovante de residência e documentos relacionados às dívidas em questão.'
                                ],
                                [
                                    'question' => 'O que acontece se não for possível limpar meu nome?',
                                    'answer' => 'Se não conseguirmos resultados, você não paga pelos nossos serviços. Trabalhamos com garantia de satisfação.'
                                ],
                                [
                                    'question' => 'Posso acompanhar o andamento do meu processo?',
                                    'answer' => 'Sim, disponibilizamos uma área do cliente onde você pode acompanhar cada etapa do seu processo em tempo real.'
                                ]
                            ];
                            @endphp

                            @foreach($faqs as $index => $faq)
                            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden">
                                <button @click="open = !open" class="flex justify-between items-center w-full px-4 py-3 bg-white hover:bg-gray-50 focus:outline-none" aria-expanded="false" :aria-expanded="open.toString()">
                                    <span class="font-medium text-left">{{ $faq['question'] }}</span>
                                    <svg class="h-5 w-5 text-gray-500 transform transition-transform duration-200" :class="{'rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div x-show="open" x-collapse class="px-4 py-3 text-gray-600 bg-gray-50">
                                    <p>{{ $faq['answer'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="md:w-1/2 flex justify-center items-center">
                        <img src="{{ asset('images/faq-image.jpg') }}" alt="Perguntas Frequentes sobre Limpeza de Nome" class="rounded-lg shadow-lg max-w-full h-auto">
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Depoimentos -->
        <section class="py-16 bg-gradient-to-t from-gray-50 to-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Depoimentos de Clientes</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">Veja o que dizem as pessoas que já utilizaram nossos serviços e recuperaram seu crédito.</p>
                </div>

                <div class="relative">
                    <button onclick="prevTestimonial()" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-blue-900 text-white p-2 rounded-full z-10 hover:bg-blue-800 transition-colors" aria-label="Depoimento anterior" title="Ver depoimento anterior">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </button>
                    
                    <div class="overflow-hidden">
                        <div id="testimonials-carousel" class="flex transition-transform duration-300 ease-in-out">
                            @php
                            $testimonials = [
                                [
                                    'name' => 'Carlos Silva',
                                    'location' => 'São Paulo, SP',
                                    'text' => 'Estava com meu nome negativado há mais de 2 anos e não conseguia mais fazer compras a prazo. Em apenas 45 dias, a equipe conseguiu limpar meu nome e hoje já tenho cartão de crédito novamente!'
                                ],
                                [
                                    'name' => 'Maria Oliveira',
                                    'location' => 'Rio de Janeiro, RJ',
                                    'text' => 'Excelente atendimento e profissionalismo. Conseguiram um desconto de 75% na minha dívida e em 30 dias meu nome já estava limpo. Super recomendo!'
                                ],
                                [
                                    'name' => 'João Pereira',
                                    'location' => 'Belo Horizonte, MG',
                                    'text' => 'Tinha dívidas em 3 bancos diferentes e não via saída. A equipe negociou valores que cabiam no meu orçamento e me orientou em todo o processo. Muito grato!'
                                ],
                                [
                                    'name' => 'Ana Santos',
                                    'location' => 'Salvador, BA',
                                    'text' => 'Atendimento humanizado e resultados rápidos. Consegui limpar meu nome em menos de 60 dias e agora estou reconstruindo minha vida financeira.'
                                ]
                            ];
                            @endphp

                            @foreach($testimonials as $testimonial)
                            <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 p-4">
                                <div class="bg-white rounded-lg shadow-lg p-6 h-full">
                                    <div class="flex flex-col space-y-4">
                                        <div class="flex items-center space-x-2">
                                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-xl">
                                                {{ substr($testimonial['name'], 0, 1) }}
                                            </div>
                                            <div>
                                                <div class="font-medium">{{ $testimonial['name'] }}</div>
                                                <div class="text-sm text-gray-500">{{ $testimonial['location'] }}</div>
                                            </div>
                                        </div>
                                        <p class="text-gray-600 italic">"{{ $testimonial['text'] }}"</p>
                                        <div class="flex">
                                            @for($i = 0; $i < 5; $i++)
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <button onclick="nextTestimonial()" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-blue-900 text-white p-2 rounded-full z-10 hover:bg-blue-800 transition-colors" aria-label="Próximo depoimento" title="Ver próximo depoimento">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- Seção de Notícias -->
        <section class="py-16 bg-gradient-to-l from-blue-50 to-blue-100">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Últimas Notícias</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">Fique por dentro das novidades sobre crédito, finanças e direitos do consumidor em tempo real.</p>
                </div>

                <!-- Feed de Notícias -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($news as $article)
                    <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <a href="{{ route('blog.show', $article->slug) }}" title="{{ $article->title }}">
                            <img src="{{ asset($article->image) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2">{{ $article->published_at->format('d/m/Y') }} • {{ $article->category->name }}</div>
                            <h3 class="text-xl font-bold mb-2">
                                <a href="{{ route('blog.show', $article->slug) }}" class="text-gray-800 hover:text-blue-600" title="{{ $article->title }}">{{ $article->title }}</a>
                            </h3>
                            <p class="text-gray-600 mb-4">{{ $article->excerpt }}</p>
                            <a href="{{ route('blog.show', $article->slug) }}" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center" title="Ler artigo completo sobre {{ $article->title }}">
                                Ler mais
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </article>
                    @endforeach
                </div>
                
                <div class="text-center mt-8">
                    <a href="{{ route('blog') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md transition-colors duration-300" title="Ver todas as notícias e artigos do blog">Ver Todas as Notícias</a>
                </div>
            </div>
        </section>

        <!-- Seção de Atendimento por Localidade -->
        <section class="py-16 bg-gradient-to-b from-white to-blue-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Atendimento por Localidade</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">Estamos presentes em todos os 27 estados do Brasil para melhor atender você. Selecione um estado para ver mais informações.</p>
                </div>

                <!-- Mapa do Brasil -->
                <div class="max-w-4xl mx-auto">
                    <div id="brazil-map" class="w-full h-[500px] bg-blue-50 rounded-lg shadow-md p-4">
                        <!-- O mapa será carregado via JavaScript -->
                    </div>
                    
                    <div id="state-info" class="mt-6 p-6 bg-white rounded-lg shadow-md hidden">
                        <h3 id="state-name" class="text-xl font-bold text-gray-800 mb-2"></h3>
                        <p id="state-description" class="text-gray-600 mb-4"></p>
                        <a href="#" id="state-link" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-6 rounded-md transition-colors duration-300" title="Ver detalhes de atendimento">Ver Detalhes</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Newsletter -->
        <section class="py-16 bg-gradient-to-r from-blue-800 to-blue-900 text-white">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl font-bold mb-4">Receba Nossas Novidades</h2>
                    <p class="text-lg mb-8 text-blue-100">Cadastre-se para receber dicas, novidades e ofertas exclusivas sobre como manter seu nome limpo e sua vida financeira saudável.</p>

                    <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                        @csrf
                        <input type="email" name="email" placeholder="Seu melhor e-mail" class="bg-white text-gray-800 px-4 py-2 rounded-md w-full" required>
                        <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white whitespace-nowrap px-6 py-2 rounded-md transition-colors duration-300" title="Inscrever-se na newsletter">Inscrever-se</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Rodapé -->
    <footer class="bg-gradient-to-b from-gray-800 to-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <h3 class="text-xl font-bold mb-4">Sobre Nós</h3>
                    <p class="text-gray-400 mb-4">Somos especialistas em limpeza de nome e recuperação de crédito, ajudando brasileiros a recomeçar sua vida financeira desde 2010.</p>
                    <div class="flex space-x-4">
                        <a href="https://facebook.com/limpanome" class="text-gray-400 hover:text-white" title="Siga-nos no Facebook" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
                        </a>
                        <a href="https://instagram.com/limpanome" class="text-gray-400 hover:text-white" title="Siga-nos no Instagram" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </a>
                        <a href="https://twitter.com/limpanome" class="text-gray-400 hover:text-white" title="Siga-nos no Twitter" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>
                        </a>
                        <a href="https://linkedin.com/company/limpanome" class="text-gray-400 hover:text-white" title="Siga-nos no LinkedIn" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                        <a href="https://youtube.com/limpanome" class="text-gray-400 hover:text-white" title="Assista nosso canal no YouTube" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Links Rápidos</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('home') }}" class="text-gray-400 hover:text-white" title="Página Inicial">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('servicos') }}" class="text-gray-400 hover:text-white" title="Nossos Serviços">Serviços</a>
                        </li>
                        <li>
                            <a href="{{ route('empresa') }}" class="text-gray-400 hover:text-white" title="Sobre Nossa Empresa">Sobre Nós</a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}" class="text-gray-400 hover:text-white" title="Blog com Dicas Financeiras">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('faq') }}" class="text-gray-400 hover:text-white" title="Perguntas Frequentes">FAQ</a>
                        </li>
                        <li>
                            <a href="{{ route('contato') }}" class="text-gray-400 hover:text-white" title="Entre em Contato">Contato</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Contato</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="text-gray-400">Av. Paulista, 1000, São Paulo - SP, 01310-100</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <a href="tel:+551140028922" class="text-gray-400 hover:text-white" title="Ligue para nós">(11) 4002-8922</a>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <a href="mailto:contato@limpanome.com.br" class="text-gray-400 hover:text-white" title="Envie-nos um e-mail">contato@limpanome.com.br</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Fale Conosco</h3>
                    <form action="{{ route('contato.rapido') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="text" name="name" placeholder="Nome" class="bg-gray-800 border-gray-700 w-full px-4 py-2 rounded-md" required>
                        <input type="tel" name="phone" placeholder="Telefone" class="bg-gray-800 border-gray-700 w-full px-4 py-2 rounded-md" required>
                        <textarea name="message" placeholder="Mensagem" class="bg-gray-800 border-gray-700 w-full px-4 py-2 rounded-md" rows="3" required></textarea>
                        <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white w-full py-2 rounded-md transition-colors duration-300" title="Enviar mensagem">Enviar Mensagem</button>
                    </form>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-gray-400 text-sm mb-4 md:mb-0">
                        © {{ date('Y') }} Limpa Nome SPC e SERASA. Todos os direitos reservados. CNPJ: 12.345.678/0001-90
                    </div>
                    <div class="text-gray-400 text-sm">
                        Desenvolvido por <a href="https://agenciaweb.com" class="text-orange-500 hover:text-orange-400" title="Agência Web - Desenvolvimento de Sites" target="_blank" rel="noopener">Agência Web</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection

@section('scripts')
<script>
    // Função para rolar o menu de categorias
    function scrollCategories(direction) {
        const container = document.getElementById('categories-container');
        const scrollAmount = 200;
        
        if (direction === 'left') {
            container.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        } else {
            container.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        }
    }
    
    // Funções para o carrossel de parceiros
    let partnerPosition = 0;
    const partnerItemWidth = window.innerWidth < 768 ? 100 : window.innerWidth < 1024 ? 33.33 : 25;
    const partnerTotalItems = {{ count($partners) }};
    
    function updatePartnerCarousel() {
        const carousel = document.getElementById('partners-carousel');
        carousel.style.transform = `translateX(-${partnerPosition * partnerItemWidth}%)`;
    }
    
    function nextPartner() {
        if (partnerPosition < partnerTotalItems - (window.innerWidth < 768 ? 1 : window.innerWidth < 1024 ? 3 : 4)) {
            partnerPosition++;
            updatePartnerCarousel();
        }
    }
    
    function prevPartner() {
        if (partnerPosition > 0) {
            partnerPosition--;
            updatePartnerCarousel();
        }
    }
    
    // Funções para o carrossel de depoimentos
    let testimonialPosition = 0;
    const testimonialItemWidth = window.innerWidth < 768 ? 100 : window.innerWidth < 1024 ? 50 : 33.33;
    const testimonialTotalItems = {{ count($testimonials) }};
    
    function updateTestimonialCarousel() {
        const carousel = document.getElementById('testimonials-carousel');
        carousel.style.transform = `translateX(-${testimonialPosition * testimonialItemWidth}%)`;
    }
    
    function nextTestimonial() {
        if (testimonialPosition < testimonialTotalItems - (window.innerWidth < 768 ? 1 : window.innerWidth < 1024 ? 2 : 3)) {
            testimonialPosition++;
            updateTestimonialCarousel();
        }
    }
    
    function prevTestimonial() {
        if (testimonialPosition > 0) {
            testimonialPosition--;
            updateTestimonialCarousel();
        }
    }
    
    // Inicialização do mapa do Brasil
    document.addEventListener('DOMContentLoaded', function() {
        // Código para inicializar o mapa do Brasil será adicionado aqui
        // Este é um placeholder para a implementação do mapa interativo
    });
    
    // Função para mostrar informações do estado
    function showStateInfo(state) {
        const stateInfo = document.getElementById('state-info');
        const stateName = document.getElementById('state-name');
        const stateDescription = document.getElementById('state-description');
        const stateLink = document.getElementById('state-link');
        
        // Dados do estado (exemplo)
        const stateData = {
            name: state,
            description: `Atendemos em todo o estado de ${state} com escritórios nas principais cidades. Entre em contato para conhecer nossos serviços personalizados para sua região.`,
            link: `/atendimento/${state.toLowerCase().replace(' ', '-')}`
        };
        
        stateName.textContent = stateData.name;
        stateDescription.textContent = stateData.description;
        stateLink.href = stateData.link;
        stateLink.title = `Ver detalhes de atendimento em ${state}`;
        
        stateInfo.classList.remove('hidden');
    }
</script>
@endsection