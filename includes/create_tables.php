<?php
/*
* Plugin Name: Antagonist Games Gen-CelL System
* Plugin URI: http://antagonistgames.com
* Description: The OFficial Antagonist Games, Inc. Gen_CelL System Plugin for a live rulebook and character sheet generator.
* Version: 0.01
* Author: Robert Vaughan
* Author URI: http://antagonistgames.com
* License: Not for Redistribution
*/

/**
 * This function checks for the existence of each of the tables required by the plugin and if they do not
 * exist then they are created
 */
function create_tables() {
    global $wpdb;
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    $table_name = 'gencell_characters';
    $charset_collate = $wpdb->get_charset_collate();
    if ($wpdb->get_var("SHOW TABLES LIKE '".$table_name."'") != $table_name) {
        $sql = "CREATE TABLE ".$table_name." (
        CHR_ID INT NOT NULL AUTO_INCREMENT,
		GENCELL_PLAYER varchar(128) NOT NULL,
		GENCELL_SYSTEM INT NOT NULL,
		GENCELL_SETTING varchar(32) NOT NULL,
		CHR_NAME varchar(128) NOT NULL,
        CHR_BREED varchar(32) NOT NULL,
		CHR_SIRE varchar(128),
		CHR_OCCUPATION varchar(32),
		CHR_AGE varchar(5),
		CHR_HEIGHT varchar(6),
		CHR_WEIGHT varchar(9),
		CHR_HAIR varchar(16),
		CHR_EYES varchar(16),
		CHR_BUILD varchar(16),
		CHR_DESC varchar(400),
		CHR_RESIDENCE varchar(128),
		CHR_PHYSIQUE INT NOT NULL,
		CHR_BODY INT NOT NULL,
		CHR_BODY_CURRENT INT NOT NULL,
		CHR_ENDURANCE INT NOT NULL,
		CHR_ENDURANCE_CURRENT INT NOT NULL,
		CHR_INTELLECT INT NOT NULL,
		CHR_MIND INT NOT NULL,
		CHR_MIND_CURRENT INT NOT NULL,
		CHR_FATIGUE INT NOT NULL,
		CHR_FATIGUE_CURRENT INT NOT NULL,
		CHR_SPIRIT INT NOT NULL,
		CHR_SOUL INT NOT NULL,
		CHR_SOUL_CURRENT INT NOT NULL,
		CHR_ESSENCE INT NOT NULL,
		CHR_ESSENCE_CURRENT INT NOT NULL,
		CHR_PROWESS INT NOT NULL,
		CHR_AWARENESS INT NOT NULL,
		CHR_REASON INT NOT NULL,
		CHR_INSPIRATION INT NOT NULL,
		CHR_DISCIPLINE INT NOT NULL,
		CHR_CHARISMA INT NOT NULL,
		CHR_ALERTNESS INT,
		CHR_ANIMAL_HANDLING INT,
		CHR_ARTISTRY INT,
		CHR_ATHLETICS INT,
		CHR_DISGUISE INT,
		CHR_FAITH INT,
		CHR_FAST_TALK INT,
		CHR_FINANCE INT,
		CHR_GAMING INT,
		CHR_INTIMIDATE INT,
		CHR_INVESTIGATE INT,
		CHR_LARCENY INT,
		CHR_LAW INT,
		CHR_LEADERSHIP INT,
		CHR_LINGUISTICS INT,
		CHR_LORE INT,
		CHR_MEDICINE INT,
		CHR_OCCULT INT,
		CHR_ORATORY,
		CHR_PSYCHOLOGY INT,
		CHR_SCIENCE INT,
		CHR_STEALTH INT,
		CHR_STEEL_WILL INT,
		CHR_THEOLOGY INT,
		CHR_TRACKING INT,
		CHR_NATURAL_WEAPONS INT,
		CHR_TRAINED_FIGHTING INT,
		CHR_FIGHTING_MASTERY INT,
		CHR_SMALL_MELEE INT,
		CHR_MEDIUM_MELEE INT,
		CHR_LARGE_MELEE INT,
		CHR_THROWN_WEAPONS INT,
		CHR_ARCHERY INT,
		CHR_SMALL_ARMS INT,
		CHR_HEAVY_ARMS INT,
		CHR_REFLEXES INT,
		CHR_BLOCK INT,
		CHR_EVASION INT,
		CHR_INITIATIVE,
		CHR_MOVEMENT_BASE INT,
		CHR_MOVEMENT_JOG INT,
		CHR_MOVEMENT_SPRINT INT,
		CHR_MOVEMENT_RUN INT,
		CHR_MOVEMENT_ESCAPE INT,
        PRIMARY KEY (CHR_ID)
        ) ".$charset_collate.";";
        require_once ( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
    }
}