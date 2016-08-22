<?php

namespace SupplyChain\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class TemplateInstaller extends LibraryInstaller
{

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $prefix = substr($package->getPrettyName(), 0, 19);
        if ('supplychain1/theme-' !== $prefix) {
            throw new \InvalidArgumentException(
                'Unable to install template, templates '
                .'should always start their package name with '
                .'"supplychain1/theme-"'
            );
        }

        return 'web/theme/'.substr($package->getPrettyName(), 19);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'bolt-template' === $packageType;
    }
}