import { useState } from "react";
import { MapPin } from "lucide-react";

interface BrazilState {
  name: string;
  abbreviation: string;
  region: string;
  coordinates: { lat: number; lng: number };
}

export default function BrazilStatesMap() {
  const [selectedState, setSelectedState] = useState<BrazilState | null>(null);

  const brazilStates: BrazilState[] = [
    {
      name: "Acre",
      abbreviation: "AC",
      region: "Norte",
      coordinates: { lat: -9.0238, lng: -70.812 },
    },
    {
      name: "Alagoas",
      abbreviation: "AL",
      region: "Nordeste",
      coordinates: { lat: -9.5713, lng: -36.782 },
    },
    {
      name: "Amapá",
      abbreviation: "AP",
      region: "Norte",
      coordinates: { lat: 0.902, lng: -52.003 },
    },
    {
      name: "Amazonas",
      abbreviation: "AM",
      region: "Norte",
      coordinates: { lat: -3.4168, lng: -65.8561 },
    },
    {
      name: "Bahia",
      abbreviation: "BA",
      region: "Nordeste",
      coordinates: { lat: -12.9718, lng: -38.5011 },
    },
    {
      name: "Ceará",
      abbreviation: "CE",
      region: "Nordeste",
      coordinates: { lat: -3.7172, lng: -38.5433 },
    },
    {
      name: "Distrito Federal",
      abbreviation: "DF",
      region: "Centro-Oeste",
      coordinates: { lat: -15.7801, lng: -47.9292 },
    },
    {
      name: "Espírito Santo",
      abbreviation: "ES",
      region: "Sudeste",
      coordinates: { lat: -20.3155, lng: -40.3128 },
    },
    {
      name: "Goiás",
      abbreviation: "GO",
      region: "Centro-Oeste",
      coordinates: { lat: -16.6864, lng: -49.2643 },
    },
    {
      name: "Maranhão",
      abbreviation: "MA",
      region: "Nordeste",
      coordinates: { lat: -2.5297, lng: -44.3028 },
    },
    {
      name: "Mato Grosso",
      abbreviation: "MT",
      region: "Centro-Oeste",
      coordinates: { lat: -15.601, lng: -56.0974 },
    },
    {
      name: "Mato Grosso do Sul",
      abbreviation: "MS",
      region: "Centro-Oeste",
      coordinates: { lat: -20.4428, lng: -54.6464 },
    },
    {
      name: "Minas Gerais",
      abbreviation: "MG",
      region: "Sudeste",
      coordinates: { lat: -19.9102, lng: -43.9266 },
    },
    {
      name: "Pará",
      abbreviation: "PA",
      region: "Norte",
      coordinates: { lat: -1.4554, lng: -48.4898 },
    },
    {
      name: "Paraíba",
      abbreviation: "PB",
      region: "Nordeste",
      coordinates: { lat: -7.115, lng: -34.8631 },
    },
    {
      name: "Paraná",
      abbreviation: "PR",
      region: "Sul",
      coordinates: { lat: -25.4195, lng: -49.2646 },
    },
    {
      name: "Pernambuco",
      abbreviation: "PE",
      region: "Nordeste",
      coordinates: { lat: -8.0476, lng: -34.877 },
    },
    {
      name: "Piauí",
      abbreviation: "PI",
      region: "Nordeste",
      coordinates: { lat: -5.0919, lng: -42.8034 },
    },
    {
      name: "Rio de Janeiro",
      abbreviation: "RJ",
      region: "Sudeste",
      coordinates: { lat: -22.9068, lng: -43.1729 },
    },
    {
      name: "Rio Grande do Norte",
      abbreviation: "RN",
      region: "Nordeste",
      coordinates: { lat: -5.7945, lng: -35.211 },
    },
    {
      name: "Rio Grande do Sul",
      abbreviation: "RS",
      region: "Sul",
      coordinates: { lat: -30.0346, lng: -51.2177 },
    },
    {
      name: "Rondônia",
      abbreviation: "RO",
      region: "Norte",
      coordinates: { lat: -8.7608, lng: -63.9039 },
    },
    {
      name: "Roraima",
      abbreviation: "RR",
      region: "Norte",
      coordinates: { lat: 2.8198, lng: -60.6714 },
    },
    {
      name: "Santa Catarina",
      abbreviation: "SC",
      region: "Sul",
      coordinates: { lat: -27.5954, lng: -48.5665 },
    },
    {
      name: "São Paulo",
      abbreviation: "SP",
      region: "Sudeste",
      coordinates: { lat: -23.5505, lng: -46.6333 },
    },
    {
      name: "Sergipe",
      abbreviation: "SE",
      region: "Nordeste",
      coordinates: { lat: -10.9472, lng: -37.0731 },
    },
    {
      name: "Tocantins",
      abbreviation: "TO",
      region: "Norte",
      coordinates: { lat: -10.1753, lng: -48.2982 },
    },
  ];

  // Group states by region
  const regions = {
    Norte: brazilStates.filter((state) => state.region === "Norte"),
    Nordeste: brazilStates.filter((state) => state.region === "Nordeste"),
    "Centro-Oeste": brazilStates.filter(
      (state) => state.region === "Centro-Oeste",
    ),
    Sudeste: brazilStates.filter((state) => state.region === "Sudeste"),
    Sul: brazilStates.filter((state) => state.region === "Sul"),
  };

  const handleStateClick = (state: BrazilState) => {
    setSelectedState(state);
  };

  return (
    <div className="w-full">
      <div className="rounded-lg overflow-hidden shadow-lg mb-8">
        <div className="aspect-[16/9] bg-blue-50 relative">
          {selectedState ? (
            <div className="w-full h-full flex flex-col items-center justify-center p-6">
              <div
                className="absolute inset-0 bg-contain bg-center bg-no-repeat opacity-20"
                style={{
                  backgroundImage:
                    "url('https://images.unsplash.com/photo-1554844344-c34ea04258c4?w=1200&q=80')",
                }}
              ></div>
              <div className="bg-white p-6 rounded-lg shadow-lg z-10 max-w-md w-full text-center">
                <h3 className="text-2xl font-bold text-blue-800 mb-2">
                  {selectedState.name}
                </h3>
                <p className="text-gray-600 mb-2">
                  Região: {selectedState.region}
                </p>
                <p className="text-gray-600 mb-4">
                  Sigla: {selectedState.abbreviation}
                </p>
                <div className="inline-block bg-blue-100 p-3 rounded-full mb-4">
                  <MapPin className="h-8 w-8 text-blue-600" />
                </div>
                <p className="text-gray-700">
                  Atendimento disponível em todo o estado de{" "}
                  {selectedState.name}. Entre em contato com nossa central para
                  mais informações.
                </p>
              </div>
            </div>
          ) : (
            <div className="w-full h-full flex items-center justify-center bg-blue-50 p-6">
              <div className="text-center max-w-md">
                <MapPin className="h-16 w-16 mx-auto mb-4 text-blue-600" />
                <h3 className="text-xl font-bold text-gray-800 mb-2">
                  Selecione um estado
                </h3>
                <p className="text-gray-600">
                  Clique em um dos 27 estados brasileiros para visualizar
                  informações de atendimento na região.
                </p>
              </div>
            </div>
          )}
        </div>
      </div>

      <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
        {Object.entries(regions).map(([regionName, states]) => (
          <div key={regionName} className="space-y-4">
            <h3 className="font-bold text-blue-800">{regionName}</h3>
            {states.map((state) => (
              <div
                key={state.abbreviation}
                onClick={() => handleStateClick(state)}
                className={`flex items-center space-x-2 p-2 rounded-md cursor-pointer transition-all duration-200 ${selectedState?.abbreviation === state.abbreviation ? "bg-blue-100 text-blue-800 font-medium" : "hover:bg-gray-100"}`}
              >
                <MapPin className="h-4 w-4 text-blue-600" />
                <span>
                  {state.name} ({state.abbreviation})
                </span>
              </div>
            ))}
          </div>
        ))}
      </div>
    </div>
  );
}
