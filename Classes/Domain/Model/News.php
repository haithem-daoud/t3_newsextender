<?php

namespace TYPO3\T3Newsextender\Domain\Model;

use \GeorgRinger\News\Domain\Model\News as GNews;

class News extends GNews {


    /**
     * @var string
     */
    protected $newfield = '';


    /**
     * @return string
     */
    public function getNewfield()
    {
        return $this->newfield;
    }

    /**
     * @param string $newfield
     */
    public function setNewfield($newfield) {
        $this->newfield = $newfield;
    }
}