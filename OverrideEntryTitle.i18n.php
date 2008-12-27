<?php
/** Extension: OverrideEntryTitle.
  * This extension adds an <entry-title> element into MediaWiki mark-up
  * allowing pages to have the displayed title overriden. For example:
  * 
  * The page /wiki/hcard can have its displayed title overridden to 'hCard'
  * The page /wiki/hcard-issues can have a title 'hCard Issue Tracking'
  * The page /wiki/t can have an overridden title 'Tantek Çelik'
  * 
  * English strings
  * @lang English
  * @author Ben Ward 
  */


$messages = array();

$messages['en'] = array(
	'overrideentrytitle-desc' => 'Allows you to override the title of a wiki entry by using an <entry-title> element in the entry.'
);

?>