<?php
/**
 * Created by PhpStorm.
 * User: alceste
 * Date: 09/04/20
 * Time: 11.19
 */

namespace App\Repositories;

interface CustomerRepositoryInterface
{
    public function all();

    public function findById($customerId);

    public function update($customerId);
}