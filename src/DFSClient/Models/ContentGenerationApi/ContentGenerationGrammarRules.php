<?php

namespace DFSClientV3\Models\ContentGenerationApi;

use DFSClientV3\Models\AbstractModel;
use DFSClientV3\Entity\Custom\ContentGenerationGrammarRulesEntityMain;

class ContentGenerationGrammarRules extends AbstractModel {

	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'content_generation/grammar_rules';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return ContentGenerationGrammarRulesEntityMain
	 */
	#[\Override]
 public function get(): ContentGenerationGrammarRulesEntityMain
	{
		return parent::get(); // TODO: Change the autogenerated stub
	}

}
