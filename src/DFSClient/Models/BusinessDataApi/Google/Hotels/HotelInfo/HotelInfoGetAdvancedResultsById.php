<?php

namespace DFSClientV3\Models\BusinessDataApi\Google\Hotels\HotelInfo;


use DFSClientV3\Entity\Custom\HotelInfoGetAdvancedResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class HotelInfoGetAdvancedResultsById extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->0->result';
	protected $requestToFunction = 'business_data/{$se}/hotel_info/task_get/advanced/{$taskUUID}';
	protected $resultShouldBeTransformedToArray = true;
    protected $useNewMapper = true;

	/**
	 * @param string $taskUUID
	 * @return $this
	 */
	public function setTaskId(string $taskUUID)
	{
		$this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);
		return $this;
	}
	
	/**
	 * @param string $seName
	 * @return $this
	 */
	public function setSe(string $seName)
	{
		$this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
		return $this;
	}

    #[\Override]
    protected function initCustomFunctionForPaths(): array
    {
        return [
            'tasks->(:number)->result->(:number)->reviews->rating_distribution' => fn($key, $value) => (array) $value,
        ];
    }
	
	/**
  * @return HotelInfoGetAdvancedResultsByIdEntityMain
  */
 #[\Override]
 public function get(): HotelInfoGetAdvancedResultsByIdEntityMain
	{
		return parent::get();
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
