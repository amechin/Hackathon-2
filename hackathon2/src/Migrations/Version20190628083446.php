<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190628083446 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE resto_image (resto_id INT NOT NULL, image_id INT NOT NULL, INDEX IDX_980A80FC2978E8D1 (resto_id), INDEX IDX_980A80FC3DA5256D (image_id), PRIMARY KEY(resto_id, image_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, url VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE resto_image ADD CONSTRAINT FK_980A80FC2978E8D1 FOREIGN KEY (resto_id) REFERENCES resto (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE resto_image ADD CONSTRAINT FK_980A80FC3DA5256D FOREIGN KEY (image_id) REFERENCES image (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE resto CHANGE src_img logo VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE resto_image DROP FOREIGN KEY FK_980A80FC3DA5256D');
        $this->addSql('DROP TABLE resto_image');
        $this->addSql('DROP TABLE image');
        $this->addSql('ALTER TABLE resto CHANGE logo src_img VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
    }
}
