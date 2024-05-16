<?php

namespace App\Traits;

use Livewire\WithPagination;

trait BackendPaginationTrait
{
    use WithPagination;

    public int $pageNumber = 1;


    /**
     * Called before updating a component property
     *
     * @param $property [Dirty state property]
     * @param $value [Dirty state property value]
     * @return void
     */

    public function updating($property, $value): void
    {
        if ($property == 'pageNumber') {
            $this->pageNumber = $value == null || $value < 1 ? 1 : $value;
            $this->setPageNumber();
        }
    }

    public function rendered()
    {
        $this->pageNumber = $this->getPage();
        $this->setPageNumber();
    }

    private function setPageNumber()
    {
        $this->setPage($this->pageNumber);
    }


    /**
     * Runs after the page is updated for this component
     *
     * @param $pageNumber 
     * @param $value 
     * @return void
     */
    public function updatedPaginators($pageNumber, $pageName)
    {
        $this->pageNumber = $pageNumber;
    }

    /**
     * Using custom pagination views
     * @return string
     */
    public function paginationView(): string
    {
        return 'livewire.backend.addons.bootstrap-pagination-component';
    }
}
