<?php
//load required models
namespace Models;

use Models\ClassMetricsData;
use Models\Database;

require_once('Database.php');
require_once('ClassMetricsData.php');


class ClassMetricsDataSet
{
    protected $_dbHandle, $_dbInstance;

    //constructor
    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }

    //function to get all records of class_metrics
    public function fetchAllClassMetrics()
    {
        $sqlQuery = 'SELECT * FROM class_metrics;';

        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();

        $dataSet = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $dataSet[] = new ClassMetricsData($row);
        }
        return $dataSet;
    }
}