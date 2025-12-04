<?php
//load required models
namespace Models;

require_once('Database.php');
require_once('PackageMetricsData.php');


class PackageMetricsDataSet
{
    protected $_dbHandle, $_dbInstance;

    //constructor
    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    //function to get all records of package_metrics
    public function fetchAllPackageMetrics()
    {
        $sqlQuery = 'SELECT * FROM package_metrics;';

        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();

        $dataSet = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $dataSet[] = new ClassMetricsData($row);
        }
        return $dataSet;
    }

}