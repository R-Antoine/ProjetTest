<?php

namespace App\Repository;



class UserRepesitory extends Repository {
    private static $table = "user";

    function __construct() {
        parent::__construct(self::$table);
    }


    private function convertToModel(array $data):User {
        
    }
    public function getResults(string $request): array {
        $results = parent::getResults($request);
        foreach ($results as $result) {
            $users = [];
            foreach($results as $result);
           $users[] = $this->convertToModel($result);
           array_push($users,$this->convertToModel($result));
        }

        return;
    }
}