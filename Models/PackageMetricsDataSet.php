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
    public function fetchUniquePackageNamesByOwner($owner){
        $sqlQuery = 'SELECT DISTINCT package_name FROM package_metrics WHERE repository_owner = :repo_owner;';
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->bindValue(':repo_owner', $owner);
        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $dataSet[] = $row['package_name'];
        }
        return $dataSet;
    }

    public function fetchPackageMetricsByRepoName($repoName){
        $sqlQuery = 'SELECT * FROM package_metrics WHERE repository_name = :repo_name;';
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->bindValue(':repo_name', $repoName);
        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $dataSet[] = $row;
        }
        return $dataSet;
    }
    //gets graph valuess
    public function fetchGraphValues($repoOwner, $repoName, $className, $xAxis, $yAxis){
        $sqlquery = 'SELECT id, :xAxis, :yAxis FROM package_metrics WHERE repository_name = :repo_name AND repository_owner = :repo_owner AND class_name = :class_name;';
        $statement = $this->_dbHandle->prepare($sqlquery);
        $statement->bindValue(':repo_name', $repoName);
        $statement->bindValue(':repo_owner', $repoOwner);
        $statement->bindValue(':class_name', $className);
        $statement->bindValue(':xAxis', $xAxis);
        $statement->bindValue(':yAxis', $yAxis);
        $statement->execute();

        $dataSet = [];

        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $dataSet[] = $row;
        }

        return $dataSet;
    }
}