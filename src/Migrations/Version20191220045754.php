<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191220045754 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE UNIQUE INDEX UNIQ_4D5855405E237E06 ON symfony_demo_tag (name)');
        $this->addSql('ALTER TABLE spip_syndic DROP extra, DROP composition, DROP composition_lock, CHANGE syndication syndication VARCHAR(3) NOT NULL, CHANGE moderation moderation VARCHAR(3) DEFAULT \'non\', CHANGE miroir miroir VARCHAR(3) DEFAULT \'non\', CHANGE oubli oubli VARCHAR(3) DEFAULT \'non\', CHANGE resume resume VARCHAR(3) DEFAULT \'oui\'');
        $this->addSql('ALTER TABLE spip_versions DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE spip_versions ADD PRIMARY KEY (id_version, id_objet, objet)');
        $this->addSql('ALTER TABLE spip_meta CHANGE nom nom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE spip_resultats DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE spip_resultats CHANGE id id INT UNSIGNED AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE spip_resultats ADD PRIMARY KEY (id)');
        $this->addSql('CREATE INDEX url ON spip_syndic_articles (url)');
        $this->addSql('ALTER TABLE spip_depots CHANGE type type VARCHAR(10) NOT NULL, CHANGE url_serveur url_serveur VARCHAR(255) NOT NULL, CHANGE url_brouteur url_brouteur VARCHAR(255) NOT NULL, CHANGE url_archives url_archives VARCHAR(255) NOT NULL, CHANGE url_commits url_commits VARCHAR(255) NOT NULL, CHANGE xml_paquets xml_paquets VARCHAR(255) NOT NULL, CHANGE sha_paquets sha_paquets VARCHAR(40) NOT NULL, CHANGE nbr_paquets nbr_paquets INT NOT NULL, CHANGE nbr_plugins nbr_plugins INT NOT NULL, CHANGE nbr_autres nbr_autres INT NOT NULL');
        $this->addSql('ALTER TABLE spip_messages CHANGE type type VARCHAR(6) NOT NULL, CHANGE rv rv VARCHAR(3) NOT NULL, CHANGE statut statut VARCHAR(6) NOT NULL, CHANGE id_auteur id_auteur BIGINT NOT NULL');
        $this->addSql('ALTER TABLE spip_petitions CHANGE id_article id_article BIGINT NOT NULL, CHANGE email_unique email_unique CHAR(3) NOT NULL, CHANGE site_obli site_obli CHAR(3) NOT NULL, CHANGE site_unique site_unique CHAR(3) NOT NULL, CHANGE message message CHAR(3) NOT NULL');
        $this->addSql('ALTER TABLE spip_visites CHANGE date date DATE NOT NULL, CHANGE visites visites INT UNSIGNED NOT NULL');
        $this->addSql('ALTER TABLE spip_mots DROP extra, DROP composition, DROP composition_lock, CHANGE id_groupe id_groupe BIGINT NOT NULL');
        $this->addSql('ALTER TABLE spip_auteurs_liens CHANGE id_auteur id_auteur BIGINT NOT NULL, CHANGE id_objet id_objet BIGINT NOT NULL, CHANGE objet objet VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE spip_urls CHANGE url url VARCHAR(255) NOT NULL, CHANGE id_parent id_parent BIGINT NOT NULL, CHANGE id_objet id_objet BIGINT NOT NULL, CHANGE perma perma TINYINT(1) NOT NULL, CHANGE langue langue VARCHAR(10) NOT NULL');
        $this->addSql('ALTER TABLE spip_jobs_liens CHANGE id_job id_job BIGINT NOT NULL, CHANGE id_objet id_objet BIGINT NOT NULL, CHANGE objet objet VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE spip_plugins CHANGE prefixe prefixe VARCHAR(30) NOT NULL, CHANGE categorie categorie VARCHAR(100) NOT NULL, CHANGE vmax vmax VARCHAR(24) NOT NULL, CHANGE compatibilite_spip compatibilite_spip VARCHAR(24) NOT NULL, CHANGE branches_spip branches_spip VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX objet ON spip_documents_liens');
        $this->addSql('ALTER TABLE spip_documents_liens CHANGE id_document id_document BIGINT NOT NULL, CHANGE id_objet id_objet BIGINT NOT NULL, CHANGE objet objet VARCHAR(25) NOT NULL, CHANGE rang_lien rang_lien INT NOT NULL');
        $this->addSql('CREATE INDEX objet ON spip_documents_liens (objet)');
        $this->addSql('ALTER TABLE spip_auteurs DROP extra, DROP composition, DROP composition_lock, CHANGE nom nom TEXT DEFAULT NULL, CHANGE bio bio TEXT DEFAULT NULL, CHANGE nom_site nom_site TINYTEXT DEFAULT NULL, CHANGE url_site url_site TEXT DEFAULT NULL, CHANGE login login VARCHAR(255) DEFAULT NULL, CHANGE low_sec low_sec TINYTEXT DEFAULT NULL, CHANGE statut statut VARCHAR(255) DEFAULT NULL, CHANGE maj maj DATETIME DEFAULT NULL, CHANGE pgp pgp TEXT DEFAULT NULL, CHANGE htpass htpass TINYTEXT DEFAULT NULL, CHANGE en_ligne en_ligne DATETIME DEFAULT NULL, CHANGE imessage imessage VARCHAR(3) DEFAULT NULL, CHANGE messagerie messagerie VARCHAR(3) DEFAULT NULL, CHANGE alea_actuel alea_actuel TINYTEXT DEFAULT NULL, CHANGE alea_futur alea_futur TINYTEXT DEFAULT NULL, CHANGE cookie_oubli cookie_oubli TINYTEXT DEFAULT NULL, CHANGE source source VARCHAR(10) DEFAULT \'spip\', CHANGE lang lang VARCHAR(10) DEFAULT NULL, CHANGE webmestre webmestre VARCHAR(3) DEFAULT \'non\', CHANGE roles roles JSON NOT NULL');
        $this->addSql('DROP INDEX IDX_86C49ABF3BD38833 ON spip_articles');
        $this->addSql('ALTER TABLE spip_articles DROP rubrique_id');
        $this->addSql('ALTER TABLE spip_visites_articles CHANGE date date DATE NOT NULL, CHANGE id_article id_article INT UNSIGNED NOT NULL, CHANGE visites visites INT UNSIGNED NOT NULL');
        $this->addSql('DROP INDEX extension ON spip_types_documents');
        $this->addSql('ALTER TABLE spip_types_documents CHANGE extension extension VARCHAR(10) NOT NULL, CHANGE mime_type mime_type VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE symfony_demo_user CHANGE roles roles JSON NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8FB094A1F85E0677 ON symfony_demo_user (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8FB094A1E7927C74 ON symfony_demo_user (email)');
        $this->addSql('ALTER TABLE spip_groupes_mots CHANGE unseul unseul VARCHAR(3) NOT NULL, CHANGE obligatoire obligatoire VARCHAR(3) NOT NULL, CHANGE minirezo minirezo VARCHAR(3) NOT NULL, CHANGE comite comite VARCHAR(3) NOT NULL, CHANGE forum forum VARCHAR(3) NOT NULL');
        $this->addSql('ALTER TABLE spip_signatures CHANGE statut statut VARCHAR(10) NOT NULL, CHANGE id_petition id_petition BIGINT NOT NULL');
        $this->addSql('ALTER TABLE spip_referers_articles CHANGE id_article id_article INT UNSIGNED NOT NULL, CHANGE referer_md5 referer_md5 BIGINT UNSIGNED NOT NULL, CHANGE referer referer VARCHAR(255) NOT NULL, CHANGE visites visites INT UNSIGNED NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE spip_articles ADD rubrique_id BIGINT NOT NULL');
        $this->addSql('CREATE INDEX IDX_86C49ABF3BD38833 ON spip_articles (rubrique_id)');
        $this->addSql('ALTER TABLE spip_auteurs ADD extra LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ADD composition VARCHAR(255) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, ADD composition_lock TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE nom nom TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE bio bio TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE nom_site nom_site TINYTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE url_site url_site TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE login login VARCHAR(255) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_bin`, CHANGE low_sec low_sec TINYTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE statut statut VARCHAR(255) CHARACTER SET utf8 DEFAULT \'0\' NOT NULL COLLATE `utf8_general_ci`, CHANGE webmestre webmestre CHAR(3) CHARACTER SET utf8 DEFAULT \'non\' NOT NULL COLLATE `utf8_general_ci`, CHANGE maj maj DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE pgp pgp TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE htpass htpass TINYTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE en_ligne en_ligne DATETIME DEFAULT \'0000-00-00 00:00:00\' NOT NULL, CHANGE alea_actuel alea_actuel TINYTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE alea_futur alea_futur TINYTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE cookie_oubli cookie_oubli TINYTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE source source VARCHAR(10) CHARACTER SET utf8 DEFAULT \'spip\' NOT NULL COLLATE `utf8_general_ci`, CHANGE lang lang VARCHAR(10) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE imessage imessage CHAR(3) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE messagerie messagerie CHAR(3) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE roles roles VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE spip_auteurs_liens CHANGE id_auteur id_auteur BIGINT DEFAULT 0 NOT NULL, CHANGE id_objet id_objet BIGINT DEFAULT 0 NOT NULL, CHANGE objet objet VARCHAR(25) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE spip_depots CHANGE type type VARCHAR(10) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE url_serveur url_serveur VARCHAR(255) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE url_brouteur url_brouteur VARCHAR(255) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE url_archives url_archives VARCHAR(255) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE url_commits url_commits VARCHAR(255) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE xml_paquets xml_paquets VARCHAR(255) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE sha_paquets sha_paquets VARCHAR(40) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE nbr_paquets nbr_paquets INT DEFAULT 0 NOT NULL, CHANGE nbr_plugins nbr_plugins INT DEFAULT 0 NOT NULL, CHANGE nbr_autres nbr_autres INT DEFAULT 0 NOT NULL');
        $this->addSql('DROP INDEX objet ON spip_documents_liens');
        $this->addSql('ALTER TABLE spip_documents_liens CHANGE id_document id_document BIGINT DEFAULT 0 NOT NULL, CHANGE id_objet id_objet BIGINT DEFAULT 0 NOT NULL, CHANGE objet objet VARCHAR(25) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE rang_lien rang_lien INT DEFAULT 0 NOT NULL');
        $this->addSql('CREATE INDEX objet ON spip_documents_liens (id_objet, objet)');
        $this->addSql('ALTER TABLE spip_groupes_mots CHANGE unseul unseul CHAR(3) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE obligatoire obligatoire CHAR(3) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE minirezo minirezo CHAR(3) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE comite comite CHAR(3) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE forum forum CHAR(3) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE spip_jobs_liens CHANGE id_job id_job BIGINT DEFAULT 0 NOT NULL, CHANGE id_objet id_objet BIGINT DEFAULT 0 NOT NULL, CHANGE objet objet VARCHAR(25) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE spip_messages CHANGE type type VARCHAR(6) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE rv rv CHAR(3) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE statut statut VARCHAR(6) CHARACTER SET utf8 DEFAULT \'0\' NOT NULL COLLATE `utf8_general_ci`, CHANGE id_auteur id_auteur BIGINT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE spip_meta CHANGE nom nom VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE spip_mots ADD extra LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ADD composition VARCHAR(255) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, ADD composition_lock TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE id_groupe id_groupe BIGINT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE spip_petitions CHANGE id_article id_article BIGINT DEFAULT 0 NOT NULL, CHANGE email_unique email_unique CHAR(3) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE site_obli site_obli CHAR(3) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE site_unique site_unique CHAR(3) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE message message CHAR(3) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE spip_plugins CHANGE prefixe prefixe VARCHAR(30) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE categorie categorie VARCHAR(100) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE vmax vmax VARCHAR(24) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE compatibilite_spip compatibilite_spip VARCHAR(24) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE branches_spip branches_spip VARCHAR(255) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE spip_referers_articles CHANGE id_article id_article INT UNSIGNED DEFAULT 0 NOT NULL, CHANGE referer_md5 referer_md5 BIGINT UNSIGNED DEFAULT 0 NOT NULL, CHANGE referer referer VARCHAR(255) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE visites visites INT UNSIGNED DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE spip_resultats MODIFY id INT UNSIGNED NOT NULL');
        $this->addSql('ALTER TABLE spip_resultats DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE spip_resultats CHANGE id id INT UNSIGNED NOT NULL');
        $this->addSql('ALTER TABLE spip_resultats ADD PRIMARY KEY (recherche, id, points)');
        $this->addSql('ALTER TABLE spip_signatures CHANGE id_petition id_petition BIGINT DEFAULT 0 NOT NULL, CHANGE statut statut VARCHAR(10) CHARACTER SET utf8 DEFAULT \'0\' NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE spip_syndic ADD extra LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ADD composition VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD composition_lock TINYINT(1) NOT NULL, CHANGE syndication syndication CHAR(3) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE moderation moderation CHAR(3) CHARACTER SET utf8 DEFAULT \'non\' COLLATE `utf8_general_ci`, CHANGE miroir miroir CHAR(3) CHARACTER SET utf8 DEFAULT \'non\' COLLATE `utf8_general_ci`, CHANGE oubli oubli CHAR(3) CHARACTER SET utf8 DEFAULT \'non\' COLLATE `utf8_general_ci`, CHANGE resume resume CHAR(3) CHARACTER SET utf8 DEFAULT \'oui\' COLLATE `utf8_general_ci`');
        $this->addSql('DROP INDEX url ON spip_syndic_articles');
        $this->addSql('ALTER TABLE spip_types_documents CHANGE extension extension VARCHAR(10) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE mime_type mime_type VARCHAR(100) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('CREATE UNIQUE INDEX extension ON spip_types_documents (extension)');
        $this->addSql('ALTER TABLE spip_urls CHANGE id_parent id_parent BIGINT DEFAULT 0 NOT NULL, CHANGE url url VARCHAR(255) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE id_objet id_objet BIGINT DEFAULT 0 NOT NULL, CHANGE perma perma TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE langue langue VARCHAR(10) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE spip_versions DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE spip_versions ADD PRIMARY KEY (id_objet, objet, id_version)');
        $this->addSql('ALTER TABLE spip_visites CHANGE date date DATE DEFAULT \'0000-00-00\' NOT NULL, CHANGE visites visites INT UNSIGNED DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE spip_visites_articles CHANGE date date DATE DEFAULT \'0000-00-00\' NOT NULL, CHANGE id_article id_article INT UNSIGNED DEFAULT 0 NOT NULL, CHANGE visites visites INT UNSIGNED DEFAULT 0 NOT NULL');
        $this->addSql('DROP INDEX UNIQ_4D5855405E237E06 ON symfony_demo_tag');
        $this->addSql('DROP INDEX UNIQ_8FB094A1F85E0677 ON symfony_demo_user');
        $this->addSql('DROP INDEX UNIQ_8FB094A1E7927C74 ON symfony_demo_user');
        $this->addSql('ALTER TABLE symfony_demo_user CHANGE roles roles VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
