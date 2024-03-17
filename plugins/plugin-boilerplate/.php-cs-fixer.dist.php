<?php

$finder = \PhpCsFixer\Finder::create()
    ->exclude('assets')
    ->exclude('dist')
    ->exclude('templates')
    ->exclude('vendor')
    ->exclude('scripts')
    ->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setFinder($finder)
;
