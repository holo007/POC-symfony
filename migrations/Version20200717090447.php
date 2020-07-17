<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200717090447 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE frais (id INT AUTO_INCREMENT NOT NULL, type_frais VARCHAR(50) NOT NULL, date_paiement DATE NOT NULL, description VARCHAR(255) NOT NULL, montant INT NOT NULL, type_paiement VARCHAR(50) NOT NULL, justificatif VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, created_by VARCHAR(255) NOT NULL, last_update_at DATETIME NOT NULL, last_update_by VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE frais');
    }
}
