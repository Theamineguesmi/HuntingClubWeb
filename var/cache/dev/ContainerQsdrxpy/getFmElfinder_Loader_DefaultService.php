<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fm_elfinder.loader.default' shared service.

include_once $this->targetDirs[3].'\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Loader\\ElFinderLoader.php';

return $this->services['fm_elfinder.loader.default'] = new \FM\ElfinderBundle\Loader\ElFinderLoader(${($_ = isset($this->services['fm_elfinder.configurator.default']) ? $this->services['fm_elfinder.configurator.default'] : $this->load('getFmElfinder_Configurator_DefaultService.php')) && false ?: '_'});
