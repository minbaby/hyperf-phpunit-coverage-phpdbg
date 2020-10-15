<?php


namespace App\Service;


use App\Repository\TestRepository;
use Hyperf\Di\Annotation\Inject;

class TestService
{
    /**
     * @var TestRepository
     * @Inject
     */
    protected $testRepository;

    public function __construct()
    {
        echo PHP_EOL, __FILE__, PHP_EOL;
    }

    public function do()
    {
        $this->testRepository->do();
    }
}
