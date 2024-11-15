const express = require('express');
const { create } = require('@wppconnect-team/wppconnect');
const wppconnect = require('@wppconnect-team/wppconnect');
const QRCode = require('qrcode');
const app = express();
const PORT = 3000;
let qrCodeCache; // Variável para armazenar o QR code gerado


let client; // Variável para armazenar a instância do cliente


// Endpoint para iniciar a sessão
app.get('/start-session', async (req, res) => {
    try {
        client = await wppconnect.create({
            session: 'sessionName',
            catchQR: (base64Qrimg) => {
                console.log('QR Code gerado');
                qrCodeCache = base64Qrimg; // Armazena o QR Code base64 diretamente
            },
            autoClose: 60000,
        })
        start(client); // Chama a função de inicialização com a instância atualizada
        res.status(200).json({ message: 'Sessão iniciada com sucesso!' });
    } catch (error) {
        res.status(500).send('Erro ao iniciar a sessão: ' + error);
    }
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
    if (!qrCodeCache && !client) {
        return res.status(500).send('QR Code ainda não gerado.');
    } else if (client) {
        return res.send(`
        <div>
`);;
    }
    const qrImage = `<img id="qrcode" src="${qrCodeCache}" alt="QR Code">`;
    res.send(`
                ${qrImage}
    `);
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
