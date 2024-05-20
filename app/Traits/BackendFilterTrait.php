<?php

namespace App\Traits;

trait BackendFilterTrait
{

    ## Filter properties
    private string $searchPlaceholderText;
    private string $order_by;
    private string $order_by_type;

    ## Services
    // private UserService $user_service;


    public function __construct()
    {
        $this->searchPlaceholderText = __('search here');
        $this->order_by = 'id';
        $this->order_by_type = 'desc';
        // $this->user_service =  new UserService;
    }



    /**
     * updatingSearch abstract method Resetting Pagination After Filtering Data
     *
     * @return void
     */
    // abstract public function updatingSearch(): void;



    /**
     * get_per_page() method to return number of items to display per page on a list page
     * @return int
     */
    public function get_per_page(): int
    {
        $list = array_values(array_filter($this->get_per_page_list(), function ($item) {
            return $item['default'];
        }));
        return $list[0]['number'];
    }

    /**
     * get_order_by() method to return number of items to display per page on a list page
     * @return string
     */
    public function get_order_by(): string
    {
        return $this->order_by;
    }


    /**
     * get_order_by_type() method to return number of items to display per page on a list page
     * @return string
     */
    public function get_order_by_type(): string
    {
        return $this->order_by_type;
    }

    /**
     * get_searchPlaceholderText() method to return number of items to display per page on a list page
     * @return string
     */
    public function get_searchPlaceholderText(): string
    {
        return $this->searchPlaceholderText;
    }

    /**
     * get_per_page_list() method to return number of items to display per page on a list page
     * @return array
     */
    public function get_per_page_list(): array
    {
        return [
            ['number' => 5, 'label' => __('five'), 'default' => true],
            ['number' => 10, 'label' => __('ten'), 'default' => false],
            ['number' => 25, 'label' => __('twenty five'), 'default' => false],
            ['number' => 50, 'label' => __('fifty'), 'default' => false],
            ['number' => 100, 'label' => __('one hundred'), 'default' => false],
            ['number' => 200, 'label' => __('two hundred'), 'default' => false],
            ['number' => 500, 'label' => __('five hundred'), 'default' => false],
        ];
    }


    /**
     * filter_default_values method to set default values for filter property
     *
     * @return array
     */
    protected function filter_default_values(): array
    {
        return [
            'searchPlaceholderText' => $this->get_searchPlaceholderText(),
            'per_page' => $this->get_per_page(),
            'per_page_list' => $this->get_per_page_list(),
            'order_by_field' => $this->get_order_by(),
            'order_by_type' => $this->get_order_by_type(),
        ];
    }
}
