<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250723041342 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE circular (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(48) NOT NULL, content VARCHAR(45) NOT NULL, target_group VARCHAR(78) NOT NULL, date DATETIME NOT NULL, file_path VARCHAR(47) NOT NULL, created_by INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE correspondence (id INT AUTO_INCREMENT NOT NULL, subject VARCHAR(45) NOT NULL, body VARCHAR(60) NOT NULL, sender VARCHAR(50) NOT NULL, receiver VARCHAR(57) NOT NULL, date DATETIME NOT NULL, file_path VARCHAR(68) NOT NULL, created_by INT NOT NULL, created_at DATE NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oficio (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(46) NOT NULL, content VARCHAR(67) NOT NULL, sender VARCHAR(45) NOT NULL, recipient VARCHAR(56) NOT NULL, date DATETIME NOT NULL, file_path VARCHAR(45) NOT NULL, created_by INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(45) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD role_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64988987678 FOREIGN KEY (role_id_id) REFERENCES role (id)');
        $this->addSql('CREATE INDEX IDX_8D93D64988987678 ON user (role_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64988987678');
        $this->addSql('DROP TABLE circular');
        $this->addSql('DROP TABLE correspondence');
        $this->addSql('DROP TABLE oficio');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP INDEX IDX_8D93D64988987678 ON user');
        $this->addSql('ALTER TABLE user DROP role_id_id');
    }
}
