<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class TestController extends Controller
{
	public function css() {
		return view('test', ['name' => 'Игорь','age' => '15', 'surname' => 'Макаревич']);
	}
	 public function show() {
	 	return view('layouts.child', ['text' => 'конфета','href' => 'https://omacademy.ru/', ]);
	}

	public function show3() {
		return view('test3',['employees' => [
            [
                'name' => 'user 1',
                'surname' => 'surname 1',
                'salary' => 1000,
            ],
            [
                'name' => 'user 2',
                'surname' => 'surname 2',
                'salary' => 2000,
            ],
            [   'name' => 'user 3',
                'surname' => 'surname 3',
                'salary' => 3000,]]]);
							}
    public function show4() {
        return view('test4', $arr = [1,2,3,4,5]
    );
    }
    public function show5() {
        return view('layouts.child', ['text' => 'конфета','href' => 'https://omacademy.ru/' ]
    ); 
    }
}



