<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultSentiment_connotation_distributionShareConnotation_types;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultSentiment_connotation_distributionShareSentiment_connotations;

class ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultSentiment_connotation_distributionShare
{
    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|integer;
     */
    public $total_count = null;

    /**
     * @var null|integer;
     */
    public $rank = null;

    /**
     * @var null|null;
     */
    public $top_domains = null;

    /**
     * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultSentiment_connotation_distributionShareSentiment_connotations;
     */
    public $sentiment_connotations = null;

    /**
     * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultSentiment_connotation_distributionShareConnotation_types;
     */
    public $connotation_types = null;

    /**
     * @var null|null;
     */
    public $text_categories = null;

    /**
     * @var null|null;
     */
    public $page_categories = null;

    /**
     * @var null|null;
     */
    public $page_types = null;

    /**
     * @var null|null;
     */
    public $countries = null;

    /**
     * @var null|null;
     */
    public $languages = null;
}
