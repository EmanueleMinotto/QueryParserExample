<?php

namespace QueryParserExample;

use EmanueleMinotto\SearchQueryParser\Grammar as ParserGrammar;
use EmanueleMinotto\SearchQueryParser\Operator\BinaryOperator;
use EmanueleMinotto\SearchQueryParser\Operator\UnaryOperator;
use QueryParserExample\Node\FirstnameOperator;
use QueryParserExample\Node\LastnameOperator;
use QueryParserExample\Node\LogicalOr;
use QueryParserExample\Operand\StringOperand;

/**
 * The parser grammar for the example
 */
class Grammar extends ParserGrammar
{
    /**
     * Creates the grammar
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->addOperand(new StringOperand);

        $this->addOperator(new UnaryOperator(Lexer::T_CATEGORY_FIRSTNAME, 2, function ($node) {
            return new FirstnameOperator($node);
        }));
        $this->addOperator(new UnaryOperator(Lexer::T_CATEGORY_LASTNAME, 2, function ($node) {
            return new LastnameOperator($node);
        }));

        $this->addOperator(new BinaryOperator(Lexer::T_OR, 1, BinaryOperator::RIGHT, function ($left, $right) {
            return new LogicalOr($left, $right);
        }));
    }
}
