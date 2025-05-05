<?php
namespace App\Repositories;

interface UserRepositoriesInterface
{
    public function all();
    public function pagination($limit);
    public function show($id);
    public function edit($id);
    public function create(Array $data);
    public function update($id, array $data);
    public function delete($id);


}