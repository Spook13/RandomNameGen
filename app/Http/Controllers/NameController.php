<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Class
class NameController extends Controller
{
    // Public One
    // pulls the first and last names from the database
    // controller does the thinking
    public function show(){
        $firstnames = DB::table("Firstname")->get();
        $surnames = DB::table("Surname")->get();


        return view("home", [
          "firstnames" => $firstnames,
          "surnames" => $surnames,
        ]);
      }
    // End of Public One

    // Public Two
    //  getting Route::post("/names/get/", "NameController@getNames")->name("names.get"); from web/php
    public function getNames(Request $request){
      // calling gender from  input in home.blade.php
      $gender = $request->input("gender");

      // calling amount from  input in home.blade.php
      $amount= $request->input("amount");

      $fullNameCollection = collect([]);

      // calling to Firstname database
      $selectedFirstNames = DB::table("Firstname")
          // calling to Gender column
          ->where("Gender", "=", $gender)
          // setting limit
          ->limit($amount)
          // shuffling
          ->orderByRaw("RAND()")
          // ends command
          ->get();

      $firstName = DB::table("Firstname")
      ->where("Firstname")
      ->get();


      // Foreach
      foreach($selectedFirstNames as $selectedFirstName) {
        $nameObject = collect ([]);

          // calling to the surname table in general and making selection random
          $selectedSurnames = DB::table("Surname")->orderByRaw("RAND()")->first();

          // puts the firstname and surname into a combined object
          $nameObject->put("Firstname", $selectedFirstName);
          $nameObject->put("Surname", $selectedSurnames);

          // pushes fullname to view
          $fullNameCollection->push($nameObject);
      }
      // End of Foreach

      return view("nameGen", [
          "fullnames" => $fullNameCollection
      ]);
    }
    // End of Public Two

    // Public Three
    public function nameInfo($type, $id)
    {

        if($type == "Firstname"){
            $nameInfo = DB::table("Firstname")->where("ID", "=", $id)->first();
        }else{
            $nameInfo = DB::table("Surname")->where("ID", "=", $id)->first();
        }

        return view ("nameInfo", [
          "nameInfo" =>  $nameInfo
        ]);
    }
    // End of Public Three

    // Public Four
    public function getAllNames(){
      $aNames = DB::table("Firstname")->where("Firstname", "LIKE", "A%")->get();
      $bNames = DB::table("Firstname")->where("Firstname", "LIKE", "B%")->get();
      $cNames = DB::table("Firstname")->where("Firstname", "LIKE", "C%")->get();
        $dNames = DB::table("Firstname")->where("Firstname", "LIKE", "D%")->get();
        $eNames = DB::table("Firstname")->where("Firstname", "LIKE", "E%")->get();
        $fNames = DB::table("Firstname")->where("Firstname", "LIKE", "F%")->get();
        $gNames = DB::table("Firstname")->where("Firstname", "LIKE", "G%")->get();
        $hNames = DB::table("Firstname")->where("Firstname", "LIKE", "H%")->get();
        $iNames = DB::table("Firstname")->where("Firstname", "LIKE", "I%")->get();
        $jNames = DB::table("Firstname")->where("Firstname", "LIKE", "J%")->get();
        $kNames = DB::table("Firstname")->where("Firstname", "LIKE", "K%")->get();
        $lNames = DB::table("Firstname")->where("Firstname", "LIKE", "L%")->get();
        $mNames = DB::table("Firstname")->where("Firstname", "LIKE", "M%")->get();
        $nNames = DB::table("Firstname")->where("Firstname", "LIKE", "N%")->get();
        $oNames = DB::table("Firstname")->where("Firstname", "LIKE", "O%")->get();
        $pNames = DB::table("Firstname")->where("Firstname", "LIKE", "P%")->get();
        $qNames = DB::table("Firstname")->where("Firstname", "LIKE", "Q%")->get();
        $rNames = DB::table("Firstname")->where("Firstname", "LIKE", "R%")->get();
        $sNames = DB::table("Firstname")->where("Firstname", "LIKE", "S%")->get();
        $tNames = DB::table("Firstname")->where("Firstname", "LIKE", "T%")->get();
        $uNames = DB::table("Firstname")->where("Firstname", "LIKE", "U%")->get();
        $vNames = DB::table("Firstname")->where("Firstname", "LIKE", "V%")->get();
        $xNames = DB::table("Firstname")->where("Firstname", "LIKE", "X%")->get();
        $yNames = DB::table("Firstname")->where("Firstname", "LIKE", "Y%")->get();
        $zNames = DB::table("Firstname")->where("Firstname", "LIKE", "Z%")->get();

        return view("names", [
            "ANames" => $aNames,
            "BNames" => $bNames,
            "CNames" => $cNames,
            "DNames" => $dNames,
            "ENames" => $eNames,
            "FNames" => $fNames,
            "GNames" => $gNames,
            "HNames" => $hNames,
            "INames" => $iNames,
            "JNames" => $jNames,
            "KNames" => $kNames,
            "LNames" => $lNames,
            "MNames" => $mNames,
            "NNames" => $nNames,
            "ONames" => $oNames,
            "PNames" => $pNames,
            "QNames" => $qNames,
            "RNames" => $rNames,
            "SNames" => $sNames,
            "TNames" => $tNames,
            "UNames" => $uNames,
            "VNames" => $vNames,
            "XNames" => $xNames,
            "YNames" => $yNames,
            "ZNames" => $zNames,
        ]);
    }
    // End of Public Four

}
// End of Class
