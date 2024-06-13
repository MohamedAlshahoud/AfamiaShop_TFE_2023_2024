<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240613124717 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE site_information DROP facebook_link, DROP youtube, DROP instagram, DROP category_one, DROP category_two, DROP category_three, DROP category_four, DROP category_five, DROP question_link, DROP subscribe_link, DROP category_link_one, DROP category_link_two, DROP category_link_three, DROP category_link_four, DROP category_link_five');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE site_information ADD facebook_link VARCHAR(255) DEFAULT NULL, ADD youtube VARCHAR(255) DEFAULT NULL, ADD instagram VARCHAR(255) DEFAULT NULL, ADD category_one VARCHAR(255) DEFAULT NULL, ADD category_two VARCHAR(255) DEFAULT NULL, ADD category_three VARCHAR(255) DEFAULT NULL, ADD category_four VARCHAR(255) DEFAULT NULL, ADD category_five VARCHAR(255) DEFAULT NULL, ADD question_link VARCHAR(255) DEFAULT NULL, ADD subscribe_link VARCHAR(255) DEFAULT NULL, ADD category_link_one VARCHAR(255) DEFAULT NULL, ADD category_link_two VARCHAR(255) DEFAULT NULL, ADD category_link_three VARCHAR(255) DEFAULT NULL, ADD category_link_four VARCHAR(255) DEFAULT NULL, ADD category_link_five VARCHAR(255) DEFAULT NULL');
    }
}
