<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240124153433 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_CB988C6F2B36786BFEC530A9 ON product');
        $this->addSql('ALTER TABLE product ADD size VARCHAR(255) DEFAULT NULL, ADD color VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP size, DROP color');
        $this->addSql('CREATE FULLTEXT INDEX IDX_CB988C6F2B36786BFEC530A9 ON product (name, description)');
    }
}
