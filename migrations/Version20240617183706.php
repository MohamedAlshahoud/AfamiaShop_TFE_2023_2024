<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240617183706 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_categories DROP FOREIGN KEY FK_9D948084A21214B7');
        $this->addSql('ALTER TABLE user_categories DROP FOREIGN KEY FK_9D948084A76ED395');
        $this->addSql('DROP TABLE user_categories');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_categories (user_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_9D948084A76ED395 (user_id), INDEX IDX_9D948084A21214B7 (categories_id), PRIMARY KEY(user_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE user_categories ADD CONSTRAINT FK_9D948084A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_categories ADD CONSTRAINT FK_9D948084A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }
}
