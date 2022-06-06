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
        shuffle($array);
        //divide the array into chunks of 2
        $divided_groups = json_encode(array_chunk($array,2));

        echo $divided_groups;
        
    }

    public function get_joke() {
        $url = file_get_contents("https://icanhazdadjoke.com/slack");
        $joke = json_decode($url, $assoc = false);
        echo json_encode($joke);
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

    public function beer_recipe() {
        $url = file_get_contents("https://api.punkapi.com/v2/beers");

        $recipe = json_decode($url, $assoc = false);
        echo json_encode($recipe[rand(0,count($recipe))-1]);
    }
}
