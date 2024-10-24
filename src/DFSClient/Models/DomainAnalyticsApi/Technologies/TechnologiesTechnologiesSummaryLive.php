<?php

namespace DFSClientV3\Models\DomainAnalyticsApi\Technologies;

use DFSClientV3\Entity\Custom\TechnologiesTechnologiesSummaryLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class TechnologiesTechnologiesSummaryLive extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'domain_analytics/technologies/technologies_summary/live';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @return TechnologiesTechnologiesSummaryLiveEntityMain
     */
    #[\Override]
    public function get(): TechnologiesTechnologiesSummaryLiveEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $keywords
     *
     * @return $this
     */
    public function setKeywords(array $keywords)
    {
        $this->payload['keywords'] = $keywords;

        return $this;
    }

    /**
     * @param array $groups
     *
     * @return $this
     */
    public function setGroups(array $groups)
    {
        $this->payload['groups'] = $groups;

        return $this;
    }

    /**
     * @param array $categories
     *
     * @return $this
     */
    public function setCategories(array $categories)
    {
        $this->payload['categories'] = $categories;

        return $this;
    }

    /**
     * @param array $technologies
     *
     * @return $this
     */
    public function setTechnologies(array $technologies)
    {
        $this->payload['technologies'] = $technologies;

        return $this;
    }

    /**
     * @param string $mode
     *
     * @return $this
     */
    public function setMode(string $mode)
    {
        $this->payload['mode'] = $mode;

        return $this;
    }

    /**
     * @param array $technologyPaths
     *
     * @return $this
     */
    public function setTechnologyPaths(array $technologyPaths)
    {
        $this->payload['technology_paths'] = $technologyPaths;

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
     * @param int $internalListLimit
     *
     * @return $this
     */
    public function setInternalListLimit(int $internalListLimit)
    {
        $this->payload['internal_list_limit'] = $internalListLimit;

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
