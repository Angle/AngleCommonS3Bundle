<?php
namespace Angle\Common\S3Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

use Angle\Common\S3Bundle\DependencyInjection\AngleCommonS3Extension;

class AngleCommonS3Bundle extends Bundle
{
    /**
     * {@inheritDoc}
     * @version 0.0.1
     * @since 0.0.1
     */
    public function getContainerExtension()
    {
        // this allows us to have custom extension alias
        // default convention would put a lot of underscores
        if (null === $this->extension) {
            $this->extension = new AngleCommonS3Extension();
        }

        return $this->extension;
    }
}