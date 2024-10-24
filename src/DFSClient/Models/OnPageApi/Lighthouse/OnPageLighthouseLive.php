<?php

namespace DFSClientV3\Models\OnPageApi\Lighthouse;

use DFSClientV3\Models\AbstractModel;

class OnPageLighthouseLive extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'on_page/lighthouse/live/{$resultType}';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @param string $resultType
     *
     * @return $this
     */
    public function setResultType(string $resultType)
    {
        $this->requestToFunction = str_replace('{$resultType}', $resultType, $this->requestToFunction);

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
     * @return OnPageLighthouseLiveEntityMain
     */
    #[\Override]
    public function get(): OnPageLighthouseLiveEntityMain
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
