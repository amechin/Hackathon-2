<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190627075657 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE resto (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, src_img VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE resto_tag (resto_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_99A045BA2978E8D1 (resto_id), INDEX IDX_99A045BABAD26311 (tag_id), PRIMARY KEY(resto_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plat (id INT AUTO_INCREMENT NOT NULL, categorie VARCHAR(255) DEFAULT NULL, src_img VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plat_tag (plat_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_253883FDD73DB560 (plat_id), INDEX IDX_253883FDBAD26311 (tag_id), PRIMARY KEY(plat_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plat_resto (plat_id INT NOT NULL, resto_id INT NOT NULL, INDEX IDX_1929D3CDD73DB560 (plat_id), INDEX IDX_1929D3CD2978E8D1 (resto_id), PRIMARY KEY(plat_id, resto_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE resto_tag ADD CONSTRAINT FK_99A045BA2978E8D1 FOREIGN KEY (resto_id) REFERENCES resto (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE resto_tag ADD CONSTRAINT FK_99A045BABAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE plat_tag ADD CONSTRAINT FK_253883FDD73DB560 FOREIGN KEY (plat_id) REFERENCES plat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE plat_tag ADD CONSTRAINT FK_253883FDBAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE plat_resto ADD CONSTRAINT FK_1929D3CDD73DB560 FOREIGN KEY (plat_id) REFERENCES plat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE plat_resto ADD CONSTRAINT FK_1929D3CD2978E8D1 FOREIGN KEY (resto_id) REFERENCES resto (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE resto_tag DROP FOREIGN KEY FK_99A045BA2978E8D1');
        $this->addSql('ALTER TABLE plat_resto DROP FOREIGN KEY FK_1929D3CD2978E8D1');
        $this->addSql('ALTER TABLE plat_tag DROP FOREIGN KEY FK_253883FDD73DB560');
        $this->addSql('ALTER TABLE plat_resto DROP FOREIGN KEY FK_1929D3CDD73DB560');
        $this->addSql('ALTER TABLE resto_tag DROP FOREIGN KEY FK_99A045BABAD26311');
        $this->addSql('ALTER TABLE plat_tag DROP FOREIGN KEY FK_253883FDBAD26311');
        $this->addSql('DROP TABLE resto');
        $this->addSql('DROP TABLE resto_tag');
        $this->addSql('DROP TABLE plat');
        $this->addSql('DROP TABLE plat_tag');
        $this->addSql('DROP TABLE plat_resto');
        $this->addSql('DROP TABLE tag');
    }
}
