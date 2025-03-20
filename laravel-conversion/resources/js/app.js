// Importações e configurações do Alpine.js ou outros frameworks JS podem ser adicionadas aqui

// Inicialização do mapa do Brasil
document.addEventListener("DOMContentLoaded", function () {
  // Inicialização do mapa interativo do Brasil
  // Este é um placeholder para a implementação real do mapa

  // Exemplo de como seria a inicialização com uma biblioteca de mapas
  if (document.getElementById("brazil-map")) {
    initBrazilMap();
  }
});

// Função para inicializar o mapa do Brasil
function initBrazilMap() {
  console.log("Mapa do Brasil inicializado");

  // Aqui seria implementada a lógica para criar o mapa interativo
  // Utilizando bibliotecas como jVectorMap, Leaflet, ou outra solução

  // Exemplo de estados para demonstração
  const states = [
    "Acre",
    "Alagoas",
    "Amapá",
    "Amazonas",
    "Bahia",
    "Ceará",
    "Distrito Federal",
    "Espírito Santo",
    "Goiás",
    "Maranhão",
    "Mato Grosso",
    "Mato Grosso do Sul",
    "Minas Gerais",
    "Pará",
    "Paraíba",
    "Paraná",
    "Pernambuco",
    "Piauí",
    "Rio de Janeiro",
    "Rio Grande do Norte",
    "Rio Grande do Sul",
    "Rondônia",
    "Roraima",
    "Santa Catarina",
    "São Paulo",
    "Sergipe",
    "Tocantins",
  ];

  // Criação de elementos temporários para demonstração
  const mapContainer = document.getElementById("brazil-map");

  if (mapContainer) {
    const statesList = document.createElement("div");
    statesList.className = "grid grid-cols-2 md:grid-cols-3 gap-2";

    states.forEach((state) => {
      const stateButton = document.createElement("button");
      stateButton.className =
        "bg-white hover:bg-blue-50 text-blue-800 font-medium py-2 px-4 rounded border border-blue-200 transition-colors";
      stateButton.textContent = state;
      stateButton.onclick = function () {
        showStateInfo(state);
      };

      statesList.appendChild(stateButton);
    });

    mapContainer.appendChild(statesList);
  }
}

// Função para mostrar informações do estado
function showStateInfo(state) {
  const stateInfo = document.getElementById("state-info");
  const stateName = document.getElementById("state-name");
  const stateDescription = document.getElementById("state-description");
  const stateLink = document.getElementById("state-link");

  if (!stateInfo || !stateName || !stateDescription || !stateLink) return;

  // Dados do estado (exemplo)
  const stateData = {
    name: state,
    description: `Atendemos em todo o estado de ${state} com escritórios nas principais cidades. Entre em contato para conhecer nossos serviços personalizados para sua região.`,
    link: `/atendimento/${state.toLowerCase().replace(" ", "-")}`,
  };

  stateName.textContent = stateData.name;
  stateDescription.textContent = stateData.description;
  stateLink.href = stateData.link;
  stateLink.setAttribute("title", `Ver detalhes de atendimento em ${state}`);

  stateInfo.classList.remove("hidden");
}
