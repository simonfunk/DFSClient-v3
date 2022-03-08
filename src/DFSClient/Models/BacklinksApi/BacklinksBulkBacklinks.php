<?php


namespace DFSClientV3\Models\BacklinksApi;

use DFSClientV3\Entity\Custom\BackLinksBulkBacklinksEntityMain;
use DFSClientV3\Models\AbstractModel;

class BacklinksBulkBacklinks extends AbstractModel {
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'backlinks/bulk_backlinks/live';
	protected $resultShouldBeTransformedToArray = true;

	protected $jsonContainVariadicType = true;

	protected $pathsToVariadicTypesAndValue = [
		'tasks->(:number)->result->(:number)->items->(:number)' => 'type'
	];

	protected $useNewMapper = true;

	/**
	 * @param array $targets
	 * @return $this
	 */
	public function setTargets(array $targets) {
		$this->payload['targets'] = $targets;
		return $this;
	}

	/**
	 * @return BackLinksBulkBacklinksEntityMain
	 */
	public function get(): BackLinksBulkBacklinksEntityMain {
		return parent::get(); // TODO: Change the autogenerated stub
	}
}