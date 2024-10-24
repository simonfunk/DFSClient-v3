<?php


namespace DFSClientV3\Models\BusinessDataApi\Yelp\Search;


use DFSClientV3\Entity\Custom\YelpSearchGetResultsByTaskIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class YelpSearchGetResultsByTaskId extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'business_data/{$se}/search/task_get/{$taskUID}';
    protected $resultShouldBeTransformedToArray = true;
    protected $useNewMapper = true;

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @param string $taskUID
     * @return $this
     */
    public function setTaskId(string $taskUID)
    {
        $this->requestToFunction = str_replace('{$taskUID}', $taskUID, $this->requestToFunction);
        return $this;
    }

    /**
     * @return YelpSearchGetResultsByTaskIdEntityMain
     */
    #[\Override]
    public function get(): YelpSearchGetResultsByTaskIdEntityMain
    {
        return parent::get();
    }

}
