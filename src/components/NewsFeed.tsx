import { useEffect, useState } from "react";
import { Card, CardContent } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import {
  Carousel,
  CarouselContent,
  CarouselItem,
  CarouselNext,
  CarouselPrevious,
} from "@/components/ui/carousel";

interface NewsItem {
  title: string;
  link: string;
  pubDate: string;
  image?: string;
  source: string;
}

export default function NewsFeed() {
  const [news, setNews] = useState<NewsItem[]>([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState<string | null>(null);

  useEffect(() => {
    const fetchNews = async () => {
      try {
        setLoading(true);
        // Using a CORS proxy to fetch from Google News RSS
        const response = await fetch(
          `https://api.allorigins.win/get?url=${encodeURIComponent(
            "https://news.google.com/rss/search?q=limpa+nome&hl=pt-BR&gl=BR&ceid=BR:pt-419",
          )}`,
        );

        if (!response.ok) {
          throw new Error("Failed to fetch news");
        }

        const data = await response.json();
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(data.contents, "text/xml");
        const items = xmlDoc.querySelectorAll("item");

        const newsItems: NewsItem[] = [];

        items.forEach((item, index) => {
          // Take the first 8 items
          if (index < 8) {
            const title = item.querySelector("title")?.textContent || "";
            const link = item.querySelector("link")?.textContent || "";
            const pubDate = item.querySelector("pubDate")?.textContent || "";
            const source =
              item.querySelector("source")?.textContent || "Google News";

            // Generate a relevant image based on the news title
            const imageKeywords = encodeURIComponent(
              title.split(" ").slice(0, 3).join(" "),
            );
            const image = `https://images.unsplash.com/photo-1579546929518-9e396f3cc809?w=500&q=80`;

            newsItems.push({
              title,
              link,
              pubDate: new Date(pubDate).toLocaleDateString("pt-BR"),
              image,
              source,
            });
          }
        });

        setNews(newsItems);
      } catch (err) {
        console.error("Error fetching news:", err);
        setError(
          "Não foi possível carregar as notícias. Usando dados de exemplo.",
        );

        // Fallback data in case the API fails
        setNews([
          {
            title:
              "Novas regras para negativação de consumidores entram em vigor",
            link: "#",
            pubDate: "15/05/2023",
            image:
              "https://images.unsplash.com/photo-1521791055366-0d553872125f?w=500&q=80",
            source: "Notícias Financeiras",
          },
          {
            title:
              "Como o Cadastro Positivo pode ajudar a melhorar seu score de crédito",
            link: "#",
            pubDate: "02/06/2023",
            image:
              "https://images.unsplash.com/photo-1560472355-536de3962603?w=500&q=80",
            source: "Portal Econômico",
          },
          {
            title:
              "Bancos oferecem condições especiais para renegociação de dívidas",
            link: "#",
            pubDate: "20/06/2023",
            image:
              "https://images.unsplash.com/photo-1616803689943-5601631c7fec?w=500&q=80",
            source: "Jornal Financeiro",
          },
          {
            title:
              "Limpa Nome: Programa ajuda milhares a saírem da lista de inadimplentes",
            link: "#",
            pubDate: "25/06/2023",
            image:
              "https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=500&q=80",
            source: "Economia Diária",
          },
          {
            title:
              "Especialistas recomendam negociação de dívidas antes do fim do ano",
            link: "#",
            pubDate: "30/06/2023",
            image:
              "https://images.unsplash.com/photo-1589666564459-93cdd3ab856a?w=500&q=80",
            source: "Finanças Hoje",
          },
          {
            title:
              "Limpa Nome Digital: nova plataforma facilita renegociação online",
            link: "#",
            pubDate: "05/07/2023",
            image:
              "https://images.unsplash.com/photo-1563986768609-322da13575f3?w=500&q=80",
            source: "Tech News",
          },
          {
            title:
              "Consumidores relatam melhora no acesso ao crédito após limpar nome",
            link: "#",
            pubDate: "10/07/2023",
            image:
              "https://images.unsplash.com/photo-1565514020179-026b92b2d70b?w=500&q=80",
            source: "Mercado Financeiro",
          },
          {
            title:
              "Feirão Limpa Nome bate recorde de acordos no primeiro semestre",
            link: "#",
            pubDate: "15/07/2023",
            image:
              "https://images.unsplash.com/photo-1553729459-efe14ef6055d?w=500&q=80",
            source: "Economia Brasil",
          },
        ]);
      } finally {
        setLoading(false);
      }
    };

    fetchNews();
  }, []);

  return (
    <div className="w-full py-10">
      <h2 className="text-2xl font-bold mb-6 text-center">Últimas Notícias</h2>
      {loading ? (
        // Loading skeleton for carousel
        <div className="w-full relative px-12">
          <div className="flex gap-4 overflow-hidden">
            {Array(4)
              .fill(0)
              .map((_, index) => (
                <div
                  key={`loading-${index}`}
                  className="min-w-[300px] flex-shrink-0 overflow-hidden bg-white rounded-lg shadow-md"
                >
                  <div className="h-48 bg-gray-200 animate-pulse"></div>
                  <div className="p-6">
                    <div className="h-4 bg-gray-200 rounded animate-pulse mb-2"></div>
                    <div className="h-8 bg-gray-200 rounded animate-pulse mb-2"></div>
                    <div className="h-4 bg-gray-200 rounded animate-pulse w-1/4"></div>
                  </div>
                </div>
              ))}
          </div>
        </div>
      ) : (
        <Carousel
          opts={{
            align: "start",
            loop: true,
          }}
          className="w-full relative"
        >
          <CarouselContent>
            {news.map((item, index) => (
              <CarouselItem
                key={index}
                className="md:basis-1/2 lg:basis-1/3 xl:basis-1/4"
              >
                <Card className="overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 bg-white h-full">
                  <div className="h-48 relative">
                    <img
                      src={item.image}
                      alt={item.title}
                      className="w-full h-full object-cover"
                    />
                  </div>
                  <CardContent className="p-6">
                    <div className="flex justify-between items-center mb-2">
                      <div className="text-sm text-gray-500">
                        {item.pubDate}
                      </div>
                      <div className="text-xs text-gray-400">{item.source}</div>
                    </div>
                    <h3 className="text-xl font-bold mb-2 line-clamp-2">
                      {item.title}
                    </h3>
                    <a
                      href={item.link}
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <Button
                        variant="link"
                        className="text-blue-600 p-0 h-auto"
                      >
                        Ler mais
                      </Button>
                    </a>
                  </CardContent>
                </Card>
              </CarouselItem>
            ))}
          </CarouselContent>
          <CarouselPrevious className="-left-4 md:-left-6" />
          <CarouselNext className="-right-4 md:-right-6" />
        </Carousel>
      )}
      {error && (
        <div className="text-center text-sm text-gray-500 mt-4">{error}</div>
      )}
    </div>
  );
}
