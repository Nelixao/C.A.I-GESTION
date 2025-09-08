<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250907184000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Align tables with required fields for Usuarios, Correspondencia, Oficios, Circulares, Escaneos';
    }

    public function up(Schema $schema): void
    {
        // USERS
        $this->addSql("ALTER TABLE user ADD COLUMN IF NOT EXISTS rol VARCHAR(20) NOT NULL DEFAULT 'Invitado'");
        $this->addSql("ALTER TABLE user ADD COLUMN IF NOT EXISTS fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '(DC2Type:datetime_immutable)'");

        // SCANNER (Escaneos)
        $this->addSql("ALTER TABLE scanner ADD COLUMN IF NOT EXISTS num_documento VARCHAR(20) DEFAULT NULL");
        $this->addSql("ALTER TABLE scanner ADD COLUMN IF NOT EXISTS url_archivo VARCHAR(255) DEFAULT NULL");
        $this->addSql("ALTER TABLE scanner ADD COLUMN IF NOT EXISTS fecha_subida DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '(DC2Type:datetime_immutable)'");
        $this->addSql("ALTER TABLE scanner ADD COLUMN IF NOT EXISTS tipo_documento VARCHAR(20) DEFAULT NULL");
        // usuario_subio FK (rename if necessary)
        $this->addSql("ALTER TABLE scanner ADD COLUMN IF NOT EXISTS usuario_subio INT DEFAULT NULL");
        $this->addSql("ALTER TABLE scanner ADD CONSTRAINT IF NOT EXISTS FK_SCANNER_USUARIO_SUBIO FOREIGN KEY (usuario_subio) REFERENCES user (id)");

        // CORRESPONDENCE
        $this->addSql("ALTER TABLE correspondence ADD COLUMN IF NOT EXISTS num_control VARCHAR(20) DEFAULT NULL");
        $this->addSql("CREATE UNIQUE INDEX IF NOT EXISTS UNIQ_CORRESPONDENCE_NUM_CONTROL ON correspondence (num_control)");
        $this->addSql("ALTER TABLE correspondence ADD COLUMN IF NOT EXISTS fecha_recepcion DATE DEFAULT NULL");
        $this->addSql("ALTER TABLE correspondence ADD COLUMN IF NOT EXISTS fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '(DC2Type:datetime_immutable)'");
        // id_escaneo FK
        $this->addSql("ALTER TABLE correspondence ADD COLUMN IF NOT EXISTS id_escaneo INT DEFAULT NULL");
        $this->addSql("ALTER TABLE correspondence ADD CONSTRAINT IF NOT EXISTS FK_CORRESPONDENCE_ESCANEO FOREIGN KEY (id_escaneo) REFERENCES scanner (id)");

        // OFICIO
        $this->addSql("ALTER TABLE oficio ADD COLUMN IF NOT EXISTS num_oficio VARCHAR(20) DEFAULT NULL");
        $this->addSql("CREATE UNIQUE INDEX IF NOT EXISTS UNIQ_OFICIO_NUM_OFICIO ON oficio (num_oficio)");
        $this->addSql("ALTER TABLE oficio ADD COLUMN IF NOT EXISTS fecha_emision DATE DEFAULT NULL");
        $this->addSql("ALTER TABLE oficio ADD COLUMN IF NOT EXISTS fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '(DC2Type:datetime_immutable)'");
        // id_correspondencia, id_escaneo
        $this->addSql("ALTER TABLE oficio ADD COLUMN IF NOT EXISTS id_correspondencia INT DEFAULT NULL");
        $this->addSql("ALTER TABLE oficio ADD CONSTRAINT IF NOT EXISTS FK_OFICIO_CORRESPONDENCIA FOREIGN KEY (id_correspondencia) REFERENCES correspondence (id)");
        $this->addSql("ALTER TABLE oficio ADD COLUMN IF NOT EXISTS id_escaneo INT DEFAULT NULL");
        $this->addSql("ALTER TABLE oficio ADD CONSTRAINT IF NOT EXISTS FK_OFICIO_ESCANEO FOREIGN KEY (id_escaneo) REFERENCES scanner (id)");

        // CIRCULAR
        $this->addSql("ALTER TABLE circular ADD COLUMN IF NOT EXISTS num_circular VARCHAR(20) DEFAULT NULL");
        $this->addSql("CREATE UNIQUE INDEX IF NOT EXISTS UNIQ_CIRCULAR_NUM_CIRCULAR ON circular (num_circular)");
        $this->addSql("ALTER TABLE circular ADD COLUMN IF NOT EXISTS fecha_emision DATE DEFAULT NULL");
        $this->addSql("ALTER TABLE circular ADD COLUMN IF NOT EXISTS remitente VARCHAR(150) DEFAULT NULL");
        $this->addSql("ALTER TABLE circular ADD COLUMN IF NOT EXISTS destinatarios LONGTEXT DEFAULT NULL");
        $this->addSql("ALTER TABLE circular ADD COLUMN IF NOT EXISTS asunto LONGTEXT DEFAULT NULL");
        $this->addSql("ALTER TABLE circular ADD COLUMN IF NOT EXISTS fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '(DC2Type:datetime_immutable)'");
        // id_escaneo
        $this->addSql("ALTER TABLE circular ADD COLUMN IF NOT EXISTS id_escaneo INT DEFAULT NULL");
        $this->addSql("ALTER TABLE circular ADD CONSTRAINT IF NOT EXISTS FK_CIRCULAR_ESCANEO FOREIGN KEY (id_escaneo) REFERENCES scanner (id)");
    }

    public function down(Schema $schema): void
    {
        // Non-destructive down to avoid data loss; leaving columns in place.
    }
}
