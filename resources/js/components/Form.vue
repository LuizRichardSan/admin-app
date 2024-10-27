<template>
    <div class="flex items-center justify-center min-h-screen bg-gray-100 p-4">
  
      <!-- Modal surrounding the login form -->
      <div class="bg-white shadow-xl rounded-lg p-8 max-w-md w-full">
        <h2 class="text-2xl font-bold text-gray-700 mb-6 text-center">Login</h2>
  
        <form method="POST" :action="this.route('login.store')">
          <!-- Name Field -->
          <div class="mb-2">
            <label for="name" class="block text-gray-700">Usuário</label>
            <input id="name" type="text" name="name"
              class="w-full bg-white p-3 mt-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-700">
          </div>
  
          <!-- Password Field -->
          <div class="mb-6">
            <label for="password" class="block text-gray-700">Senha</label>
            <div class="relative">
              <input 
                :type="passwordVisible ? 'text' : 'password'"
                id="password"
                name="password"
                class="w-full bg-white p-3 mt-2 text-gray-700 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-700"
              />
              <!-- Ícone do olho para mostrar/esconder senha -->
              <span @click="togglePassword" class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                  <path :d="passwordVisible ? visibleIcon : hiddenIcon" />
                </svg>
              </span>
            </div>
          </div>
  
          <!-- Remember Me -->
          <div class="mb-2 flex items-center">
            <input type="checkbox" name="remember" id="remember" class="mr-2 focus:ring-gray-900">
            <label for="remember" class="text-gray-600">Lembrar-me</label>
          </div>
  
          <!-- Submit Button -->
          <div>
            <button type="submit"
              class="w-full bg-gray-900 text-white p-3 rounded-lg hover:bg-opacity-90 focus:outline-none focus:bg-opacity-50">
              Entrar
            </button>
          </div>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        passwordVisible: false, // controla se a senha está visível ou não
      };
    },
    computed: {
      // Ícone de olho aberto (senha visível)
      visibleIcon() {
        return 'M1 12s4-4 9-4 9 4 9 4-4 4-9 4-9-4-9-4zm9-1a3 3 0 110-6 3 3 0 010 6z';
      },
      // Ícone de olho fechado (senha oculta)
      hiddenIcon() {
        return 'M10 3C6 3 2.73 5.11 1 8c1.73 2.89 5 5 9 5s7.27-2.11 9-5c-1.73-2.89-5-5-9-5zM10 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zM10 5a3 3 0 100 6 3 3 0 000-6z';
      },
    },
    methods: {
      // Alterna entre mostrar e ocultar a senha
      togglePassword() {
        this.passwordVisible = !this.passwordVisible;
      },
    },
  };
  </script>
  
  <style scoped>
  /* Estilos adicionais, se necessário */
  </style>
  