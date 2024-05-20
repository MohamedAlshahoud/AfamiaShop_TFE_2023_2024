<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240202144448 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE site_information ADD name_category VARCHAR(255) DEFAULT NULL, ADD name_address VARCHAR(255) DEFAULT NULL, ADD email VARCHAR(255) DEFAULT NULL, ADD question VARCHAR(255) DEFAULT NULL, ADD descrrption_question VARCHAR(255) DEFAULT NULL, ADD name_subscribe VARCHAR(255) DEFAULT NULL, ADD description_subscribe VARCHAR(255) DEFAULT NULL, ADD category_one VARCHAR(255) DEFAULT NULL, ADD category_two VARCHAR(255) DEFAULT NULL, ADD category_three VARCHAR(255) DEFAULT NULL, ADD category_four VARCHAR(255) DEFAULT NULL, ADD category_five VARCHAR(255) DEFAULT NULL, ADD question_link VARCHAR(255) DEFAULT NULL, ADD subscribe_link VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE site_information DROP name_category, DROP name_address, DROP email, DROP question, DROP descrrption_question, DROP name_subscribe, DROP description_subscribe, DROP category_one, DROP category_two, DROP category_three, DROP category_four, DROP category_five, DROP question_link, DROP subscribe_link');
    }
}
