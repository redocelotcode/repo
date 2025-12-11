<?php

namespace Models;
class HomeController
{
    public function index(): void
    {
        $pageTitle = 'Dashboard';
        $currentPage = 'dashboard';
        require('Views/home.phtml');
    }

    public function data(): void
    {
        $pageTitle = 'Data';
        $currentPage = 'data';
        require('Views/data.phtml');
    }

    public function visualisations(): void
    {
        $pageTitle = 'Visualisations';
        $currentPage = 'visualisations';
        require('Views/visualisations.phtml');
    }

    public function compare(): void
    {
        $pageTitle = 'Compare';
        $currentPage = 'compare';
        require('Views/compare.phtml');
    }

    public function benchmarks(): void
    {
        $pageTitle = 'Benchmarks';
        $currentPage = 'benchmarks';
        require('Views/benchmarks.phtml');
    }
}
