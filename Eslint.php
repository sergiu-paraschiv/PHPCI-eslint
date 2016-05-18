<?php

namespace SergiuParaschiv\PHPCI\Plugin;

use PHPCI\Builder;
use PHPCI\Model\Build;
use Symfony\Component\Yaml\Parser as YamlParser;

/**
 * Update related Redmine issue with build status
 */
class Eslint implements \PHPCI\Plugin
{
    public function __construct(Builder $phpci, Build $build, array $options = array())
    {
        $this->phpci = $phpci;
        $this->build = $build;
    }

    public function execute()
    {
        if (!$this->enabled) {
            return true;
        }

        return true;
    }
}
