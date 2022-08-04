<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220802131226 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE file DROP FOREIGN KEY FK_8C9F361064C19C1');
        $this->addSql('ALTER TABLE archiving DROP FOREIGN KEY FK_A84564EAB03A8386');
        $this->addSql('DROP TABLE config');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE file');
        $this->addSql('DROP TABLE file_category');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE migration_versions');
        $this->addSql('DROP TABLE news');
        $this->addSql('DROP TABLE payment');
        $this->addSql('DROP TABLE survey');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE users_check_csv');
        $this->addSql('DROP INDEX IDX_A84564EAB03A8386 ON archiving');
        $this->addSql('ALTER TABLE archiving DROP membership_year');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE config (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, value VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, lastname VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, firstname VARCHAR(250) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, email VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, title VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, message LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, address VARCHAR(250) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, phone VARCHAR(250) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE file (id INT AUTO_INCREMENT NOT NULL, category INT NOT NULL, name VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, path VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, created_at DATETIME NOT NULL, INDEX IDX_8C9F361064C19C1 (category), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE file_category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE formation (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, title VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, intervenant VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE migration_versions (version VARCHAR(14) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, executed_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(version)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE news (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, description LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, enabled TINYINT(1) DEFAULT 1, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE payment (id INT AUTO_INCREMENT NOT NULL, rpps VARCHAR(250) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, lastname VARCHAR(250) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, email VARCHAR(250) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, message LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, firstname VARCHAR(250) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, type INT NOT NULL, price INT NOT NULL, created_at DATETIME NOT NULL, trans_id VARCHAR(6) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, brandCard VARCHAR(250) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, card_number VARCHAR(250) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, status VARCHAR(255) CHARACTER SET utf8 DEFAULT \'EN COURS\' NOT NULL COLLATE `utf8_general_ci`, mode INT DEFAULT NULL, membership_year VARCHAR(4) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE survey (id INT AUTO_INCREMENT NOT NULL, gender INT NOT NULL, birthday DATETIME NOT NULL, seance_date DATETIME NOT NULL, service_note INT NOT NULL, call_note INT NOT NULL, renew INT NOT NULL, know_us VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, civility VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, last_name VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, first_name VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, username VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, password VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, job_name VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, rpps_number VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, pro_phone VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, perso_phone VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, email VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, address VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, cabinet_repere VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, iban VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ensure TINYINT(1) DEFAULT 0, can_stagiaire TINYINT(1) DEFAULT 0, enabled TINYINT(1) DEFAULT 1, is_admin TINYINT(1) DEFAULT 0, created_at DATETIME NOT NULL, postal_code VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, city VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, public_phone VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, private_phone VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, password_requested_at DATETIME DEFAULT NULL, token VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), UNIQUE INDEX UNIQ_1483A5E9F85E0677 (username), UNIQUE INDEX UNIQ_1483A5E91B33AD49 (rpps_number), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE users_check_csv (id INT AUTO_INCREMENT NOT NULL, rpps_number VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, last_name VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, first_name VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, job_name VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, created_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_3B13A47B1B33AD49 (rpps_number), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE file ADD CONSTRAINT FK_8C9F361064C19C1 FOREIGN KEY (category) REFERENCES file_category (id)');
        $this->addSql('ALTER TABLE archiving ADD membership_year VARCHAR(4) NOT NULL');
        $this->addSql('ALTER TABLE archiving ADD CONSTRAINT FK_A84564EAB03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_A84564EAB03A8386 ON archiving (created_by_id)');
    }
}
