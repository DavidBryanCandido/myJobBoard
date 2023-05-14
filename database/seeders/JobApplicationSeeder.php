<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Job;
use App\Models\JobApplication;

class JobApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $jobs = Job::all();

        foreach ($users as $user) {
            foreach ($jobs as $job) {
                JobApplication::create([
                    'message' => 'I am interested in this job',
                    'user_id' => $user->id,
                    'job_id' => $job->id
                ]);
            }
        }
    }
}
