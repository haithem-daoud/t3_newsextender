<?php

namespace TYPO3\T3Newsextender\Controller;

use GeorgRinger\News\Domain\Model\News;
use GeorgRinger\News\Controller\NewsController as GNewsController;

/**
 * News Controller
 */
class NewsController extends GNewsController
{
    /**
     * Single view of a news record
     *
     * @param \GeorgRinger\News\Domain\Model\News $news news item
     * @param int $currentPage current page for optional pagination
     *
     * @return void
     */
    public function detailAction(News $news = null, $currentPage = 1) {
        parent::detailAction($news, $currentPage);

        // ...
    }
}
