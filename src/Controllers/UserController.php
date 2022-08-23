<?php

namespace Basico\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Basico\Repositories\UserRepository;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function paginate(Request $request)
    {
        try {
            return response()->json($this->repository->paginate($request->get('perPage', 15)));
        } catch(Exception $exception) {
            return response()->json($exception->getMessage(), 400);
        }
    }

    public function show($id)
    {
        try {
            return response()->json($this->repository->find($id));

        }  catch (ModelNotFoundException $exception) {
            return response()->json('Not found', 404);
        } catch (Exception $exception) {
            return response()->json($exception->getMessage(), 400);
        }
    }

    public function create(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required',
                'age' => 'required|numeric',
                'email' => 'required|email',
                'password' => 'required'
            ]);
            $user = $this->repository->create($data);
            return response()->json($user);
        } catch (ValidationException $validator) {
            return response()->json($validator->errors(), 422);
        } catch (Exception $exception) {
            return response()->json($exception->getMessage(), 400);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'name' => 'filled',
                'age' => 'filled|numeric',
                'email' => 'filled|email',
                'password' => 'filled'
            ]);
            $user = $this->repository->update($id, $data);
            return response()->json($user);
        } catch (ValidationException $validator) {
            return response()->json($validator->errors(), 422);
        } catch (ModelNotFoundException $exception) {
            return response()->json('Not found', 404);
        } catch (Exception $exception) {
            return response()->json($exception->getMessage(), 400);
        }
    }

    public function delete($id)
    {
        try {
            return response()->json($this->repository->delete($id));
        } catch (ModelNotFoundException $exception) {
            return response()->json('Not found', 404);
        } catch (Exception $exception) {
            return response()->json($exception->getMessage(), 400);
        }
    }
}
