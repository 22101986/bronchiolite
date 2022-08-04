<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220803064533 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE contact');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, lastname VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, firstname VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, email VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, title VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, message VARCHAR(1000) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, address VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, phone VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
    }
}
