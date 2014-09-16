<?php  namespace Epro360\Repos\Requirements;

use Epro360\Forms\StudentRequirementForm;
use Input;
use Student;
use StudentRequirement;

/**
 * Class RequirementsRepository
 * @package Epro360\Repos\Requirements
 */
class RequirementsRepository {

    /**
     * @var
     */
    protected $form;

    /**
     * @param StudentRequirementForm $form
     */
    function __construct( StudentRequirementForm $form)
    {
        $this->form = $form;
    }


    /**
     * @param $studentId
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getByStudentId($studentId)
    {
        return Student::with(['university.requirements', 'requirements'])->find($studentId);
    }


    /**
     * @param $requirements
     * @param $studentId
     */
    public function saveStudentRequirements($requirements, $studentId)
    {

        $this->form->validate($requirements);

        foreach(array_keys($requirements) as $field )
        {


            if (Input::hasFile($field))
            {

                $requirement = StudentRequirement::whereName($field)->first();
                if (! $requirement) $requirement = new StudentRequirement;
                // Create a Student folder for saving the documents
                // Give the document a name
                // Store the the document in the folder
                // Store the document name in the database

                $file = Input::file($field);

                $fileName = $field . '.' . $requirements[$field]->getClientOriginalExtension();

                $pathToImage = public_path() . 'dashboard/docs/students/' . $studentId . '/requirements/';

                $file->move( $pathToImage, $fileName );

                $requirement->file = $fileName;
                $requirement->name = $field;
                $requirement->student_id = $studentId;
                $requirement->status = 1;

                $requirement->save() ;

            }



        }
    }





} 