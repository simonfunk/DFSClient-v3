<?php

namespace DFSClientV3\Models\DataForSeoLabsApi\Bing;

use DFSClientV3\Entity\Custom\BingPageIntersectionLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class BingPageIntersectionLive extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'dataforseo_labs/bing/page_intersection/live';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @return BingPageIntersectionLiveEntityMain
     */
    #[\Override]
    public function get(): BingPageIntersectionLiveEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $pages
     *
     * @return $this
     */
    public function setPages(array $pages)
    {
        $this->payload['pages'] = $pages;

        return $this;
    }

    /**
     * @param string $locationName
     *
     * @return $this
     */
    public function setLocationName(string $locationName)
    {
        $this->payload['location_name'] = $locationName;

        return $this;
    }

    /**
     * @param int $locationCode
     *
     * @return $this
     */
    public function setLocationCode(int $locationCode)
    {
        $this->payload['location_code'] = $locationCode;

        return $this;
    }

    /**
     * @param string $languageName
     *
     * @return $this
     */
    public function setLanguageName(string $languageName)
    {
        $this->payload['language_name'] = $languageName;

        return $this;
    }

    /**
     * @param string $languageCode
     *
     * @return $this
     */
    public function setLanguageCode(string $languageCode)
    {
        $this->payload['language_code'] = $languageCode;

        return $this;
    }

    /**
     * @param array $excludePages
     *
     * @return $this
     */
    public function setExcludePages(array $excludePages)
    {
        $this->payload['exclude_pages'] = $excludePages;

        return $this;
    }

    /**
     * @param array $itemTypes
     *
     * @return $this
     */
    public function setItemTypes(array $itemTypes)
    {
        $this->payload['item_types'] = $itemTypes;

        return $this;
    }

    /**
     * @param bool $includeSubdomains
     *
     * @return $this
     */
    public function setIncludeSubdomains(bool $includeSubdomains)
    {
        $this->payload['include_subdomains'] = $includeSubdomains;

        return $this;
    }

    /**
     * @param string $intersectionMode
     *
     * @return $this
     */
    public function setIntersectionMode(string $intersectionMode)
    {
        $this->payload['intersection_mode'] = $intersectionMode;

        return $this;
    }

    /**
     * @param bool $includeSerpInfo
     *
     * @return $this
     */
    public function setIncludeSerpInfo(bool $includeSerpInfo)
    {
        $this->payload['include_serp_info'] = $includeSerpInfo;

        return $this;
    }

    /**
     * @param bool $ignoreSynonyms
     *
     * @return $this
     */
    public function setIgnoreSynonyms(bool $ignoreSynonyms)
    {
        $this->payload['ignore_synonyms'] = $ignoreSynonyms;

        return $this;
    }

    /**
     * @param array $filters
     *
     * @return $this
     */
    public function setFilters(array $filters)
    {
        $this->payload['filters'] = $filters;

        return $this;
    }

    /**
     * @param array $orderBy
     *
     * @return $this
     */
    public function setOrderBy(array $orderBy)
    {
        $this->payload['order_by'] = $orderBy;

        return $this;
    }

    /**
     * @param int $limit
     *
     * @return $this
     */
    public function setLimit(int $limit)
    {
        $this->payload['limit'] = $limit;

        return $this;
    }

    /**
     * @param int $offset
     *
     * @return $this
     */
    public function setOffset(int $offset)
    {
        $this->payload['offset'] = $offset;

        return $this;
    }

    /**
     * @param string $tag
     *
     * @return $this
     */
    public function setTag(string $tag)
    {
        $this->payload['tag'] = $tag;

        return $this;
    }

    /**
     * @param array $modelPool
     *
     * @throws \Exception
     *
     * @return array
     */
    #[\Override]
    public static function getAfterMerge(array $modelPool)
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}
