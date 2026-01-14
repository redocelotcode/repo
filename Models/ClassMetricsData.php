<?php

namespace Models;
/**
 * Class ClassMetricsData
 * - used to simulate a single record from the table class_metrics
 *
 */
class ClassMetricsData
{
    //private fields
    protected $_id, $_average_method_complexity, $_class_dependencies_count, $_class_name, $_class_type, $_comment_density, $_commit_date, $_commit_hash, $_complexity_density, $_field_count, $_fully_qualified_name, $_is_god_class, $_lack_of_cohesion, $_language, $_max_method_complexity, $_method_count, $_package_dependencies_count, $_package_name, $_public_field_count, $_public_method_count, $_repository_name, $_repository_owner, $_total_complexity, $_total_loc, $_class_complexity, $_class_loc;


    //constructor
    public function __construct($dbRow)
    {
        $this->_id = $dbRow["id"];
        $this->_average_method_complexity = $dbRow["average_method_complexity"];
        $this->_class_dependencies_count = $dbRow["class_dependencies_count"];
        $this->_class_name = $dbRow["class_name"];
        $this->_class_type = $dbRow["class_type"];
        $this->_comment_density = $dbRow["comment_density"];
        $this->_commit_date = $dbRow["commit_date"];
        $this->_commit_hash = $dbRow["commit_hash"];
        $this->_complexity_density = $dbRow["complexity_density"];
        $this->_field_count = $dbRow["field_count"];
        $this->_fully_qualified_name = $dbRow["fully_qualified_name"];
        $this->_is_god_class = $dbRow["is_god_class"];
        $this->_lack_of_cohesion = $dbRow["lack_of_cohesion"];
        $this->_language = $dbRow["language"];
        $this->_max_method_complexity = $dbRow["max_method_complexity"];
        $this->_method_count = $dbRow["method_count"];
        $this->_package_dependencies_count = $dbRow["package_dependencies_count"];
        $this->_package_name = $dbRow["package_name"];
        $this->_public_field_count = $dbRow["public_field_count"];
        $this->_public_method_count = $dbRow["public_method_count"];
        $this->_repository_name = $dbRow["repository_name"];
        $this->_repository_owner = $dbRow["repository_owner"];
        $this->_total_complexity = $dbRow["total_complexity"];
        $this->_total_loc = $dbRow["total_loc"];
        $this->_class_complexity = $dbRow["class_complexity"];
        $this->_class_loc = $dbRow["class_loc"];

    }

    public function getId()
    {
        return $this->_id;
    }

    public function getAverageMethodComplexity()
    {
        return $this->_average_method_complexity;
    }

    public function getClassDependenciesCount()
    {
        return $this->_class_dependencies_count;
    }

    public function getClassName()
    {
        return $this->_class_name;
    }

    public function getClassType()
    {
        return $this->_class_type;
    }

    public function getCommentDensity()
    {
        return $this->_comment_density;
    }

    public function getCommitDate()
    {
        return $this->_commit_date;
    }

    public function getCommitHash()
    {
        return $this->_commit_hash;
    }

    public function getComplexityDensity()
    {
        return $this->_complexity_density;
    }

    public function getFieldCount()
    {
        return $this->_field_count;
    }

    public function getLackOfCohesion()
    {
        return $this->_lack_of_cohesion;
    }

    public function getMaxMethodComplexity()
    {
        return $this->_max_method_complexity;
    }

    public function getMethodCount()
    {
        return $this->_method_count;
    }

    public function getPackageDependenciesCount()
    {
        return $this->_package_dependencies_count;
    }

    public function getPackageName()
    {
        return $this->_package_name;
    }

    public function getPublicFieldCount()
    {
        return $this->_public_field_count;
    }

    public function getPublicMethodCount()
    {
        return $this->_public_method_count;
    }

    public function getRepositoryName()
    {
        return $this->_repository_name;
    }

    public function getRepositoryOwner()
    {
        return $this->_repository_owner;
    }

    public function getTotalComplexity()
    {
        return $this->_total_complexity;
    }

    public function getTotalLoc()
    {
        return $this->_total_loc;
    }

    public function getClassComplexity()
    {
        return $this->_class_complexity;
    }

    public function getClassLoc()
    {
        return $this->_class_loc; }


}