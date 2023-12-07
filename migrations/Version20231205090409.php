<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231205090409 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipement_ext (id INT AUTO_INCREMENT NOT NULL, id_gite_eex_id INT NOT NULL, terasse TINYINT(1) NOT NULL, terasse_prix INT DEFAULT NULL, bbq TINYINT(1) NOT NULL, bbq_prix INT DEFAULT NULL, piscine_priv TINYINT(1) NOT NULL, piscine_priv_prix INT DEFAULT NULL, piscine_part TINYINT(1) NOT NULL, piscine_part_prix INT DEFAULT NULL, tennis TINYINT(1) NOT NULL, tennis_prix INT DEFAULT NULL, pingpong TINYINT(1) NOT NULL, pingpong_prix INT DEFAULT NULL, UNIQUE INDEX UNIQ_85A8C41F93187C7 (id_gite_eex_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipement_int (id INT AUTO_INCREMENT NOT NULL, gite_id_ei_id INT NOT NULL, lave_vaiss TINYINT(1) NOT NULL, lave_vaiss_prix INT DEFAULT NULL, lave_linge TINYINT(1) NOT NULL, lave_linge_prix INT DEFAULT NULL, climatisation TINYINT(1) NOT NULL, climatisation_prix INT DEFAULT NULL, tele TINYINT(1) NOT NULL, tele_prix INT DEFAULT NULL, UNIQUE INDEX UNIQ_1DD8C0F2DEA8992D (gite_id_ei_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipement_ext ADD CONSTRAINT FK_85A8C41F93187C7 FOREIGN KEY (id_gite_eex_id) REFERENCES gite (id)');
        $this->addSql('ALTER TABLE equipement_int ADD CONSTRAINT FK_1DD8C0F2DEA8992D FOREIGN KEY (gite_id_ei_id) REFERENCES gite (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipement_ext DROP FOREIGN KEY FK_85A8C41F93187C7');
        $this->addSql('ALTER TABLE equipement_int DROP FOREIGN KEY FK_1DD8C0F2DEA8992D');
        $this->addSql('DROP TABLE equipement_ext');
        $this->addSql('DROP TABLE equipement_int');
    }
}
