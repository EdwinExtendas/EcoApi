<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200130200209 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE place (id INT AUTO_INCREMENT NOT NULL, _id INT NOT NULL, username VARCHAR(255) NOT NULL, auth_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', time_seconds INT NOT NULL, item_type VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE harvest (id INT AUTO_INCREMENT NOT NULL, _id INT NOT NULL, username VARCHAR(255) NOT NULL, time_seconds INT NOT NULL, species_name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sell (id INT AUTO_INCREMENT NOT NULL, _id INT NOT NULL, username VARCHAR(255) NOT NULL, auth_id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', time_seconds INT NOT NULL, amount INT NOT NULL, item_type VARCHAR(255) NOT NULL, world_object_type VARCHAR(255) NOT NULL, world_object_id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE server (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, last_process DATETIME DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE play (id INT AUTO_INCREMENT NOT NULL, _id INT NOT NULL, username VARCHAR(255) NOT NULL, time_seconds INT NOT NULL, value DOUBLE PRECISION NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE craft (id INT AUTO_INCREMENT NOT NULL, _id INT NOT NULL, username VARCHAR(255) NOT NULL, auth_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', time_seconds INT NOT NULL, world_object_id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', item_type VARCHAR(255) NOT NULL, world_object_type VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pickup (id INT AUTO_INCREMENT NOT NULL, _id INT NOT NULL, username VARCHAR(255) NOT NULL, auth_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', time_seconds INT NOT NULL, item_type VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE buy (id INT AUTO_INCREMENT NOT NULL, _id INT NOT NULL, username VARCHAR(255) NOT NULL, auth_id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', time_seconds INT NOT NULL, world_object_id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', item_type VARCHAR(255) NOT NULL, world_object_type VARCHAR(255) NOT NULL, amount INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE place');
        $this->addSql('DROP TABLE harvest');
        $this->addSql('DROP TABLE sell');
        $this->addSql('DROP TABLE server');
        $this->addSql('DROP TABLE play');
        $this->addSql('DROP TABLE craft');
        $this->addSql('DROP TABLE pickup');
        $this->addSql('DROP TABLE buy');
    }
}
