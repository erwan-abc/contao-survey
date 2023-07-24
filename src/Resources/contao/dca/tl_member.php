<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\ArrayUtil;
use Contao\Config;

ArrayUtil::arrayInsert($GLOBALS['TL_DCA']['tl_member']['fields'],count($GLOBALS['TL_DCA']['tl_member']['fields']),array
(
	'chefProjet'         =>
	[
		'label'     	=>  &$GLOBALS['TL_LANG']['tl_member']['chefProjet'],
		'inputType'     => 'text',
		'eval'      	=> ['maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'],
		'sql'		    => "varchar(255) NOT NULL default ''"
	],
	'typeProjet'         =>
	[
		'label'     	=>  &$GLOBALS['TL_LANG']['tl_member']['typeProjet'],
		'inputType'     => 'text',
		'eval'      	=> ['maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'],
		'sql'		    => "varchar(255) NOT NULL default ''"
	],
));

$palette = PaletteManipulator::create()
    ->addLegend('survey_legend', 'account_legend', PaletteManipulator::POSITION_BEFORE)
    ->addField('chefProjet', 'survey_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('typeProjet', 'survey_legend', PaletteManipulator::POSITION_APPEND);

// if Checkbox-Generator is set (Settings)
// Config::get('login_link_generateCheckbox') ?
//     $palette->addField('loginLinkGen', 'loginLink_legend', PaletteManipulator::POSITION_APPEND) : '';

$palette->applyToPalette('default', 'tl_member');

// class tl_loginLink extends Backend
// {

    // protected function generateUniqueKey(){

    //     // set default-length
    //     $intLength = null != Config::get('login_link_defaultKeyLength') ? Config::get('login_link_defaultKeyLength') : 25;
    //     $strKey = substr(uniqid(mt_rand()).uniqid(mt_rand()),0,50);

    //     if(null == MemberModel::findBy('loginLink',$strKey))
    //         return $strKey;

    //     $this->generateUniqueKey();
    // }

    // public function onLoadGenerateKey($varValue, DataContainer $dc){

    //         //check if key exist AND autokey is set (Settings)
    //         if(!strlen($varValue) && Config::get('login_link_autoKey'))
    //             return $this->generateUniqueKey();
    //         return $varValue;
    // }

	// public function generateNewLoginKey($varValue, DataContainer $dc)
	// {
	// 	if($varValue):
    //         $objMember = MemberModel::findById($dc->id);
    //         $objMember->loginLink = $this->generateUniqueKey();
    //         $objMember->save();
	// 	endif;
	// 	return 0; // reset checkbox
	// }
// }
