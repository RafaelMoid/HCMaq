// Obtenha todos os elementos com a classe "produto"
const produtos = document.getElementsByClassName('produto');

// Para cada elemento "produto"
for (let i = 0; i < produtos.length; i++) {
  // Adicione um ouvinte de evento de hover
  produtos[i].addEventListener('mouseenter', function() {
    // Encontre o elemento "hover-produto" dentro do elemento "produto"
    const hoverProduto = this.querySelector('.hover-produto');
    // Adicione a classe "produto-active" ao elemento "hover-produto"
    hoverProduto.classList.add('produto-active');
  });

  // Adicione um ouvinte de evento de saída do hover
  produtos[i].addEventListener('mouseleave', function() {
    // Encontre o elemento "hover-produto" dentro do elemento "produto"
    const hoverProduto = this.querySelector('.hover-produto');
    // Remova a classe "produto-active" do elemento "hover-produto"
    hoverProduto.classList.remove('produto-active');
  });
}
