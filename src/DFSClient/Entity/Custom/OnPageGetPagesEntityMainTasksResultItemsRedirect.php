<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetPagesEntityMainTasksResultItemsRedirectChecks;

class OnPageGetPagesEntityMainTasksResultItemsRedirect
{
    /**
     * @var null|string;
     */
    public $resource_type = null;

    /**
     * @var null|integer;
     */
    public $status_code = null;

    /**
     * @var null|string;
     */
    public $location = null;

    /**
     * @var null|string;
     */
    public $url = null;

    /**
     * @var null|integer;
     */
    public $size = null;

    /**
     * @var null|integer;
     */
    public $encoded_size = null;

    /**
     * @var null|integer;
     */
    public $total_transfer_size = null;

    /**
     * @var null|string;
     */
    public $fetch_time = null;

    /**
     * @var null|OnPageGetPagesEntityMainTasksResultItemsRedirectFetch_timing;
     */
    public $fetch_timing = null;

    /**
     * @var null|OnPageGetPagesEntityMainTasksResultItemsRedirectCache_control;
     */
    public $cache_control = null;

    /**
     * @var null|OnPageGetPagesEntityMainTasksResultItemsRedirectChecks;
     */
    public $checks = null;

    /**
     * @var null|null;
     */
    public $content_encoding = null;

    /**
     * @var null|string;
     */
    public $media_type = null;

    /**
     * @var null|string;
     */
    public $server = null;

    /**
     * @var null|boolean;
     */
    public $is_resource = null;
}
