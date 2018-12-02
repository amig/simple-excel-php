<?php
 
namespace Faisalman\SimpleExcel\Parser;

/**
 * SimpleExcel class for parsing Microsoft Excel TSV Spreadsheet
 *  
 * @author  Faisal Salman
 * @package Faisalman\SimpleExcel
 */
class TSVParser extends CSVParser
{
    /**
    * Defines delimiter character (TAB)
    * 
    * @access   protected
    * @var      string
    */
    protected $delimiter = "\t";
    
    /**
    * Defines valid file extension
    * 
    * @access   protected
    * @var      string
    */
    protected $file_extension = 'tsv';
}