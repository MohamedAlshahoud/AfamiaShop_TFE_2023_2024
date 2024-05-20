<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240123190940 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product_sizes (product_id INT NOT NULL, sizes_id INT NOT NULL, INDEX IDX_17C2FC354584665A (product_id), INDEX IDX_17C2FC35423285E6 (sizes_id), PRIMARY KEY(product_id, sizes_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sizes (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product_sizes ADD CONSTRAINT FK_17C2FC354584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_sizes ADD CONSTRAINT FK_17C2FC35423285E6 FOREIGN KEY (sizes_id) REFERENCES sizes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product DROP size');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product_sizes DROP FOREIGN KEY FK_17C2FC354584665A');
        $this->addSql('ALTER TABLE product_sizes DROP FOREIGN KEY FK_17C2FC35423285E6');
        $this->addSql('DROP TABLE product_sizes');
        $this->addSql('DROP TABLE sizes');
        $this->addSql('ALTER TABLE product ADD size VARCHAR(255) NOT NULL');
    }
}
