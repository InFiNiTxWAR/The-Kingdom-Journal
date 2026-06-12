const chat = document.getElementById("chat");
const input = document.getElementById("pergunta");

function adicionarMensagem(remetente, mensagem, tipo = "light") {

    chat.innerHTML += `
        <div class="card mb-2 border-${tipo}">
            <div class="card-body p-2">
                <strong>${remetente}:</strong><br>
                ${mensagem}
            </div>
        </div>
    `;

    chat.scrollTop = chat.scrollHeight;
}

async function enviarPergunta() {

    const pergunta = input.value.trim();

    if (!pergunta) return;

    adicionarMensagem("Você", pergunta, "primary");

    input.value = "";

    try {

        const response = await fetch("chat.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                pergunta: pergunta
            })
        });

        const data = await response.json();

        console.log(data);

        if (!response.ok) {

            adicionarMensagem(
                "Assistente",
                data.erro || "Erro ao consultar a API.",
                "danger"
            );

            return;
        }

        adicionarMensagem(
            "Assistente",
            data.resposta,
            "success"
        );

    } catch (erro) {

        console.log(data);

adicionarMensagem(
    "Assistente",
    JSON.stringify(data, null, 2),
    "success"
);
    }
}

input.addEventListener("keydown", function(e) {

    if (e.key === "Enter") {
        enviarPergunta();
    }

});

window.onload = () => {

    adicionarMensagem(
        "Assistente",
        "Olá! 🇬🇧 Sou um assistente especializado no Reino Unido. Pergunte sobre história, cultura, sotaques, turismo ou curiosidades."
    );

};