// SIDEBAR UPDATE
document.querySelectorAll('.edit-product').forEach(button => {
    button.addEventListener('click', function() {
        document.getElementById('overlay').classList.remove('hidden');

        const productId = this.dataset.productId;
        const productName = this.dataset.productName;
        const productQuantity = this.dataset.productQuantity;
        const productPrice = this.dataset.productPrice;

        // Preenche o formulário com os dados do produto
        document.getElementById('name').value = productName;
        document.getElementById('quantity').value = productQuantity;
        document.getElementById('price').value = productPrice;

        // Altera a ação do formulário para a rota de atualização
        document.getElementById('product-form').action = `/products/${productId}`;
        document.getElementById('form-method').value = 'PUT';  // Simula o método PUT

        // Altera o botão para "Atualizar"
        document.querySelector('#product-form button[type="submit"]').textContent = 'Atualizar';

        // Abre o sidebar
        document.getElementById('sidebar').style.width = '400px';
    });
});

// SIDEBAR CREATE
document.getElementById('open-sidebar').addEventListener('click', function() {
    document.getElementById('name').value = '';
    document.getElementById('quantity').value = '';
    document.getElementById('price').value = '';

    document.getElementById('sidebar').style.width = '400px';
    document.getElementById('overlay').classList.remove('hidden');
    document.getElementById('product-form').action = '/products/create'; // Substitua com a rota correta
    document.querySelector('#product-form button[type="submit"]').textContent = 'Criar';
});

document.getElementById('overlay').addEventListener('click', function() {
document.getElementById('sidebar').style.width = '0';
this.classList.add('hidden');
});

document.getElementById('close-sidebar').addEventListener('click', function() {
    document.getElementById('sidebar').style.width = '0';
    document.getElementById('overlay').classList.add('hidden');
});

// PRICE FORMAT
document.getElementById('price').addEventListener('input', function(e) {
    let value = e.target.value;

    // Remove qualquer caractere que não seja número ou vírgula
    value = value.replace(/[^\d,]/g, '');

    // Formata para adicionar a vírgula de separação decimal
    if (value.includes(',')) {
        let parts = value.split(',');
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        value = `${parts[0]},${parts[1].substring(0, 2)}`;
    } else {
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    // Adiciona o "R$" no final
    e.target.value = `R$ ${value}`;
})
