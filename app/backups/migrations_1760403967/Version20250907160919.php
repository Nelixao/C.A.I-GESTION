<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250907160919 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE circular (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, title VARCHAR(48) NOT NULL, content VARCHAR(45) NOT NULL, target_group VARCHAR(78) NOT NULL, date DATETIME NOT NULL, file_path VARCHAR(47) NOT NULL, created_by INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL, INDEX IDX_62D1F84CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE correspondence (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, subject VARCHAR(45) NOT NULL, body VARCHAR(60) NOT NULL, sender VARCHAR(50) NOT NULL, receiver VARCHAR(57) NOT NULL, date DATETIME NOT NULL, file_path VARCHAR(68) NOT NULL, created_by INT NOT NULL, created_at DATE NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_2A0046B0A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nota_informativa (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(120) NOT NULL, content VARCHAR(500) DEFAULT NULL, date DATETIME DEFAULT NULL, file_path VARCHAR(255) DEFAULT NULL, created_by INT DEFAULT NULL, created_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', status VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oficio (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, title VARCHAR(46) NOT NULL, content VARCHAR(67) NOT NULL, sender VARCHAR(45) NOT NULL, recipient VARCHAR(56) NOT NULL, date DATETIME NOT NULL, file_path VARCHAR(45) NOT NULL, created_by INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_3B9FFF16A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(45) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE scanner (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(120) NOT NULL, description VARCHAR(255) DEFAULT NULL, source_type VARCHAR(20) NOT NULL, source_id INT DEFAULT NULL, file_path VARCHAR(255) NOT NULL, mime_type VARCHAR(120) DEFAULT NULL, size INT DEFAULT NULL, status VARCHAR(20) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, role_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, contrasena VARCHAR(255) NOT NULL, nombre VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649D60322AC (role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE circular ADD CONSTRAINT FK_62D1F84CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE correspondence ADD CONSTRAINT FK_2A0046B0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE oficio ADD CONSTRAINT FK_3B9FFF16A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE circular DROP FOREIGN KEY FK_62D1F84CA76ED395');
        $this->addSql('ALTER TABLE correspondence DROP FOREIGN KEY FK_2A0046B0A76ED395');
        $this->addSql('ALTER TABLE oficio DROP FOREIGN KEY FK_3B9FFF16A76ED395');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D60322AC');
        $this->addSql('DROP TABLE circular');
        $this->addSql('DROP TABLE correspondence');
        $this->addSql('DROP TABLE nota_informativa');
        $this->addSql('DROP TABLE oficio');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE scanner');
        $this->addSql('DROP TABLE user');
    }
}
