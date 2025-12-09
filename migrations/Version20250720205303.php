<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250720205303 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE caixa_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE local_caixa_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE modo_movimento_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE movimento_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE origem_movimento_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE pagador_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE responsavel_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE status_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE tipo_movimento_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE caixa (id INT NOT NULL, local_id INT NOT NULL, responsavel_id INT NOT NULL, nome VARCHAR(100) NOT NULL, descricao TEXT DEFAULT NULL, ativo BOOLEAN NOT NULL, data_criacao TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, data_atualizacao TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_17F38795D5A2101 ON caixa (local_id)');
        $this->addSql('CREATE INDEX IDX_17F3879BB9AF004 ON caixa (responsavel_id)');
        $this->addSql('COMMENT ON COLUMN caixa.data_criacao IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN caixa.data_atualizacao IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE local_caixa (id INT NOT NULL, nome VARCHAR(100) NOT NULL, endereco VARCHAR(255) DEFAULT NULL, ativo BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE modo_movimento (id INT NOT NULL, nome VARCHAR(50) NOT NULL, codigo VARCHAR(20) NOT NULL, ativo BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE movimento (id INT NOT NULL, caixa_id INT NOT NULL, tipo_id INT NOT NULL, origem_id INT NOT NULL, modo_id INT NOT NULL, status_id INT NOT NULL, responsavel_id INT DEFAULT NULL, pagador_id INT DEFAULT NULL, usuario_id INT NOT NULL, valor NUMERIC(10, 2) NOT NULL, observacao TEXT DEFAULT NULL, data_movimento TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, data_criacao TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_5BE0E915EA4446B8 ON movimento (caixa_id)');
        $this->addSql('CREATE INDEX IDX_5BE0E915A9276E6C ON movimento (tipo_id)');
        $this->addSql('CREATE INDEX IDX_5BE0E91581E73123 ON movimento (origem_id)');
        $this->addSql('CREATE INDEX IDX_5BE0E9151858652E ON movimento (modo_id)');
        $this->addSql('CREATE INDEX IDX_5BE0E9156BF700BD ON movimento (status_id)');
        $this->addSql('CREATE INDEX IDX_5BE0E915BB9AF004 ON movimento (responsavel_id)');
        $this->addSql('CREATE INDEX IDX_5BE0E91579054F1F ON movimento (pagador_id)');
        $this->addSql('CREATE INDEX IDX_5BE0E915DB38439E ON movimento (usuario_id)');
        $this->addSql('COMMENT ON COLUMN movimento.data_movimento IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN movimento.data_criacao IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE origem_movimento (id INT NOT NULL, nome VARCHAR(50) NOT NULL, codigo VARCHAR(20) NOT NULL, ativo BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE pagador (id INT NOT NULL, nome VARCHAR(100) NOT NULL, email VARCHAR(100) DEFAULT NULL, telefone VARCHAR(20) DEFAULT NULL, cpf_cnpj VARCHAR(20) DEFAULT NULL, ativo BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE responsavel (id INT NOT NULL, nome VARCHAR(100) NOT NULL, email VARCHAR(100) DEFAULT NULL, telefone VARCHAR(20) DEFAULT NULL, ativo BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE status (id INT NOT NULL, nome VARCHAR(50) NOT NULL, codigo VARCHAR(20) NOT NULL, ativo BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE tipo_movimento (id INT NOT NULL, nome VARCHAR(50) NOT NULL, codigo VARCHAR(20) NOT NULL, ativo BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE caixa ADD CONSTRAINT FK_17F38795D5A2101 FOREIGN KEY (local_id) REFERENCES local_caixa (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE caixa ADD CONSTRAINT FK_17F3879BB9AF004 FOREIGN KEY (responsavel_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE movimento ADD CONSTRAINT FK_5BE0E915EA4446B8 FOREIGN KEY (caixa_id) REFERENCES caixa (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE movimento ADD CONSTRAINT FK_5BE0E915A9276E6C FOREIGN KEY (tipo_id) REFERENCES tipo_movimento (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE movimento ADD CONSTRAINT FK_5BE0E91581E73123 FOREIGN KEY (origem_id) REFERENCES origem_movimento (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE movimento ADD CONSTRAINT FK_5BE0E9151858652E FOREIGN KEY (modo_id) REFERENCES modo_movimento (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE movimento ADD CONSTRAINT FK_5BE0E9156BF700BD FOREIGN KEY (status_id) REFERENCES status (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE movimento ADD CONSTRAINT FK_5BE0E915BB9AF004 FOREIGN KEY (responsavel_id) REFERENCES responsavel (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE movimento ADD CONSTRAINT FK_5BE0E91579054F1F FOREIGN KEY (pagador_id) REFERENCES pagador (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE movimento ADD CONSTRAINT FK_5BE0E915DB38439E FOREIGN KEY (usuario_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE caixa_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE local_caixa_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE modo_movimento_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE movimento_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE origem_movimento_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE pagador_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE responsavel_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE status_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE tipo_movimento_id_seq CASCADE');
        $this->addSql('ALTER TABLE caixa DROP CONSTRAINT FK_17F38795D5A2101');
        $this->addSql('ALTER TABLE caixa DROP CONSTRAINT FK_17F3879BB9AF004');
        $this->addSql('ALTER TABLE movimento DROP CONSTRAINT FK_5BE0E915EA4446B8');
        $this->addSql('ALTER TABLE movimento DROP CONSTRAINT FK_5BE0E915A9276E6C');
        $this->addSql('ALTER TABLE movimento DROP CONSTRAINT FK_5BE0E91581E73123');
        $this->addSql('ALTER TABLE movimento DROP CONSTRAINT FK_5BE0E9151858652E');
        $this->addSql('ALTER TABLE movimento DROP CONSTRAINT FK_5BE0E9156BF700BD');
        $this->addSql('ALTER TABLE movimento DROP CONSTRAINT FK_5BE0E915BB9AF004');
        $this->addSql('ALTER TABLE movimento DROP CONSTRAINT FK_5BE0E91579054F1F');
        $this->addSql('ALTER TABLE movimento DROP CONSTRAINT FK_5BE0E915DB38439E');
        $this->addSql('DROP TABLE caixa');
        $this->addSql('DROP TABLE local_caixa');
        $this->addSql('DROP TABLE modo_movimento');
        $this->addSql('DROP TABLE movimento');
        $this->addSql('DROP TABLE origem_movimento');
        $this->addSql('DROP TABLE pagador');
        $this->addSql('DROP TABLE responsavel');
        $this->addSql('DROP TABLE status');
        $this->addSql('DROP TABLE tipo_movimento');
    }
}
