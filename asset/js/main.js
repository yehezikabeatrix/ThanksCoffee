let lengkungan = document.getElementById('lengkungan')
let daun_belakang_kanan = document.getElementById('daun_belakang_kanan')
let daun_belakang_kiri = document.getElementById('daun_belakang_kiri')
let podium = document.getElementById('podium')
let kopikanan = document.getElementById('kopikanan')
let kopitengah = document.getElementById('kopitengah')
let kopikiri = document.getElementById('kopikiri')
let coffee_beans = document.getElementById('coffee_beans')
let spoon = document.getElementById('spoon')
let bowl = document.getElementById('bowl')
let latar_bawah = document.getElementById('latar_bawah')
let header = document.querySelector('header');

window.addEventListener('scroll', function(){
    let value = window.scrollY;
    lengkungan.style.top = value * 0.5 + 'px';
    daun_belakang_kanan.style.top = value * 0.1 + 'px';
    daun_belakang_kiri.style.top = value * 0.1 + 'px';
    podium.style.top = value * 0 + 'px';
    kopikanan.style.top = value * 0 + 'px';
    kopikiri.style.top = value * 0 + 'px';
    kopitengah.style.top = value * 0 + 'px';
    coffee_beans.style.top = value * 0 + 'px';
    latar_bawah.style.top = value * 0 + 'px';
    header.style.top = value * 0.5 + 'px';
    daun_kanan.style.marginRight = value * -2 + 'px';
    daun_kanan.style.marginTop = value * 1 + 'px';
    daun_kiri.style.marginRight = value * 2 + 'px';
    daun_kiri.style.marginTop = value * 1 + 'px';
})

function imgSlider(anything){
    document.querySelector('.kategori-coffee').src = anything;
}

function changeColor(color){
    const bg = document.querySelector('.bg');
    bg.style.background = color;
}

function opsiKategori(anything){
    document.getElementById('kategoriName').innerHTML = anything;
}

function opsiKategoriText(anything){
    document.getElementById('kategori-text').innerHTML = anything;
}

function opsiTotalMenu(anything){
    document.getElementById('total-menu').innerHTML = anything;
}

function opsiBestMenu(anything){
    document.getElementById('best-menu').innerHTML = anything;
}