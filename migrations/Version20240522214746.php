<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240522214746 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product ADD categories_id INT DEFAULT NULL, ADD colors_id INT DEFAULT NULL, ADD genders_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADA21214B7 FOREIGN KEY (categories_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD5C002039 FOREIGN KEY (colors_id) REFERENCES color (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD477C57FD FOREIGN KEY (genders_id) REFERENCES gender (id)');
        $this->addSql('CREATE INDEX IDX_D34A04ADA21214B7 ON product (categories_id)');
        $this->addSql('CREATE INDEX IDX_D34A04AD5C002039 ON product (colors_id)');
        $this->addSql('CREATE INDEX IDX_D34A04AD477C57FD ON product (genders_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADA21214B7');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD5C002039');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD477C57FD');
        $this->addSql('DROP INDEX IDX_D34A04ADA21214B7 ON product');
        $this->addSql('DROP INDEX IDX_D34A04AD5C002039 ON product');
        $this->addSql('DROP INDEX IDX_D34A04AD477C57FD ON product');
        $this->addSql('ALTER TABLE product DROP categories_id, DROP colors_id, DROP genders_id');
    }
}
