<?php
/** @class OverrideEntryTitle.
  * This extension adds an <entry-title> element into MediaWiki mark-up
  * allowing pages to have the displayed title overriden. For example:
  * 
  * The page /wiki/hcard can have its displayed title overridden to 'hCard'
  * The page /wiki/hcard-issues can have a title 'hCard Issue Tracking'
  * The page /wiki/t can have an overridden title 'Tantek Çelik'
  * 
  * @author Ben Ward
  */
class OverrideEntryTitle {

    public static function parseEntryTitle($text, $attributes, $parser) {
        global $wgOut;
        $parser->disableCache(); // EPIC hack. Need to instead cache/restore this value
        $wgOut->mPagetitle = $text;
        return '';
    }

    public static function registerHooks() {
        global $wgParser;
        $wgParser->setHook('entry-title', array('OverrideEntryTitle', 'parseEntryTitle'));
    }
}
?>