const form = document.querySelector("#form");
const date = document.querySelector("#date");
const resp1 = document.querySelector("#resp1");
const resp2 = document.querySelector("#resp2");
const resp3 = document.querySelector("#resp3");
const resp4 = document.querySelector("#resp4");
const button = document.querySelector(".btn-submit");

//Capturando evento de submit
form.addEventListener("submit", (event) => {
    event.preventDefault();
    checkerInput();
});

//Adicionando erro para o input
function setError(input, msg) {
    const formBox = input.parentElement;
    const span = formBox.querySelector("span");

    formBox.className = "form-box -error";
    span.innerText = msg;
};

//Adicionando sucesso para o input
function setSuccess(input) {
    const formBox = input.parentElement;
    formBox.className = "form-box -success";
};

function checkerInput() {
    const dateValue = date.value;
    const resp1Value = resp1.value;
    const resp2Value = resp2.value;
    const resp3Value = resp3.value;
    const resp4Value = resp4.value;

    //Condições para resposta passar
    if(dateValue === "") {
        setError(date, "Este campo é obrigatório!")
    } else {
        setSuccess(date);
    };

    if(resp1Value === "") {
        setError(resp1, "Este campo é obrigatório!")
    } else {
        setSuccess(resp1);
    };
    
    if(resp2Value === "") {
        setError(resp2, "Este campo é obrigatório!")
    } else {
        setSuccess(resp2);
    };
    
    if(resp3Value === "") {
        setError(resp3, "Este campo é obrigatório!")
    } else {
        setSuccess(resp3);
    };
    
    if(resp4Value === "") {
        setError(resp4, "Este campo é obrigatório!")
    } else {
        setSuccess(resp4);
    };

    //Verificando se todas as respostas passaram
    const formBoxes = form.querySelectorAll('.form-box');
    const formValid = [...formBoxes].every((formBox) => {
        return formBox.className === 'form-box -success';
    })

    if (formValid) {
        let cont = 3;
        button.innerHTML = "<div class='loading'></div>"

        setTimeout(() => {
            button.innerHTML = 'Formulário enviado com sucesso. A página vai ser recarregada!';
            button.style = "background-color: #0b6a46; font-size: 14px"
        }, 3000);

        reloadPage();
    }
}

//Recarregando a página e limpando inputs
function reloadPage() {
    setTimeout(() => {
        location.reload()

        date.value='';
        resp1.value='';
        resp2.value='';
        resp3.value='';
        resp4.value='';
    }, 6000);
}
