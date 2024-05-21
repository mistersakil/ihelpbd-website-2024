<?php

namespace App\Traits;

trait BackendFilterTrait
{

    ## Filter properties
    private string $searchPlaceholderText;
    private string $orderBy;
    private string $orderDirection;

    public function __construct()
    {
        $this->searchPlaceholderText = __('search here');
        $this->orderBy = 'id';
        $this->orderDirection = 'desc';
        // $this->user_service =  new UserService;
    }



    /**
     * updatingSearch abstract method Resetting Pagination After Filtering Data
     *
     * @return void
     */
    // abstract public function updatingSearch(): void;



    /**
     * getPerPage() method to return number of items to display per page on a list page
     * @return int
     */
    public function getPerPage(): int
    {
        $list = array_values(array_filter($this->getPerPageList(), function ($item) {
            return $item['default'];
        }));
        return $list[0]['number'];
    }

    /**
     * getOrderBy() method to return number of items to display per page on a list page
     * @return string
     */
    public function getOrderBy(): string
    {
        return $this->orderBy;
    }


    /**
     * getOrderDirection() method to return number of items to display per page on a list page
     * @return string
     */
    public function getOrderDirection(): string
    {
        return $this->orderDirection;
    }

    /**
     * getSearchPlaceholderText() method to return number of items to display per page on a list page
     * @return string
     */
    public function getSearchPlaceholderText(): string
    {
        return $this->searchPlaceholderText;
    }

    /**
     * getPerPageList() method to return number of items to display per page on a list page
     * @return array
     */
    public function getPerPageList(): array
    {
        return [
            ['number' => 5, 'label' => __('five'), 'default' => true],
            ['number' => 10, 'label' => __('ten'), 'default' => true],
            ['number' => 25, 'label' => __('twenty five'), 'default' => false],
            ['number' => 50, 'label' => __('fifty'), 'default' => false],
            ['number' => 100, 'label' => __('one hundred'), 'default' => false],
            ['number' => 200, 'label' => __('two hundred'), 'default' => false],
            ['number' => 500, 'label' => __('five hundred'), 'default' => false],
        ];
    }


    /**
     * filterDefaultValues method to set default values for filter property
     *
     * @return array
     */
    protected function filterDefaultValues(): array
    {
        return [
            'searchPlaceholderText' => $this->getSearchPlaceholderText(),
            'perPage' => $this->getPerPage(),
            'perPageList' => $this->getPerPageList(),
            'orderBy' => $this->getOrderBy(),
            'orderDirection' => $this->getOrderDirection(),
        ];
    }
}
