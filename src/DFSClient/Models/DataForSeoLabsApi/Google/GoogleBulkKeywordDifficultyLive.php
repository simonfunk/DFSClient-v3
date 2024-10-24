<?php


namespace DFSClientV3\Models\DataForSeoLabsApi\Google;


use DFSClientV3\Entity\Custom\GoogleBulkKeywordDifficultyLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleBulkKeywordDifficultyLive extends AbstractModel
{
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'dataforseo_labs/google/bulk_keyword_difficulty/live';
	protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

	/**
  * @return GoogleBulkKeywordDifficultyLiveEntityMain
  */
 #[\Override]
 public function get(): GoogleBulkKeywordDifficultyLiveEntityMain
	{
		return parent::get();
	}

	/**
	 * @param array $targets
	 * @return $this
	 */
	public function setKeywords(array $keywords)
	{
		$this->payload['keywords'] = $keywords;

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
