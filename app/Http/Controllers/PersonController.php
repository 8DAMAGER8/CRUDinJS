<?php

namespace App\Http\Controllers;

use App\Http\Requests\Person\StoreRequest;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::all();
        return $people;
    }

    /**
     * @param StoreRequest $request
     * @return mixed
     */
    public function store(StoreRequest $request): mixed
    {
        $data = $request->validated();

        return Person::create($data);
    }

    public function update(StoreRequest $request, Person $person)
    {
        $data = $request->validated();
        $person->update($data);
        return $person;
    }

    public function delete(Person $person)
    {
        $person->delete();
        return response([]);
    }
}
