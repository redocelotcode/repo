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
    //gets records that contain specified repository name
    public function fetchClassMetricsByRepoName($repoName){
        $sqlQuery = 'SELECT * FROM class_metrics WHERE repository_name = :repo_name;';
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->bindValue(':repo_name', $repoName);
        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $dataSet[] = new ClassMetricsData($row);
        }
        return $dataSet;
    }
    //gets unique repository names from specified owner
    public function fetchUniqueRepoNamesByOwner($owner){
        $sqlQuery = 'SELECT DISTINCT repository_name FROM class_metrics WHERE repository_owner = :repo_owner;';
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->bindValue(':repo_owner', $owner);
        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $dataSet[] = $row['repository_name'];
        }
        return $dataSet;
    }

    public function fetchByRepoOwnerAndName($repoOwner, $repoName){
        $sqlquery = 'SELECT * FROM class_metrics WHERE repository_name = :repo_name AND repository_owner = :repo_owner;';
        $statement = $this->_dbHandle->prepare($sqlquery);
        $statement->bindValue(':repo_name', $repoName);
        $statement->bindValue(':repo_owner', $repoOwner);
        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $dataSet[] = new ClassMetricsData($row);
        }
        return $dataSet;
    }

    //gets graph valuess
    public function fetchGraphValues($repoOwner, $repoName, $className, $xAxis, $yAxis){
        $sqlquery = 'SELECT id, :xAxis, :yAxis FROM class_metrics WHERE repository_name = :repo_name AND repository_owner = :repo_owner AND class_name = :class_name;';
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