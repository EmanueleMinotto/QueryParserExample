<?php

namespace QueryParserExample;

use EmanueleMinotto\SearchQueryParser\Token;
use EmanueleMinotto\SearchQueryParser\Lexer as ParserLexer;

/**
 * Tokenize an expression
 */
class Lexer extends ParserLexer
{
    /**
     * Expression tokens
     *
     * @var int
     */
    const T_CATEGORY_FIRSTNAME = 8;  // firstname:
    const T_CATEGORY_LASTNAME  = 9;  // lastname:
    const T_SQL_STRING         = 10; // [a-z+]

    /**
     * Map the constant values with its token type
     *
     * @var int[]
     */
    protected $constTokens = array(
        'firstname:' => self::T_CATEGORY_FIRSTNAME,
        'lastname:' => self::T_CATEGORY_LASTNAME,
    );
}
