import './bootstrap';

const logoButton = document.getElementById("logoButton");
const dropdownMenu = document.getElementById("dropdownMenu");

logoButton.addEventListener('click', function() {
    // Alterna a visibilidade do menu
    if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
        dropdownMenu.style.display = 'block';
    } else {
        dropdownMenu.style.display = 'none';
    }
});

document.addEventListener('click', function(event) {
    if (!logoButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.style.display = 'none';
    }
});