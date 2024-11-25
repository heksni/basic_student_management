<?php

use App\Models\Student;

test('that true is true', function () {

    $job = Student::findOrFail(1);

    $job->create(['hex','lsdfs','sdfsdf']);

    expect($job)->toBeTrue();
});
