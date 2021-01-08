const $openButton = document.getElementById('js-open_button');
const $closeButton = document.getElementById('close_button');
const $menu = document.querySelectorAll('.header_right ul');

console.log($closeButton);
$openButton.addEventListener('click',showMenu); 
$closeButton.addEventListener('click',hideMenu); 

function showMenu() {
  $menu[0].classList.add('open');
}
function hideMenu() {
  $menu[0].classList.remove('open');
}