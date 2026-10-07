//cadastro sensores
let sensores = [];

function cadastrarSensor() {
    let sensor = {
        nome: document.getElementById("nome").value,
        tipo: document.getElementById("tipo").value,
        trem: document.getElementById("trem").value,
        rota: document.getElementById("rota").value
    };
    sensores.push(sensor); mostrarSensores();
}



document.addEventListener('DOMContentLoaded', () => {
    const btnAbrir = document.querySelector('.btn-cadastrar-user');
    const formCadastro = document.querySelector('.cadastro-usuario');

    if (btnAbrir && formCadastro) {
        btnAbrir.addEventListener('click', () => {
            formCadastro.classList.toggle('ativo');
        });
    }
});

//cadastro usuário
function validar_usuario() {

    let nome = document.getElementById("nome").value;
    let email = document.getElementById("email").value;
    let senha = document.getElementById("senha").value;

    if (nome == "" || email == "" || senha == "") {
        alert("Preencha todos os campos.");
        return false;
    }

    if (nome.length < 3) {
        alert("O nome deve ter pelo menos 3 caracteres.");
        return false;
    }

    if (!email.includes("@")) {
        alert("Digite um email válido.");
        return false;
    }

    if (senha.length < 8) {
        alert("A senha deve ter pelo menos 8 caracteres.");
        return false;
    }

    return true;
}


// abrir e fechar formulário de cadastro de usuário
document.addEventListener('DOMContentLoaded', () => {

    const btnAbrir = document.querySelector('.btn-cadastrar-user');
    const formCadastro = document.querySelector('.cadastro-usuario');

    if (btnAbrir && formCadastro) {

        btnAbrir.addEventListener('click', () => {
            formCadastro.classList.toggle('ativo');
        });

    }

});