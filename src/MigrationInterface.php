<?php

namespace VekaServer\Interfaces;

interface MigrationInterface
{

    /**
     * EXECUTER EN PREMIER
     * a utiliser pour les methode d'autocommit
     * Create / ALTER (sans breaking change)
     *
     * SONT DOWNGRADE ASSOCIÉ DOIT ETRE : downgrade_nettoyage
     */
    public function upgrade_creation();

    /**
     * EXECUTER EN SECOND
     * a utiliser pour les methodes supportant les transactions
     * INSERT / UPDATE / DELETE / SELECT
     *
     * SONT DOWNGRADE ASSOCIÉ DOIT ETRE : downgrade_data
     */
    public function upgrade_data();

    /**
     * EXECUTER EN TROISIEME
     * a utiliser pour les methode d'autocommit IRREVERSIBLE
     * Create / DROP / TRUNCATE / ALTER (avec breaking change)
     *
     * SONT DOWNGRADE ASSOCIÉ DOIT ETRE : downgrade_creation
     */
    public function upgrade_nettoyage();

    /**
     * EXECUTR EN PREMIER
     * a utiliser pour les methode d'autocommit
     * Create / ALTER (sans breaking change)
     */
    public function downgrade_creation();

    /**
     * EXECUTER EN SECOND
     * a utiliser pour les methodes supportant les transactions
     * INSERT / UPDATE / DELETE / SELECT
     */
    public function downgrade_data();

    /**
     * EXECUTER EN TROISIEME
     * a utiliser pour les methode d'autocommit IRREVERSIBLE
     * Create / DROP / TRUNCATE / ALTER (avec breaking change)
     */
    public function downgrade_nettoyage();

}
