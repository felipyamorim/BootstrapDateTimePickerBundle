<?php

namespace FelipyAmorim\BootstrapDateTimePickerBundle;

use FelipyAmorim\BootstrapDateTimePickerBundle\DependencyInjection\Compiler\ResourceCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FelipyAmorimBootstrapDateTimePickerBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ResourceCompilerPass());
    }
}
