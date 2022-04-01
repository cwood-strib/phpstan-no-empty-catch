<?php

namespace App;

use PhpParser\Node;
use PhpParser\Node\Stmt\Catch_;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\RuleErrorBuilder;

class CatchRule implements \PHPStan\Rules\Rule
{

	public function getNodeType(): string
	{
        return \PhpParser\Node\Stmt\Catch_::class;
	}

	public function processNode(Node $node, Scope $scope): array
	{
        if (empty($node->stmts)) {
            return [RuleErrorBuilder::message(
                'Must provide statements in catch block. Consider logging.'
            )->build()];
        }

        return [];
	}

}