<template>
    <div>
      <img
        src="/logo.png"
        alt="Logo"
        :class="size"
        id="logoButton"
        @click="toggleDropdown"
      />
        <!-- Conteúdo do menu dropdown -->
        <div class="dropdown-menu fade-in hidden absolute right-10 top-10 mt-2 w-56 bg-white border rounded-lg shadow-lg" id="dropdownMenu">
                <ul class="py-2">
                    <li>
                        <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Meu Perfil</a>
                    </li>
                    <li>
                        <a href="{{ route('settings.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Configurações</a>
                    </li>
                    <li>
                        <a :href="this.route('login.logout')" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                    </li>
                </ul>
            </div>
      </div>
  </template>

  <script>
  export default {
    props: {
      size: String,
      logoutUrl: String,
    },
    data() {
      return {
        logoUrl: ('/public/logo.png'), // Caminho correto para a imagem
      };
    },
    mounted() {


      // Seleciona elementos do DOM
      this.logoButton = document.getElementById("logoButton");
      this.dropdownMenu = document.getElementById("dropdownMenu");

      // Adiciona listener para fechar o dropdown ao clicar fora
      document.addEventListener("click", this.closeDropdown);
    },
    beforeDestroy() {
      // Remove o listener ao destruir o componente
      document.removeEventListener("click", this.closeDropdown);
    },

    methods: {
      toggleDropdown() {
        // Alterna a visibilidade do dropdown
        this.dropdownMenu.style.display =
          this.dropdownMenu.style.display === "none" || this.dropdownMenu.style.display === ""
            ? "block"
            : "none";
      },
      closeDropdown(event) {
        // Fecha o dropdown se o clique for fora do menu
        if (
          !this.logoButton.contains(event.target) &&
          !this.dropdownMenu.contains(event.target)
        ) {
          this.dropdownMenu.style.display = "none";
        }
      },
    },
  };
  </script>
