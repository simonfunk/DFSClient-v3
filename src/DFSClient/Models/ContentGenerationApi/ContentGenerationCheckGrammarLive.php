<?php

namespace DFSClientV3\Models\ContentGenerationApi;

use DFSClientV3\Entity\Custom\ContentGenerationCheckGrammarLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class ContentGenerationCheckGrammarLive extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'content_generation/check_grammar/live';

    protected $resultShouldBeTransformedToArray = true;

    protected $jsonContainVariadicType = false;

    protected $useNewMapper = true;

    /**
     * @param string $text
     *
     * @return $this
     */
    public function setText(string $text)
    {
        $this->payload['text'] = $text;

        return $this;
    }

    /**
     * @param string $languageName
     *
     * @return $this
     */
    public function setLanguageName(string $languageName)
    {
        $this->payload['language_name'] = $languageName;

        return $this;
    }

    /**
     * @param string $languageCode
     *
     * @return $this
     */
    public function setLanguageCode(string $languageCode)
    {
        $this->payload['language_code'] = $languageCode;

        return $this;
    }

    /**
     * @return ContentGenerationCheckGrammarLiveEntityMain
     */
    #[\Override]
    public function get(): ContentGenerationCheckGrammarLiveEntityMain
    {
        return parent::get(); // TODO: Change the autogenerated stub
    }
}
