<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231205085207 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gite DROP FOREIGN KEY FK_B638C92CED5CA9E6');
        $this->addSql('DROP INDEX IDX_B638C92CED5CA9E6 ON gite');
        $this->addSql('ALTER TABLE gite DROP service_id');
        $this->addSql('ALTER TABLE service ADD id_gite_s_id INT NOT NULL');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD28B4DDEEF FOREIGN KEY (id_gite_s_id) REFERENCES gite (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E19D9AD28B4DDEEF ON service (id_gite_s_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gite ADD service_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE gite ADD CONSTRAINT FK_B638C92CED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('CREATE INDEX IDX_B638C92CED5CA9E6 ON gite (service_id)');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD28B4DDEEF');
        $this->addSql('DROP INDEX UNIQ_E19D9AD28B4DDEEF ON service');
        $this->addSql('ALTER TABLE service DROP id_gite_s_id');
    }
}
