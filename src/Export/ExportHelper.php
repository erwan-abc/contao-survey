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

namespace Hschottm\SurveyBundle\Export;

require '../repositories/phpspreadsheet/vendor/autoload.php';

class ExportHelper
{
    public static function getExporter()
    {
        $exporter = null;

        if (class_exists('\PhpOffice\PhpSpreadsheet\Spreadsheet')) {
            $exporter = new ExcelExporterPhpSpreadsheet();
        } elseif (class_exists('Hschottm\ExcelXLSBundle\xlsexport')) {
            $exporter = new ExcelExporterXLSExport();
        } else {
            $exporter = new CSVExporter();
        }

        return $exporter;
    }
}
