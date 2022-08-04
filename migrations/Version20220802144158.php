<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220802144158 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact CHANGE firstname firstname VARCHAR(250) NOT NULL, CHANGE address address VARCHAR(250) NOT NULL, CHANGE phone phone VARCHAR(250) NOT NULL');
        $this->addSql('ALTER TABLE news CHANGE description description VARCHAR(1500) NOT NULL, CHANGE enabled enabled INT NOT NULL');
        $this->addSql('ALTER TABLE payment ADD brand_card VARCHAR(250) NOT NULL, DROP brandCard, CHANGE rpps rpps VARCHAR(250) NOT NULL, CHANGE lastname lastname VARCHAR(250) NOT NULL, CHANGE email email VARCHAR(250) NOT NULL, CHANGE message message VARCHAR(1500) NOT NULL, CHANGE firstname firstname VARCHAR(250) NOT NULL, CHANGE card_number card_number VARCHAR(250) NOT NULL, CHANGE status status VARCHAR(255) NOT NULL, CHANGE mode mode INT NOT NULL, CHANGE membership_year membership_year VARCHAR(4) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_1483A5E9E7927C74 ON users');
        $this->addSql('DROP INDEX UNIQ_1483A5E9F85E0677 ON users');
        $this->addSql('DROP INDEX UNIQ_1483A5E91B33AD49 ON users');
        $this->addSql('ALTER TABLE users ADD cabinet_reper VARCHAR(255) NOT NULL, ADD enable INT NOT NULL, DROP cabinet_repere, DROP enabled, CHANGE pro_phone pro_phone VARCHAR(255) NOT NULL, CHANGE perso_phone perso_phone VARCHAR(255) NOT NULL, CHANGE iban iban VARCHAR(255) NOT NULL, CHANGE ensure ensure INT NOT NULL, CHANGE can_stagiaire can_stagiaire INT NOT NULL, CHANGE is_admin is_admin INT NOT NULL, CHANGE public_phone public_phone VARCHAR(255) NOT NULL, CHANGE private_phone private_phone VARCHAR(255) NOT NULL, CHANGE password_requested_at password_requested_at DATETIME NOT NULL, CHANGE token token VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_3B13A47B1B33AD49 ON users_check_csv');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact CHANGE firstname firstname VARCHAR(250) DEFAULT NULL, CHANGE address address VARCHAR(250) DEFAULT NULL, CHANGE phone phone VARCHAR(250) DEFAULT NULL');
        $this->addSql('ALTER TABLE news CHANGE description description LONGTEXT NOT NULL, CHANGE enabled enabled TINYINT(1) DEFAULT 1');
        $this->addSql('ALTER TABLE payment ADD brandCard VARCHAR(250) DEFAULT NULL, DROP brand_card, CHANGE rpps rpps VARCHAR(250) DEFAULT NULL, CHANGE lastname lastname VARCHAR(250) DEFAULT NULL, CHANGE email email VARCHAR(250) DEFAULT NULL, CHANGE message message LONGTEXT DEFAULT NULL, CHANGE firstname firstname VARCHAR(250) DEFAULT NULL, CHANGE card_number card_number VARCHAR(250) DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT \'EN COURS\' NOT NULL, CHANGE mode mode INT DEFAULT NULL, CHANGE membership_year membership_year VARCHAR(4) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD cabinet_repere VARCHAR(255) DEFAULT NULL, ADD enabled TINYINT(1) DEFAULT 1, DROP cabinet_reper, DROP enable, CHANGE pro_phone pro_phone VARCHAR(255) DEFAULT NULL, CHANGE perso_phone perso_phone VARCHAR(255) DEFAULT NULL, CHANGE iban iban VARCHAR(255) DEFAULT NULL, CHANGE ensure ensure TINYINT(1) DEFAULT 0, CHANGE can_stagiaire can_stagiaire TINYINT(1) DEFAULT 0, CHANGE is_admin is_admin TINYINT(1) DEFAULT 0, CHANGE public_phone public_phone VARCHAR(255) DEFAULT NULL, CHANGE private_phone private_phone VARCHAR(255) DEFAULT NULL, CHANGE password_requested_at password_requested_at DATETIME DEFAULT NULL, CHANGE token token VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON users (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9F85E0677 ON users (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E91B33AD49 ON users (rpps_number)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3B13A47B1B33AD49 ON users_check_csv (rpps_number)');
    }
}
