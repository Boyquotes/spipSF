<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191220043312 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE spip_articles ADD rubrique_id BIGINT NOT NULL, CHANGE id_rubrique id_rubrique BIGINT NOT NULL, CHANGE statut statut VARCHAR(10) NOT NULL, CHANGE id_secteur id_secteur BIGINT NOT NULL, CHANGE visites visites INT NOT NULL, CHANGE referers referers INT NOT NULL, CHANGE popularite popularite DOUBLE PRECISION NOT NULL, CHANGE accepter_forum accepter_forum CHAR(3) NOT NULL, CHANGE lang lang VARCHAR(10) NOT NULL, CHANGE langue_choisie langue_choisie VARCHAR(3) DEFAULT \'non\', CHANGE id_trad id_trad BIGINT NOT NULL');
        $this->addSql('CREATE INDEX IDX_86C49ABF3BD38833 ON spip_articles (rubrique_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE spip_articles DROP FOREIGN KEY FK_86C49ABF3BD38833');
        $this->addSql('ALTER TABLE spip_articles ADD extra LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ADD id_version INT UNSIGNED DEFAULT 0 NOT NULL, ADD base TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD categorie TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD lien_telechargement TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD version_actuelle TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD site_officiel TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD date_derniere_sortie TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD lien_vers_test TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD liste_logiciel TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD kernel TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD nom_derniere_iso TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD repertoire_download TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD screenshot TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD md5sumetsha1 TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD pays_origine TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD etat TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD Etat_site_officiel TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD date_release TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD environnement_bureau TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD composition VARCHAR(255) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, ADD composition_lock TINYINT(1) DEFAULT \'0\' NOT NULL, DROP rubrique_id, CHANGE id_rubrique id_rubrique BIGINT DEFAULT 0 NOT NULL, CHANGE statut statut VARCHAR(10) CHARACTER SET utf8 DEFAULT \'0\' NOT NULL COLLATE `utf8_general_ci`, CHANGE id_secteur id_secteur BIGINT DEFAULT 0 NOT NULL, CHANGE visites visites INT DEFAULT 0 NOT NULL, CHANGE referers referers INT DEFAULT 0 NOT NULL, CHANGE popularite popularite DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE accepter_forum accepter_forum CHAR(3) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE lang lang VARCHAR(10) CHARACTER SET utf8 DEFAULT \'\' NOT NULL COLLATE `utf8_general_ci`, CHANGE langue_choisie langue_choisie CHAR(3) CHARACTER SET utf8 DEFAULT \'non\' COLLATE `utf8_general_ci`, CHANGE id_trad id_trad BIGINT DEFAULT 0 NOT NULL');
    }
}
