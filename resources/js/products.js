
document.getElementById('open-sidebar').addEventListener('click', function() {
    document.getElementById('sidebar').style.width = '400px';
    document.getElementById('overlay').classList.remove('hidden');
});

document.getElementById('overlay').addEventListener('click', function() {
document.getElementById('sidebar').style.width = '0';
this.classList.add('hidden');
});

document.getElementById('close-sidebar').addEventListener('click', function() {
    document.getElementById('sidebar').style.width = '0';
    document.getElementById('overlay').classList.add('hidden');
});
