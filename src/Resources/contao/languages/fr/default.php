<?php

declare(strict_types=1);

/*
 * @copyright  Helmut Schottmüller 2005-2018 <http://github.com/hschottm>
 * @author     Helmut Schottmüller (hschottm)
 * @package    contao-survey
 * @license    LGPL-3.0+, CC-BY-NC-3.0
 * @see	       https://github.com/hschottm/survey_ce
 *
 * forked by pdir
 * @author     Mathias Arzberger <develop@pdir.de>
 * @link       https://github.com/pdir/contao-survey
 */

$GLOBALS['TL_LANG']['CTE']['survey'] = ['Survey', 'includes a survey.'];
$GLOBALS['TL_LANG']['MSC']['deleteAll'] = 'Delete all participants data';
$GLOBALS['TL_LANG']['MSC']['page_x_of_y'] = 'Page %s de %s';
$GLOBALS['TL_LANG']['MSC']['survey_next'] = 'Suivante';
$GLOBALS['TL_LANG']['MSC']['survey_prev'] = 'Précédente';
$GLOBALS['TL_LANG']['MSC']['survey_start'] = 'Commencer l\'enquête';
$GLOBALS['TL_LANG']['MSC']['survey_finish'] = 'Envoyer mes réponses';
$GLOBALS['TL_LANG']['MSC']['survey_finalsubmission'] = 'Merci d\'avoir participé à cette enquête.';
$GLOBALS['TL_LANG']['MSC']['cancel_survey'] = 'Quitter';

$GLOBALS['TL_LANG']['ERR']['survey_already_finished'] = 'Vous avez déjà répondu à cette enquête.';
$GLOBALS['TL_LANG']['ERR']['survey_please_enter_tan'] = 'Please enter a TAN code to start the survey.';
$GLOBALS['TL_LANG']['ERR']['survey_wrong_tan'] = 'Invalid TAN code. Please enter a valid TAN code.';
$GLOBALS['TL_LANG']['ERR']['survey_no_member'] = 'Veuillez utiliser le lien envoyé par email pour répondre à ce questionnaire.';
$GLOBALS['TL_LANG']['ERR']['survey_no_allowed_member'] = 'You don\'t have the permission to participate in this survey.';
$GLOBALS['TL_LANG']['ERR']['sumnotexact'] = 'The sum of the entered values of question "%s" is different from %s.';
$GLOBALS['TL_LANG']['ERR']['sumnotmax'] = 'The sum of the entered values of question "%s" is greater than %s.';
$GLOBALS['TL_LANG']['ERR']['selectoption'] = 'Veuillez sélectionner une option.';
$GLOBALS['TL_LANG']['ERR']['mandatory_constantsum'] = 'Please fill in the question "%s" completely.';
$GLOBALS['TL_LANG']['ERR']['mandatory_matrix'] = 'Please check a least one option in every row of question "%s".';
$GLOBALS['TL_LANG']['ERR']['mandatory_mc_sr'] = 'Veuillez cocher une réponse à la question "%s".';
$GLOBALS['TL_LANG']['ERR']['mandatory_mc_mr'] = 'Veuillez cocher au moins une réponse à la question "%s".';
$GLOBALS['TL_LANG']['ERR']['missing_other_value'] = 'You checked the additional answer but you didn\'t enter a text.';
$GLOBALS['TL_LANG']['ERR']['lower_bound'] = 'Value (%s) for "%s" is smaller than allowed (%s).';
$GLOBALS['TL_LANG']['ERR']['upper_bound'] = 'Value (%s) for "%s" is greater than allowed (%s).';
