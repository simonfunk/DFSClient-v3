<?php

namespace DFSClientV3\Models\BusinessDataApi\Tripadvisor\Reviews;

use DFSClientV3\Entity\Custom\TripadvisorReviewsSetTaskEntityMain;
use DFSClientV3\Models\AbstractModel;

class TripadvisorReviewsSetTask extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'business_data/tripadvisor/reviews/task_post';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @return TripadvisorReviewsSetTaskEntityMain
     */
    #[\Override]
    public function get(): TripadvisorReviewsSetTaskEntityMain
    {
        return parent::get();
    }

    /**
     * @param string $url_path
     *
     * @return $this
     */
    public function setUrlPath(string $url_path)
    {
        $this->payload['url_path'] = $url_path;

        return $this;
    }

    /**
     * @param string $keyword
     *
     * @return $this
     */
    public function setKeyword(string $keyword)
    {
        $this->payload['keyword'] = $keyword;

        return $this;
    }

    /**
     * @param int $priority
     *
     * @return $this
     */
    public function setPriority(int $priority)
    {
        $this->payload['priority'] = $priority;

        return $this;
    }

    /**
     * @param string $locationName
     *
     * @return $this
     */
    public function setLocationName(string $locationName)
    {
        $this->payload['location_name'] = $locationName;

        return $this;
    }

    /**
     * @param int $locationCode
     *
     * @return $this
     */
    public function setLocationCode(int $locationCode)
    {
        $this->payload['location_code'] = $locationCode;

        return $this;
    }

    /**
     * @param string $locationCoordinate
     *
     * @return $this
     */
    public function setLocationCoordinate(string $locationCoordinate)
    {
        $this->payload['location_coordinate'] = $locationCoordinate;

        return $this;
    }

    /**
     * @param int $depth
     *
     * @return $this
     */
    public function setDepth(int $depth)
    {
        $this->payload['depth'] = $depth;

        return $this;
    }

    /**
     * @param string $sortBy
     *
     * @return $this
     */
    public function setSortBy(string $sortBy)
    {
        $this->payload['sort_by'] = $sortBy;

        return $this;
    }

    /**
     * @param array $ratings
     *
     * @return $this
     */
    public function setRatings(array $ratings)
    {
        $this->payload['ratings'] = $ratings;

        return $this;
    }

    /**
     * @param array $visitType
     *
     * @return $this
     */
    public function setVisitType(array $visitType)
    {
        $this->payload['visit_type'] = $visitType;

        return $this;
    }

    /**
     * @param array $months
     *
     * @return $this
     */
    public function setMonths(array $months)
    {
        $this->payload['months'] = $months;

        return $this;
    }

    /**
     * @param string $searchReviewsKeyword
     *
     * @return $this
     */
    public function setSearchReviewsKeyword(string $searchReviewsKeyword)
    {
        $this->payload['search_reviews_keyword'] = $searchReviewsKeyword;

        return $this;
    }

    /**
     * @param bool $translateReviews
     *
     * @return $this
     */
    public function setTranslateReviews(bool $translateReviews)
    {
        $this->payload['translate_reviews'] = $translateReviews;

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
