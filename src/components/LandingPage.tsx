import { useState, useRef, useEffect } from "react";
import { Button } from "@/components/ui/button";
import {
  Carousel,
  CarouselContent,
  CarouselItem,
  CarouselNext,
  CarouselPrevious,
} from "@/components/ui/carousel";
import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from "@/components/ui/accordion";
import { Input } from "@/components/ui/input";
import { Textarea } from "@/components/ui/textarea";
import { Card, CardContent } from "@/components/ui/card";
import {
  MapPin,
  Phone,
  Mail,
  Facebook,
  Instagram,
  Twitter,
  Linkedin,
  Youtube,
  ChevronRight,
  ChevronLeft,
} from "lucide-react";
import NewsFeed from "@/components/NewsFeed";
import React from "react";
import BrazilStatesMap from "@/components/BrazilStatesMap";

export default function LandingPage() {
  const [email, setEmail] = useState("");
  const [activeCategory, setActiveCategory] = useState(0);
  const categoriesRef = useRef<HTMLDivElement>(null);

  const scrollCategories = (direction: "left" | "right") => {
    if (categoriesRef.current) {
      const scrollAmount = 200;
      if (direction === "left") {
        categoriesRef.current.scrollBy({
          left: -scrollAmount,
          behavior: "smooth",
        });
      } else {
        categoriesRef.current.scrollBy({
          left: scrollAmount,
          behavior: "smooth",
        });
      }
    }
  };

  return (
    <div className="flex flex-col min-h-screen bg-white relative">
      {/* Topo da Página */}
      <header className="w-full bg-white shadow-md sticky top-0 z-50">
        <div className="container mx-auto px-4 py-4 flex justify-between items-center">
          <div className="text-xl font-bold text-blue-800">
            LIMPA NOME SPC e SERASA
          </div>
          <nav className="hidden md:flex space-x-6 items-center">
            <a href="#" className="text-gray-700 hover:text-blue-600">
              Home
            </a>
            <a href="#" className="text-gray-700 hover:text-blue-600">
              Empresa
            </a>
            <a href="#" className="text-gray-700 hover:text-blue-600">
              Blog
            </a>
            <a href="#" className="text-gray-700 hover:text-blue-600">
              FAQ
            </a>
            <a href="#" className="text-gray-700 hover:text-blue-600">
              Contato
            </a>
            <Button className="bg-orange-500 hover:bg-orange-600 text-white">
              Fale Conosco
            </Button>
          </nav>
          <Button className="md:hidden" variant="outline" aria-label="Menu">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              className="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                strokeLinecap="round"
                strokeLinejoin="round"
                strokeWidth={2}
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
          </Button>
        </div>

        {/* Menu de Categorias */}
        <div className="bg-gradient-to-r from-blue-600 to-blue-800 shadow-md relative">
          <button
            onClick={() => scrollCategories("left")}
            className="absolute left-0 top-1/2 transform -translate-y-1/2 bg-blue-900 text-white p-1 rounded-r-md z-10 hover:bg-blue-800 transition-colors"
            aria-label="Rolar para a esquerda"
          >
            <ChevronLeft size={20} />
          </button>

          <div className="container mx-auto px-10">
            <div
              ref={categoriesRef}
              className="flex py-3 text-sm whitespace-nowrap overflow-x-auto scrollbar-hide gap-2 md:gap-4"
            >
              {[
                "Negativação SPC",
                "Negativação SERASA",
                "Dívidas Bancárias",
                "Cartão de Crédito",
                "Empréstimos",
                "Financiamentos",
                "Cheque Especial",
                "Protestos",
                "Dívidas Tributárias",
                "Consultoria Financeira",
              ].map((category, index) => (
                <a
                  key={index}
                  href="#"
                  className={`text-white transition-all duration-200 px-4 py-2.5 rounded-md flex items-center font-medium min-w-max ${activeCategory === index ? "bg-blue-500 shadow-lg scale-105" : "hover:bg-blue-700"}`}
                  onClick={(e) => {
                    e.preventDefault();
                    setActiveCategory(index);
                  }}
                >
                  {category}
                </a>
              ))}
            </div>
          </div>

          <button
            onClick={() => scrollCategories("right")}
            className="absolute right-0 top-1/2 transform -translate-y-1/2 bg-blue-900 text-white p-1 rounded-l-md z-10 hover:bg-blue-800 transition-colors"
            aria-label="Rolar para a direita"
          >
            <ChevronRight size={20} />
          </button>
        </div>

        {/* Botão de Orçamento centralizado e pulsante - apenas para mobile e tablet */}
        <div className="md:hidden flex justify-center -mb-6 relative z-20">
          <Button className="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-8 text-lg shadow-lg cta-button-pulse">
            Orçamento
          </Button>
        </div>
      </header>
      <main className="flex-grow">
        {/* Banner Principal */}
        <section className="relative bg-blue-900 text-white">
          <div
            className="absolute inset-0 bg-opacity-70 bg-blue-900"
            style={{
              backgroundImage:
                "url(https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=1200&q=80)",
              backgroundSize: "cover",
              backgroundPosition: "center",
              mixBlendMode: "multiply",
            }}
          ></div>
          <div className="container mx-auto px-4 py-16 relative z-10">
            <div className="flex flex-col md:flex-row items-center">
              <div className="md:w-1/2 mb-8 md:mb-0">
                <h1 className="text-4xl md:text-5xl font-bold mb-4">
                  Limpe seu Nome e Recupere seu Crédito
                </h1>
                <p className="text-xl mb-6">
                  Soluções rápidas e eficientes para negativações no SPC e
                  SERASA. Recupere seu poder de compra e volte a realizar seus
                  sonhos.
                </p>
                <Button className="bg-orange-500 hover:bg-orange-600 text-white text-lg px-8 py-6">
                  Consulte Agora
                </Button>
              </div>
              <div className="md:w-1/2 flex justify-center">
                <div className="bg-black rounded-lg overflow-hidden w-full max-w-md aspect-video">
                  {/* Placeholder para vídeo */}
                  <div className="w-full h-full bg-gray-800 flex items-center justify-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      className="h-20 w-20 text-white opacity-50"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth={2}
                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"
                      />
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth={2}
                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                      />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* Seção de Introdução */}
        <section className="py-16 bg-gradient-to-b from-white to-blue-50">
          <div className="container mx-auto px-4">
            <div className="text-center mb-12">
              <h2 className="text-3xl font-bold text-gray-800 mb-4">
                Nossos Serviços Especializados
              </h2>
              <p className="text-lg text-gray-600 max-w-3xl mx-auto">
                Oferecemos soluções completas para limpar seu nome dos órgãos de
                proteção ao crédito e ajudar você a recuperar sua vida
                financeira com segurança e eficiência.
              </p>
            </div>

            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
              {[
                {
                  title: "Negativação SPC",
                  image:
                    "https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=500&q=80",
                  description:
                    "Resolva problemas de negativação no SPC com nossa assessoria especializada e recupere seu crédito.",
                },
                {
                  title: "Negativação SERASA",
                  image:
                    "https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500&q=80",
                  description:
                    "Soluções rápidas para remover seu nome do SERASA e voltar a ter acesso ao crédito.",
                },
                {
                  title: "Empréstimos",
                  image:
                    "https://images.unsplash.com/photo-1579621970588-a35d0e7ab9b6?w=500&q=80",
                  description:
                    "Consultoria para obtenção de empréstimos com as melhores taxas após a limpeza do seu nome.",
                },
                {
                  title: "Limpar Nome",
                  image:
                    "https://images.unsplash.com/photo-1589666564459-93cdd3ab856a?w=500&q=80",
                  description:
                    "Processo completo de limpeza do seu nome em todos os órgãos de proteção ao crédito.",
                },
              ].map((service, index) => (
                <div
                  key={index}
                  className="bg-gradient-to-b from-white to-blue-50 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                >
                  <div className="h-48 bg-gray-200 relative">
                    <img
                      src={service.image}
                      alt={service.title}
                      className="w-full h-full object-cover"
                    />
                    <div className="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent flex items-end justify-center p-4">
                      <h3 className="text-xl font-bold text-white">
                        {service.title}
                      </h3>
                    </div>
                  </div>
                  <div className="p-5">
                    <p className="text-gray-600 mb-4">{service.description}</p>
                    <Button className="bg-orange-500 hover:bg-orange-600 text-white w-full">
                      Saiba Mais
                    </Button>
                  </div>
                </div>
              ))}
              <div className="w-[0px] h-[0px]"></div>
            </div>
          </div>
        </section>

        {/* Seção Sobre a Empresa */}
        <section className="py-16 bg-gradient-to-r from-blue-50 to-blue-100">
          <div className="container mx-auto px-4">
            <div className="text-center mb-12">
              <h2 className="text-3xl font-bold text-gray-800 mb-4">
                Sobre Nossa Empresa
              </h2>
              <p className="text-lg text-gray-600 max-w-3xl mx-auto">
                Conheça nossa história e como nos tornamos referência em
                soluções para limpeza de nome e recuperação de crédito.
              </p>
            </div>

            <div className="flex flex-col md:flex-row items-center gap-8">
              <div className="md:w-1/2">
                <img
                  src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=800&q=80"
                  alt="Nossa Empresa"
                  className="rounded-lg shadow-lg w-full h-auto"
                />
              </div>
              <div className="md:w-1/2">
                <h3 className="text-2xl font-bold text-gray-800 mb-4">
                  Nossa História
                </h3>
                <p className="text-gray-600 mb-4">
                  Fundada em 2010, nossa empresa nasceu com o propósito de
                  ajudar brasileiros a recuperarem seu crédito e voltarem a ter
                  acesso ao mercado financeiro. Ao longo dos anos, desenvolvemos
                  metodologias eficientes e seguras para negociação de dívidas e
                  remoção de restrições.
                </p>
                <p className="text-gray-600 mb-4">
                  Com uma equipe de especialistas em direito do consumidor e
                  finanças, já ajudamos mais de 50.000 pessoas a limpar seu nome
                  e recomeçar sua vida financeira. Nossa missão é proporcionar
                  um atendimento humanizado e soluções personalizadas para cada
                  cliente.
                </p>
                <p className="text-gray-600">
                  Trabalhamos com transparência e ética, sempre buscando os
                  melhores acordos e condições para nossos clientes, respeitando
                  sua capacidade financeira e necessidades específicas.
                </p>
              </div>
            </div>
          </div>
        </section>

        {/* Seção de Clientes e Parceiros */}
        <section className="py-16 bg-gradient-to-b from-white to-gray-50">
          <div className="container mx-auto px-4">
            <div className="text-center mb-12">
              <h2 className="text-3xl font-bold text-gray-800 mb-4">
                Nossos Clientes e Parceiros
              </h2>
              <p className="text-lg text-gray-600 max-w-3xl mx-auto">
                Empresas que confiam em nosso trabalho e nos ajudam a oferecer
                as melhores soluções para nossos clientes.
              </p>
            </div>

            <Carousel className="w-full max-w-5xl mx-auto">
              <CarouselContent>
                {[
                  {
                    name: "SPC Brasil",
                    logo: "https://images.unsplash.com/photo-1633332755192-727a05c4013d?w=500&q=80",
                    bgColor: "bg-blue-50",
                  },
                  {
                    name: "Serasa",
                    logo: "https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=500&q=80",
                    bgColor: "bg-red-50",
                  },
                  {
                    name: "Serasa Limpa Nome",
                    logo: "https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=500&q=80",
                    bgColor: "bg-orange-50",
                  },
                  {
                    name: "Acordo Certo",
                    logo: "https://images.unsplash.com/photo-1527980965255-d3b416303d12?w=500&q=80",
                    bgColor: "bg-green-50",
                  },
                  {
                    name: "Recovery",
                    logo: "https://images.unsplash.com/photo-1607990281513-2c110a25bd8c?w=500&q=80",
                    bgColor: "bg-purple-50",
                  },
                ].map((partner, index) => (
                  <CarouselItem
                    key={index}
                    className="md:basis-1/3 lg:basis-1/4"
                  >
                    <div className="p-4">
                      <div
                        className={`${partner.bgColor} rounded-lg shadow-lg p-6 h-32 flex flex-col items-center justify-center transition-all duration-300 hover:shadow-xl hover:scale-105`}
                      >
                        <div className="w-16 h-16 rounded-full overflow-hidden mb-2">
                          <img
                            src={partner.logo}
                            alt={partner.name}
                            className="w-full h-full object-cover"
                          />
                        </div>
                        <div className="text-sm font-bold text-gray-700 text-center">
                          {partner.name}
                        </div>
                      </div>
                    </div>
                  </CarouselItem>
                ))}
              </CarouselContent>
              <CarouselPrevious />
              <CarouselNext />
            </Carousel>
          </div>
        </section>

        {/* Seção de FAQ */}
        <section className="py-16 bg-gradient-to-br from-blue-50 to-blue-100">
          <div className="container mx-auto px-4">
            <div className="text-center mb-12">
              <h2 className="text-3xl font-bold text-gray-800 mb-4">
                Perguntas Frequentes
              </h2>
              <p className="text-lg text-gray-600 max-w-3xl mx-auto">
                Encontre respostas para as dúvidas mais comuns sobre nossos
                serviços e processos de limpeza de nome.
              </p>
            </div>

            <div className="flex flex-col md:flex-row gap-8">
              <div className="md:w-1/2">
                <Accordion type="single" collapsible className="w-full">
                  {[
                    {
                      question: "Como funciona o processo de limpeza de nome?",
                      answer:
                        "Nosso processo envolve análise da situação, negociação com credores, e acompanhamento até a remoção da negativação dos órgãos de proteção ao crédito.",
                    },
                    {
                      question: "Quanto tempo leva para limpar meu nome?",
                      answer:
                        "O tempo varia conforme cada caso, mas geralmente conseguimos resultados entre 15 e 90 dias, dependendo da complexidade da situação.",
                    },
                    {
                      question:
                        "É possível negociar minhas dívidas com desconto?",
                      answer:
                        "Sim, trabalhamos para conseguir os melhores descontos possíveis, que podem chegar até 90% em alguns casos.",
                    },
                    {
                      question: "Preciso pagar adiantado pelos serviços?",
                      answer:
                        "Não, nossos honorários são cobrados apenas quando conseguimos resultados positivos para o seu caso.",
                    },
                    {
                      question: "Vocês atendem em todo o Brasil?",
                      answer:
                        "Sim, atendemos clientes em todo o território nacional através de nossa plataforma online.",
                    },
                    {
                      question: "Quais documentos preciso apresentar?",
                      answer:
                        "Geralmente solicitamos RG, CPF, comprovante de residência e documentos relacionados às dívidas em questão.",
                    },
                    {
                      question:
                        "O que acontece se não for possível limpar meu nome?",
                      answer:
                        "Se não conseguirmos resultados, você não paga pelos nossos serviços. Trabalhamos com garantia de satisfação.",
                    },
                    {
                      question: "Posso acompanhar o andamento do meu processo?",
                      answer:
                        "Sim, disponibilizamos uma área do cliente onde você pode acompanhar cada etapa do seu processo em tempo real.",
                    },
                  ].map((item, index) => (
                    <AccordionItem key={index} value={`item-${index}`}>
                      <AccordionTrigger className="text-left font-medium">
                        {item.question}
                      </AccordionTrigger>
                      <AccordionContent className="text-gray-600">
                        {item.answer}
                      </AccordionContent>
                    </AccordionItem>
                  ))}
                </Accordion>
              </div>
              <div className="md:w-1/2 flex justify-center items-center">
                <img
                  src="https://images.unsplash.com/photo-1554224155-1696413565d3?w=800&q=80"
                  alt="FAQ"
                  className="rounded-lg shadow-lg max-w-full h-auto"
                />
              </div>
            </div>
          </div>
        </section>

        {/* Seção de Depoimentos */}
        <section className="py-16 bg-gradient-to-t from-gray-50 to-white">
          <div className="container mx-auto px-4">
            <div className="text-center mb-12">
              <h2 className="text-3xl font-bold text-gray-800 mb-4">
                Depoimentos de Clientes
              </h2>
              <p className="text-lg text-gray-600 max-w-3xl mx-auto">
                Veja o que dizem as pessoas que já utilizaram nossos serviços e
                recuperaram seu crédito.
              </p>
            </div>

            <Carousel className="w-full max-w-5xl mx-auto">
              <CarouselContent>
                {[
                  {
                    name: "Carlos Silva",
                    location: "São Paulo, SP",
                    text: "Estava com meu nome negativado há mais de 2 anos e não conseguia mais fazer compras a prazo. Em apenas 45 dias, a equipe conseguiu limpar meu nome e hoje já tenho cartão de crédito novamente!",
                  },
                  {
                    name: "Maria Oliveira",
                    location: "Rio de Janeiro, RJ",
                    text: "Excelente atendimento e profissionalismo. Conseguiram um desconto de 75% na minha dívida e em 30 dias meu nome já estava limpo. Super recomendo!",
                  },
                  {
                    name: "João Pereira",
                    location: "Belo Horizonte, MG",
                    text: "Tinha dívidas em 3 bancos diferentes e não via saída. A equipe negociou valores que cabiam no meu orçamento e me orientou em todo o processo. Muito grato!",
                  },
                  {
                    name: "Ana Santos",
                    location: "Salvador, BA",
                    text: "Atendimento humanizado e resultados rápidos. Consegui limpar meu nome em menos de 60 dias e agora estou reconstruindo minha vida financeira.",
                  },
                ].map((item, index) => (
                  <CarouselItem
                    key={index}
                    className="md:basis-1/2 lg:basis-1/3"
                  >
                    <div className="p-4">
                      <Card>
                        <CardContent className="p-6">
                          <div className="flex flex-col space-y-4">
                            <div className="flex items-center space-x-2">
                              <div className="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-xl">
                                {item.name.charAt(0)}
                              </div>
                              <div>
                                <div className="font-medium">{item.name}</div>
                                <div className="text-sm text-gray-500">
                                  {item.location}
                                </div>
                              </div>
                            </div>
                            <p className="text-gray-600 italic">
                              "{item.text}"
                            </p>
                            <div className="flex">
                              {[1, 2, 3, 4, 5].map((star) => (
                                <svg
                                  key={star}
                                  xmlns="http://www.w3.org/2000/svg"
                                  className="h-5 w-5 text-yellow-400"
                                  viewBox="0 0 20 20"
                                  fill="currentColor"
                                >
                                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                              ))}
                            </div>
                          </div>
                        </CardContent>
                      </Card>
                    </div>
                  </CarouselItem>
                ))}
              </CarouselContent>
              <CarouselPrevious />
              <CarouselNext />
            </Carousel>
          </div>
        </section>

        {/* Seção de Notícias */}
        <section className="py-16 bg-gradient-to-l from-blue-50 to-blue-100">
          <div className="container mx-auto px-4">
            <div className="text-center mb-12">
              <h2 className="text-3xl font-bold text-gray-800 mb-4">
                Últimas Notícias
              </h2>
              <p className="text-lg text-gray-600 max-w-3xl mx-auto">
                Fique por dentro das novidades sobre crédito, finanças e
                direitos do consumidor em tempo real.
              </p>
            </div>

            {/* Componente de Feed de Notícias */}
            <NewsFeed />
          </div>
        </section>

        {/* Seção de Atendimento por Localidade */}
        <section className="py-16 bg-gradient-to-b from-white to-blue-50">
          <div className="container mx-auto px-4">
            <div className="text-center mb-12">
              <h2 className="text-3xl font-bold text-gray-800 mb-4">
                Atendimento por Localidade
              </h2>
              <p className="text-lg text-gray-600 max-w-3xl mx-auto">
                Estamos presentes em todos os 27 estados do Brasil para melhor
                atender você. Selecione um estado para ver mais informações.
              </p>
            </div>

            {/* Componente de Mapa dos Estados */}
            <BrazilStatesMap />
          </div>
        </section>

        {/* Seção de Newsletter */}
        <section className="py-16 bg-gradient-to-r from-blue-800 to-blue-900 text-white">
          <div className="container mx-auto px-4">
            <div className="max-w-3xl mx-auto text-center">
              <h2 className="text-3xl font-bold mb-4">
                Receba Nossas Novidades
              </h2>
              <p className="text-lg mb-8 text-blue-100">
                Cadastre-se para receber dicas, novidades e ofertas exclusivas
                sobre como manter seu nome limpo e sua vida financeira saudável.
              </p>

              <div className="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                <Input
                  type="email"
                  placeholder="Seu melhor e-mail"
                  className="bg-white text-gray-800"
                  value={email}
                  onChange={(e) => setEmail(e.target.value)}
                />
                <Button className="bg-orange-500 hover:bg-orange-600 text-white whitespace-nowrap">
                  Inscrever-se
                </Button>
              </div>
            </div>
          </div>
        </section>
      </main>
      {/* Botão CTA Flutuante removido */}
      {/* Rodapé */}
      <footer className="bg-gradient-to-b from-gray-800 to-gray-900 text-white pt-16 pb-8">
        <div className="container mx-auto px-4">
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <div>
              <h3 className="text-xl font-bold mb-4">Sobre Nós</h3>
              <p className="text-gray-400 mb-4">
                Somos especialistas em limpeza de nome e recuperação de crédito,
                ajudando brasileiros a recomeçar sua vida financeira desde 2010.
              </p>
              <div className="flex space-x-4">
                <a href="#" className="text-gray-400 hover:text-white">
                  <Facebook className="h-6 w-6" />
                </a>
                <a href="#" className="text-gray-400 hover:text-white">
                  <Instagram className="h-6 w-6" />
                </a>
                <a href="#" className="text-gray-400 hover:text-white">
                  <Twitter className="h-6 w-6" />
                </a>
                <a href="#" className="text-gray-400 hover:text-white">
                  <Linkedin className="h-6 w-6" />
                </a>
                <a href="#" className="text-gray-400 hover:text-white">
                  <Youtube className="h-6 w-6" />
                </a>
              </div>
            </div>

            <div>
              <h3 className="text-xl font-bold mb-4">Links Rápidos</h3>
              <ul className="space-y-2">
                <li>
                  <a href="#" className="text-gray-400 hover:text-white">
                    Home
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-400 hover:text-white">
                    Serviços
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-400 hover:text-white">
                    Sobre Nós
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-400 hover:text-white">
                    Blog
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-400 hover:text-white">
                    FAQ
                  </a>
                </li>
                <li>
                  <a href="#" className="text-gray-400 hover:text-white">
                    Contato
                  </a>
                </li>
              </ul>
            </div>

            <div>
              <h3 className="text-xl font-bold mb-4">Contato</h3>
              <ul className="space-y-3">
                <li className="flex items-start space-x-3">
                  <MapPin className="h-5 w-5 text-gray-400 mt-0.5" />
                  <span className="text-gray-400">
                    Av. Paulista, 1000, São Paulo - SP, 01310-100
                  </span>
                </li>
                <li className="flex items-center space-x-3">
                  <Phone className="h-5 w-5 text-gray-400" />
                  <span className="text-gray-400">(11) 4002-8922</span>
                </li>
                <li className="flex items-center space-x-3">
                  <Mail className="h-5 w-5 text-gray-400" />
                  <span className="text-gray-400">
                    contato@limpanome.com.br
                  </span>
                </li>
              </ul>
            </div>

            <div>
              <h3 className="text-xl font-bold mb-4">Fale Conosco</h3>
              <div className="space-y-4">
                <Input
                  placeholder="Nome"
                  className="bg-gray-800 border-gray-700"
                />
                <Input
                  placeholder="Telefone"
                  className="bg-gray-800 border-gray-700"
                />
                <Textarea
                  placeholder="Mensagem"
                  className="bg-gray-800 border-gray-700"
                  rows={3}
                />
                <Button className="bg-orange-500 hover:bg-orange-600 text-white w-full">
                  Enviar Mensagem
                </Button>
              </div>
            </div>
          </div>

          <div className="border-t border-gray-800 pt-8">
            <div className="flex flex-col md:flex-row justify-between items-center">
              <div className="text-gray-400 text-sm mb-4 md:mb-0">
                © 2023 Limpa Nome SPC e SERASA. Todos os direitos reservados.
                CNPJ: 12.345.678/0001-90
              </div>
              <div className="text-gray-400 text-sm">
                Desenvolvido por{" "}
                <a href="#" className="text-orange-500 hover:text-orange-400">
                  Agência Web
                </a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  );
}
