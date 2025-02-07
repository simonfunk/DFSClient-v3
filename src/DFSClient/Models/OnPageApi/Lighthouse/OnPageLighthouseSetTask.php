<?php

namespace DFSClientV3\Models\OnPageApi\Lighthouse;

use DFSClientV3\Entity\Custom\OnPageLighthouseSetTaskEntityMain;
use DFSClientV3\Models\AbstractModel;

class OnPageLighthouseSetTask extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'on_page/lighthouse/task_post';

    protected $resultShouldBeTransformedToArray = false;

    protected $useNewMapper = true;

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
     * @param bool $forMobile
     *
     * @return $this
     */
    public function setForMobile(bool $forMobile)
    {
        $this->payload['for_mobile'] = $forMobile;

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
     * @param array $audits
     *
     * @return $this
     */
    public function setAudits(array $audits)
    {
        $this->payload['audits'] = $audits;

        return $this;
    }

    /**
     * @param string $version
     *
     * @return $this
     */
    public function setVersion(string $version)
    {
        $this->payload['version'] = $version;

        return $this;
    }

    /**
     * @param string $language_name
     *
     * @return $this
     */
    public function setLanguageName(string $language_name)
    {
        $this->payload['language_name'] = $language_name;

        return $this;
    }

    /**
     * @param string $language_code
     *
     * @return $this
     */
    public function setLanguageCode(string $language_code)
    {
        $this->payload['language_code'] = $language_code;

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
     * @param string $postbackUrl
     *
     * @return $this
     */
    public function setPostbackUrl(string $postbackUrl)
    {
        $this->payload['postback_url'] = $postbackUrl;

        return $this;
    }

    /**
     * @param string $pingbackUrl
     *
     * @return $this
     */
    public function setPingbackUrl(string $pingbackUrl)
    {
        $this->payload['pingback_url'] = $pingbackUrl;

        return $this;
    }

    /**
     * @return OnPageLighthouseSetTaskEntityMain
     */
    #[\Override]
    public function get(): OnPageLighthouseSetTaskEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $modelPool
     *
     * @throws \Exception
     */
    #[\Override]
    public static function getAfterMerge(array $modelPool)
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}
