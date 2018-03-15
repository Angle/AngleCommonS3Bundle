<?php

namespace Angle\Common\S3Bundle\Twig;

class AmazonS3UrlTwigExtension extends \Twig_Extension
{
    protected $bucketUrl;

    public function __construct($bucketUrl)
    {
        $this->bucketUrl = $bucketUrl;
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('s3', array($this, 's3UrlFilter'))
        );
    }

    public function s3UrlFilter($s3Key)
    {
        if ($s3Key) {
            $url = $this->bucketUrl . $s3Key;
        } else {
            $url = '#';
        }

        return $url;
    }

    public function getName()
    {
        return 'amazon_s3_url_extension';
    }
}