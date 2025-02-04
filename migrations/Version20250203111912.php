<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250203111912 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, INDEX IDX_3AF34668727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, users_id INT DEFAULT NULL, reference VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', reduction INT NOT NULL, etat VARCHAR(255) NOT NULL, date_facture DATE NOT NULL, adresse_facture VARCHAR(255) NOT NULL, date_livraison DATE NOT NULL, adresse_livraison VARCHAR(255) NOT NULL, coefficient DOUBLE PRECISION NOT NULL, total NUMERIC(10, 2) NOT NULL, INDEX IDX_6EEAA67D67B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_details (id INT AUTO_INCREMENT NOT NULL, commande_id INT DEFAULT NULL, products_id INT DEFAULT NULL, quantite INT NOT NULL, INDEX IDX_849D792A82EA2E54 (commande_id), INDEX IDX_849D792A6C8A81A9 (products_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commercial (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, commande_id INT DEFAULT NULL, date_livraison DATETIME NOT NULL, adresse_livraison VARCHAR(255) NOT NULL, INDEX IDX_A60C9F1F82EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison_details (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, quantite INT NOT NULL, INDEX IDX_32D065E84584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payment_methode (id INT AUTO_INCREMENT NOT NULL, commande_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_BB7F4CD282EA2E54 (commande_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products (id INT AUTO_INCREMENT NOT NULL, categories_id INT NOT NULL, fournisseur_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, prix INT NOT NULL, stock INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', reference_fournisseur VARCHAR(100) NOT NULL, photo VARCHAR(255) NOT NULL, INDEX IDX_B3BA5A5AA21214B7 (categories_id), INDEX IDX_B3BA5A5A670C757F (fournisseur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_type (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, usertype_id INT DEFAULT NULL, commercial_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, codepostal VARCHAR(10) NOT NULL, ville VARCHAR(150) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_1483A5E9592D702D (usertype_id), INDEX IDX_1483A5E97854071C (commercial_id), UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categories ADD CONSTRAINT FK_3AF34668727ACA70 FOREIGN KEY (parent_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D67B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE commande_details ADD CONSTRAINT FK_849D792A82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE commande_details ADD CONSTRAINT FK_849D792A6C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE livraison_details ADD CONSTRAINT FK_32D065E84584665A FOREIGN KEY (product_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE payment_methode ADD CONSTRAINT FK_BB7F4CD282EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5AA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9592D702D FOREIGN KEY (usertype_id) REFERENCES user_type (id)');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E97854071C FOREIGN KEY (commercial_id) REFERENCES commercial (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categories DROP FOREIGN KEY FK_3AF34668727ACA70');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D67B3B43D');
        $this->addSql('ALTER TABLE commande_details DROP FOREIGN KEY FK_849D792A82EA2E54');
        $this->addSql('ALTER TABLE commande_details DROP FOREIGN KEY FK_849D792A6C8A81A9');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F82EA2E54');
        $this->addSql('ALTER TABLE livraison_details DROP FOREIGN KEY FK_32D065E84584665A');
        $this->addSql('ALTER TABLE payment_methode DROP FOREIGN KEY FK_BB7F4CD282EA2E54');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5AA21214B7');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A670C757F');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9592D702D');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E97854071C');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE commande_details');
        $this->addSql('DROP TABLE commercial');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE livraison_details');
        $this->addSql('DROP TABLE payment_methode');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE user_type');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
