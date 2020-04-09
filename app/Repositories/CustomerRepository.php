<?php
/**
 * Created by PhpStorm.
 * User: alceste
 * Date: 09/04/20
 * Time: 10.32
 */

namespace App\Repositories;
use App\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function all(){
        $customers = Customer::orderBy('name')->where('active',1)->with('user')->get()->
        map->format();

        return $customers;
    }


    public function findById($customerId){
        return Customer::where('id',$customerId)->
            where('active',1)->
            with('user')->
            firstOrFail()->format();

    }


    public function update($customerId){


        $customer = Customer::where('id',$customerId)->firstOrFail();
        $customer->update(request()->only('name'));
    }

}