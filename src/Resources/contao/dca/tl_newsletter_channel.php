<?php

$GLOBALS['TL_DCA']['tl_newsletter_channel']['palettes'] = str_replace('senderName', 'senderName,survey', $GLOBALS['TL_DCA']['tl_newsletter_channel']['palettes']);

/**
 * Field
 */
$GLOBALS['TL_DCA']['tl_newsletter_channel']['fields']['survey'] = [
    'label'     => 'survey',
    'exclude'   => true,
    'inputType'               => 'select',
    'foreignKey'              => 'tl_survey.CONCAT(id," ",title)',
    'eval'                    => array(
        'doNotCopy'=>true,
        //'readonly'=>true,
        'chosen'=>true, 
        'includeBlankOption'=>true, 
        'tl_class'=>'w50'
    ),
    'sql'                     => "int(10) unsigned NOT NULL default 0",
    'relation'                => array('type'=>'belongsTo', 'load'=>'lazy')

];