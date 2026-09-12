# Taskys

Uma simples solução para organizar suas tarefas.

O Taskys é um projeto individual de lista de tarefas (to-do list), com um front-end em HTML, CSS e JavaScript puro que consome uma API REST feita em Spring Boot para autenticação, listas e tarefas.

## Funcionalidades

- **Login de usuário** com e-mail e senha
- **Listas personalizadas**: criar, editar (renomear) e excluir listas de tarefas
- **Tarefas (cards)**: criar, editar, excluir e marcar como concluída
- Cada tarefa possui título, descrição, data e a lista à qual pertence
- Sessão do usuário mantida via `sessionStorage`
- Interface simples e responsiva, com modais para criação/edição

## Tecnologias

**Front-end**
- HTML5, CSS3 e JavaScript (vanilla, sem frameworks)
- Google Fonts (Schoolbell / Alata)

**Back-end**
- API REST em Spring Boot (Java) — consumida em `http://localhost:8080`
- Repositório: [taskys-api](https://github.com/MarleyS439/taskys-api)
- Endpoints principais utilizados:
    - `POST /usuarios/login`
    - `GET /listas/usuarios/{idUsuario}`
    - `POST /listas`
    - `PUT /listas/{id}`
    - `DELETE /listas/{id}`
    - `GET /tarefas/usuarios/{idUsuario}`
    - `POST /tarefas/usuarios/{idUsuario}/{idLista}`
    - `PUT /tarefas/{id}`
    - `PUT /tarefas/{id}/status`
    - `DELETE /tarefas/{id}`

## Estrutura do projeto

```
taskys/
├── assets/          # Estilos, ícones e imagens
├── home.html        # Tela principal (listas e tarefas)
├── login.html        # Tela de login
├── LICENSE
└── README.md
```

## Como executar

1. Clone o repositório:
   ```bash
   git clone https://github.com/MarleyS439/taskys.git
   ```
2. Suba a API back-end em Spring Boot na porta `8080` (repositório separado da API).
3. Rode o front-end com o **Live Server** (extensão do VS Code), abrindo o arquivo `login.html` — o projeto depende de um servidor local para funcionar corretamente, não abra o HTML direto pelo navegador (`file://`).
4. Faça login com um usuário já cadastrado na API para acessar a tela de tarefas.

## Projeto relacionado

- Back-end (API): [taskys-api](https://github.com/MarleyS439/taskys-api)

## Licença

Este projeto está sob a licença MIT.

## Autor

Marley de S. Santos