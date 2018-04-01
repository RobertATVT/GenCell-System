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

/* @param $content - contains a row of the CHARACTERS table that corresponds to the current CHARACTER ID */
function gencell_getHTML($content, $page) {
    $gencell_html = file_get_contents ( plugin_dir_path(CAUSFA_PLUGIN_URL).'/settings/cs.html', true);
    $gencell_cs = str_replace('[PLAYER]', $content->GENCELL_PLAYER, $gencell_cs);
    $gencell_cs = str_replace( '[SYSTEM]', $content->GENCELL_SYSTEM, $gencell_cs);
    $gencell_cs = str_replace( '[SETTING]', $content->GENCELL_SETTING, $gencell_cs);
    $gencell_cs = str_replace( '[NAME]', $content->CHR_NAME, $gencell_cs);
    $gencell_cs = str_replace( '[BREED]', $content->CHR_BREED, $gencell_cs);
	$gencell_cs = str_replace( '[SIRE]', $content->CHR_SIRE, $gencell_cs);
	$gencell_cs = str_replace( '[OCCUPATION]', $content->CHR_OCCUPATION, $gencell_cs);
	$gencell_cs = str_replace( '[AGE]', $content->CHR_AGE, $gencell_cs);
	$gencell_cs = str_replace( '[HEIGHT]', $content->CHR_HEIGHT, $gencell_cs);
	$gencell_cs = str_replace( '[WEIGHT]', $content->CHR_WEIGHT, $gencell_cs);
	$gencell_cs = str_replace( '[HAIR COLOR]', $content->CHR_HAIR, $gencell_cs);
	$gencell_cs = str_replace( '[EYE COLOR]', $content->CHR_EYES, $gencell_cs);
	$gencell_cs = str_replace( '[BUILD]', $content->CHR_BUILD, $gencell_cs);
	$gencell_cs = str_replace( '[DESCRIPTION]', $content->CHR_DESC, $gencell_cs);
	$gencell_cs = str_replace( '[RESIDENCE]', $content->CHR_RESIDENCE, $gencell_cs);
	$gencell_cs = str_replace( '[PHY]', $content->CHR_PHYSIQUE, $gencell_cs);
	$gencell_cs = str_replace( '[BOD]', $content->CHR_BODY, $gencell_cs);
	$gencell_cs = str_replace( '[END]', $content->CHR_ENDURANCE, $gencell_cs);
	$gencell_cs = str_replace( '[INT]', $content->CHR_INTELLECT, $gencell_cs);
	$gencell_cs = str_replace( '[MND]', $content->CHR_MIND, $gencell_cs);
	$gencell_cs = str_replace( '[FTG]', $content->CHR_FATIGUE, $gencell_cs);
	$gencell_cs = str_replace( '[SPT]', $content->CHR_SPIRIT, $gencell_cs);
	$gencell_cs = str_replace( '[SOL]', $content->CHR_SOUL, $gencell_cs);
	$gencell_cs = str_replace( '[ESS]', $content->CHR_ESSENCE, $gencell_cs);
	$gencell_cs = str_replace( '[PWS]', $content->CHR_PROWESS, $gencell_cs);
	$gencell_cs = str_replace( '[AWN]', $content->CHR_AWARENESS, $gencell_cs);
	$gencell_cs = str_replace( '[RSN]', $content->CHR_REASON, $gencell_cs);
	$gencell_cs = str_replace( '[INS]', $content->CHR_INSPIRATION, $gencell_cs);
	$gencell_cs = str_replace( '[DIS]', $content->CHR_DISCIPLINE, $gencell_cs);
	$gencell_cs = str_replace( '[CHA]', $content->CHR_CHARISMA, $gencell_cs);
	$gencell_cs = str_replace( '[ALT]', $content->CHR_ALERTNESS, $gencell_cs);
	$gencell_cs = str_replace( '[ANL]', $content->CHR_ANIMAL_HANDLING, $gencell_cs);
	$gencell_cs = str_replace( '[ART]', $content->CHR_ARTISTRY, $gencell_cs);
	$gencell_cs = str_replace( '[ATH]', $content->CHR_ATHLETICS, $gencell_cs);
	$gencell_cs = str_replace( '[DIS]', $content->CHR_DISGUISE, $gencell_cs);
	$gencell_cs = str_replace( '[FTH]', $content->CHR_FAITH, $gencell_cs);
	$gencell_cs = str_replace( '[FST]', $content->CHR_FAST_TALK, $gencell_cs);
	$gencell_cs = str_replace( '[FIN]', $content->CHR_FINANCE, $gencell_cs);
	$gencell_cs = str_replace( '[GAM]', $content->CHR_GAMING, $gencell_cs);
	$gencell_cs = str_replace( '[INT]', $content->CHR_INTIMIDATE, $gencell_cs);
	$gencell_cs = str_replace( '[INV]', $content->CHR_INVESTIGATE, $gencell_cs);
	$gencell_cs = str_replace( '[LAR]', $content->CHR_LARCENY, $gencell_cs);
	$gencell_cs = str_replace( '[LAW]', $content->CHR_LAW, $gencell_cs);
	$gencell_cs = str_replace( '[LED]', $content->CHR_LEADERSHIP, $gencell_cs);
	$gencell_cs = str_replace( '[LIN]', $content->CHR_LINGUISTICS, $gencell_cs);
	$gencell_cs = str_replace( '[LOR]', $content->CHR_LORE, $gencell_cs);
	$gencell_cs = str_replace( '[MED]', $content->CHR_MEDICINE, $gencell_cs);
	$gencell_cs = str_replace( '[OCT]', $content->CHR_OCCULT, $gencell_cs);
	$gencell_cs = str_replace( '[ORA]', $content->CHR_ORATORY, $gencell_cs);
	$gencell_cs = str_replace( '[PSY]', $content->CHR_PSYCHOLOGY, $gencell_cs);
	$gencell_cs = str_replace( '[SCI]', $content->CHR_SCIENCE, $gencell_cs);
	$gencell_cs = str_replace( '[STL]', $content->CHR_STEALTH, $gencell_cs);
	$gencell_cs = str_replace( '[STW]', $content->CHR_STEEL_WILL, $gencell_cs);
	$gencell_cs = str_replace( '[THE]', $content->CHR_THEOLOGY, $gencell_cs);
	$gencell_cs = str_replace( '[TRK]', $content->CHR_TRACKING, $gencell_cs);
	$gencell_cs = str_replace( '[NAW]', $content->CHR_NATURAL_WEAPONS, $gencell_cs);
	$gencell_cs = str_replace( '[TRF]', $content->CHR_TRAINED_FIGHTING, $gencell_cs);
	$gencell_cs = str_replace( '[FIM]', $content->CHR_FIGHTING_MASTERY, $gencell_cs);
	$gencell_cs = str_replace( '[SMM]', $content->CHR_SMALL_MELEE, $gencell_cs);
	$gencell_cs = str_replace( '[MDM]', $content->CHR_MEDIUM_MELEE, $gencell_cs);
	$gencell_cs = str_replace( '[LGM]', $content->CHR_LARGE_MELEE, $gencell_cs);
	$gencell_cs = str_replace( '[THW]', $content->CHR_THROWN_WEAPONS, $gencell_cs);
	$gencell_cs = str_replace( '[ARC]', $content->CHR_ARCHERY, $gencell_cs);
	$gencell_cs = str_replace( '[SMA]', $content->CHR_SMALL_ARMS, $gencell_cs);
	$gencell_cs = str_replace( '[HVA]', $content->CHR_HEAVY_ARMS, $gencell_cs);
	$gencell_cs = str_replace( '[REF]', $content->CHR_REFLEXES, $gencell_cs);
	$gencell_cs = str_replace( '[BLK]', $content->CHR_BLOCK, $gencell_cs);
	$gencell_cs = str_replace( '[EVA]', $content->CHR_EVASION, $gencell_cs);
	$gencell_cs = str_replace( '[INI]', $content->CHR_INITIATIVE, $gencell_cs);
	$gencell_cs = str_replace( '[MVB]', $content->CHR_MOVEMENT_BASE, $gencell_cs);
	$gencell_cs = str_replace( '[MVJ]', $content->CHR_MOVEMENT_JOG, $gencell_cs);
	$gencell_cs = str_replace( '[MVS]', $content->CHR_MOVEMENT_SPRINT, $gencell_cs);
	$gencell_cs = str_replace( '[MVR]', $content->CHR_MOVEMENT_RUN, $gencell_cs);
	$gencell_cs = str_replace( '[MVE]', $content->CHR_MOVEMENT_ESCAPE, $gencell_cs);

    return $gencell_cs;
}


/* 
function causfa_filter_impact( $value_total, $total_number, $missing_total, $missing_number) {
    $asset_impact_html = file_get_contents ( plugin_dir_path(CAUSFA_PLUGIN_URL).'/assets/html/faa-impact-template.html', true);
    $asset_impact_html = str_replace('[TOTAL VALUE]', ('$'.$value_total), $asset_impact_html);
    $asset_impact_html = str_replace('[TOTAL NUMBER]', $total_number, $asset_impact_html);
    $asset_impact_html = str_replace( '[TOTAL MISSING VALUE]', ('$'.$missing_total), $asset_impact_html);
    $asset_impact_html = str_replace('[MISSING NUMBER]', $missing_number, $asset_impact_html);
    return $asset_impact_html;
}*/

/**
 * @param $content - contains a row of the asset table that corresponds to an item that belongs to the current user
 * @param $asset_index - contains the index value of the $content in regards to all of the assets in the current users name
 * @return array - returns an array containing two keys
 *      $asset_info_html - contains the html of the asset that corresponds to the content passed into the function
 *      $missing - contains a bool that indicates if the asset has a status of missing or not.
 */