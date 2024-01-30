<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231121104414 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE services DROP entretien, DROP bioéthanol, DROP depanage, DROP bioethanol');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE services ADD entretien VARCHAR(255) NOT NULL, ADD bioéthanol VARCHAR(255) NOT NULL, ADD depanage VARCHAR(255) NOT NULL, ADD bioethanol VARCHAR(255) NOT NULL');
    }
}
