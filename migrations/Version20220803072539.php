<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220803072539 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD cabinet_repere VARCHAR(255) DEFAULT NULL, ADD enabled INT DEFAULT NULL, DROP cabinet_reper, DROP enable, CHANGE first_name first_name VARCHAR(250) NOT NULL, CHANGE pro_phone pro_phone VARCHAR(255) DEFAULT NULL, CHANGE perso_phone perso_phone VARCHAR(255) DEFAULT NULL, CHANGE iban iban VARCHAR(255) DEFAULT NULL, CHANGE ensure ensure INT DEFAULT NULL, CHANGE can_stagiaire can_stagiaire INT DEFAULT NULL, CHANGE is_admin is_admin INT DEFAULT NULL, CHANGE public_phone public_phone VARCHAR(255) DEFAULT NULL, CHANGE private_phone private_phone VARCHAR(255) DEFAULT NULL, CHANGE password_requested_at password_requested_at DATETIME DEFAULT NULL, CHANGE token token VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD cabinet_reper VARCHAR(255) NOT NULL, ADD enable INT NOT NULL, DROP cabinet_repere, DROP enabled, CHANGE first_name first_name VARCHAR(255) NOT NULL, CHANGE pro_phone pro_phone VARCHAR(255) NOT NULL, CHANGE perso_phone perso_phone VARCHAR(255) NOT NULL, CHANGE iban iban VARCHAR(255) NOT NULL, CHANGE ensure ensure INT NOT NULL, CHANGE can_stagiaire can_stagiaire INT NOT NULL, CHANGE is_admin is_admin INT NOT NULL, CHANGE public_phone public_phone VARCHAR(255) NOT NULL, CHANGE private_phone private_phone VARCHAR(255) NOT NULL, CHANGE password_requested_at password_requested_at DATETIME NOT NULL, CHANGE token token VARCHAR(255) NOT NULL');
    }
}
