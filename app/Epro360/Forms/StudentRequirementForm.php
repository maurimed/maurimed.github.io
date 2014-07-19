<?php namespace Epro360\Forms;

use Laracasts\Validation\FormValidator;

class StudentRequirementForm extends FormValidator {

    /**
     * Validation rules for insert requirements files
     *
     * @var array
     */
    protected $rules = [
        "contract-online" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "application-form-online" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "passport" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "national-id" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "high-school-grades-1" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "high-school-grades-2" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "high-school-grades-3" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "final-high-school-diploma" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "letter-of-recommendation-1" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "letter-of-recommendation-2" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "personal-essay" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "bank-letter" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "health-certificate" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "affidavit-support-from-parents" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "toefl-score" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "extracurricular-diplomas-not-necessary" => "mimes:jpg,jpeg,png,pdf,doc,docx,xlsx,xls,gif,tiff,exif",
        "athletic-video" => "mimes:mp4,mpg,mpeg,mov,avi"
    ];

}