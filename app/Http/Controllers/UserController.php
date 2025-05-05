<?php

namespace App\Http\Controllers;

use App\Events\UserEditEvent;
use App\Events\UserRegistered;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepositoriesInterface;

class UserController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepositoriesInterface $userRepository){
        $this->userRepository = $userRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $users = $this->userRepository->pagination(2);
         return view("users.index", compact("users"));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $user = $this->userRepository->create($request->all());
        event(new UserRegistered($user));
        return redirect()->route('user.index')->with("success","User Created Successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->userRepository->show( $id );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $user = $this->userRepository->edit( $id );
         return view("users.edit",compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        $this->userRepository->update($id, $request->all());
        event(new UserEditEvent($this->show($id)));
        return redirect()->route('user.index')->with("success","User Updated Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->userRepository->delete( $id );
        return redirect()->route('user.index')->with("success","User Deleted Successfully!");
    }
}
