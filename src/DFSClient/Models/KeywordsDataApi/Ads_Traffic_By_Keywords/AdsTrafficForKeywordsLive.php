<?php

namespace DFSClientV3\Models\KeywordsDataApi\Ads_Traffic_By_Keywords;

use DFSClientV3\Entity\Custom\AdsTrafficForKeywordsLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class AdsTrafficForKeywordsLive extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/ad_traffic_by_keywords/live';
    protected $resultShouldBeTransformedToArray = true;
    protected $se = '';
	protected $useNewMapper = true;

    /**
     * @return AdsTrafficForKeywordsLiveEntityMain
     */
    #[\Override]
    public function get(): AdsTrafficForKeywordsLiveEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $keywords
     * @return $this
     */
    public function setKeywords(array $keywords)
    {
        $this->payload['keywords'] = $keywords;

        return $this;
    }

    /**
     * @param float $bid
     * @return $this
     */
    public function setBid(float $bid)
    {
        $this->payload['bid'] = $bid;

        return $this;
    }

    /**
     * @param string $match
     * @return $this
     */
    public function setMatch(string $match)
    {
        $this->payload['match'] = $match;

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
     * @param string $locationCoordinate
     * @return $this
     */
    public function setLocationCoordinate(string $locationCoordinate)
    {
        $this->payload['location_coordinate'] = $locationCoordinate;
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
     * @param string $langCode
     * @return $this
     */
    public function setLanguageCode(string $langCode)
    {
        $this->payload['language_code'] = $langCode;

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
	 * For 'google_ads' se only!
	 * @param bool $search_partners
	 * @return $this
	 */
	public function setSearchPartners(bool $search_partners)
	{
		if ($this->se === 'google_ads') {
			$this->payload['search_partners'] = $search_partners;
		}
		return $this;
	}

	/**
	 * For 'google_ads' se only!
	 * @param string $date_from
	 * @param string $se
	 * @return $this
	 */
	public function setDateFrom(string $date_from, string $se)
	{
		if ($se === 'google_ads') {
			$this->payload['date_from'] = $date_from;
		}
		return $this;
	}

	/**
	 * For 'google_ads' se only!
	 * @param string $date_to
	 * @param string $se
	 * @return $this
	 */
	public function setDateTo(string $date_to, string $se)
	{
		if ($se === 'google_ads') {
			$this->payload['date_to'] = $date_to;
		}
		return $this;
	}

	/**
	 * For 'google_ads' se only!
	 * @param string $date_interval
	 * @param string $se
	 * @return $this
	 */
	public function setDateInterval(string $date_interval)
	{
		if ($this->se === 'google_ads') {
			$this->payload['date_interval'] = $date_interval;
		}
		return $this;
	}

	/**
	 * For 'google_ads' se only!
	 * @param string $sortBy
	 * @param string $se
	 * @return $this
	 */
	public function setSortBy(string $sortBy)
	{
		if ($this->se === 'google_ads') {
			$this->payload['sort_by'] = $sortBy;
		}
		return $this;
	}

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName = 'google')
    {
    	$this->se = $seName;
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @param array $modelPool
     * @return array
     * @throws \Exception
     */
    #[\Override]
    public static function getAfterMerge(array $modelPool)
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}
