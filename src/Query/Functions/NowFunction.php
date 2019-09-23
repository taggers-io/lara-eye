<?php

namespace Railken\LaraEye\Query\Functions;

use Railken\SQ\Languages\BoomTree\Nodes as Nodes;

class NowFunction extends BaseFunction
{
    /**
     * The node that will trigger the visitor.
     *
     * @var string
     */
    protected $node = Nodes\NowFunctionNode::class;

    /**
     * The string function for the query.
     *
     * @var string
     */
    protected $name = 'NOW';
}
