<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220803070646 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact CHANGE message message VARCHAR(1500) NOT NULL');
        $this->addSql('ALTER TABLE news CHANGE description description VARCHAR(1500) NOT NULL, CHANGE enabled enabled INT DEFAULT NULL');
        $this->addSql('ALTER TABLE payment CHANGE rpps rpps VARCHAR(250) DEFAULT NULL, CHANGE lastname lastname VARCHAR(250) DEFAULT NULL, CHANGE email email VARCHAR(250) DEFAULT NULL, CHANGE message message VARCHAR(1500) DEFAULT NULL, CHANGE firstname firstname VARCHAR(250) DEFAULT NULL, CHANGE trans_id trans_id VARCHAR(250) NOT NULL, CHANGE card_number card_number VARCHAR(250) DEFAULT NULL, CHANGE mode mode INT DEFAULT NULL, CHANGE membership_year membership_year VARCHAR(4) DEFAULT NULL, CHANGE brand_card brand_card VARCHAR(250) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact CHANGE message message LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE news CHANGE description description LONGTEXT NOT NULL, CHANGE enabled enabled TINYINT(1) DEFAULT 1');
        $this->addSql('ALTER TABLE payment CHANGE rpps rpps VARCHAR(250) NOT NULL, CHANGE lastname lastname VARCHAR(250) NOT NULL, CHANGE email email VARCHAR(250) NOT NULL, CHANGE message message VARCHAR(1500) NOT NULL, CHANGE firstname firstname VARCHAR(250) NOT NULL, CHANGE trans_id trans_id VARCHAR(6) NOT NULL, CHANGE brand_card brand_card VARCHAR(250) NOT NULL, CHANGE card_number card_number VARCHAR(250) NOT NULL, CHANGE mode mode INT NOT NULL, CHANGE membership_year membership_year VARCHAR(4) NOT NULL');
    }
}
