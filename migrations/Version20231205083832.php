<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231205083832 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gite (id INT AUTO_INCREMENT NOT NULL, nom_gite VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, region VARCHAR(255) NOT NULL, departement VARCHAR(255) NOT NULL, nombre_chambre INT NOT NULL, surface INT NOT NULL, couchage INT NOT NULL, animaux TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proprio (id INT AUTO_INCREMENT NOT NULL, id_gite_p_id INT NOT NULL, nom VARCHAR(255) NOT NULL, horaire VARCHAR(255) NOT NULL, numero INT NOT NULL, mail INT NOT NULL, UNIQUE INDEX UNIQ_79F4F38699F87101 (id_gite_p_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE proprio ADD CONSTRAINT FK_79F4F38699F87101 FOREIGN KEY (id_gite_p_id) REFERENCES gite (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE proprio DROP FOREIGN KEY FK_79F4F38699F87101');
        $this->addSql('DROP TABLE gite');
        $this->addSql('DROP TABLE proprio');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
