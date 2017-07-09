<?php

class Buck {
    private $chars;
    private $buck;
    private $trans;

    private $charsArr;
    private $transArr;
    private $buckArr;

    public function __construct()
    {
        $this->chars = "آ ا ب ت ث ج ح خ د ذ ر ز س ش ص ض ط ظ ع غ ف ق ك ل م ن ه و ي";
       	$this->buck = "A A b t v j H x d * r z s $ S D T Z E g f q k l m n h w y";
        $this->trans= "ā ā b t th j h kh d dh r z s sh ṣ ḍ ṭ ẓ ʿ gh f q k l m n h w y";

        $this->charsArr = explode(' ', $this->chars);
        $this->buckArr  = explode(' ', $this->buck);
        $this->transArr = explode(' ', $this->trans);
        // MISSING CHARACTERS: أ إ ئ ء ة ؤ
        // Let's add them!
        $this->charsArr[] = "ى"; 		$this->buckArr[] = "Y";	$this->transArr[] = "ā";
        $this->charsArr[] = "أ"; 		$this->buckArr[] = ">";	$this->transArr[] = "";
        $this->charsArr[] = "إ"; 		$this->buckArr[] = "<";	$this->transArr[] = "";
        $this->charsArr[] = "ئ"; 		$this->buckArr[] = "}";	$this->transArr[] = "";
        $this->charsArr[] = "ء"; 		$this->buckArr[] = "X"; $this->transArr[] = "'";
        $this->charsArr[] = "ؤ";		$this->buckArr[] = "&";	$this->transArr[] = " ";
        //missing characters for harakath.
        $this->charsArr[] = "\u{0652}"; 	$this->buckArr[] = "o";	 $this->transArr[] = "'";
        $this->charsArr[] = "\u{064e}"; 	$this->buckArr[] = "a";	 $this->transArr[] = "a";
        $this->charsArr[] = "\u{0650}"; 	$this->buckArr[] = "i";	 $this->transArr[] = "i";
        $this->charsArr[] = "\u{064f}"; 	$this->buckArr[] = "u";	 $this->transArr[] = "";
        $this->charsArr[] = "\u{064b}"; 	$this->buckArr[] = "F";	 $this->transArr[] = "an";
        $this->charsArr[] = "\u{064d}"; 	$this->buckArr[] = "K";	 $this->transArr[] = "in";
        $this->charsArr[] = "\u{064c}"; 	$this->buckArr[] = "N";	 $this->transArr[] = "un";
        $this->charsArr[] = "\u{0626}"; 	$this->buckArr[] = "}";	 $this->transArr[] = "";
        $this->charsArr[] = "\u{0640}"; 	$this->buckArr[] = "_";	 $this->transArr[] = "";
        $this->charsArr[] = "\u{0651}"; 	$this->buckArr[] = "~";	 $this->transArr[] = "(double)";
        $this->charsArr[] = "\u{0653}"; 	$this->buckArr[] = "^";	 $this->transArr[] = "";
        $this->charsArr[] = "\u{0654}"; 	$this->buckArr[] = "#";	 $this->transArr[] = "";
        $this->charsArr[] = "\u{0671}"; 	$this->buckArr[] = "{";	 $this->transArr[] = "";
        $this->charsArr[] = "\u{0670}"; 	$this->buckArr[] = "`";	 $this->transArr[] = "";
        $this->charsArr[] = "\u{06e5}"; 	$this->buckArr[] = ",";	 $this->transArr[] = "";
        $this->charsArr[] = "\u{06e6}"; 	$this->buckArr[] = ".";	 $this->transArr[] = "";
        $this->charsArr[] = "ة"; 		    $this->buckArr[] = "p";	 $this->transArr[] = "t";
        //$this->charsArr[] = "ة"; 	        $this->buckArr[] = "P";	 $this->transArr[] = " ";
        $this->charsArr[] = "\u{06df}"; 	$this->buckArr[] = "@";	 $this->transArr[] = "";
        $this->charsArr[] = "\u{06e2}"; 	$this->buckArr[] = "[";	 $this->transArr[] = "";
        $this->charsArr[] = "\u{06ed}"; 	$this->buckArr[] = "]";	 $this->transArr[] = "";
        $this->charsArr[] = "\u{0621}"; 	$this->buckArr[] = "\""; $this->transArr[] = "";
        $this->charsArr[] = "\u{06DC}"; 	$this->buckArr[] = ":";  $this->transArr[] = "";
        $this->charsArr[] = "\u{06E0}"; 	$this->buckArr[] = "\""; $this->transArr[] = "";
        $this->charsArr[] = " "; 		    $this->buckArr[] = " ";	 $this->transArr[] = " ";
        $this->charsArr[] = ";"; 		    $this->buckArr[] = ";";	 $this->transArr[] = "";
        $this->charsArr[] = "\n"; 		    $this->buckArr[] = "\n"; $this->transArr[] = "";
    }

    public function toArabic($text)
    {
        $arabic = '';
        $letters = str_split($text);

        foreach($letters as $key => $letter) {
            $buckArrKey = array_search($letter, $this->buckArr);
            if ($buckArrKey != false) {
                // We've found a match
                $arabic .= $this->charsArr[$buckArrKey];
            } else {
                // No match found, append the letter as it is
                if (!is_numeric($letter)) {
                    $arabic .= $letter;
                }
            }
        }

        return $arabic;
    }



}
