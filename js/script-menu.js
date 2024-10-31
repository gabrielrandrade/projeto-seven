document.getElementById('btnPerfil').addEventListener('click', function () {
    document.getElementById('btnPerfil').style.display = 'none';
    document.getElementById('btnClose').style.display = 'inline';
    document.getElementById('menu').style.display = 'flex';
});

document.getElementById('btnClose').addEventListener('click', function () {
    document.getElementById('menu').style.display = 'none';
    document.getElementById('btnClose').style.display = 'none';
    document.getElementById('btnPerfil').style.display = 'inline';
});