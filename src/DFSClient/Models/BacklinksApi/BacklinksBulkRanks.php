<?php


namespace DFSClientV3\Models\BacklinksApi;

use DFSClientV3\Entity\Custom\BackLinksBulkRanksEntityMain;
use DFSClientV3\Models\AbstractModel;

class BacklinksBulkRanks extends AbstractModel {
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'backlinks/bulk_ranks/live';
	protected $resultShouldBeTransformedToArray = true;
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
	 * @return BackLinksBulkRanksEntityMain
	 */
	#[\Override]
 public function get(): BackLinksBulkRanksEntityMain {
		return parent::get(); // TODO: Change the autogenerated stub
	}
}
