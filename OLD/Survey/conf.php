<?php

$str = '{
    "0": {
    "Unique": "Zero",
     "qsn": "Which browswer do you use?",
     "options" :[
       "brave",
       "edge",
       "chrome"
       ]
   },
    "1": {
    "Unique": "One",
     "qsn": "Which os you use most?",
     "options" :[
       "windows",
       "androind",
       "linux"
       ]
    },
    "2": {
      "Unique": "Two",
       "qsn": "Which device you use most?",
       "options" :[
         "android",
         "windows",
         "apple"
         ]
      }
}';

$data = json_decode($str, true);



