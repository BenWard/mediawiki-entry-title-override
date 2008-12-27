<?php

/** Extension: OverrideEntryTitle.
  * This extension adds an <entry-title> element into MediaWiki mark-up
  * allowing pages to have the displayed title overriden. For example:
  * 
  * The page /wiki/hcard can have its displayed title overridden to 'hCard'
  * The page /wiki/hcard-issues can have a title 'hCard Issue Tracking'
  * The page /wiki/t can have an overridden title 'Tantek Çelik'
  * 
  * @author Ben Ward 
  */

if( !defined( 'MEDIAWIKI' ) )
	die();

$wgExtensionCredits['parserhook']['OverrideEntryTitle'] = array(
	'name'           => 'Override Entry Title',
	'svn-date' => '$LastChangedDate: 2008-07-16 23:44:00 +0100 (Wed, 16 July 2008) $',
	'svn-revision' => '$LastChangedRevision: $',
	'author'         => array( 'Ben Ward' ),
	'description'    => 'Allows you to override the title of a wiki entry by using an <entry-title> element in the entry.',
	'descriptionmsg' => 'overrideentrytitle-desc',
	'url'            => 'http://www.mediawiki.org/wiki/Extension:OverrideEntryTitle',
);

$dir = dirname(__FILE__) . '/';
$wgExtensionMessagesFiles['OverrideEntryTitle'] = $dir . 'OverrideEntryTitle.i18n.php';
$wgAutoloadClasses['OverrideEntryTitle'] = $dir . 'OverrideEntryTitle.class.php';
$wgHooks['ParserFirstCallInit'][] = 'initOverrideEntryTitle';

/**
 * Register parser hook
 */  
function initOverrideEntryTitle() {
    require_once('OverrideEntryTitle.class.php');
    OverrideEntryTitle::registerHooks();
	return true;
}

?>