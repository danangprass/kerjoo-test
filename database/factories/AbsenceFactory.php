<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Absence>
 */
class AbsenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dates = [];
        for ($i=0; $i < rand(1,3); $i++) {
            $date = $this->faker->dateTime()->format('Y-m-d');
            array_push($dates,$date);
        }
        $employee = User::where('employee_status','employee')->InRandomOrder()->first()->id;
        $approver = User::where('employee_status','hr')->InRandomOrder()->first()->id;
        return [
            'dates' => collect($dates),
            'is_approved' => rand(0,1),
            'desc' => $this->faker->sentence(10),
            'employee_id' => $employee,
            'approver_id' => $approver,
        ];
    }
}
