
const houses = document.querySelectorAll('.house');
const btnRed = document.getElementById('btn-red');

btnRed.addEventListener('click', function() {
    for(let house of houses){
        house.classList.add('red');
    }
});