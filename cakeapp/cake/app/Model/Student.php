<?php
class Student extends AppModel {
    public $name = 'Student';

   var $hasAndBelongsToMany = array (
     'Course' => array (
       'className' => 'Course'
     )
   );
    var $hasMany = array(
        'Jobapplication' => array(
            'className'     => 'Jobapplication',
            'foreignKey'    => 'student_id',
            'dependent'     => true
        )    
    );  
}
