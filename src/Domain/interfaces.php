<?php

// Interfaces para entidades de domínio

interface UserRepositoryInterface {
    public function find($id);
    public function save($user);
}
