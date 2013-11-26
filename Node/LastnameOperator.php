<?php

namespace QueryParserExample\Node;

use EmanueleMinotto\SearchQueryParser\Node\AbstractUnary;

class LastnameOperator extends AbstractUnary
{
    public function evaluate()
    {
        global $queryBuilder;

        return $queryBuilder->expr()->eq('u.lastname', $this->node->evaluate());
    }
}
