<?php
// $servername = "localhost";
// $counter = 0;
// $username = "root";
// $password = "";
// $dbname = "survey";
// $arr = [];
// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT ans_json FROM survey";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     $kaka = $row["ans_json"];
//     array_push($arr, $kaka);
//     $counter++;
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();

// $mnn = array_count_values($arr);

// var_dump($mnn);
// echo "</br>";


$counter = 0;

$arr1 = [
  [
    "qsn" => "qsn1",
    "options" => [
      "brave",
      "edge",
      "chrome",
    ]
  ],
  [
    "qsn" => "qsn2",
    "options" => [
      "windows",
      "androind",
      "linux",
    ]
    ],
    [
      "qsn" => "qsn3",
      "options" => [
        "hq",
        "iq",
        "tq",
        "pq"
      ]
      ],
];

$arr2 = [
  [
    "edge",
    "windows"
  ],
  [
    "edge",
    "androind"
  ],
  [
    "brave",
    "linux"
  ],
  [
    "chrome",
    "linux",
  ],
  [
    "brave",
    "androind"
  ],
  [
    "chrome",
    "windows",
    "pq"
  ]
];

foreach ($arr1 as $k => $v) {
  foreach ($v["options"] as $k2 => $v2) {
    $count = 0;
    foreach (@$arr2 as $k3 => $v3) {
          if(@$arr1[$k]["options"][$k2] == @$v3[$k]) {
            $count+=1;
            echo $arr1[$k]["options"][$k2]. "==" . $v3[$k] . PHP_EOL;
          }
    }
    echo ($count !== 0 ) ? $count . PHP_EOL : "";
  }
}
