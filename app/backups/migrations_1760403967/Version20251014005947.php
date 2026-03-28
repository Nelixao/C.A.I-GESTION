<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251014005947 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE nota_informativa (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(120) NOT NULL, content VARCHAR(500) DEFAULT NULL, date DATETIME DEFAULT NULL, file_path VARCHAR(255) DEFAULT NULL, created_by INT DEFAULT NULL, created_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', status VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE scanner (id INT AUTO_INCREMENT NOT NULL, usuario_subio INT DEFAULT NULL, name VARCHAR(120) NOT NULL, description VARCHAR(255) DEFAULT NULL, source_type VARCHAR(20) NOT NULL, tipo_documento VARCHAR(20) DEFAULT NULL, source_id INT DEFAULT NULL, file_path VARCHAR(255) NOT NULL, num_documento VARCHAR(20) DEFAULT NULL, url_archivo VARCHAR(255) DEFAULT NULL, fecha_subida DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', mime_type VARCHAR(120) DEFAULT NULL, size INT DEFAULT NULL, status VARCHAR(20) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_55EFDF291B0EE4DB (usuario_subio), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE scanner ADD CONSTRAINT FK_55EFDF291B0EE4DB FOREIGN KEY (usuario_subio) REFERENCES user (id)');
        $this->addSql('ALTER TABLE circular ADD id_escaneo INT DEFAULT NULL, ADD status VARCHAR(20) DEFAULT \'Pendiente\' NOT NULL, ADD num_circular VARCHAR(20) DEFAULT NULL, ADD fecha_emision DATE DEFAULT NULL, ADD remitente VARCHAR(150) DEFAULT NULL, ADD destinatarios LONGTEXT DEFAULT NULL, ADD asunto LONGTEXT DEFAULT NULL, ADD fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE circular ADD CONSTRAINT FK_62D1F84CCD0FF2D9 FOREIGN KEY (id_escaneo) REFERENCES scanner (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_62D1F84CBBC2A18A ON circular (num_circular)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_62D1F84CCD0FF2D9 ON circular (id_escaneo)');
        $this->addSql('ALTER TABLE correspondence ADD id_escaneo INT DEFAULT NULL, ADD num_control VARCHAR(20) DEFAULT NULL, ADD fecha_recepcion DATE DEFAULT NULL, ADD fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD status VARCHAR(20) DEFAULT \'Pendiente\' NOT NULL');
        $this->addSql('ALTER TABLE correspondence ADD CONSTRAINT FK_2A0046B0CD0FF2D9 FOREIGN KEY (id_escaneo) REFERENCES scanner (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2A0046B028D836A2 ON correspondence (num_control)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2A0046B0CD0FF2D9 ON correspondence (id_escaneo)');
        $this->addSql('ALTER TABLE oficio ADD id_correspondencia INT DEFAULT NULL, ADD id_escaneo INT DEFAULT NULL, ADD status VARCHAR(20) DEFAULT \'Pendiente\' NOT NULL, ADD num_oficio VARCHAR(20) DEFAULT NULL, ADD fecha_emision DATE DEFAULT NULL, ADD fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE oficio ADD CONSTRAINT FK_3B9FFF166617810D FOREIGN KEY (id_correspondencia) REFERENCES correspondence (id)');
        $this->addSql('ALTER TABLE oficio ADD CONSTRAINT FK_3B9FFF16CD0FF2D9 FOREIGN KEY (id_escaneo) REFERENCES scanner (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3B9FFF1682BEA8AE ON oficio (num_oficio)');
        $this->addSql('CREATE INDEX IDX_3B9FFF166617810D ON oficio (id_correspondencia)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3B9FFF16CD0FF2D9 ON oficio (id_escaneo)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64988987678');
        $this->addSql('DROP INDEX IDX_8D93D64988987678 ON user');
        $this->addSql('ALTER TABLE user ADD email VARCHAR(180) NOT NULL, ADD rol VARCHAR(20) DEFAULT \'Invitado\' NOT NULL, ADD fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE nombre nombre VARCHAR(100) NOT NULL, CHANGE role_id_id role_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D60322AC FOREIGN KEY (role_id) REFERENCES role (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('CREATE INDEX IDX_8D93D649D60322AC ON user (role_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE circular DROP FOREIGN KEY FK_62D1F84CCD0FF2D9');
        $this->addSql('ALTER TABLE correspondence DROP FOREIGN KEY FK_2A0046B0CD0FF2D9');
        $this->addSql('ALTER TABLE oficio DROP FOREIGN KEY FK_3B9FFF16CD0FF2D9');
        $this->addSql('ALTER TABLE scanner DROP FOREIGN KEY FK_55EFDF291B0EE4DB');
        $this->addSql('DROP TABLE nota_informativa');
        $this->addSql('DROP TABLE scanner');
        $this->addSql('ALTER TABLE oficio DROP FOREIGN KEY FK_3B9FFF166617810D');
        $this->addSql('DROP INDEX UNIQ_3B9FFF1682BEA8AE ON oficio');
        $this->addSql('DROP INDEX IDX_3B9FFF166617810D ON oficio');
        $this->addSql('DROP INDEX UNIQ_3B9FFF16CD0FF2D9 ON oficio');
        $this->addSql('ALTER TABLE oficio DROP id_correspondencia, DROP id_escaneo, DROP status, DROP num_oficio, DROP fecha_emision, DROP fecha_registro');
        $this->addSql('DROP INDEX UNIQ_62D1F84CBBC2A18A ON circular');
        $this->addSql('DROP INDEX UNIQ_62D1F84CCD0FF2D9 ON circular');
        $this->addSql('ALTER TABLE circular DROP id_escaneo, DROP status, DROP num_circular, DROP fecha_emision, DROP remitente, DROP destinatarios, DROP asunto, DROP fecha_registro');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D60322AC');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('DROP INDEX IDX_8D93D649D60322AC ON user');
        $this->addSql('ALTER TABLE user DROP email, DROP rol, DROP fecha_creacion, CHANGE nombre nombre VARCHAR(55) NOT NULL, CHANGE role_id role_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64988987678 FOREIGN KEY (role_id_id) REFERENCES role (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_8D93D64988987678 ON user (role_id_id)');
        $this->addSql('DROP INDEX UNIQ_2A0046B028D836A2 ON correspondence');
        $this->addSql('DROP INDEX UNIQ_2A0046B0CD0FF2D9 ON correspondence');
        $this->addSql('ALTER TABLE correspondence DROP id_escaneo, DROP num_control, DROP fecha_recepcion, DROP fecha_registro, DROP status');
    }
}
