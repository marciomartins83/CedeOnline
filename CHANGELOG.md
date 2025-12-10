# Changelog

Todas as mudancas notaveis neste projeto serao documentadas neste arquivo.

O formato e baseado em [Keep a Changelog](https://keepachangelog.com/pt-BR/1.0.0/),
e este projeto adere ao [Versionamento Semantico](https://semver.org/lang/pt-BR/).

## [Unreleased]

## [0.1.0] - 2025-12-10

### Adicionado
- Configuracao inicial do projeto Symfony 7.2
- Sistema de autenticacao com Symfony Security Bundle
- Entidades do sistema de caixa:
  - `User` - Usuarios e autenticacao
  - `Modulo` - Modulos do sistema
  - `Permissao` - Permissoes por usuario/modulo
  - `Caixa` (tabela `caixa_modulo`) - Caixas financeiros
  - `Movimento` - Movimentacoes financeiras
  - `LocalCaixa` - Locais dos caixas
  - `TipoMovimento` - Tipos de movimento (entrada/saida)
  - `OrigemMovimento` - Origens dos movimentos
  - `ModoMovimento` - Modos de pagamento
  - `Status` - Status dos movimentos
  - `Responsavel` - Responsaveis
  - `Pagador` - Pagadores
  - `AuditLog` - Log de auditoria
- Controllers CRUD para User, Modulo, Permissao, Caixa
- Dashboard inicial
- Pagina de login
- Webpack Encore com Bootstrap 5.3
- Hotwired Stimulus e Turbo
- Arquivo `CLAUDE.md` com diretrizes de desenvolvimento

### Configurado
- Conexao com banco PostgreSQL remoto (cedelar.postgresql.dbaas.com.br)
- Schema filter no Doctrine para ignorar tabelas legadas
- Mapeamento do tipo `bit` para `boolean` no Doctrine
- Assets compilados com Webpack Encore (substituido node-sass por sass)

### Corrigido
- Conflito de tabela `caixa` com sistema legado (renomeado para `caixa_modulo`)
- Incompatibilidade do node-sass com Node.js 24 (migrado para Dart Sass)

[Unreleased]: https://github.com/seu-usuario/CedeOnline/compare/v0.1.0...HEAD
[0.1.0]: https://github.com/seu-usuario/CedeOnline/releases/tag/v0.1.0
