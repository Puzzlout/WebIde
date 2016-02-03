<?php

namespace Puzzlout\WebIde\DalModules;

use Puzzlout\Framework\Dal;

class LoginDal extends Dal\BaseManager {

    /**
     * Select a PM from its username or password
     * 
     * @param ProjectManager $pm
     * @return array the selected row in the db
     * @todo add the second parameter to the BaseManager method.
     */
//    public function selectOne($user, Dal\DbQueryFilters $dbFilters) {
//        $dbConfig = new \Dal\DbStatementConfig($user, \Dal\DbExecutionType::SELECT, $dbFilters);
//        $dbConfig->setLimitClause(1);
//        $dbConfig->BuildSelectQuery();
//        $this->addDbConfigItem($dbConfig);
//
//        return $this->BindParametersAndExecute(TRUE);
//    }

    public function countById($item) {
        
    }

//  public function add($item) {  }
//  public function edit($object, $where_filter_id) {  }
//  public function delete($object, $where_filter_id) {  }
}
