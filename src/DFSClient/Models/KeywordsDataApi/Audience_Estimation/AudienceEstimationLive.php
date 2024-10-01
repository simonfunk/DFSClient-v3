<?php


namespace DFSClientV3\Models\KeywordsDataApi\Audience_Estimation;


use DFSClientV3\Models\AbstractModel;

class AudienceEstimationLive extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/audience_estimation/live';
    protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;


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
	 * @param array $age
	 * @return $this
	 */
	public function setAge(array $age)
	{
		$this->payload['age'] = $age;
		return $this;
	}

	/**
	 * @param array $gender
	 * @return $this
	 */
	public function setGender(array $gender)
	{
		$this->payload['gender'] = $gender;
		return $this;
	}

	/**
	 * @param array $industry
	 * @return $this
	 */
	public function setIndustry(array $industry)
	{
		$this->payload['industry'] = $industry;
		return $this;
	}

	/**
	 * @param array $jobFunction
	 * @return $this
	 */
	public function setJobFunction(array $jobFunction)
	{
		$this->payload['job_function'] = $jobFunction;
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
	 * @param float $dailyBudget
	 * @return $this
	 */
	public function setDailyBudget(float $dailyBudget)
	{
		$this->payload['daily_budget'] = $dailyBudget;
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
     * 'bing' only
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\AudienceEstimationLiveEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\AudienceEstimationLiveEntityMain
    {
        return parent::get();
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
