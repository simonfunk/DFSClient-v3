<?php

namespace DFSClientV3\Models\BusinessDataApi\Google\Hotels\HotelSearches;

use DFSClientV3\Entity\Custom\HotelSearchesSetTaskEntityMain;
use DFSClientV3\Models\AbstractModel;

class HotelSearchesLive extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'business_data/google/hotel_searches/live';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @return \DFSClientV3\Entity\Custom\HotelSearchesSetTaskEntityMain
     */
    #[\Override]
    public function get(): HotelSearchesSetTaskEntityMain
    {
        return parent::get();
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
     * @param string $langCode
     *
     * @return $this
     */
    public function setLanguageCode(string $languageCode)
    {
        $this->payload['language_code'] = $languageCode;

        return $this;
    }

    /**
     * @param string $checkIn
     *
     * @return $this
     */
    public function setCheckIn(string $checkIn)
    {
        $this->payload['check_in'] = $checkIn;

        return $this;
    }

    /**
     * @param string $checkOut
     *
     * @return $this
     */
    public function setCheckOut(string $checkOut)
    {
        $this->payload['check_out'] = $checkOut;

        return $this;
    }

    /**
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency(string $currency)
    {
        $this->payload['currency'] = $currency;

        return $this;
    }

    /**
     * @param int $adults
     *
     * @return $this
     */
    public function setAdults(int $adults)
    {
        $this->payload['adults'] = $adults;

        return $this;
    }

    /**
     * @param array $children
     *
     * @return $this
     */
    public function setChildren(array $children)
    {
        $this->payload['children'] = $children;

        return $this;
    }

    /**
     * @param array $stars
     *
     * @return $this
     */
    public function setStars(array $stars)
    {
        $this->payload['stars'] = $stars;

        return $this;
    }

    /**
     * @param float $minRating
     *
     * @return $this
     */
    public function setMinRating(float $minRating)
    {
        $this->payload['min_rating'] = $minRating;

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
     * @param int $minPrice
     *
     * @return $this
     */
    public function setMinPrice(int $minPrice)
    {
        $this->payload['min_price'] = $minPrice;

        return $this;
    }

    /**
     * @param int $maxPrice
     *
     * @return $this
     */
    public function setMaxPrice(int $maxPrice)
    {
        $this->payload['max_price'] = $maxPrice;

        return $this;
    }

    /**
     * @param bool $freeСancellation
     *
     * @return $this
     */
    public function setFreeСancellation(bool $freeСancellation)
    {
        $this->payload['free_cancellation'] = $freeСancellation;

        return $this;
    }

    /**
     * @param bool $isVacationRentals
     *
     * @return $this
     */
    public function setIsVacationRentals(bool $isVacationRentals)
    {
        $this->payload['is_vacation_rentals'] = $isVacationRentals;

        return $this;
    }

    /**
     * @param array $amenities
     *
     * @return $this
     */
    public function setAmenities(array $amenities)
    {
        $this->payload['amenities'] = $amenities;

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
