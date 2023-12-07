<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231206073816 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE proprio DROP FOREIGN KEY FK_79F4F386ACE14BE8');
        $this->addSql('DROP INDEX IDX_79F4F386ACE14BE8 ON proprio');
        $this->addSql('ALTER TABLE proprio DROP gite_id_p_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE proprio ADD gite_id_p_id INT NOT NULL');
        $this->addSql('ALTER TABLE proprio ADD CONSTRAINT FK_79F4F386ACE14BE8 FOREIGN KEY (gite_id_p_id) REFERENCES gite (id)');
        $this->addSql('CREATE INDEX IDX_79F4F386ACE14BE8 ON proprio (gite_id_p_id)');
    }
}
