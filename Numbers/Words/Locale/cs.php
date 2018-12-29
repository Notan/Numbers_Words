<?php
/**
 * Numbers_Words
 *
 * PHP version 5
 *
 * Copyright (c) 1997-2006 The PHP Group
 *
 * This source file is subject to version 3.01 of the PHP license,
 * that is bundled with this package in the file LICENSE, and is
 * available at through the world-wide-web at
 * http://www.php.net/license/3_01.txt
 * If you did not receive a copy of the PHP license and are unable to
 * obtain it through the world-wide-web, please send a note to
 * license@php.net so we can mail you a copy immediately.
 *
 * @category Numbers
 * @package  Numbers_Words
 * @author   Petr 'PePa' Pavel <petr.pavel@pepa.info>
 * @license  PHP 3.01 http://www.php.net/license/3_01.txt
 * @version  SVN: $Id$
 * @link     http://pear.php.net/package/Numbers_Words
 */

/**
 * Class for translating numbers into Czech.
 *
 * @author Petr 'PePa' Pavel
 * @package Numbers_Words
 */

/**
 * Include needed files
 */
require_once "Numbers/Words.php";

/**
 * Class for translating numbers into Czech.
 *
 * @category Numbers
 * @package  Numbers_Words
 * @author   Petr 'PePa' Pavel <petr.pavel@pepa.info>
 * @license  PHP 3.01 http://www.php.net/license/3_01.txt
 * @link     http://pear.php.net/package/Numbers_Words
 */
class Numbers_Words_Locale_cs extends Numbers_Words
{

    // {{{ properties

    /**
     * Locale name
     * @var string
     * @access public
     */
    var $locale = 'cs';

    /**
     * Language name in English
     * @var string
     * @access public
     */
    var $lang = 'Czech';

    /**
     * Native language name
     * @var string
     * @access public
     */
    var $lang_native = 'Czech';

    /**
     * The word for the minus sign
     * @var string
     * @access private
     */
    var $_minus = 'mínus'; // minus sign

    /**
     * The sufixes for exponents (singular and plural)
     * Names partly based on:
     * http://cs.wikipedia.org/wiki/P%C5%99edpony_soustavy_SI
     * the rest was translated from lang.en_GB.php
     * names verified by "Ustav pro jazyk cesky" only up to Septilion
     * (they could verify only the lingual matter - not the mathematical one)
     * @var array
     * @access private
     */
    var $_exponent = array(
        0 => array(''),
        3 => array('tisíc','tisíce','tisíc'),
        6 => array('milion','miliony','milionů'),
        9 => array('miliarda','miliardy','miliard'),
       12 => array('bilion','biliony','bilionů'),
       15 => array('biliarda','biliardy','biliard'),
       18 => array('trilion','triliony','trilionů'),
       21 => array('triliarda','triliardy','triliard'),

       24 => array('kvadrilion','kvadriliony','kvadrilionů'),
       30 => array('kvintilion','kvintiliony','kvintilionů'),
       36 => array('sextilion','sextiliony','sextilionů'),
       42 => array('septilion','septiliony','septilionů'),

       48 => array('oktilion','oktiliony','oktilionů'),
       54 => array('nonilion','noniliony','nonilionů'),
       60 => array('decilion','deciliony','decilionů'),

       66 => array('undecilion','undeciliony','undecilionů'),
       72 => array('duodecilion','duodeciliony','duodecilionů'),
       78 => array('tredecilion','tredeciliony','tredecilionů'),
       84 => array('kvatrodecilion','kvatrodeciliony','kvatrodecilionů'),
       90 => array('kvindecilion','kvindeciliony','kvindecilionů'),
       96 => array('sexdecilion','sexdeciliony','sexdecilionů'),
      102 => array('septendecilion','septendeciliony','septendecilionů'),
      108 => array('oktodecilion','oktodeciliony','oktodecilionů'),
      114 => array('novemdecilion','novemdeciliony','novemdecilionů'),
      120 => array('vigintilion','vigintiliony','vigintilionů'),
      192 => array('duotrigintilion','duotrigintiliony','duotrigintilionů'),
      600 => array('centilion','centiliony','centilionů')

        );

    /**
     * The array containing the forms of Czech word for "hundred"
     * @var array
     * @access private
     */
    var $_hundreds = array(
        0 => 'sto', 'stý', 'sta', 'set'
    );

    /**
     * The array containing the digits (indexed by the digits themselves).
     * @var array
     * @access private
     */
    var $_digits = array(
        0 => 'nula', 'jedna', 'dva', 'tři', 'čtyři',
        'pět', 'šest', 'sedm', 'osm', 'devět'
    );

    /**
     * The word separator
     * @var string
     * @access private
     */
    var $_sep = ' ';
    public $def_currency = 'USD';  // Serbian money
    var $_currency_names = array(
        'ALL' => array(array('lek'), array('qindarka')),
        'AUD' => array(array('Australian dollar'), array('cent')),
        'BAM' => array(array('convertible marka'), array('fenig')),
        'BGN' => array(array('lev'), array('stotinka')),
        'BRL' => array(array('real'), array('centavos')),
        'BYR' => array(array('Belarussian rouble'), array('kopiejka')),
        'CAD' => array(array('Canadian dollar'), array('cent')),
        'CHF' => array(array('Swiss franc'), array('rapp')),
        'CYP' => array(array('Cypriot pound'), array('cent')),
        'CZK' => array(array('Czech koruna'), array('halerz')),
        'DKK' => array(array('Danish krone'), array('ore')),
        'EEK' => array(array('kroon'), array('senti')),
        'EUR' => array(array('euro'), array('euro-cent')),
        'GBP' => array(array('pound', 'pounds'), array('pence', 'pence')),
        'HKD' => array(array('Hong Kong dollar'), array('cent')),
        'HRK' => array(array('Croatian kuna'), array('lipa')),
        'HUF' => array(array('forint'), array('filler')),
        'ILS' => array(array('new sheqel','new sheqels'), array('agora','agorot')),
        'ISK' => array(array('Icelandic krona'), array('aurar')),
        'JPY' => array(array('yen'), array('sen')),
        'LTL' => array(array('litas'), array('cent')),
        'LVL' => array(array('lat'), array('sentim')),
        'MKD' => array(array('Macedonian dinar'), array('deni')),
        'MTL' => array(array('Maltese lira'), array('centym')),
        'NOK' => array(array('Norwegian krone'), array('oere')),
        'PLN' => array(array('zloty', 'zlotys'), array('grosz')),
        'ROL' => array(array('Romanian leu'), array('bani')),
        'RUB' => array(array('Russian Federation rouble'), array('kopiejka')),
        'SEK' => array(array('Swedish krona'), array('oere')),
        'SIT' => array(array('Tolar'), array('stotinia')),
        'SKK' => array(array('Slovak koruna'), array()),
        'TRL' => array(array('lira'), array('kuru')),
        'UAH' => array(array('hryvna'), array('cent')),
        'USD' => array(array('dollar'), array('cent')),
        'YUM' => array(array('dinars'), array('para')),
        'ZAR' => array(array('rand'), array('cent')),
        'MGA' => array(array('ariary'), array(''))
    );
    // }}}
    // {{{ _toWords()

    /**
     * Converts a number to its word representation
     * in Czech language
     *
     * @param integer $num       An integer between -infinity and infinity inclusive :)
     *                           that need to be converted to words
     * @param integer $power     The power of ten for the rest of the number to the right.
     *                           Optional, defaults to 0.
     * @param integer $powsuffix The power name to be added to the end of the return string.
     *                            Used internally. Optional, defaults to ''.
     *
     * @return string  The corresponding word representation
     *
     * @access protected
     * @author Petr 'PePa' Pavel <petr.pavel@pepa.info>
     * @since  Numbers_Words 0.16.3
     */
    function _toWords($num, $power = 0, $powsuffix = '')
    {
        $ret = '';

        // add a minus sign
        if (substr($num, 0, 1) == '-') {
            $ret = $this->_sep . $this->_minus;
            $num = substr($num, 1);
        }

        // strip excessive zero signs and spaces
        $num = trim($num);
        $num = preg_replace('/^0+/', '', $num);

        if (strlen($num) > 3) {
            $maxp = strlen($num)-1;
            $curp = $maxp;
            for ($p = $maxp; $p > 0; --$p) { // power

                // check for highest power
                if (isset($this->_exponent[$p])) {
                    // send substr from $curp to $p
                    $snum = substr($num, $maxp - $curp, $curp - $p + 1);
                    $snum = preg_replace('/^0+/', '', $snum);
                    if ($snum !== '') {
                        $cursuffix = $this->_exponent[$power][count($this->_exponent[$power])-1];
                        if ($powsuffix != '') {
                            $cursuffix .= $this->_sep . $powsuffix;
                        }

                        $ret .= $this->_toWords($snum, $p, $cursuffix);
                    }
                    $curp = $p - 1;
                    continue;
                }
            }
            $num = substr($num, $maxp - $curp, $curp - $p + 1);
            if ($num == 0) {
                return $ret;
            }
        } elseif ($num == 0 || $num == '') {
            return $this->_sep . $this->_digits[0];
        }

        $h = $t = $d = 0;

        switch(strlen($num)) {
        case 3:
            $h = (int)substr($num, -3, 1);

        case 2:
            $t = (int)substr($num, -2, 1);

        case 1:
            $d = (int)substr($num, -1, 1);
            break;

        case 0:
            return;
            break;
        }

        if ($h) {

            // inflection of the word "hundred"
            if ($h == 1) {
                $ret .= $this->_sep . $this->_hundreds[0];
            } elseif ($h == 2) {
                $ret .= $this->_sep . "dvě" . $this->_sep . $this->_hundreds[1];
            } elseif ( ($h > 1) && ($h < 5) ) {
                $ret .= $this->_sep . $this->_digits[$h] . $this->_sep . $this->_hundreds[2];
            } else {		//if ($h >= 5)
                $ret .= $this->_sep . $this->_digits[$h] . $this->_sep . $this->_hundreds[3];
            }
            // in English only - add ' and' for [1-9]01..[1-9]99
            // (also for 1001..1099, 10001..10099 but it is harder)
            // for now it is switched off, maybe some language purists
            // can force me to enable it, or to remove it completely
            // if (($t + $d) > 0)
            //   $ret .= $this->_sep . 'and';
        }

        // ten, twenty etc.
        switch ($t) {
        case 2:
        case 3:
        case 4:
            $ret .= $this->_sep . $this->_digits[$t] . 'cet';
            break;

        case 5:
            $ret .= $this->_sep . 'padesát';
            break;

        case 6:
            $ret .= $this->_sep . 'šedesát';
            break;

        case 7:
            $ret .= $this->_sep . 'sedmdesát';
            break;

        case 8:
            $ret .= $this->_sep . 'osmdesát';
            break;

        case 9:
            $ret .= $this->_sep . 'devadesát';
            break;

        case 1:
            switch ($d) {
            case 0:
                $ret .= $this->_sep . 'deset';
                break;

            case 1:
                $ret .= $this->_sep . 'jedenáct';
                break;

            case 4:
                $ret .= $this->_sep . 'čtrnáct';
                break;

            case 5:
                $ret .= $this->_sep . 'patnáct';
                break;

            case 9:
                $ret .= $this->_sep . 'devatenáct';
                break;

            case 2:
            case 3:
            case 6:
            case 7:
            case 8:
                $ret .= $this->_sep . $this->_digits[$d] . 'náct';
                break;
            }
            break;
        }

        if (($t != 1) && ($d > 0) && (($power == 0) || ($num > 1))) {
            $ret .= $this->_sep . $this->_digits[$d];
        }

        if ($power > 0) {
            if (isset($this->_exponent[$power])) {
                $lev = $this->_exponent[$power];
            }

            if (!isset($lev) || !is_array($lev)) {
                return null;
            }

            // inflection of exponental words
            if ($num == 1) {
                $idx = 0;
            } elseif ( (($num > 1) && ($num < 5)) || ((intval("$t$d") > 1) && (intval("$t$d") < 5))) {
                $idx = 1;
            } else {
                $idx = 2;
            }

            $ret .= $this->_sep . $lev[$idx];
        }

        if ($powsuffix != '') {
            $ret .= $this->_sep . $powsuffix;
        }

        return $ret;
    }
    // }}}
    /**
     * Converts a currency value to its word representation
     * (with monetary units) in English language
     *
     * @param integer       $int_curr   An international currency symbol as defined by the ISO 4217 standard (three characters)
     * @param integer       $decimal A money total amount without fraction part (e.g. amount of dollars)
     * @param integer|bool  $fraction   Fractional part of the money amount (e.g. amount of cents)
     *                                  Optional. Defaults to false.
     * @param integer|bool  $convert_fraction   Convert fraction to words (left as numeric if set to false).
     *                                          Optional. Defaults to true.
     * @return string  The corresponding word representation for the currency
     *
     * @access public
     * @author Piotr Klaban <makler@man.torun.pl>
     * @since  Numbers_Words 0.13.1
     */
    function toCurrencyWords($int_curr, $decimal, $fraction = false, $convert_fraction = true)
    {
        $int_curr = strtoupper($int_curr);
        if (!isset($this->_currency_names[$int_curr])) {
            $int_curr = $this->def_currency;
        }
        $curr_names = $this->_currency_names[$int_curr];

        $ret = trim($this->_toWords($decimal));
        $lev = ($decimal == 1) ? 0 : 1;
        if ($lev > 0) {
            if (count($curr_names[0]) > 1) {
                $ret .= $this->_sep . $curr_names[0][$lev];
            } else {
                $ret .= $this->_sep . $curr_names[0][0] . 's';
            }
        } else {
            $ret .= $this->_sep . $curr_names[0][0];
        }

        if ($fraction !== false) {
            if ($convert_fraction) {
                $ret .= $this->_sep . trim($this->_toWords($fraction));
            } else {
                $ret .= $this->_sep . $fraction;
            }
            $lev = ($fraction == 1) ? 0 : 1;
            if ($lev > 0) {
                if (count($curr_names[1]) > 1) {
                    $ret .= $this->_sep . $curr_names[1][$lev];
                } else {
                    $ret .= $this->_sep . $curr_names[1][0] . 's';
                }
            } else {
                $ret .= $this->_sep . $curr_names[1][0];
            }
        }
        return $ret;
    }
}
