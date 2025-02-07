<?php

namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Entity\Custom\OnPageRawHtmlEntityMain;
use DFSClientV3\Models\AbstractModel;

class OnPageRawHtml extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'on_page/raw_html';

    protected $resultShouldBeTransformedToArray = false;

    /**
     * @param string $taskUUID
     *
     * @return $this
     */
    public function setTaskId(string $taskUUID)
    {
        $this->payload['id'] = $taskUUID;

        return $this;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setUrl(string $url)
    {
        $this->payload['url'] = $url;

        return $this;
    }

    /**
     * @return OnPageRawHtmlEntityMain
     */
    #[\Override]
    public function get(): OnPageRawHtmlEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $modelPool
     *
     * @throws \Exception
     *
     * @return OnPageRawHtmlEntityMain
     */
    #[\Override]
    public static function getAfterMerge(array $modelPool): OnPageRawHtmlEntityMain
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}
