<?php
namespace App\Repositories;
use App\Repositories\UserRepositoriesInterface;
use App\Models\User;
class UserRepository implements UserRepositoriesInterface
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function show($id){
        return $this->user->findOrFail($id);
    }
    public function edit($id){
        return $this->user->findOrFail($id);
    }
    public function all(){
        return $this->user->all();
    }
    public function create(array $data)
    {   
        $user = $this->user->create($data);
    }

}