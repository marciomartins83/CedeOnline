# CLAUDE.md - Projeto CedeOnline

Este arquivo fornece orientacao completa e OBRIGATORIA para o Claude Code ao trabalhar neste repositorio.

---

## ATENCAO - ARQUIVO UNICO DE MUDANCAS

> **PARA TODOS OS MODELOS:**
> `CHANGELOG.md` E O UNICO ARQUIVO PARA REGISTRAR MUDANCAS

### PERMITIDO:
- `CLAUDE.md` - Diretrizes e documentacao do projeto
- `CHANGELOG.md` - UNICO arquivo para registrar mudancas

### PROIBIDO - NUNCA CRIE:
- `CORRECAO_*.md`, `UPDATE_*.md`, `FIX_*.md`, etc.

**REGRA DE OURO:** Se voce fez uma mudanca, atualize IMEDIATAMENTE o `CHANGELOG.md` seguindo o formato Keep a Changelog.

---

## Visao Geral do Projeto

**CedeOnline** e um sistema de gestao para Centro Espirita desenvolvido em Symfony 7.2 e PHP 8.2+.

O sistema foca na gestao administrativa, financeira e de membros da instituicao, prezando pela seguranca, organizacao e performance. O codigo deve ser limpo, modular e seguir estritamente os padroes do framework.

---

## Stack Tecnologica (REFERENCIA OFICIAL)

### Backend
| Tecnologia | Versao |
|------------|--------|
| PHP | 8.2+ |
| Framework | Symfony 7.2 (CLI: Symfony CLI 5.15.1) |
| ORM | Doctrine 2 |
| Banco de Dados | PostgreSQL 14+ |

### Frontend
| Tecnologia | Versao/Descricao |
|------------|------------------|
| Templates | Twig 3 |
| CSS Framework | Bootstrap 5.3 |
| JavaScript | Vanilla JS (ES6) - Modular (Assets/JS) |
| Build Tool | Webpack Encore |
| Componentes | Hotwired Stimulus, Hotwired Turbo |

### Seguranca
- **CSRF:** Token unico global `ajax_global` para requisicoes AJAX
- **Autenticacao:** Symfony Security Bundle

### Padroes de Resposta
- **API/AJAX:** `{'success': true, 'data': ...}` ou `{'success': false, 'message': '...'}`
- **Erros:** Devem ser tratados e retornados de forma amigavel, nunca estourar stack trace para o usuario.

---

## REGRAS DE OURO (INQUEBRAVEIS)

### 0. Schema Doctrine DEVE BATER - LEI SUPREMA

```bash
php bin/console doctrine:schema:validate
```

- O schema Doctrine **DEVE ESTAR SINCRONIZADO COM O BANCO. SEMPRE.**
- SEMPRE rodar `php bin/console doctrine:schema:validate` ao iniciar.
- SE aparecer `[ERROR]` -> **PARAR e CORRIGIR.**
- O Mapping DEVE estar OK (`[OK] The mapping files are correct.`).
- O Banco e a fonte da verdade. Se houver divergencia estrutural, ajuste a Entidade.

### 1. Arquitetura: "Thin Controller, Fat Service"

#### Controllers (`src/Controller/`):
- Recebem Request.
- Validam formulario via FormType.
- Chamam o Service.
- Retornam Response.

**PROIBIDO:**
- Logica de negocio
- Queries SQL/DQL diretas
- Regras de validacao complexas

#### Services (`src/Service/`):
- Contem TODA a logica de negocio.
- Gerenciam transacoes (`beginTransaction`, `flush`).
- Abrigam a inteligencia do sistema.

#### Repositorios (`src/Repository/`):
- Consultas DQL/SQL complexas.
- DQL mora aqui, **NUNCA no Controller**.

### 2. Frontend: Zero JS no Twig

#### PROIBIDO:
- Codigo JavaScript inline (`<script>...`).
- Atributos `onclick`, `onchange`, etc.
- Misturar logica de view com comportamento.

#### OBRIGATORIO:
- Todo JavaScript em arquivos `.js` em `assets/js/`.
- Passagem de dados Backend -> Frontend apenas via variaveis globais (`window.ROUTES`, `window.CONFIG`) no final do layout ou via `data-attributes` nos elementos HTML.

### 3. Formularios: Use FormTypes

#### PROIBIDO:
- Criar tags `<form>`, `<input>`, `<select>` manualmente no HTML/Twig.
- Validar dados apenas no frontend.

#### OBRIGATORIO:
- Criar classes FormType em `src/Form/`.
- Renderizar no Twig usando `{{ form_start(form) }}`, `{{ form_widget(form) }}`, `{{ form_end(form) }}`.
- Isso garante protecao CSRF e validacao padronizada do Symfony.

### 4. Clean Code & Symfony Best Practices

**SEMPRE aplicar:**

- **Clean Code:** Nomes descritivos, metodos pequenos e focados.
- **SOLID Principles:** Especialmente Single Responsibility (cada classe faz apenas UMA coisa).
- **DRY (Don't Repeat Yourself):** Evitar duplicacao de codigo. Reutilize funcoes de Services/Repositories.
- **Type Hints:** Sempre declarar tipos de parametros e retorno (ex: `public function somar(float $a, float $b): float`).
- **Nomes:** `camelCase` para metodos/variaveis. Entidades sempre no plural no banco, singular na classe se preferir, mas mantenha consistencia.
- **Parametros:** Prefira passar a Entidade inteira em vez de multiplos parametros soltos.
- **Datas:** Use `midnight` para zerar horas em comparacoes e `clone` ao modificar objetos DateTime.

---

## Estrutura de Pastas e Arquivos (Padrao)

### Backend

```
src/
├── Controller/
│   └── DashboardController.php       # Thin Controller (So roteamento)
│
├── Service/
│   └── MembroService.php             # Fat Service (Logica Pesada)
│
├── Entity/
│   ├── User.php                      # Autenticacao
│   └── ...                           # Outras entidades
│
├── Repository/
│   └── UserRepository.php            # Queries DQL (SQL aqui, nao no Controller)
│
└── Form/
    └── RegistrationFormType.php      # Definicao de formularios
```

### Frontend

```
assets/js/
├── app.js                            # Entry point
├── utils/                            # Funcoes utilitarias
└── dashboard/                        # Scripts especificos de modulos
    └── index.js
```

### Templates

```
templates/
├── base.html.twig                    # Layout principal
├── dashboard/
│   └── index.html.twig
└── security/
    └── login.html.twig
```

---

## Padrao de Templates CRUD (OBRIGATORIO)

Ao criar telas de listagem, novo cadastro ou edicao, siga o padrao Bootstrap 5 com Twig:

### Estrutura OBRIGATORIA:

```twig
{% extends 'base.html.twig' %}

{% block title %}Titulo da Pagina{% endblock %}

{% block body %}
<div class="container-fluid">
    {# Breadcrumb #}
    {% include '_partials/breadcrumb.html.twig' %}

    {# Flash messages #}
    {% for message in app.flashes('success') %}
        <div class="alert alert-success">{{ message }}</div>
    {% endfor %}

    {# Conteudo #}
    <div class="card">
        <div class="card-header">
            <h3>Titulo do Modulo</h3>
        </div>
        <div class="card-body">
            {# Tabela ou Formulario #}
        </div>
    </div>
</div>
{% endblock %}
```

### Checklist:
- [ ] Usar FormType para formularios.
- [ ] Icones FontAwesome (`<i class="fas fa-*">`).
- [ ] Classes Bootstrap 5 (`btn-primary`, `table-striped`, `form-control`).
- [ ] Botoes de acao padronizados.

---

## Comandos Essenciais

### Desenvolvimento

```bash
# Instalar dependencias
composer install
npm install

# Servidor de desenvolvimento
symfony server:start

# Build de assets (Webpack Encore)
npm run dev        # Desenvolvimento
npm run build      # Producao
npm run watch      # Watch mode
```

### Banco de Dados

```bash
# Criar database
php bin/console doctrine:database:create

# Gerar migration (apos alterar Entity)
php bin/console make:migration

# Executar migrations
php bin/console doctrine:migrations:migrate

# Validar schema (LEI SUPREMA)
php bin/console doctrine:schema:validate
```

---

## Glossario Tecnico

| Termo | Definicao |
|-------|-----------|
| **Thin Controller** | Controller que apenas delega para Services. Nao tem logica de negocio. |
| **Fat Service** | Service que contem a regra de negocio, validacoes e persistencia. |
| **FormType** | Classe PHP que define a estrutura e validacao de um formulario. |
| **DQL** | Doctrine Query Language. Deve ficar restrito aos Repositories. |
| **Migration** | Arquivo de versao do banco de dados. Nunca altere o banco manualmente sem migration. |

---

## Configuracao do Banco de Dados

### Producao (PostgreSQL Remoto)
```
Host: cedelar.postgresql.dbaas.com.br
Porta: 5432
Banco: cedelar
Usuario: cedelar
```

### Tabelas do Sistema Novo
O sistema utiliza as seguintes tabelas (separadas das tabelas legadas):

- `user` - Usuarios e autenticacao
- `modulo` - Modulos do sistema
- `permissao` - Permissoes por usuario/modulo
- `caixa_modulo` - Caixas (renomeado para nao conflitar com legado)
- `movimento` - Movimentacoes financeiras
- `local_caixa` - Locais dos caixas
- `tipo_movimento` - Tipos de movimento (entrada/saida)
- `origem_movimento` - Origens dos movimentos
- `modo_movimento` - Modos de pagamento
- `status` - Status dos movimentos
- `responsavel` - Responsaveis
- `pagador` - Pagadores
- `audit_log` - Log de auditoria

### Importante
O banco possui tabelas legadas que **NAO DEVEM SER ALTERADAS**. O Doctrine esta configurado com `schema_filter` para ignorar essas tabelas.

---

## Historico

### Status Atual
- Projeto em fase inicial (Setup, Dashboard e Login).
- Banco de dados PostgreSQL remoto configurado.
- Schema sincronizado com entidades.

### Ultima atualizacao
10/12/2025

### Mantenedor
Marcio Martins
