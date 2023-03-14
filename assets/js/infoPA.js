let ip_button = document.getElementById('buttonIP');
let ia_button = document.getElementById('buttonIA');
let ip_content = document.getElementById('ip-content');
let ia_content = document.getElementById('ia-content')
ip_button.addEventListener('click', toggleInfoip);
ia_button.addEventListener('click', toggleInfoia);

function toggleInfoip(){
    ip_content.classList.remove('d-none');
    ia_content.classList.add('d-none');
}

function toggleInfoia(){
    ip_content.classList.add('d-none');
    ia_content.classList.remove('d-none');
}