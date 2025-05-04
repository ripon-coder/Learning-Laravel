<?php
namespace App\Repositories;

interface UserRepositoriesInterface
{
    public function all();
    public function show($id);
    public function edit($id);
    // public function findBySlug($id);
    // public function findByEmail($email);
    // public function findByUsername($username);
    // public function findByEmailAndPassword($email, $password);

    // public function get();
    // public function get_verified();
    public function create(Array $data);
    // public function update($id);
    // public function delete($id);


}