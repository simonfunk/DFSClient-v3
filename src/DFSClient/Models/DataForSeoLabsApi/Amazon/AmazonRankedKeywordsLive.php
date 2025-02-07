<?php

namespace DFSClientV3\Models\DataForSeoLabsApi\Amazon;

use DFSClientV3\Entity\Custom\AmazonRankedKeywordsLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class AmazonRankedKeywordsLive extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'dataforseo_labs/amazon/ranked_keywords/live';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return AmazonRankedKeywordsLiveEntityMain
     */
    #[\Override]
    public function get(): AmazonRankedKeywordsLiveEntityMain
    {
        return parent::get();
    }

    /**
     * @param string $asin
     *
     * @return $this
     */
    public function setAsin(string $asin)
    {
        $this->payload['asin'] = $asin;

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
     * not supported for 'amazon'.
     *
     * @param array $itemTypes
     *
     * @return $this
     */
    public function setItemTypes(array $itemTypes)
    {
        //$this->payload['item_types'] = $itemTypes;

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
