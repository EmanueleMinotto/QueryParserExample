<?php

namespace QueryParserExample\Node;

use EmanueleMinotto\SearchQueryParser\Node\AbstractUnary;

class FirstnameOperator extends AbstractUnary
{
    public function evaluate()
    {
        global $queryBuilder;

        return $queryBuilder->expr()->eq('u.firstname', $this->node->evaluate());
    }
}
