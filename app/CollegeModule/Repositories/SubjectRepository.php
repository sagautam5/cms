<?php

namespace App\CollegeModule\Repositories;

use App\Model\Subject;
use App\CollegeModule\CollegeRepository;

class SubjectRepository extends CollegeRepository
{
    // Constructor to bind model to repo
    public function __construct(Subject $subject)
    {
        $this->model = $subject;
    }
}