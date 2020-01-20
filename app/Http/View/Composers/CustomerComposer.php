<?php

namespace App\Http\View\Composers;

use App\Customer;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class CustomerComposer
{
    private $customers;

    public function __construct(Customer $customers)
    {
        $this->customers = $customers;
    }

    public function compose(View $view)
    {
        $customers = Cache::remember('customers',  60, function () {
            return $this->customers->orderBy('name', 'asc')->select('id', 'name')->get();
        });

        return $view->with('customers', $customers);
    }
}
