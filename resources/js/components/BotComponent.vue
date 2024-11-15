<template>
    <div>
      <img v-if="qrCode" :src="qrCode" alt="QR Code do WhatsApp" />
      <p v-else>Carregando QR Code...</p>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        qrCode: null,
      };
    },
    mounted() {
      this.fetchQRCode();
    },
    methods: {
      async fetchQRCode() {
        try {
          const response = await fetch('http://localhost:3000/qr');
          const data = await response.json();
          this.qrCode = data.qrCode;
        } catch (error) {
          console.error('Erro ao buscar QR code:', error);
        }
      },
    },
  };
  </script>
