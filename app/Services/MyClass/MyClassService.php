<?php

namespace App\Services\MyClass;

use App\Exceptions\InvalidValueException;
use App\Exceptions\ResourceNotEmptyException;
use App\Models\ClassGroup;
use App\Models\MyClass;
use App\Services\School\SchoolService;
use Illuminate\Database\Eloquent\Collection;

class MyClassService
{
    /**
     * School service variable.
     */
    public SchoolService $schoolService;

    //construct method
    public function __construct(SchoolService $schoolService)
    {
        $this->schoolService = $schoolService;
    }

    /**
     * Get all classes in school.
     */
    public function getAllClasses()
    {
        return MyClass::all();
    }


    /**
     * Get all classes in school.
     */
    public function getClassById(int $id): MyClass
    {
        return MyClass::find($id);
    }

    /**
     * Get class by id or else return 404.
     *
     * @param int $id
     */
    public function getClassByIdOrFail(int $id)
    {
        return $this->schoolService->getSchoolById(auth()->user()->school_id)->myClasses()->findOrFail($id);
    }



    /**
     * Create new class.
     *
     * @param array|object $record
     *
     * @return \App\Models\MyClass
     */
    public function createClass($record)
    {
        $myClass = MyClass::create($record);

        return $myClass;
    }


    /**
     * Update class.
     *
     * @param \App\Models\MyClass $class
     * @param array|object        $records
     *
     * @return \App\Models\MyClass
     */
    public function updateClass($class, $records)
    {
        $class->update([
            'name'           => $records['name'],
        ]);

        return $class;
    }



    /**
     * Delete class group.
     *
     * @param \App\Models\ClassGroup $classGroup
     *
     * @throws ResourceNotEmptyException
     *
     * @return void
     */
    public function deleteClassGroup(ClassGroup $classGroup)
    {
        if ($classGroup->classes->count()) {
            throw new ResourceNotEmptyException('Class Group contains classes');
        }
        $classGroup->delete();
    }

    /**
     * Delete class.
     *
     * @param \App\Models\MyClass $class
     *
     * @throws ResourceNotEmptyException
     *
     * @return void
     */
    public function deleteClass(MyClass $class)
    {
        if ($class->studentRecords->count()) {
            throw new ResourceNotEmptyException('Class contains students');
        }
        $class->delete();
    }
}
