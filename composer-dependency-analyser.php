<?php

use ShipMonk\ComposerDependencyAnalyser\Config\Configuration;
use ShipMonk\ComposerDependencyAnalyser\Config\ErrorType;

return (new Configuration())
    ->ignoreErrorsOnPackage('symfony/http-client', [ErrorType::UNUSED_DEPENDENCY])
    ->ignoreErrorsOnPackage('nyholm/psr7', [ErrorType::UNUSED_DEPENDENCY])
;
