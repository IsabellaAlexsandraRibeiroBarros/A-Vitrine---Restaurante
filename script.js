document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("modalUnificado");
  const fechar = document.getElementById("fecharModal");
  const titulo = document.getElementById("modalTitulo");
  const camposDinamicos = document.getElementById("camposDinamicos");
  const form = document.getElementById("formModal");

  // ===== CAMPOS PARA CADA PÁGINA =====
  const camposPorPagina = {
    "gerenciar-pratos.html": [
      { label: "ID do Prato", tipo: "number", id: "idPrato" },
      { label: "Nome do Prato", tipo: "text", id: "nomePrato" },
      { label: "Descrição", tipo: "textarea", id: "descricao" },
      { label: "Valor (R$)", tipo: "number", id: "valor", step: "0.01" },
      { label: "Composição (Ingredientes e Quantidades)", tipo: "textarea", id: "composicao" }
    ],

    "gerenciar-mesas.html": [
      { label: "ID da Mesa", tipo: "number", id: "idMesa" },
      { label: "Número da Mesa", tipo: "text", id: "numeroMesa" },
      { label: "Capacidade", tipo: "number", id: "capacidade" },
      { label: "Status", tipo: "text", id: "statusMesa" }
    ],

    "gerenciar-clientes.html": [
      { label: "ID do Cliente", tipo: "number", id: "idCliente" },
      { label: "Nome do Cliente", tipo: "text", id: "nomeCliente" },
      { label: "Telefone", tipo: "text", id: "telefone" },
      { label: "Email", tipo: "email", id: "email" },
      { label: "Mesa Associada", tipo: "text", id: "mesa" }
    ],

    "gerenciar-funcionarios.html": [
      { label: "ID do Funcionário", tipo: "number", id: "idFuncionario" },
      { label: "Nome do Funcionário", tipo: "text", id: "nomeFuncionario" },
      { label: "Cargo", tipo: "text", id: "cargo" },
      { label: "Email", tipo: "email", id: "email" },
      { label: "Telefone", tipo: "text", id: "telefone" }
    ],

    "gerenciar-ingredientes.html": [
      { label: "ID do Ingrediente", tipo: "number", id: "idIngrediente" },
      { label: "Nome do Ingrediente", tipo: "text", id: "nomeIngrediente" },
      { label: "Quantidade", tipo: "number", id: "quantidade" },
      { label: "Unidade", tipo: "text", id: "unidade" },
      { label: "Valor Unitário (R$)", tipo: "number", id: "valorUnitario", step: "0.01" }
    ],

    "gerenciar-estoque.html": [
      { label: "ID do Item", tipo: "number", id: "idItem" },
      { label: "Item", tipo: "text", id: "item" },
      { label: "Quantidade", tipo: "number", id: "quantidade" },
      { label: "Unidade", tipo: "text", id: "unidade" },
      { label: "Status", tipo: "text", id: "statusEstoque" }
    ],

    "gerenciar-pedidos.html": [
      { label: "ID do Pedido", tipo: "number", id: "idPedido" },
      { label: "ID da Mesa", tipo: "number", id: "idMesa" },
      { label: "ID do Cliente", tipo: "number", id: "idCliente" },
      { label: "Itens do Pedido (ex: 2x Pappardelle)", tipo: "textarea", id: "itens" },
      { label: "Valor Total (R$)", tipo: "number", id: "valorTotal", step: "0.01" },
      { label: "Status do Pedido (ex: Em preparo, Servido)", tipo: "text", id: "statusPedido" }
    ]
  };

  // ===== FUNÇÃO PARA GERAR CAMPOS DO MODAL =====
  function gerarCampos() {
    camposDinamicos.innerHTML = "";
    const paginaAtual = window.location.pathname.split("/").pop();
    const campos = camposPorPagina[paginaAtual];

    if (!campos) return;

    campos.forEach(c => {
      const label = document.createElement("label");
      label.textContent = c.label;
      camposDinamicos.appendChild(label);

      if (c.tipo === "textarea") {
        const textarea = document.createElement("textarea");
        textarea.id = c.id;
        camposDinamicos.appendChild(textarea);
      } else {
        const input = document.createElement("input");
        input.type = c.tipo;
        input.id = c.id;
        if (c.step) input.step = c.step;
        camposDinamicos.appendChild(input);
      }
    });
  }

  // ===== BOTÕES (ADICIONAR / EDITAR / REMOVER) =====
  const btnAdicionar = document.querySelector("button[id^='adicionar']");
  const btnEditar = document.querySelector("button[id^='editar']");
  const btnRemover = document.querySelector("button[id^='remover']");

  if (btnAdicionar) {
    btnAdicionar.addEventListener("click", () => {
      titulo.textContent = btnAdicionar.textContent;
      gerarCampos();
      modal.style.display = "flex";
    });
  }

  if (btnEditar) {
    btnEditar.addEventListener("click", () => {
      titulo.textContent = btnEditar.textContent;
      gerarCampos();
      modal.style.display = "flex";
    });
  }

  if (btnRemover) {
    btnRemover.addEventListener("click", () => {
      titulo.textContent = btnRemover.textContent;
      gerarCampos();
      modal.style.display = "flex";
    });
  }

  // ===== FECHAR MODAL =====
  if (fechar) {
    fechar.addEventListener("click", () => {
      modal.style.display = "none";
    });

    window.addEventListener("click", e => {
      if (e.target === modal) modal.style.display = "none";
    });
  }

  // ===== SUBMIT DO FORM =====
  if (form) {
    form.addEventListener("submit", e => {
      e.preventDefault();
      modal.style.display = "none";
      form.reset();
    });
  }
});

// ===== LOGIN SIMBÓLICO (SEM VERIFICAÇÃO) =====
const loginForm = document.getElementById("loginForm");

if (loginForm) {
  loginForm.addEventListener("submit", (e) => {
    e.preventDefault();
    window.location.href = "area-funcionario.html"; 
  });
}
