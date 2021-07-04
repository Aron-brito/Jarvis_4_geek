
function iniciaModal(modalID){
    const modal = document.getElementById(modalID);
    if(modal){
        modal.classList.add('mostrar');
        modal.addEventListener('click', function(e){
            if(e.target.id == modalID || e.target.className == 'fechar'){
                modal.classList.remove('mostrar');
            }           
        })
    }
}

const botaoVisualizar = document.querySelector('.botaoVisualizar');
botaoVisualizar.addEventListener('click', function(){
    iniciaModal('modal-visualizar');
});

