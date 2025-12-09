<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250720204229 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE localcaixa_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE tipomovimento_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE origemmovimento_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE modomovimento_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE responsavel_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE pagador_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE status_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE caixa_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE modulo_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE permissao_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE modulo (id INT NOT NULL, nome VARCHAR(100) NOT NULL, descricao VARCHAR(255) NOT NULL, codigo VARCHAR(50) NOT NULL, ativo BOOLEAN NOT NULL, data_criacao TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN modulo.data_criacao IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE permissao (id INT NOT NULL, usuario_id INT NOT NULL, modulo_id INT NOT NULL, pode_visualizar BOOLEAN NOT NULL, pode_incluir BOOLEAN NOT NULL, pode_editar BOOLEAN NOT NULL, pode_excluir BOOLEAN NOT NULL, data_criacao TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, data_atualizacao TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_5BC84E4ADB38439E ON permissao (usuario_id)');
        $this->addSql('CREATE INDEX IDX_5BC84E4AC07F55F5 ON permissao (modulo_id)');
        $this->addSql('COMMENT ON COLUMN permissao.data_criacao IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN permissao.data_atualizacao IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE permissao ADD CONSTRAINT FK_5BC84E4ADB38439E FOREIGN KEY (usuario_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE permissao ADD CONSTRAINT FK_5BC84E4AC07F55F5 FOREIGN KEY (modulo_id) REFERENCES modulo (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE caixa DROP CONSTRAINT fk_caixa_fechamentoresponsavel');
        $this->addSql('ALTER TABLE caixa DROP CONSTRAINT fk_caixa_localcaixa');
        $this->addSql('ALTER TABLE caixa DROP CONSTRAINT fk_caixa_modomovimento');
        $this->addSql('ALTER TABLE caixa DROP CONSTRAINT fk_caixa_origemmovimento');
        $this->addSql('ALTER TABLE caixa DROP CONSTRAINT fk_caixa_pagador');
        $this->addSql('ALTER TABLE caixa DROP CONSTRAINT fk_caixa_responsavel');
        $this->addSql('ALTER TABLE caixa DROP CONSTRAINT fk_caixa_status');
        $this->addSql('ALTER TABLE caixa DROP CONSTRAINT fk_caixa_tipomovimento');
        $this->addSql('DROP TABLE origemmovimento');
        $this->addSql('DROP TABLE status');
        $this->addSql('DROP TABLE responsavel');
        $this->addSql('DROP TABLE tipomovimento');
        $this->addSql('DROP TABLE modomovimento');
        $this->addSql('DROP TABLE pagador');
        $this->addSql('DROP TABLE localcaixa');
        $this->addSql('DROP TABLE caixa');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE modulo_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE permissao_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE localcaixa_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE tipomovimento_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE origemmovimento_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE modomovimento_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE responsavel_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE pagador_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE status_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE caixa_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE origemmovimento (id SERIAL NOT NULL, descricao VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE status (id SERIAL NOT NULL, descricao VARCHAR(20) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE responsavel (id SERIAL NOT NULL, nome VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE tipomovimento (id SERIAL NOT NULL, descricao VARCHAR(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE modomovimento (id SERIAL NOT NULL, descricao VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE pagador (id SERIAL NOT NULL, nome VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE localcaixa (id SERIAL NOT NULL, nome VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE caixa (id SERIAL NOT NULL, localcaixaid INT NOT NULL, tipomovimentoid INT NOT NULL, origemmovimentoid INT NOT NULL, modomovimentoid INT NOT NULL, responsavelid INT NOT NULL, fechamentoresponsavelid INT NOT NULL, pagadorid INT NOT NULL, statusid INT NOT NULL, datamovimento TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, valorcredito NUMERIC(10, 2) NOT NULL, valordebito NUMERIC(10, 2) NOT NULL, descricao VARCHAR(255) NOT NULL, fechamentodata DATE NOT NULL, recibo BOOLEAN NOT NULL, referente VARCHAR(50) NOT NULL, erro VARCHAR(1) NOT NULL, barcode TEXT NOT NULL, tick BIGINT NOT NULL, hora BIGINT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_17F38793D1E4CEB ON caixa (fechamentoresponsavelid)');
        $this->addSql('CREATE INDEX IDX_17F38799787D908 ON caixa (localcaixaid)');
        $this->addSql('CREATE INDEX IDX_17F38791DFB7DF2 ON caixa (modomovimentoid)');
        $this->addSql('CREATE INDEX IDX_17F387966EE4146 ON caixa (origemmovimentoid)');
        $this->addSql('CREATE INDEX IDX_17F387921302683 ON caixa (pagadorid)');
        $this->addSql('CREATE INDEX IDX_17F387969709A3F ON caixa (responsavelid)');
        $this->addSql('CREATE INDEX IDX_17F38796496D4DA ON caixa (statusid)');
        $this->addSql('CREATE INDEX IDX_17F3879A3977228 ON caixa (tipomovimentoid)');
        $this->addSql('ALTER TABLE caixa ADD CONSTRAINT fk_caixa_fechamentoresponsavel FOREIGN KEY (fechamentoresponsavelid) REFERENCES responsavel (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE caixa ADD CONSTRAINT fk_caixa_localcaixa FOREIGN KEY (localcaixaid) REFERENCES localcaixa (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE caixa ADD CONSTRAINT fk_caixa_modomovimento FOREIGN KEY (modomovimentoid) REFERENCES modomovimento (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE caixa ADD CONSTRAINT fk_caixa_origemmovimento FOREIGN KEY (origemmovimentoid) REFERENCES origemmovimento (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE caixa ADD CONSTRAINT fk_caixa_pagador FOREIGN KEY (pagadorid) REFERENCES pagador (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE caixa ADD CONSTRAINT fk_caixa_responsavel FOREIGN KEY (responsavelid) REFERENCES responsavel (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE caixa ADD CONSTRAINT fk_caixa_status FOREIGN KEY (statusid) REFERENCES status (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE caixa ADD CONSTRAINT fk_caixa_tipomovimento FOREIGN KEY (tipomovimentoid) REFERENCES tipomovimento (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE permissao DROP CONSTRAINT FK_5BC84E4ADB38439E');
        $this->addSql('ALTER TABLE permissao DROP CONSTRAINT FK_5BC84E4AC07F55F5');
        $this->addSql('DROP TABLE modulo');
        $this->addSql('DROP TABLE permissao');
    }
}
