<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIsController extends Controller
{
    //api to find palindrome count in an array of words
    public function palindrome() {

        $palindrome_count = 0;
        $array = ['joe','racecar','poop','pepsi','radar'];
        foreach ($array as $element) {
            if ($element == strrev($element)){
                $palindrome_count +=1;
            }
            
        }
        echo $palindrome_count;
    }

    public function divide_groups() {
        //shuffle array then assign 2's in order
        $array = ['joe','mario','luidgi','jason','maria','casandra','charbel','james','joelle'];
        $shuffled_array = shuffle($array)
        $i = 0;
        while (count($array) > 0) {
            $groups[i] = [];
            $student = rand(0,count($array-1));

        }
        
    }

    public function get_joke() {
        $url = file_get_contents("https://icanhazdadjoke.com/slack");

        // return $url->['attachments'];
    }

    public function hilda() {
        //higher probability for pablo
        $nominees = ['anthony','joe','pablo','hisham','charbel','avo','stephanelle'];
        $nominated = $nominees[rand(0,count($nominees))];
        if ($nominated != 'pablo') {
            $nominated = $nominees[rand(0,count($nominees)-1)];
        } 
        if ($nominated != 'pablo') {
            $nominated = $nominees[rand(0,count($nominees)-1)];
        }

        echo $nominated;
    }

    public function time_since_1732_april_14() {
        $start = (1732*365*24*60*60)+(4*4*7*24*60*60)+(14*24*60*60);

        echo $start-time();
    }
}
