<?php

namespace Models;
class PackageMetricsData
{

    //private fields
    protected $_id, $_abstract_class_count, $_afferent_coupling, $_analyzed_at, $_average_complexity, $_average_method_loc, $_avg_class_cohesion, $_avg_class_complexity, $_avg_class_loc, $_code_smells_count, $_comment_density, $_commit_date, $_commit_hash, $_complexity_density, $_efferent_coupling, $_external_dependencies_count, $_file_count, $_god_class_count, $_high_complexity_methods, $_instability, $_interface_count, $_language, $_maintainability_index, $_max_class_complexity, $_max_class_loc, $_max_complexity, $_package_complexity, $_package_loc, $_package_name, $_repository_name, $_repository_owner, $_technical_debt_minutes, $_technical_debt_ratio, $_total_classes, $_total_methods, $_very_high_complexity_methods;

    //constructor

    public function __construct($dbRow)
    {
        $this->_id = $dbRow["_id"];
        $this->_abstract_class_count = $dbRow["_abstract_class_count"];
        $this->_afferent_coupling = $dbRow["_afferent_coupling"];
        $this->_analyzed_at = $dbRow["_analyzed_at"];
        $this->_average_complexity = $dbRow["_average_complexity"];
        $this->_average_method_loc = $dbRow["_average_method_loc"];
        $this->_avg_class_cohesion = $dbRow["_avg_class_cohesion"];
        $this->_avg_class_complexity = $dbRow["_avg_class_complexity"];
        $this->_avg_class_loc = $dbRow["_avg_class_loc"];
        $this->_code_smells_count = $dbRow["_code_smells_count"];
        $this->_comment_density = $dbRow["_comment_density"];
        $this->_commit_date = $dbRow["_commit_date"];
        $this->_commit_hash = $dbRow["_commit_hash"];
        $this->_complexity_density = $dbRow["_complexity_density"];
        $this->_efferent_coupling = $dbRow["_efferent_coupling"];
        $this->_external_dependencies_count = $dbRow["_external_dependencies_count"];
        $this->_file_count = $dbRow["_file_count"];
        $this->_god_class_count = $dbRow["_god_class_count"];
        $this->_high_complexity_methods = $dbRow["_high_complexity_methods"];
        $this->_instability = $dbRow["_instability"];
        $this->_interface_count = $dbRow["_interface_count"];
        $this->_language = $dbRow["_language"];
        $this->_maintainability_index = $dbRow["_maintainability_index"];
        $this->_max_class_complexity = $dbRow["_max_class_complexity"];
        $this->_max_class_loc = $dbRow["_max_class_loc"];
        $this->_max_complexity = $dbRow["_max_complexity"];
        $this->_package_complexity = $dbRow["_package_complexity"];
        $this->_package_loc = $dbRow["_package_loc"];
        $this->_package_name = $dbRow["_package_name"];
        $this->_repository_name = $dbRow["_repository_name"];
        $this->_repository_owner = $dbRow["_repository_owner"];
        $this->_technical_debt_minutes = $dbRow["_technical_debt_minutes"];
        $this->_technical_debt_ratio = $dbRow["_technical_debt_ratio"];
        $this->_total_classes = $dbRow["_total_classes"];
        $this->_total_methods = $dbRow["_total_methods"];
        $this->_very_high_complexity_methods = $dbRow["_very_high_complexity_methods"];

    }

    public function getId()
    {
        return $this->_id;
    }

    public function getAbstractClassCount()
    {
        return $this->_abstract_class_count;
    }

    public function getAfferentCoupling()
    {
        return $this->_afferent_coupling;
    }

    public function getAnalyzedAt()
    {
        return $this->_analyzed_at;
    }

    public function getAverageComplexity()
    {
        return $this->_average_complexity;
    }

    public function getAverageMethodCohesion()
    {
        return $this->_average_method_loc;
    }

    public function getAverageClassCohesion()
    {
        return $this->_average_method_loc;
    }

    public function getAverageClassComplexity()
    {
        return $this->_average_method_loc;
    }

    public function getAverageClassLoc()
    {
        return $this->_average_method_loc;
    }

    public function getCodeSmellsCount()
    {
        return $this->_code_smells_count;
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

    public function getEfferentCoupling()
    {
        return $this->_efferent_coupling;
    }

    public function getMaxClassComplexity()
    {
        return $this->_max_class_complexity;
    }

    public function getMaxClassLoc()
    {
        return $this->_max_class_loc;
    }

    public function getMaxComplexity()
    {
        return $this->_max_complexity;
    }

    public function getPackageComplexity()
    {
        return $this->_package_complexity;
    }

    public function getPackageLoc()
    {
        return $this->_package_loc;
    }

    public function getPackageName()
    {
        return $this->_package_name;
    }

    public function getRepositoryName()
    {
        return $this->_repository_name;
    }

    public function getRepositoryOwner()
    {
        return $this->_repository_owner;
    }

    public function getTotalClasses()
    {
        return $this->_total_classes;
    }

    public function getTotalMethods()
    {
        return $this->_total_methods; }




}