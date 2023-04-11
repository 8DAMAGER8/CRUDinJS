<?php

namespace App\Http\Controllers;

use App\Http\Requests\Person\PersonRequest;
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        return Person::all();
    }

    /**
     * @param PersonRequest $request
     * @return mixed
     */
    public function store(PersonRequest $request): mixed
    {
        $data = $request->validated();

        return Person::create($data);
    }

    public function update(PersonRequest $request, Person $person)
    {
        $data = $request->validated();

        return $person->update($data);
    }

    public function delete(Person $person)
    {
        $person->delete();

        return response([]);
    }
}
