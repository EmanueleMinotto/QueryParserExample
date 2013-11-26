<?php

namespace QueryParserExample\Node;

use EmanueleMinotto\SearchQueryParser\Node\AbstractBinary;

class LogicalOr extends AbstractBinary
{
    public function evaluate()
    {
        global $queryBuilder;

        return $queryBuilder->expr()->orX(
            $this->left->evaluate(),
            $this->right->evaluate()
        );
    }
}
