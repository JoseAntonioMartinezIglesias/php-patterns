<?php

class UserMapper {

    /**
     * @var StorageAdapter
     */
    private $adapter;

    /**
     * @param StorageAdapter $storage
     */
    public function __construct($user = null) {
        $this->adapter = $storage;
    }

    /**
     * @param int $id
     *
     * @return User
     */
    public function findById(int $id): User {

        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new \InvalidArgumentException("User #$id not found");
        }

        return $this->mapRowToUser($result);
    }

    public function save() {
        
    }

}
