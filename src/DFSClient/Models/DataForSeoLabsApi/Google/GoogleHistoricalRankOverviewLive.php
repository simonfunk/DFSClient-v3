<?php


namespace DFSClientV3\Models\DataForSeoLabsApi\Google;


use DFSClientV3\Models\AbstractModel;

class GoogleHistoricalRankOverviewLive extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'dataforseo_labs/google/historical_rank_overview/live';
	protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleHistoricalRankOverviewLiveEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleHistoricalRankOverviewLiveEntityMain
    {
        return parent::get();
    }

    /**
     * @param string $target
     * @return $this
     */
    public function setTarget(string $target)
    {
        $this->payload['target'] = $target;

        return $this;
    }

    /**
     * @param string $locationName
     * @return $this
     */
    public function setLocationName(string $locationName)
    {
        $this->payload['location_name'] = $locationName;

        return $this;
    }

    /**
     * @param int $locationCode
     * @return $this
     */
    public function setLocationCode(int $locationCode)
    {
        $this->payload['location_code'] = $locationCode;
        return $this;
    }

    /**
     * @param string $languageName
     * @return $this
     */
    public function setLanguageName(string $languageName)
    {
        $this->payload['language_name'] = $languageName;
        return $this;
    }

    /**
     * @param string $languageCode
     * @return $this
     */
    public function setLanguageCode(string $languageCode)
    {
        $this->payload['language_code'] = $languageCode;

        return $this;
    }

	/**
	 * @param string $dateFrom
	 * @return $this
	 */
	public function setDateFrom(string $dateFrom)
	{
		$this->payload['date_from'] = $dateFrom;

		return $this;
	}

	/**
	 * @param string $dateTo
	 * @return $this
	 */
	public function setDateTo(string $dateTo)
	{
		$this->payload['date_to'] = $dateTo;

		return $this;
	}

	/**
	 * @param bool $correlate
	 * @return $this
	 */
	public function setCorrelate(bool $correlate)
	{
		$this->payload['correlate'] = $correlate;

		return $this;
	}

	/**
	 * @param bool $includeClickstreamData
	 * @return $this
	 */
	public function setIncludeClickstreamData(bool $includeClickstreamData)
	{
		$this->payload['include_clickstream_data'] = $includeClickstreamData;

		return $this;
	}

	/**
     * @param array $filters
     * @return $this
     */
    public function setFilters(array $filters)
    {
        $this->payload['filters'] = $filters;

        return $this;
    }

    /**
     * @param array $orderBy
     * @return $this
     */
    public function setOrderBy(array $orderBy)
    {
        $this->payload['order_by'] = $orderBy;

        return $this;
    }

    /**
     * @param int $offset
     * @return $this
     */
    public function setOffset(int $offset)
    {
        $this->payload['offset'] = $offset;

        return $this;
    }

    /**
     * @param string $tag
     * @return $this
     */
    public function setTag(string $tag)
    {
        $this->payload['tag'] = $tag;
        return $this;
    }

    /**
     * @param int $maxRankGroup
     * @return $this
     */
    public function setMaxRankGroup(int $maxRankGroup)
    {
        $this->payload['max_rank_group'] = $maxRankGroup;
        return $this;
    }

    /**
     * @param bool $excludeTopDomains
     * @return $this
     */
    public function setExcludeTopDomains(bool $excludeTopDomains)
    {
        $this->payload['exclude_top_domains'] = $excludeTopDomains;
        return $this;
    }

	/**
	 * @param bool $ignoreSynonyms
	 * @return $this
	 */
	public function setIgnoreSynonyms(bool $ignoreSynonyms)
	{
		$this->payload['ignore_synonyms'] = $ignoreSynonyms;

		return $this;
	}

    /**
     * @param array $modelPool
     * @return array
     * @throws \Exception
     */
    public static function getAfterMerge(array $modelPool)
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}
