const express = require('express');
const { create } = require('@wppconnect-team/wppconnect');
const wppconnect = require('@wppconnect-team/wppconnect');
const QRCode = require('qrcode');
const app = express();
const PORT = 3000;
let qrCodeCache; // Variável para armazenar o QR code gerado
let sessionStatus = 'disconnected'; // Status inicial da sessão

let client; // Variável para armazenar a instância do cliente


// Endpoint para iniciar a sessão
app.get('/start-session', (req, res) => {
    create({
        session: 'sessionName',
        statusFind: (statusSession, session) => {
            console.log('Status da Sessão:', statusSession);
            sessionStatus = statusSession; // Atualiza o status da sessão globalmente
        },
        catchQR: (base64Qrimg) => {
            console.log('QR Code gerado');
            qrCodeCache = base64Qrimg; // Armazena o QR Code base64
        },
        autoClose: 60000,
    })
        .then((clientInstance) => {
            client = clientInstance;
            start(client);
        })
        .catch((error) => console.error('Erro ao iniciar sessão:', error));

    // Responde imediatamente, mesmo que a inicialização ainda esteja em andamento
    res.status(200).json({ message: 'Sessão iniciando em segundo plano.' });
});

// Endpoint para obter o status da sessão
app.get('/session-status', (req, res) => {
    res.status(200).json({ status: sessionStatus });
});

// Endpoint para deslogar
app.get('/logout', async (req, res) => {
    if (!client) {
        return res.status(400).send('Nenhuma sessão ativa.');
    }

    try {
        await client.logout();
        client = null; // Reseta o cliente após logout
        res.status(200).send('Sessão encerrada com sucesso!');
    } catch (error) {
        console.error('Erro ao encerrar a sessão:', error);
        res.status(500).send('Erro ao encerrar a sessão.');
    }
});

// Função para obter o QR Code
app.get('/whatsapp/qr', (req, res) => {
    if (!qrCodeCache) {
        return res.status(202).send('QR code ainda está sendo processado.');
    }
    // Serve o QR code diretamente do cache
    res.status(200).send(`<img id="qrcode" src="${qrCodeCache}" alt="QR Code">`);
});


function start(client) {
    client.onMessage((message) => {
      if (message.body === 'Oi') {
        client
          .sendText(message.from, 'Olá, somos a nexo!')
          .then((result) => {
            console.log('Result: ', result); //return object success
          })
          .catch((erro) => {
            console.error('Error when sending: ', erro); //return object error
          });
      }
    });
  }


app.listen(PORT, () => console.log(`API rodando em http://localhost:${PORT}`));
