<?php

namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Entity\Custom\OnPagePageScreenshotEntityMain;
use DFSClientV3\Models\AbstractModel;

class OnPagePageScreenshot extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'on_page/page_screenshot';

    protected $resultShouldBeTransformedToArray = false;

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
     * @param string $acceptLanguage
     *
     * @return $this
     */
    public function setAcceptLanguage(string $acceptLanguage)
    {
        $this->payload['accept_language'] = $acceptLanguage;

        return $this;
    }

    /**
     * always on.
     *
     * @param bool $enableJavascript
     *
     * @return $this
     */
    public function setEnableJavascript(bool $enableJavascript)
    {
        //$this->payload['enable_javascript'] = $enableJavascript;
        return $this;
    }

    /**
     * @param string $browserPreset
     *
     * @return $this
     */
    public function setBrowserPreset(string $browserPreset)
    {
        $this->payload['browser_preset'] = $browserPreset;

        return $this;
    }

    /**
     * @param int $browserScreenWidth
     *
     * @return $this
     */
    public function setBrowserScreenWidth(int $browserScreenWidth)
    {
        $this->payload['browser_screen_width'] = $browserScreenWidth;

        return $this;
    }

    /**
     * @param int $browserScreenHeight
     *
     * @return $this
     */
    public function setBrowserScreenHeight(int $browserScreenHeight)
    {
        $this->payload['browser_screen_height'] = $browserScreenHeight;

        return $this;
    }

    /**
     * @param float $browserScreenScaleFactor
     *
     * @return $this
     */
    public function setBrowserScreenScaleFactor(float $browserScreenScaleFactor)
    {
        $this->payload['browser_screen_scale_factor'] = $browserScreenScaleFactor;

        return $this;
    }

    /**
     * @param bool $fullPageScreenshot
     *
     * @return $this
     */
    public function setFullPageScreenshot(bool $fullPageScreenshot)
    {
        $this->payload['full_page_screenshot'] = $fullPageScreenshot;

        return $this;
    }

    /**
     * @param bool $disableCookiePopup
     *
     * @return $this
     */
    public function setDisableCookiePopup(bool $disableCookiePopup)
    {
        $this->payload['disable_cookie_popup'] = $disableCookiePopup;

        return $this;
    }

    /**
     * @param string $customJs
     *
     * @return $this
     */
    public function setCustomJs(string $customJs)
    {
        $this->payload['custom_js'] = $customJs;

        return $this;
    }

    /**
     * @param bool $switchPool
     *
     * @return $this
     */
    public function setSwitchPool(bool $switchPool)
    {
        $this->payload['switch_pool'] = $switchPool;

        return $this;
    }

    /**
     * @param string $ipPoolForScan
     *
     * @return $this
     */
    public function setIpPoolForScan(string $ipPoolForScan)
    {
        $this->payload['ip_pool_for_scan'] = $ipPoolForScan;

        return $this;
    }

    /**
     * @param array $modelPool
     *
     * @throws \Exception
     *
     * @return OnPagePageScreenshotEntityMain
     */
    #[\Override]
    public static function getAfterMerge(array $modelPool): OnPagePageScreenshotEntityMain
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}
