<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240312173518 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE order_detail (id INT AUTO_INCREMENT NOT NULL, order_product_id INT NOT NULL, quantity INT NOT NULL, product VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, subtotal INT NOT NULL, INDEX IDX_ED896F46F65E9B0F (order_product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE order_detail ADD CONSTRAINT FK_ED896F46F65E9B0F FOREIGN KEY (order_product_id) REFERENCES `order` (id)');
        $this->addSql('ALTER TABLE `order` DROP product, DROP price, CHANGE created_at created_at DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_detail DROP FOREIGN KEY FK_ED896F46F65E9B0F');
        $this->addSql('DROP TABLE order_detail');
        $this->addSql('ALTER TABLE `order` ADD product VARCHAR(255) NOT NULL, ADD price DOUBLE PRECISION NOT NULL, CHANGE created_at created_at DATETIME DEFAULT NULL');
    }
}
