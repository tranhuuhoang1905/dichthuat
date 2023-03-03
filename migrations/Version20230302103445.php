<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230302103445 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE languages (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_5A8A6C8DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE translation_work (id INT AUTO_INCREMENT NOT NULL, vocabulary_id INT DEFAULT NULL, language_id INT DEFAULT NULL, translate VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, produnciation VARCHAR(255) DEFAULT NULL, create_at INT NOT NULL, update_at INT NOT NULL, INDEX IDX_7E6CCB1BAD0E05F6 (vocabulary_id), INDEX IDX_7E6CCB1B82F1BAF4 (language_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, phone_number VARCHAR(255) DEFAULT NULL, avatar VARCHAR(255) DEFAULT NULL, status TINYINT(1) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, creat_at INT DEFAULT NULL, update_at INT DEFAULT NULL, sex TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE words (id INT AUTO_INCREMENT NOT NULL, language_id INT DEFAULT NULL, word VARCHAR(255) NOT NULL, number_search INT NOT NULL, number_add_notebook INT NOT NULL, description VARCHAR(255) NOT NULL, pronunciation VARCHAR(255) DEFAULT NULL, user_manual VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, status TINYINT(1) DEFAULT NULL, synonym LONGTEXT DEFAULT NULL, create_at INT NOT NULL, update_at INT NOT NULL, INDEX IDX_717D1E8C82F1BAF4 (language_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE translation_work ADD CONSTRAINT FK_7E6CCB1BAD0E05F6 FOREIGN KEY (vocabulary_id) REFERENCES words (id)');
        $this->addSql('ALTER TABLE translation_work ADD CONSTRAINT FK_7E6CCB1B82F1BAF4 FOREIGN KEY (language_id) REFERENCES languages (id)');
        $this->addSql('ALTER TABLE words ADD CONSTRAINT FK_717D1E8C82F1BAF4 FOREIGN KEY (language_id) REFERENCES languages (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DA76ED395');
        $this->addSql('ALTER TABLE translation_work DROP FOREIGN KEY FK_7E6CCB1BAD0E05F6');
        $this->addSql('ALTER TABLE translation_work DROP FOREIGN KEY FK_7E6CCB1B82F1BAF4');
        $this->addSql('ALTER TABLE words DROP FOREIGN KEY FK_717D1E8C82F1BAF4');
        $this->addSql('DROP TABLE languages');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE translation_work');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE words');
    }
}
