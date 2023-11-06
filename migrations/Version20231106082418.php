<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231106082418 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE appartement (id INT AUTO_INCREMENT NOT NULL, numappart VARCHAR(255) NOT NULL, superficie VARCHAR(255) NOT NULL, descriptif VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE catégorie (id INT AUTO_INCREMENT NOT NULL, codecatégorie VARCHAR(255) NOT NULL, libellécatégorie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE immeuble (id INT AUTO_INCREMENT NOT NULL, num_immeuble VARCHAR(255) NOT NULL, nomimmeuble VARCHAR(255) NOT NULL, rueimmeuble VARCHAR(255) NOT NULL, cp VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE réservation (id INT AUTO_INCREMENT NOT NULL, numréserv VARCHAR(255) NOT NULL, dateréserv VARCHAR(255) NOT NULL, nomclient VARCHAR(255) NOT NULL, prénomclient VARCHAR(255) NOT NULL, rueclient VARCHAR(255) NOT NULL, cpclient VARCHAR(255) NOT NULL, villeclient VARCHAR(255) NOT NULL, telclient VARCHAR(255) NOT NULL, numchequeacompte VARCHAR(255) NOT NULL, montantacompte VARCHAR(255) NOT NULL, etatréserv VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE saison (id INT AUTO_INCREMENT NOT NULL, numsaison VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE semaine (id INT AUTO_INCREMENT NOT NULL, année VARCHAR(255) NOT NULL, numsemaine VARCHAR(255) NOT NULL, datedébut VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE appartement');
        $this->addSql('DROP TABLE catégorie');
        $this->addSql('DROP TABLE immeuble');
        $this->addSql('DROP TABLE réservation');
        $this->addSql('DROP TABLE saison');
        $this->addSql('DROP TABLE semaine');
    }
}
