<?php


namespace DFSClientV3\Models\KeywordsDataApi\ClickstreamData;


use DFSClientV3\Entity\Custom\ClickstreamGlobalSearchVolumeLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class ClickstreamGlobalSearchVolumeLive extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'keywords_data/clickstream_data/global_search_volume/live';
	protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

    /**
     * @return ClickstreamGlobalSearchVolumeLiveEntityMain
     */
    #[\Override]
    public function get(): ClickstreamGlobalSearchVolumeLiveEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $keyword
     * @return $this
     */
    public function setKeywords(array $keywords)
    {
        $this->payload['keywords'] = $keywords;
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
