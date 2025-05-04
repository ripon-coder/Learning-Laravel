<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Repositories\UserRepositoriesInterface;
use Illuminate\Http\Request;

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
        return $user = $this->userRepository->all();
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("welcome");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $this->userRepository->create($request->all());
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
        return $this->userRepository->edit( $id );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
