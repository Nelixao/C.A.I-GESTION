<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250723042701 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE circular ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE circular ADD CONSTRAINT FK_62D1F84CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_62D1F84CA76ED395 ON circular (user_id)');
        $this->addSql('ALTER TABLE correspondence ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE correspondence ADD CONSTRAINT FK_2A0046B0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_2A0046B0A76ED395 ON correspondence (user_id)');
        $this->addSql('ALTER TABLE oficio ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE oficio ADD CONSTRAINT FK_3B9FFF16A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_3B9FFF16A76ED395 ON oficio (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE circular DROP FOREIGN KEY FK_62D1F84CA76ED395');
        $this->addSql('DROP INDEX IDX_62D1F84CA76ED395 ON circular');
        $this->addSql('ALTER TABLE circular DROP user_id');
        $this->addSql('ALTER TABLE oficio DROP FOREIGN KEY FK_3B9FFF16A76ED395');
        $this->addSql('DROP INDEX IDX_3B9FFF16A76ED395 ON oficio');
        $this->addSql('ALTER TABLE oficio DROP user_id');
        $this->addSql('ALTER TABLE correspondence DROP FOREIGN KEY FK_2A0046B0A76ED395');
        $this->addSql('DROP INDEX IDX_2A0046B0A76ED395 ON correspondence');
        $this->addSql('ALTER TABLE correspondence DROP user_id');
    }
}
