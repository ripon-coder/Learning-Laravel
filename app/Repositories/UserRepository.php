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
    public function show($id)
    {
        return $this->user->findOrFail($id);
    }

    public function all()
    {
        return $this->user->all();
    }
    public function pagination($limit=20){
        return $this->user->paginate($limit);
    }
    public function create(array $data)
    {
        return $this->user->create($data);
    }
    public function edit($id)
    {
        return $this->user->findOrFail($id);
    }

    public function update($id, array $data)
    {
        $user = $this->show($id);
        if (empty($data['password'])) {
            unset($data['password']);
        }
        return $user->update($data);
    }

    public function delete($id){
        $user = $this->show($id);
        return $user->delete();
    }

}