<?php

namespace App\CollegeModule\Repositories;

use App\Model\Department;
use App\CollegeModule\CollegeRepository;

class DepartmentRepository extends CollegeRepository
{
    // Constructor to bind model to repo
    public function __construct(Department $department)
    {
        $this->model = $department;
    }
}