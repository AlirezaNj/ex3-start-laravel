<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $exams= Exam::all();
       return view('admin.exams.index' , ['exams'=>$exams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = User::where('role' ,'LIKE' ,'%استاد%')->get();
        $students = User::where('role' ,'LIKE' ,'%دانش آموز%')->get();
        $questions = Question::all();
        $subjects = [];
        $chapters = [];
        $sections = [];
        foreach ($questions as $question){
//            $subjects[] = $question->subject;
            !in_array($question->subject,$subjects) ? $subjects[] = $question->subject : '';
            !in_array($question->chapter,$chapters) ? $chapters[] = $question->chapter : '';
            !in_array($question->section,$sections) ? $sections[] = $question->section : '';
//            $chapters[] = $question->chapter;
        }

        $data = [
            'questions'=>$questions,
            'teachers'=>$teachers,
            'students'=>$students,
            'subjects'=> $subjects,
            'chapters'=> $chapters,
            'sections'=> $sections,
        ];
        return view('admin.exams.create' , $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = count($request->question_ids);
        $data = [
            'name'=>$request->name ,
            'lesson'=>$request->lesson,
            'grade'=>$request->grade,
            'subject'=>$request->subject,
            'date'=>$request->date ,
            'start_time'=>$request->start_time ,
            'end_time'=>$request->end_time ,
            'count_questions'=>$count
        ];
        $exam = Exam::create($data);
        $exam->questions()->attach($request->question_ids);
        $exam->users()->attach($request->teacher_id);
        $exam->users()->attach($request->student_ids);
        return redirect('admin/exams');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        $teachers = User::where('role' ,'LIKE' ,'%استاد%')->get();
        $students = User::where('role' ,'LIKE' ,'%دانش آموز%')->get();
        $questions = Question::all();
        $questionsSelected = $exam->questions()->pluck('id')->toArray();
        return view('admin.exams.edit' , ['exam'=>$exam , 'questions' => $questions , 'questionsSelected'=>$questionsSelected ,'teachers'=>$teachers , 'students'=>$students]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        $count = count($request->question_ids);
        $data = [
            'name'=>$request->name ,
            'lesson'=>$request->lesson,
            'grade'=>$request->grade,
            'subject'=>$request->subject,
            'date'=>$request->date ,
            'start_time'=>$request->start_time ,
            'end_time'=>$request->end_time ,
            'count_questions'=>$count
        ];
        $exam->update($data);
        $exam->questions()->sync($request->question_ids);
        $exam->users()->sync($request->teacher_id);
        $exam->users()->sync($request->student_ids);
        return redirect('admin/exams/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();
        return back();
    }
}
