@extends('components.layout')
@section('content')

    <navbar-component></navbar-component>
                          <!-- FIM HEADER -->
<div class="bg-white flex items-center justify-center h-screen">
    <div class="container mx-auto bg-gray-50 shadow-lg rounded-lg flex overflow-hidden max-w-4xl">
        <!-- Tutorial Section -->
        <div class="w-1/2 bg-blue-950 p-6 text-white">
            <h2 class="text-2xl font-semibold mb-4">Como conectar ao WhatsApp</h2>
            <ul class="space-y-3 text-lg">
                <li>1. Clique no botão "Iniciar Sessão" à direita.</li>
                <li>2. Escaneie o QR code que aparecerá usando a câmera do seu celular no app do WhatsApp.</li>
                <li>3. Após o escaneamento, sua sessão será iniciada automaticamente.</li>
            </ul>
        </div>

        <!-- Login Section -->
        <div class="w-1/2 flex flex-col items-center justify-center p-6">
                <button onclick="iniciarSessao()" class="bg-blue-950 hover:bg-blue-900 text-white py-2 px-4 rounded-lg text-lg shadow">
                    Iniciar Sessão
                </button>
        </div>
    </div>

    <!-- Modal -->
    <div id="qrModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center max-w-sm w-full flex items-center justify-center flex-col">
            <h3 class="text-xl font-semibold mb-4">Escaneie o QR Code</h3>
            <div id="qrcodeContainer" class="m-5">
                {!! $qrCodeHtml !!}
            </div>
            <button onclick="fecharModal()" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-lg">
                Fechar
            </button>
        </div>
    </div>
</div>
@endsection

<script>
    function iniciarSessao() {
        fetch('/whatsapp/iniciar')
        .then(response => response.json())
        .then(data => alert(data.message))
        .catch(error => console.error('Erro:', error));
    document.getElementById("qrModal").classList.remove("hidden");
    mostrarQRCode();
}

function fecharModal() {
            document.getElementById("qrModal").classList.add("hidden");
        }

function deslogar() {
    fetch('/logout')
        .then(response => response.json())
        .then(data => alert(data.message))
        .catch(error => console.error('Erro:', error));
}

function mostrarQRCode() {
    const intervalo = setInterval(() => {
        fetch('/whatsapp/fetch-qr') // Usa a mesma rota para AJAX
            .then(response => response.text()) // Recebe a resposta como texto HTML
            .then(html => {
                const qrCodeContainer = document.getElementById('qrcodeContainer');
                qrCodeContainer.innerHTML = html; // Atualiza o modal com o QR code

                // Verifica se o QR code foi carregado, assumindo que a imagem tem a tag <img>
                if (html.includes('<img')) {
                    clearInterval(intervalo); // Para o intervalo se o QR code estiver disponível
                }
            })
            .catch(error => console.error('Erro ao obter QR code:', error));
    }, 10000);  // Tenta atualizar a cada 3 segundos
    }
</script>
