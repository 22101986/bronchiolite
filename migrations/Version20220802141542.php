<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220802141542 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE news (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(250) NOT NULL, description VARCHAR(1500) NOT NULL, enabled INT NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payment (id INT AUTO_INCREMENT NOT NULL, rpps VARCHAR(250) NOT NULL, lastname VARCHAR(250) NOT NULL, email VARCHAR(250) NOT NULL, message VARCHAR(1500) NOT NULL, firstname VARCHAR(250) NOT NULL, type INT NOT NULL, price INT NOT NULL, created_at DATETIME NOT NULL, trans_id VARCHAR(6) NOT NULL, brand_card VARCHAR(250) NOT NULL, card_number VARCHAR(250) NOT NULL, status VARCHAR(255) NOT NULL, mode INT NOT NULL, membership_year VARCHAR(4) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE news');
        $this->addSql('DROP TABLE payment');
    }
}
