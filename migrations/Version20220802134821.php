<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220802134821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE archiving ADD membership_year VARCHAR(4) NOT NULL');
        $this->addSql('ALTER TABLE contact CHANGE firstname firstname VARCHAR(250) NOT NULL, CHANGE message message VARCHAR(1000) NOT NULL, CHANGE address address VARCHAR(250) NOT NULL, CHANGE phone phone VARCHAR(250) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE archiving DROP membership_year');
        $this->addSql('ALTER TABLE contact CHANGE firstname firstname VARCHAR(250) DEFAULT NULL, CHANGE message message LONGTEXT NOT NULL, CHANGE address address VARCHAR(250) DEFAULT NULL, CHANGE phone phone VARCHAR(250) DEFAULT NULL');
    }
}
