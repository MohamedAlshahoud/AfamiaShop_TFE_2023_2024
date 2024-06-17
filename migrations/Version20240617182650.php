<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240617182650 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_categories (user_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_9D948084A76ED395 (user_id), INDEX IDX_9D948084A21214B7 (categories_id), PRIMARY KEY(user_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_categories ADD CONSTRAINT FK_9D948084A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_categories ADD CONSTRAINT FK_9D948084A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD created_at DATETIME NOT NULL, ADD is_rgpd TINYINT(1) NOT NULL, ADD validation_token VARCHAR(255) DEFAULT NULL, ADD is_valid TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_categories DROP FOREIGN KEY FK_9D948084A76ED395');
        $this->addSql('ALTER TABLE user_categories DROP FOREIGN KEY FK_9D948084A21214B7');
        $this->addSql('DROP TABLE user_categories');
        $this->addSql('ALTER TABLE user DROP created_at, DROP is_rgpd, DROP validation_token, DROP is_valid');
    }
}
