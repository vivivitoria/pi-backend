
function alterarSenha(){
    document.querySelector('#senha-box').style.display = 'block';

    let click = document.querySelector('#btn-senha');
    click.value = 'Concluir';
    click.addEventListener('click', verificaCampos);
}

function verificaCampos(e){
    let newpass = document.getElementById('newpassword').value;
    let passconf = document.getElementById('passconfirmation').value;

    if(newpass !== '' && passconf !== ''){
        if(newpass === passconf){
            document.querySelector('#senha-box').style.display = 'none';
            document.querySelector('#btn-senha').value = 'Senha Alterada';

        }else{
            alert('Digite duas senhas iguais')
        }
    }else{
        alert('Favor preencher corretamente os campos!')
    }
}