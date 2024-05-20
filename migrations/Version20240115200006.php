<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240115200006 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_details ADD product_name VARCHAR(255) NOT NULL, ADD product_description VARCHAR(255) NOT NULL, ADD subtotal INT NOT NULL, DROP sub_total_ht');
        $this->addSql('ALTER TABLE orders ADD carrier_name VARCHAR(255) NOT NULL, ADD carrier_id INT NOT NULL, ADD quantity INT NOT NULL, ADD order_cost INT NOT NULL, ADD order_cost_ttc INT NOT NULL, ADD status VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE orders DROP carrier_name, DROP carrier_id, DROP quantity, DROP order_cost, DROP order_cost_ttc, DROP status');
        $this->addSql('ALTER TABLE order_details ADD sub_total_ht DOUBLE PRECISION NOT NULL, DROP product_name, DROP product_description, DROP subtotal');
    }
}
