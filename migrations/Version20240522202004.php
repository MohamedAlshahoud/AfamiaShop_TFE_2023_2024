<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240522202004 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product_category (product_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_CDFC73564584665A (product_id), INDEX IDX_CDFC735612469DE2 (category_id), PRIMARY KEY(product_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_gender (product_id INT NOT NULL, gender_id INT NOT NULL, INDEX IDX_A53B4BE64584665A (product_id), INDEX IDX_A53B4BE6708A0E0 (gender_id), PRIMARY KEY(product_id, gender_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_color (product_id INT NOT NULL, color_id INT NOT NULL, INDEX IDX_C70A33B54584665A (product_id), INDEX IDX_C70A33B57ADA1FB5 (color_id), PRIMARY KEY(product_id, color_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product_category ADD CONSTRAINT FK_CDFC73564584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_category ADD CONSTRAINT FK_CDFC735612469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_gender ADD CONSTRAINT FK_A53B4BE64584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_gender ADD CONSTRAINT FK_A53B4BE6708A0E0 FOREIGN KEY (gender_id) REFERENCES gender (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_color ADD CONSTRAINT FK_C70A33B54584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product_color ADD CONSTRAINT FK_C70A33B57ADA1FB5 FOREIGN KEY (color_id) REFERENCES color (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD477C57FD');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD5C002039');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADA21214B7');
        $this->addSql('DROP INDEX IDX_D34A04AD5C002039 ON product');
        $this->addSql('DROP INDEX IDX_D34A04AD477C57FD ON product');
        $this->addSql('DROP INDEX IDX_D34A04ADA21214B7 ON product');
        $this->addSql('ALTER TABLE product DROP categories_id, DROP colors_id, DROP genders_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product_category DROP FOREIGN KEY FK_CDFC73564584665A');
        $this->addSql('ALTER TABLE product_category DROP FOREIGN KEY FK_CDFC735612469DE2');
        $this->addSql('ALTER TABLE product_gender DROP FOREIGN KEY FK_A53B4BE64584665A');
        $this->addSql('ALTER TABLE product_gender DROP FOREIGN KEY FK_A53B4BE6708A0E0');
        $this->addSql('ALTER TABLE product_color DROP FOREIGN KEY FK_C70A33B54584665A');
        $this->addSql('ALTER TABLE product_color DROP FOREIGN KEY FK_C70A33B57ADA1FB5');
        $this->addSql('DROP TABLE product_category');
        $this->addSql('DROP TABLE product_gender');
        $this->addSql('DROP TABLE product_color');
        $this->addSql('ALTER TABLE product ADD categories_id INT DEFAULT NULL, ADD colors_id INT DEFAULT NULL, ADD genders_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD477C57FD FOREIGN KEY (genders_id) REFERENCES gender (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD5C002039 FOREIGN KEY (colors_id) REFERENCES color (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADA21214B7 FOREIGN KEY (categories_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_D34A04AD5C002039 ON product (colors_id)');
        $this->addSql('CREATE INDEX IDX_D34A04AD477C57FD ON product (genders_id)');
        $this->addSql('CREATE INDEX IDX_D34A04ADA21214B7 ON product (categories_id)');
    }
}
