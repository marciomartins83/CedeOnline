<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250720205002 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE audit_log_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE audit_log (id INT NOT NULL, usuario_id INT DEFAULT NULL, acao VARCHAR(50) NOT NULL, entidade VARCHAR(100) NOT NULL, entidade_id INT DEFAULT NULL, dados_anteriores TEXT DEFAULT NULL, dados_novos TEXT DEFAULT NULL, ip VARCHAR(255) DEFAULT NULL, user_agent VARCHAR(255) DEFAULT NULL, data_hora TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, modulo VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_F6E1C0F5DB38439E ON audit_log (usuario_id)');
        $this->addSql('COMMENT ON COLUMN audit_log.data_hora IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE audit_log ADD CONSTRAINT FK_F6E1C0F5DB38439E FOREIGN KEY (usuario_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE audit_log_id_seq CASCADE');
        $this->addSql('ALTER TABLE audit_log DROP CONSTRAINT FK_F6E1C0F5DB38439E');
        $this->addSql('DROP TABLE audit_log');
    }
}
