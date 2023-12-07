<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231205084701 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, loc_linge TINYINT(1) NOT NULL, prix_loc_linge INT DEFAULT NULL, menage TINYINT(1) NOT NULL, prix_menage INT DEFAULT NULL, internet TINYINT(1) NOT NULL, prix_internet INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE gite ADD service_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE gite ADD CONSTRAINT FK_B638C92CED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('CREATE INDEX IDX_B638C92CED5CA9E6 ON gite (service_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gite DROP FOREIGN KEY FK_B638C92CED5CA9E6');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP INDEX IDX_B638C92CED5CA9E6 ON gite');
        $this->addSql('ALTER TABLE gite DROP service_id');
    }
}
