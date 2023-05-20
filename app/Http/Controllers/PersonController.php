<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Use the model to fetch all instances of Person
        // from the database, and return them in a JSON array
        return response()->json(Person::all());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonRequest $request)
    {
        // Validate the request using validation logic
        // in the StorePersonRequest class.

        // If validation fails, Laravel will automatially
        // return a response with validation errors.
        $validatedData = $request->validated();


        // We create a new instance of the Person object
        // by passing validated data to the ::create method.

        // This method is automatically managed by Laravel.
        // It will create a new Person model,
        // fill the $fillable fields we have defined,
        // and save the instance to the database.

        // Fields such as id, created_at, updated_at will be
        // managed automatically.
        $person = Person::create($validatedData);

        // We return a HTTP 201 Created response, along with
        // the newly created Person instance.
        return response()->json($person, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        // Laravel will automatically resolve the provided ID
        // and retreive a Person from the database.

        // If the Person is not found, this function is not run,
        // and a 404 Not Found response is sent.

        // Otherwise we return the resolved Person instance.
        // Laravel defaults to HTTP 200 OK for successful requests.
        return response()->json($person);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonRequest $request, Person $person)
    {
        // Validate the data for the update request.
        $validatedData = $request->validated();

        // Update the Person instance in the database.
        $person->update($validatedData);

        // Return the updated Person instance, with a HTTP 200 OK code.
        return response()->json($person);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        // Delete the Person instace from the database.
        $person->delete();

        // Return HTTP 204 No Content code.
        return response()->noContent();
    }
}
