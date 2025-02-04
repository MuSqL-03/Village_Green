<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250203112145 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livraison ADD livraison_details_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F5FE9092C FOREIGN KEY (livraison_details_id) REFERENCES livraison_details (id)');
        $this->addSql('CREATE INDEX IDX_A60C9F1F5FE9092C ON livraison (livraison_details_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F5FE9092C');
        $this->addSql('DROP INDEX IDX_A60C9F1F5FE9092C ON livraison');
        $this->addSql('ALTER TABLE livraison DROP livraison_details_id');
    }
}
