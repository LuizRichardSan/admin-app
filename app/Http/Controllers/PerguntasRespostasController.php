<?php

namespace App\Http\Controllers;

use App\Models\PerguntasRespostas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class PerguntasRespostasController extends Controller
{

    public function iniciarBot() {
        // Realiza uma requisição ao backend Node.js para obter o QR code
        $response = Http::get('http://localhost:3000/whatsapp/qr');
        return response()->json(['qrcodeUrl' => $response->body() ?? null]);
        }

        public function showQRCode()
        {
            if (request()->ajax()) {
                $response = Http::get('http://localhost:3000/whatsapp/qr');

                if ($response->failed()) {
                    return 'Processando QR code...';  // Retorna uma mensagem caso o QR code ainda não esteja disponível
                }

                // Retorna o HTML do QR code diretamente
                return $response->body();
            }

            // Passa o conteúdo HTML inicial para a view
            return view('botWpp.index', ['qrCodeHtml' => 'Carregando QR code...']);
        }

        public function iniciarSessao()
        {
            try {
                // Faz a chamada assíncrona ao Node.js
                Http::get('http://localhost:3000/start-session');
                // Retorna resposta imediata ao frontend
                return response()->json(['message' => 'Sessão iniciada em segundo plano.']);
            } catch (\Exception $e) {
                return response()->json(['message' => 'Erro ao iniciar sessão.'], 500);
            }
        }

    public function deslogar()
    {
        $response = Http::get('http://localhost:3000/logout');
        return response()->json(['message' => $response->body()]);
    }

    public function fetchQRCode()
{
    $response = Http::get('http://localhost:3000/whatsapp/qr');

    if ($response->failed()) {
        return 'Processando QR code...';  // Retorna uma mensagem caso o QR code ainda não esteja disponível
    }

    // Retorna o HTML do QR code diretamente
    return $response->body();
}

public function verificarStatus()
{
    $response = Http::get('http://localhost:3000/session-status');

    if ($response->successful()) {
        $status = $response->json()['status'];

        if ($status === 'isLogged' || $status === 'inChat') {
            return response()->json(['status' => 'connected']);
        }

        return response()->json(['status' => $status]);
    }

    return response()->json(['status' => 'erro'], 500);
}

 public function TelaAdmin() {
    return view('botWpp.admin.index');
 }
}
