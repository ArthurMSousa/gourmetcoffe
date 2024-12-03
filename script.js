const dinheiroRadio = document.getElementById('dinheiro');
const trocoDiv = document.getElementById('troco');
const formOrder = document.querySelector('#order form');
const successMessage = document.getElementById('success');

dinheiroRadio.addEventListener('change', () => {
    trocoDiv.style.display = 'block';
});

document.getElementById('cartao').addEventListener('change', () => {
    trocoDiv.style.display = 'none';
});

formOrder.addEventListener('submit', (event) => {
    event.preventDefault();
    successMessage.style.display = 'block';
    formOrder.style.display = 'none';
});
