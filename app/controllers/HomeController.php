<?php
class HomeController
{
    public function index(): void
    {
        $pageTitle = 'Dashboard';
        $currentPage = 'dashboard';
        require __DIR__ . '/../views/home.php';
    }

    public function data(): void
    {
        $pageTitle = 'Data';
        $currentPage = 'data';
        require __DIR__ . '/../views/data.php';
    }

    public function visualisations(): void
    {
        $pageTitle = 'Visualisations';
        $currentPage = 'visualisations';
        require __DIR__ . '/../views/visualisations.php';
    }

    public function compare(): void
    {
        $pageTitle = 'Compare';
        $currentPage = 'compare';
        require __DIR__ . '/../views/compare.php';
    }

    public function benchmarks(): void
    {
        $pageTitle = 'Benchmarks';
        $currentPage = 'benchmarks';
        require __DIR__ . '/../views/benchmarks.php';
    }
}
