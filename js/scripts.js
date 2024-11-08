function cpfOuCnpj() {
    const pessoaFisica = document.querySelector('input[name="tipoPessoa"][value="fisica"]').checked;
    const campoCPF = document.getElementById("campoCPF");
    const campoCNPJ = document.getElementById("campoCNPJ");
    const nomeEmpresa = document.getElementById("nomeEmpresa");
    const nomePessoa = document.getElementById("nomePessoa");

    if (pessoaFisica) {
        campoCPF.style.display = "block";
        nomePessoa.style.display = "block"
        campoCNPJ.style.display = "none";
        nomeEmpresa.style.display = "none";
    } else {
        campoCPF.style.display = "none";
        nomePessoa.style.display = "none"
        campoCNPJ.style.display = "block";
        nomeEmpresa.style.display = "block";
    }
}

function atualizarBotao(opcao) {
    document.getElementById('dropdownMenuButton').innerText = opcao;
}
