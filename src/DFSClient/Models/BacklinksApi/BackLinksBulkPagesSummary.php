<?php
namespace DFSClientV3\Models\BacklinksApi;

use DFSClientV3\Entity\Custom\BackLinksBulkPagesSummaryEntityMain;
use DFSClientV3\Models\AbstractModel;

class BackLinksBulkPagesSummary extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'backlinks/bulk_pages_summary/live';
    protected $resultShouldBeTransformedToArray = true;

    protected $jsonContainVariadicType = false;

    protected $useNewMapper = true;

    /**
     * @param array $targets
     * @return $this
     */
    public function setTargets(array $targets)
    {
        $this->payload['targets'] = $targets;
        return $this;
    }

	/**
	 * @param bool $includeSubdomains
	 * @return $this
	 */
	public function setIncludeSubdomains(bool $includeSubdomains)
	{
		$this->payload['include_subdomains'] = $includeSubdomains;
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

	protected function initCustomFunctionForPaths(): array
	{
		return [
			'tasks->(:number)->result->(:number)->items->(:number)->referring_links_tld' => function($key, $value){
				return (array) $value;
			},
			'tasks->(:number)->result->(:number)->items->(:number)->referring_links_types' => function($key, $value){
				return (array) $value;
			},
			'tasks->(:number)->result->(:number)->items->(:number)->referring_links_attributes' => function($key, $value){
				return (array) $value;
			},
			'tasks->(:number)->result->(:number)->items->(:number)->referring_links_platform_types' => function($key, $value){
				return (array) $value;
			},
			'tasks->(:number)->result->(:number)->items->(:number)->referring_links_semantic_locations' => function($key, $value){
				return (array) $value;
			},
			'tasks->(:number)->result->(:number)->items->(:number)->referring_links_countries' => function($key, $value){
				return (array) $value;
			},
		];
	}

	/**
	 * @return BackLinksBulkPagesSummaryEntityMain
	 */

    public function get(): BackLinksBulkPagesSummaryEntityMain
    {
        return parent::get(); // TODO: Change the autogenerated stub
    }
}
