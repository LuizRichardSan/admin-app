document.querySelectorAll('.edit-category').forEach(button => {
    button.addEventListener('click', function() {
        document.getElementById('overlay').classList.remove('hidden');

        const categoryId = this.dataset.categoryId;
        const categoryName = this.dataset.categoryName;
        const categoryProducts = JSON.parse(this.dataset.categoryProducts);
        const categoryPrice = this.dataset.categoryPrice;
        const categoryImage = this.dataset.categoryImage; // Obter a URL da imagem

        // Preenche o formulário com os dados da categoria
        document.getElementById('name').value = categoryName;
        document.getElementById('price').value = categoryPrice;

        // Marcar os checkboxes dos produtos selecionados
        document.querySelectorAll('input[name="products[]"]').forEach(checkbox => {
            checkbox.checked = categoryProducts.some(product => product.id == checkbox.value);
        });

        // Exibir a imagem atual
        if (categoryImage) {
            document.getElementById('current-cover-image').src = `/storage/${categoryImage}`;
            document.getElementById('current-cover-image').alt = 'Capa da categoria';
        } else {
            document.getElementById('current-cover-image').src = 'https://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cindra/imagens/sem.jpg.gif';
            document.getElementById('current-cover-image').alt = 'Imagem padrão';
        }

        // Altera a ação do formulário para a rota de atualização
        document.getElementById('product-form').action = `/category/${categoryId}`;
        document.getElementById('form-method').value = 'PUT';

        // Altera o botão para "Atualizar"
        document.querySelector('#product-form button[type="submit"]').textContent = 'Atualizar';

        // Abre o sidebar
        document.getElementById('sidebar').style.width = '400px';
    });
});


// SIDEBAR CREATE
document.getElementById('open-sidebar').addEventListener('click', function() {
    document.getElementById('name').value = '';
    document.getElementById('current-cover-image').src = 'https://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cindra/imagens/sem.jpg.gif';

    // Desmarcar todos os checkboxes de produtos
    document.querySelectorAll('input[name="products[]"]').forEach(checkbox => {
        checkbox.checked = false;
    });

    document.getElementById('price').value = '';

    document.getElementById('sidebar').style.width = '400px';
    document.getElementById('overlay').classList.remove('hidden');
    document.getElementById('product-form').action = '/category/store'; // Substitua com a rota correta
    document.querySelector('#product-form button[type="submit"]').textContent = 'Adicionar';
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
