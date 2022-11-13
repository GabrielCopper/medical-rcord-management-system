<?php

namespace Database\Seeders;

use App\Models\UserPatient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserPatient::create([
            // basic
        'id' => 1,
        'user_patient_id' => '21-LING-0131' ,
        'user_patient_role' => 'student',
        'user_patient_first_name' => 'Ma. Constrella' ,
        'user_patient_middle_name' => 'Rosales',
        'user_patient_last_name' => 'Adviento',
        'user_patient_suffix' => null,
        'user_patient_gender' => 'female',
        'user_patient_birthday' => '2002-08-24',
        'user_year_department_role' => '1ST Year BSHM' ,
        'user_patient_blood_type' => 'O+' ,
        'civil_status' => 'single',
        'nationality' => 'Filipino',
        'religion' => 'Roman Catholic',
        'contact_person' => 'John Doe',
        'patient_phone_number' => '09123457192',
        // medica => l
        'history_of_past_illness' => 'None',
        'past_illness' => null,
        'operations_and_hospitalizations' => null,
        'immunization_history' => null,
        'social_and_environmental_history' => null,
        'obstetrics_gynecological_history' => null,
         // physica => l
        'general_survey' => 1,
        'skin' => 0,
        'heent' => 1,
        'chest_and_lungs' => 0,
        'heart' => 1,
        'abdomen' => 0,
        'genitourinary' => 0,
        'musculoskeletal' => 1,
        // neurologica => l
        'mental_status' => 1,
        'coordination_and_balance' => 0,
        'reflexes' => 1,
        'sensation' => 0,
        'cranial_nerves' => 1,
        'autonomic_nervous_system_nerves' => 0,
        'neurological_examination' => 1,
        // laboratory
        'urine' => null,
        'urine_comment' => null,
        'stool' => null,
        'stool_comment' => null,
        'saliva' => null,
        'saliva_comment' => null,
        'sputum' => null,
        'sputum_comment' => null,
        'complete_blood_count' => 1,
        'complete_blood_count_comment' => 'normal',
        'x_ray' => 1,
        'x_ray_comment' => 'normal',
        'laboratory_results' => 'Healthy',
        // assestmen => t
        'assestment' => 'This patient is healthy',
         // universit => y
        'university_physician' => 'Christia Marie J. Posadas - Flores',
        ]);

        UserPatient::create([
        // basic
        'id' => 2,
        'user_patient_id' => '21-LING-0135' ,
        'user_patient_role' => 'student',
        'user_patient_first_name' => 'Jonel' ,
        'user_patient_middle_name' => 'Tinde',
        'user_patient_last_name' => 'Antipuesto',
        'user_patient_suffix' => null,
        'user_patient_gender' => 'male',
        'user_patient_birthday' => '2002-02-24',
        'user_year_department_role' => 'First Year BSCS' ,
        'user_patient_blood_type' => 'O-' ,
        'civil_status' => 'single',
        'nationality' => 'Filipino',
        'religion' => 'Roman Catholic',
        'contact_person' => 'Jane Doe',
        'patient_phone_number' => '09123457192',
        // medica => l
        'history_of_past_illness' => 'None',
        'past_illness' => null,
        'operations_and_hospitalizations' => null,
        'immunization_history' => null,
        'social_and_environmental_history' => null,
        'obstetrics_gynecological_history' => null,
         // physica => l
        'general_survey' => 1,
        'skin' => 0,
        'heent' => 1,
        'chest_and_lungs' => 0,
        'heart' => 1,
        'abdomen' => 0,
        'genitourinary' => 0,
        'musculoskeletal' => 1,
        // neurologica => l
        'mental_status' => 1,
        'coordination_and_balance' => 0,
        'reflexes' => 1,
        'sensation' => 0,
        'cranial_nerves' => 1,
        'autonomic_nervous_system_nerves' => 0,
        'neurological_examination' => 1,
        // laboratory
        'urine' => null,
        'urine_comment' => null,
        'stool' => null,
        'stool_comment' => null,
        'saliva' => null,
        'saliva_comment' => null,
        'sputum' => null,
        'sputum_comment' => null,
        'complete_blood_count' => 1,
        'complete_blood_count_comment' => 'normal',
        'x_ray' => 1,
        'x_ray_comment' => 'normal',
        'laboratory_results' => 'Healthy',
        // assestmen => t
        'assestment' => 'This patient is healthy',
         // universit => y
        'university_physician' => 'Christia Marie J. Posadas - Flores',
        ]);

        UserPatient::create([
        // basic
        'id' => 3,
        'user_patient_id' => '21-LING-0130' ,
        'user_patient_role' => 'student',
        'user_patient_first_name' => 'Ynah Mae' ,
        'user_patient_middle_name' => 'Abarra',
        'user_patient_last_name' => 'Astro',
        'user_patient_suffix' => null,
        'user_patient_gender' => 'female',
        'user_patient_birthday' => '2003-03-24',
        'user_year_department_role' => 'First Year BSIT' ,
        'user_patient_blood_type' => 'A+' ,
        'civil_status' => 'single',
        'nationality' => 'Filipino',
        'religion' => 'Roman Catholic',
        'contact_person' => 'Jane Doe',
        'patient_phone_number' => '09123457192',
        // medica => l
        'history_of_past_illness' => 'None',
        'past_illness' => null,
        'operations_and_hospitalizations' => null,
        'immunization_history' => null,
        'social_and_environmental_history' => null,
        'obstetrics_gynecological_history' => null,
         // physica => l
        'general_survey' => 1,
        'skin' => 0,
        'heent' => 1,
        'chest_and_lungs' => 0,
        'heart' => 1,
        'abdomen' => 0,
        'genitourinary' => 0,
        'musculoskeletal' => 1,
        // neurologica => l
        'mental_status' => 1,
        'coordination_and_balance' => 0,
        'reflexes' => 1,
        'sensation' => 0,
        'cranial_nerves' => 1,
        'autonomic_nervous_system_nerves' => 0,
        'neurological_examination' => 1,
        // laboratory
        'urine' => null,
        'urine_comment' => null,
        'stool' => null,
        'stool_comment' => null,
        'saliva' => null,
        'saliva_comment' => null,
        'sputum' => null,
        'sputum_comment' => null,
        'complete_blood_count' => 1,
        'complete_blood_count_comment' => 'normal',
        'x_ray' => 1,
        'x_ray_comment' => 'normal',
        'laboratory_results' => 'Healthy',
        // assestmen => t
        'assestment' => 'This patient is healthy',
         // universit => y
        'university_physician' => 'Christia Marie J. Posadas - Flores',
        ]);

        UserPatient::create([
        // basic
        'id' => 4,
        'user_patient_id' => '21-LING-0107' ,
        'user_patient_role' => 'student',
        'user_patient_first_name' => 'Irish',
        'user_patient_middle_name' => 'Berbon',
        'user_patient_last_name' => 'Blingon',
        'user_patient_suffix' => null,
        'user_patient_gender' => 'female',
        'user_patient_birthday' => '2001-04-24',
        'user_year_department_role' => 'First Year BSIT' ,
        'user_patient_blood_type' => 'B+' ,
        'civil_status' => 'single',
        'nationality' => 'Filipino',
        'religion' => 'Roman catholic',
        'contact_person' => 'Jane Doe',
        'patient_phone_number' => '09123457192',
        // medica => l
        'history_of_past_illness' => 'None',
        'past_illness' => null,
        'operations_and_hospitalizations' => null,
        'immunization_history' => null,
        'social_and_environmental_history' => null,
        'obstetrics_gynecological_history' => null,
         // physica => l
        'general_survey' => 1,
        'skin' => 0,
        'heent' => 1,
        'chest_and_lungs' => 0,
        'heart' => 1,
        'abdomen' => 0,
        'genitourinary' => 0,
        'musculoskeletal' => 1,
        // neurologica => l
        'mental_status' => 1,
        'coordination_and_balance' => 0,
        'reflexes' => 1,
        'sensation' => 0,
        'cranial_nerves' => 1,
        'autonomic_nervous_system_nerves' => 0,
        'neurological_examination' => 1,
        // laboratory
        'urine' => null,
        'urine_comment' => null,
        'stool' => null,
        'stool_comment' => null,
        'saliva' => null,
        'saliva_comment' => null,
        'sputum' => null,
        'sputum_comment' => null,
        'complete_blood_count' => 1,
        'complete_blood_count_comment' => 'normal',
        'x_ray' => 1,
        'x_ray_comment' => 'normal',
        'laboratory_results' => 'Healthy',
        // assestmen => t
        'assestment' => 'This patient is healthy',
         // universit => y
        'university_physician' => 'Christia Marie J. Posadas - Flores',
        ]);

        /* UserPatient::create([
            'id' => 1,
            'user_patient_id' => '18-AC-0327',
            'user_patient_role' => 'student',
            'user_patient_full_name' => 'Jericho P. Bantiquete',
            'user_patient_gender' => 'male',
            'user_patient_birthday' => '2000-01-10',
            'user_year_department_role' => 'BSIT IV B',
            'user_patient_blood_type' => 'O RhD positive (O+)',
            'patient_phone_number' => 9214753408,
        ]);

        UserPatient::create([
            'id' => 2,
            'user_patient_id' => '15-AC-0412',
            'user_patient_role' => 'non_teaching_staff',
            'user_patient_full_name' => 'Jon X. Doe',
            'user_patient_gender' => 'male',
            'user_patient_birthday' => '1983-04-14',
            'user_year_department_role' => 'Guard',
            'user_patient_medical_history' => 'High Blood',
            'patient_phone_number' => 9212763508,
        ]);

        UserPatient::create([
            'id' => 3,
            'user_patient_id' => '20-AC-0352',
            'user_patient_role' => 'teaching_staff',
            'user_patient_full_name' => 'Marino Bartolome',
            'user_patient_gender' => 'male',
            'user_patient_birthday' => '1985-01-14',
            'user_year_department_role' => 'CBT Department',
            'patient_phone_number' => 9012625508,
        ]);

        UserPatient::create([
            'id' => 4,
            'user_patient_id' => '13-AC-0642',
            'user_patient_role' => 'non_teaching_staff',
            'user_patient_full_name' => 'Jane Q. Doe',
            'user_patient_gender' => 'female',
            'user_patient_birthday' => '1978-08-24',
            'user_year_department_role' => 'Cleaner',
            'user_patient_blood_type' => 'B RhD positive (B+)',
            'patient_phone_number' => 9412626892,
        ]);

        UserPatient::create([
            'id' => 5,
            'user_patient_id' => '20-AC-0842',
            'user_patient_role' => 'teaching_staff',
            'user_patient_full_name' => 'Kurt Philip Danlog',
            'user_patient_gender' => 'male',
            'user_patient_birthday' => '1987-02-14',
            'user_year_department_role' => 'CMT Department',
            'user_patient_blood_type' => 'AB RhD positive (AB+)',
            'patient_phone_number' => 9457268812,
        ]);

        UserPatient::create([
            'id' => 6,
            'user_patient_id' => '20-AC-0144',
            'user_patient_role' => 'teaching_staff',
            'user_patient_full_name' => 'Raychard Platon',
            'user_patient_gender' => 'male',
            'user_patient_birthday' => '1983-07-15',
            'user_year_department_role' => 'CBT Department',
            'user_patient_blood_type' => 'AB RhD positive (AB+)',
            'patient_phone_number' => 9457262831,
        ]);

        UserPatient::create([
            'id' => 7,
            'user_patient_id' => '20-AC-1531',
            'user_patient_role' => 'teaching_staff',
            'user_patient_full_name' => 'Christian Cruz',
            'user_patient_gender' => 'male',
            'user_patient_birthday' => '1984-07-17',
            'user_year_department_role' => 'CBT Department',
            'user_patient_blood_type' => 'AB RhD positive (AB+)',
            'patient_phone_number' => 9457265134,
        ]);

        UserPatient::create([
            'id' => 8,
            'user_patient_id' => '19-AC-0350',
            'user_patient_role' => 'student',
            'user_patient_full_name' => 'Hannah Shane Rabaya Molaro',
            'user_patient_gender' => 'female',
            'user_patient_birthday' => '2000-04-22',
            'user_year_department_role' => 'CTE Department',
            'user_patient_blood_type' => 'O RhD positive (O+)',
            'user_patient_medical_history' => 'Asthma',
            'patient_phone_number' => 9154032552,
        ]); */
    }
}
