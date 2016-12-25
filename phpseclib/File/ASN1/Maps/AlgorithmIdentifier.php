<?php

/**
 * AlgorithmIdentifier
 *
 * PHP version 5
 *
 * @category  File
 * @package   ASN1
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2016 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */

namespace phpseclib\File\ASN1\Maps;

use phpseclib\File\ASN1;

/**
 * AlgorithmIdentifier
 *
 * @package ASN1
 * @author  Jim Wigginton <terrafrost@php.net>
 * @access  public
 */
class AlgorithmIdentifier
{
    const MAP = [
        'type' => ASN1::TYPE_SEQUENCE,
        'children' => [
            'algorithm'  => ['type' => ASN1::TYPE_OBJECT_IDENTIFIER],
            'parameters' => [
                'type'     => ASN1::TYPE_ANY,
                'optional' => true
             ]
        ]
    ];
}