<?php

namespace App\Providers;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;

class FirebaseService
{
    protected $database;

    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount(base_path(env('FIREBASE_CREDENTIALS')));
        $this->database = $factory->createDatabase();
    }

    public function storeCourse($courseId, $data)
    {
        $this->database->getReference('courses/' . $courseId)->set($data);
    }

    public function getCourses()
    {
        return $this->database->getReference('courses')->getValue();
    }
}

