<?php

namespace DFSClientV3\Models\BusinessDataApi\Google\Reviews;

use DFSClientV3\Entity\Custom\GoogleReviewsGetResultsByTaskIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleReviewsGetResultsByTaskId extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'business_data/google/reviews/task_get/{$taskUID}';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @deprecated This method is not necessary, only 'google'.
     *
     * @param string $seName
     *
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);

        return $this;
    }

    /**
     * @param string $taskUID
     *
     * @return $this
     */
    public function setTaskId(string $taskUID)
    {
        $this->requestToFunction = str_replace('{$taskUID}', $taskUID, $this->requestToFunction);

        return $this;
    }

    /**
     * @return GoogleReviewsGetResultsByTaskIdEntityMain
     */
    #[\Override]
    public function get(): GoogleReviewsGetResultsByTaskIdEntityMain
    {
        return parent::get();
    }
}
