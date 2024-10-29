const { create, Client } = require('@wppconnect-team/wppconnect');

// Cria o cliente do WhatsApp
create({
    session: 'sessionName', // Nome da sessão
    multidevice: true, // Habilitar multidevice se necessário
}).then((client) => {
    console.log('Bot iniciado!');

    // Exemplo: Responder a mensagens
    client.onMessage((message) => {
        if (message.body === 'oi') {
            client.sendText(message.from, 'Olá! Como posso ajudar?');
        }
    });
}).catch((error) => {
    console.error('Erro ao iniciar o bot:', error);
});
