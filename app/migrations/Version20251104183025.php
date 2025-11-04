<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251104183025 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE circular (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, id_escaneo INT DEFAULT NULL, title VARCHAR(48) NOT NULL, content VARCHAR(45) NOT NULL, target_group VARCHAR(78) NOT NULL, date DATETIME NOT NULL, file_path VARCHAR(255) DEFAULT NULL, created_by INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL, status VARCHAR(20) DEFAULT \'Pendiente\' NOT NULL, num_circular VARCHAR(20) DEFAULT NULL, fecha_emision DATE DEFAULT NULL, remitente VARCHAR(150) DEFAULT NULL, destinatarios LONGTEXT DEFAULT NULL, asunto LONGTEXT DEFAULT NULL, fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_62D1F84CBBC2A18A (num_circular), INDEX IDX_62D1F84CA76ED395 (user_id), UNIQUE INDEX UNIQ_62D1F84CCD0FF2D9 (id_escaneo), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE correspondence (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, id_escaneo INT DEFAULT NULL, subject VARCHAR(45) NOT NULL, body VARCHAR(60) NOT NULL, sender VARCHAR(50) NOT NULL, receiver VARCHAR(57) NOT NULL, date DATETIME NOT NULL, file_path VARCHAR(255) DEFAULT NULL, created_by INT NOT NULL, created_at DATE NOT NULL, num_control VARCHAR(20) DEFAULT NULL, fecha_recepcion DATE DEFAULT NULL, fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL, status VARCHAR(20) DEFAULT \'Pendiente\' NOT NULL, UNIQUE INDEX UNIQ_2A0046B028D836A2 (num_control), INDEX IDX_2A0046B0A76ED395 (user_id), UNIQUE INDEX UNIQ_2A0046B0CD0FF2D9 (id_escaneo), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE documento_tipo (id INT AUTO_INCREMENT NOT NULL, clave INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oficio (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, id_correspondencia INT DEFAULT NULL, id_escaneo INT DEFAULT NULL, title VARCHAR(46) NOT NULL, content VARCHAR(67) NOT NULL, sender VARCHAR(45) NOT NULL, recipient VARCHAR(56) NOT NULL, date DATETIME NOT NULL, file_path VARCHAR(1024) DEFAULT NULL, storage_dir VARCHAR(255) DEFAULT NULL, created_by INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', status VARCHAR(20) DEFAULT \'Pendiente\' NOT NULL, num_oficio VARCHAR(20) DEFAULT NULL, fecha_emision DATE DEFAULT NULL, fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_3B9FFF1682BEA8AE (num_oficio), INDEX IDX_3B9FFF16A76ED395 (user_id), INDEX IDX_3B9FFF166617810D (id_correspondencia), UNIQUE INDEX UNIQ_3B9FFF16CD0FF2D9 (id_escaneo), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE roles (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(45) NOT NULL, UNIQUE INDEX UNIQ_B63E2EC75E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, role_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, contrasena VARCHAR(255) NOT NULL, rol VARCHAR(20) DEFAULT \'Invitado\' NOT NULL, fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', nombre VARCHAR(100) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649D60322AC (role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE circular ADD CONSTRAINT FK_62D1F84CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE circular ADD CONSTRAINT FK_62D1F84CCD0FF2D9 FOREIGN KEY (id_escaneo) REFERENCES scanner (id)');
        $this->addSql('ALTER TABLE correspondence ADD CONSTRAINT FK_2A0046B0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE correspondence ADD CONSTRAINT FK_2A0046B0CD0FF2D9 FOREIGN KEY (id_escaneo) REFERENCES scanner (id)');
        $this->addSql('ALTER TABLE oficio ADD CONSTRAINT FK_3B9FFF16A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE oficio ADD CONSTRAINT FK_3B9FFF166617810D FOREIGN KEY (id_correspondencia) REFERENCES correspondence (id)');
        $this->addSql('ALTER TABLE oficio ADD CONSTRAINT FK_3B9FFF16CD0FF2D9 FOREIGN KEY (id_escaneo) REFERENCES scanner (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D60322AC FOREIGN KEY (role_id) REFERENCES roles (id) ON DELETE SET NULL');
        $this->addSql('DROP INDEX IDX_55EFDF291B0EE4DB ON scanner');
        $this->addSql('ALTER TABLE scanner CHANGE usuario_subio user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE scanner ADD CONSTRAINT FK_55EFDF29A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_55EFDF29A76ED395 ON scanner (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE scanner DROP FOREIGN KEY FK_55EFDF29A76ED395');
        $this->addSql('ALTER TABLE circular DROP FOREIGN KEY FK_62D1F84CA76ED395');
        $this->addSql('ALTER TABLE circular DROP FOREIGN KEY FK_62D1F84CCD0FF2D9');
        $this->addSql('ALTER TABLE correspondence DROP FOREIGN KEY FK_2A0046B0A76ED395');
        $this->addSql('ALTER TABLE correspondence DROP FOREIGN KEY FK_2A0046B0CD0FF2D9');
        $this->addSql('ALTER TABLE oficio DROP FOREIGN KEY FK_3B9FFF16A76ED395');
        $this->addSql('ALTER TABLE oficio DROP FOREIGN KEY FK_3B9FFF166617810D');
        $this->addSql('ALTER TABLE oficio DROP FOREIGN KEY FK_3B9FFF16CD0FF2D9');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D60322AC');
        $this->addSql('DROP TABLE circular');
        $this->addSql('DROP TABLE correspondence');
        $this->addSql('DROP TABLE documento_tipo');
        $this->addSql('DROP TABLE oficio');
        $this->addSql('DROP TABLE roles');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX IDX_55EFDF29A76ED395 ON scanner');
        $this->addSql('ALTER TABLE scanner CHANGE user_id usuario_subio INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_55EFDF291B0EE4DB ON scanner (usuario_subio)');
    }
}
