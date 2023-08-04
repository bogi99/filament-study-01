<?php
namespace Database\Factories;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory 
{

    
    
    protected $users;

    // public function __construct(){
    //     // we get a list of available users in the constructor
    //     //$this->users = User::all()->pluck('id')->toArray();
    // } 

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array 
    {
        $this->users = User::all()->pluck('id')->toArray();
        // dd($this->users);
        return [
            'name' => fake()->name(),
            'user_id' => fake()->randomElement($this->users),
                
            

        ];
    }
}
