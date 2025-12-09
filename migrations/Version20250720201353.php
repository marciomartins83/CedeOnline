<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250720201353 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Criar tabelas do sistema de caixa';
    }

    public function up(Schema $schema): void
    {
        // Criar tabela LocalCaixa
        $this->addSql('CREATE TABLE LocalCaixa (
            id SERIAL PRIMARY KEY,
            Nome VARCHAR(50) NOT NULL
        )');

        // Criar tabela TipoMovimento
        $this->addSql('CREATE TABLE TipoMovimento (
            id SERIAL PRIMARY KEY,
            Descricao VARCHAR(10) NOT NULL
        )');

        // Criar tabela OrigemMovimento
        $this->addSql('CREATE TABLE OrigemMovimento (
            id SERIAL PRIMARY KEY,
            Descricao VARCHAR(50) NOT NULL
        )');

        // Criar tabela ModoMovimento
        $this->addSql('CREATE TABLE ModoMovimento (
            id SERIAL PRIMARY KEY,
            Descricao VARCHAR(50) NOT NULL
        )');

        // Criar tabela Responsavel
        $this->addSql('CREATE TABLE Responsavel (
            id SERIAL PRIMARY KEY,
            Nome VARCHAR(50) NOT NULL
        )');

        // Criar tabela Pagador
        $this->addSql('CREATE TABLE Pagador (
            id SERIAL PRIMARY KEY,
            Nome VARCHAR(50) NOT NULL
        )');

        // Criar tabela Status
        $this->addSql('CREATE TABLE Status (
            id SERIAL PRIMARY KEY,
            Descricao VARCHAR(20) NOT NULL
        )');

        // Criar tabela Caixa
        $this->addSql('CREATE TABLE Caixa (
            id SERIAL PRIMARY KEY,
            LocalCaixaId INT NOT NULL,
            DataMovimento TIMESTAMP NOT NULL,
            TipoMovimentoId INT NOT NULL,
            OrigemMovimentoId INT NOT NULL,
            ModoMovimentoId INT NOT NULL,
            ValorCredito DECIMAL(10, 2) NOT NULL,
            ValorDebito DECIMAL(10, 2) NOT NULL,
            Descricao VARCHAR(255) NOT NULL,
            ResponsavelId INT NOT NULL,
            FechamentoResponsavelId INT NOT NULL,
            FechamentoData DATE NOT NULL,
            Recibo BOOLEAN NOT NULL,
            PagadorId INT NOT NULL,
            Referente VARCHAR(50) NOT NULL,
            Erro VARCHAR(1) NOT NULL,
            Barcode TEXT NOT NULL,
            Tick BIGINT NOT NULL,
            StatusId INT NOT NULL,
            Hora BIGINT NOT NULL
        )');

        // Adicionar chaves estrangeiras
        $this->addSql('ALTER TABLE Caixa ADD CONSTRAINT FK_Caixa_LocalCaixa FOREIGN KEY (LocalCaixaId) REFERENCES LocalCaixa(id)');
        $this->addSql('ALTER TABLE Caixa ADD CONSTRAINT FK_Caixa_TipoMovimento FOREIGN KEY (TipoMovimentoId) REFERENCES TipoMovimento(id)');
        $this->addSql('ALTER TABLE Caixa ADD CONSTRAINT FK_Caixa_OrigemMovimento FOREIGN KEY (OrigemMovimentoId) REFERENCES OrigemMovimento(id)');
        $this->addSql('ALTER TABLE Caixa ADD CONSTRAINT FK_Caixa_ModoMovimento FOREIGN KEY (ModoMovimentoId) REFERENCES ModoMovimento(id)');
        $this->addSql('ALTER TABLE Caixa ADD CONSTRAINT FK_Caixa_Responsavel FOREIGN KEY (ResponsavelId) REFERENCES Responsavel(id)');
        $this->addSql('ALTER TABLE Caixa ADD CONSTRAINT FK_Caixa_FechamentoResponsavel FOREIGN KEY (FechamentoResponsavelId) REFERENCES Responsavel(id)');
        $this->addSql('ALTER TABLE Caixa ADD CONSTRAINT FK_Caixa_Pagador FOREIGN KEY (PagadorId) REFERENCES Pagador(id)');
        $this->addSql('ALTER TABLE Caixa ADD CONSTRAINT FK_Caixa_Status FOREIGN KEY (StatusId) REFERENCES Status(id)');
    }

    public function down(Schema $schema): void
    {
        // Remover chaves estrangeiras
        $this->addSql('ALTER TABLE Caixa DROP FOREIGN KEY FK_Caixa_LocalCaixa');
        $this->addSql('ALTER TABLE Caixa DROP FOREIGN KEY FK_Caixa_TipoMovimento');
        $this->addSql('ALTER TABLE Caixa DROP FOREIGN KEY FK_Caixa_OrigemMovimento');
        $this->addSql('ALTER TABLE Caixa DROP FOREIGN KEY FK_Caixa_ModoMovimento');
        $this->addSql('ALTER TABLE Caixa DROP FOREIGN KEY FK_Caixa_Responsavel');
        $this->addSql('ALTER TABLE Caixa DROP FOREIGN KEY FK_Caixa_FechamentoResponsavel');
        $this->addSql('ALTER TABLE Caixa DROP FOREIGN KEY FK_Caixa_Pagador');
        $this->addSql('ALTER TABLE Caixa DROP FOREIGN KEY FK_Caixa_Status');

        // Remover tabelas
        $this->addSql('DROP TABLE Caixa');
        $this->addSql('DROP TABLE LocalCaixa');
        $this->addSql('DROP TABLE TipoMovimento');
        $this->addSql('DROP TABLE OrigemMovimento');
        $this->addSql('DROP TABLE ModoMovimento');
        $this->addSql('DROP TABLE Responsavel');
        $this->addSql('DROP TABLE Pagador');
        $this->addSql('DROP TABLE Status');
    }
}
