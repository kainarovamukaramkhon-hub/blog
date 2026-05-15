<?php
    namespace src\Models\User;
    use \src\Models\AcrtiveRecordEntity;


        class User extends AcrtiveRecordEntity{
            protected $nickname;
            protected $email;
            protected $isConfirmed;
            protected $role;
            protected $passwordHash;
            protected $authToken;
            protected $createdAt;



    public function getNickname() :string
        {
            return $this->nickname;
        }
    public static function getTableName(){
        return 'users';
    }
    }