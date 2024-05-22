<?php
error_reporting(0);
 ini_set('display_errors', 0);

$koneksi = mysqli_connect("localhost", "root", "", "ccfit");

if (mysqli_connect_error()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$id = 1;
$i = 1;

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Jawaban</title>
    <meta name="description" content="Tes Kraepelin">
    <meta name="author" content="Clarymond Simbolon" />
    <link rel="shortcut icon" type="image/png" href="akui.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Add your custom styles here if needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        /* Add your custom styles here if needed */
    </style>
    <script src="table2excel.js"></script>
</head>

<body>
    <?php
    // Fetch biodata
    $biodataQuery = "SELECT * FROM tes_result WHERE id = $id";
    $biodataResult = mysqli_query($koneksi, $biodataQuery);

    if (!$biodataResult) {
        die("Error in the query: " . mysqli_error($koneksi));
    }

    // Display biodata
    while ($row = mysqli_fetch_assoc($biodataResult)) {
        echo '<div class="container">';
        echo '<div class="card " style="width: 18rem;">
                <div class="card-body">';
        echo "Nama : " . $row['nama'] . "<br>";
        echo "Posisi : " . $row['nik'] . "<br>";
        echo "Iq : " . $row['iq'] . "<br>";
        echo "Kategori IQ : " . $row['kategori'] . "<br>";
        echo '</div></div></div>';
    }

    ?>
   

    <?php
    // Fetch test results
    $testResultsQuery = "SELECT hasil_test_1, hasil_test_2, hasil_test_3, hasil_test_4 FROM tes_result WHERE id = $id";
    $testResultsResult = mysqli_query($koneksi, $testResultsQuery);

    if (!$testResultsResult) {
        die("Error in the query: " . mysqli_error($koneksi));
    }

    $labels = [];
    $data = [];

    echo "<div class='container'>
            <div class='row'>
                <div class='col-12'>";
    echo "<table  border='1' id='example-table' class='table table-striped'>
            <thead>
                <tr>
                    <th>No sub</th>
                    <th>sub1</th>
                    <th>sub2</th>
                    <th>sub3</th>
                    <th>sub4</th>
                </tr>
            </thead>
            <tbody>";


        

    while ($row = mysqli_fetch_assoc($testResultsResult)) {
        $suub1 = explode(',', $row['hasil_test_1']);
        $suub2 = explode(',', $row['hasil_test_2']);
        $suub3 = explode(',', $row['hasil_test_3']);
        $suub4 = explode(',', $row['hasil_test_4']);


        
        foreach ($suub2 as $index => $nilai) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td id='a.".$i."'>" . $suub1[$index] . "</td>";
            echo "<td id='b.".$i."'>" .$nilai  . "</td>";                                       
            echo "<td id='c.".$i."'>" . $suub3[$index] . "</td>";           // $i++;
            echo "<td id='d.".$i."'>" . $suub4[$index] . "</td>";
            echo "</tr>";
            $i++;
        }
    };


    echo "</tbody></table>";
    echo "</div></div></div>";

    mysqli_close($koneksi);
    ?>
        
        
       
       
    
        <button id="download">export to excel</button>
        
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- Add the following script at the end of your HTML file, just before the </body> tag -->

<script>
    document.addEventListener("DOMContentLoaded", () => {
        
            //sub1  
            fetch('getData.php') // Replace 'getData.php' with the correct path to your PHP script
    .then(response => response.json())
    .then(data => {
        // Assuming data is an array retrieved from the server
        suub1 = data;
        console.log(suub1);

          //sub1         
          let a1 = document.getElementById('a.1');
        if (suub1[2] == "B") {
            a1.innerHTML = 1 ;
        } else {
            a1.innerHTML = 0 ;
        }

        let a2 = document.getElementById('a.2');
        if (suub1[7] == "C") {
            a2.innerHTML = 1 ;
        } else {
            a2.innerHTML = 0 ;
        }

        let a3 = document.getElementById('a.3')
        if (suub1[12] == "B") {
            a3.innerHTML = 1 ;
        
        }else{
            a3.innerHTML = 0 ;
        a3.style.color = 'red' 
        } 

        let a4 = document.getElementById('a.4')
        if (suub1[17] == "D") {
            a4.innerHTML = suub1[17] ;
        a4.style.color = 'black' 
        }else{
            a4.innerHTML = suub1[17] ;
        a4.style.color = 'red' 
        } 

        let a5 = document.getElementById('a.5')
        if (suub1[22] == "E") {
            a5.innerHTML = suub1[22] ;
        a5.style.color = 'black' 
        }else{
            a5.innerHTML = suub1[22] ;
        a5.style.color = 'red' 
        } 

        let a6 = document.getElementById('a.6')
        if (suub1[27] == "B") {
            a6.innerHTML = suub1[27] ;
        a6.style.color = 'black' 
        }else{
            a6.innerHTML = suub1[27] ;
        a6.style.color = 'red' 
        } 

        let a7 = document.getElementById('a.7')
        if (suub1[32] == "D") {
            a7.innerHTML = suub1[32] ;
        a7.style.color = 'black' 
        }else{
            a7.innerHTML = suub1[32] ;
        a7.style.color = 'red' 
        } 

        let a8 = document.getElementById('a.8')
        if (suub1[37] == "B") {
            a8.innerHTML = suub1[37] ;
        a8.style.color = 'black' 
        }else{
            a8.innerHTML = suub1[37] ;
        a8.style.color = 'red' 
        } 

        let a9 = document.getElementById('a.9')
        if (suub1[42] == "F") {
            a9.innerHTML = suub1[42] ;
        a9.style.color = 'black' 
        }else{
            a9.innerHTML = suub1[42] ;
        a9.style.color = 'red' 
        } 


        let a10 = document.getElementById('a.10')
        if (suub1[47] == "C") {
            a10.innerHTML = suub1[47] ;
        a10.style.color = 'black' 
        }else{
            a10.innerHTML = suub1[47] ;
        a10.style.color = 'red' 
        } 


        let a11 = document.getElementById('a.11')
        if (suub1[52] == "B") {
            a11.innerHTML = suub1[52] ;
        a11.style.color = 'black' 
        }else{
            a11.innerHTML = suub1[52] ;
        a11.style.color = 'red' 
        } 


        let a12 = document.getElementById('a.12')
        if (suub1[57] == "B") {
            a12.innerHTML = suub1[57] ;
        a12.style.color = 'black' 
        }else{
            a12.innerHTML = suub1[57] ;
        a12.style.color = 'red' 
        } 


        let a13 = document.getElementById('a.13')
        if (suub1[62] == "E") {
            a13.innerHTML = suub1[62] ;
        a13.style.color = 'black' 
        }else{
            a13.innerHTML = suub1[62] ;
        a13.style.color = 'red' 
        } 
                
    });


         //sub1  
         fetch('getData2.php') // Replace 'getData.php' with the correct path to your PHP script
    .then(response => response.json())
    .then(data => {
        // Assuming data is an array retrieved from the server
        suub2 = data;
        console.log(suub2);

        let b1 = document.getElementById('b.1');
        if (suub2.substring(2, 4) === 'BE') {
            b1.innerHTML = suub2.substring(2, 4);
            b1.style.color = 'black';
        } else {
            b1.innerHTML = suub2.substring(2, 4);
            b1.style.color = 'red';
        }

        let b2 = document.getElementById('b.2')
        if (suub2.substring(8, 10) == 'AE') {
        b2.innerHTML = suub2.substring(8, 10) ;
        b2.style.color = 'black' 
        }else{
        b2.innerHTML =suub2.substring(8, 10) ;
        b2.style.color = 'red' 
        } 

        let b3 = document.getElementById('b.3')
        if (suub2.substring(14, 16) == 'AD') {
        b3.innerHTML = suub2.substring(14, 16) ;
        b3.style.color = 'black' 
        }else{
        b3.innerHTML =suub2.substring(14, 16) ;
        b3.style.color = 'red' 
        } 

        let b4 = document.getElementById('b.4')
        if (suub2.substring(20, 22) == 'CE') {
        b4.innerHTML = suub2.substring(20, 22) ;
        b4.style.color = 'black' 
        }else{
        b4.innerHTML =suub2.substring(20, 22) ;
        b4.style.color = 'red' 
        } 

        let b5 = document.getElementById('b.5')
        if (suub2.substring(26, 28) == 'BE') {
        b5.innerHTML = suub2.substring(26, 28) ;
        b5.style.color = 'black' 
        }else{
        b5.innerHTML =suub2.substring(26, 28) ;
        b5.style.color = 'red' 
        } 

        let b6 = document.getElementById('b.6')
        if (suub2.substring(32, 34) == 'AD') {
        b6.innerHTML = suub2.substring(32, 34) ;
        b6.style.color = 'black' 
        }else{
        b6.innerHTML =suub2.substring(32, 34) ;
        b6.style.color = 'red' 
        } 

        let b7 = document.getElementById('b.7')
        if (suub2.substring(38, 40) == 'BE') {
        b7.innerHTML = suub2.substring(38, 40) ;
        b7.style.color = 'black' 
        }else{
        b7.innerHTML =suub2.substring(38, 40) ;
        b7.style.color = 'red' 
        } 

        let b8 = document.getElementById('b.8')
        if (suub2.substring(44, 46) == 'BE') {
        b8.innerHTML = suub2.substring(44, 46) ;
        b8.style.color = 'black' 
        }else{
        b8.innerHTML =suub2.substring(44, 46) ;
        b8.style.color = 'red' 
        } 

        let b9 = document.getElementById('b.9')
        if (suub2.substring(50, 52) == 'AD') {
        b9.innerHTML = suub2.substring(50, 52) ;
        b9.style.color = 'black' 
        }else{
        b9.innerHTML =suub2.substring(50, 52) ;
        b9.style.color = 'red' 
        } 


        let b10 = document.getElementById('b.10')
        if (suub2.substring(56, 58) == 'BD') {
        b10.innerHTML = suub2.substring(56, 58) ;
        b10.style.color = 'black' 
        }else{
        b10.innerHTML =suub2.substring(56, 58) ;
        b10.style.color = 'red' 
        } 


        let b11 = document.getElementById('b.11')
        if (suub2.substring(62, 64) == 'AE') {
        b11.innerHTML = suub2.substring(62, 64) ;
        b11.style.color = 'black' 
        }else{
        b11.innerHTML =suub2.substring(62, 64) ;
        b11.style.color = 'red' 
        } 


        let b12 = document.getElementById('b.12')
        if (suub2.substring(68, 70) == 'CD') {
        b12.innerHTML = suub2.substring(68, 70) ;
        b12.style.color = 'black' 
        }else{
        b12.innerHTML =suub2.substring(68, 70) ;
        b12.style.color = 'red' 
        } 


        let b13 = document.getElementById('b.13')
        if (suub2.substring(74, 76) == 'BC') {
        b13.innerHTML = suub2.substring(74, 76) ;
        b13.style.color = 'black' 
        }else{
        b13.innerHTML =suub2.substring(74, 76) ;
        b13.style.color = 'red' 
        } 

        let b14 = document.getElementById('b.14')
        if (suub2.substring(80, 82) == 'AB') {
        b14.innerHTML = suub2.substring(80, 82) ;
        b14.style.color = 'black' 
        }else{
        b14.innerHTML =suub2.substring(80, 82) ;
        b14.style.color = 'red' 
        } 
    });
            

            

            //sub3
            fetch('getData3.php') // Replace 'getData.php' with the correct path to your PHP script
            .then(response => response.json())
            .then(data => {
        // Assuming data is an array retrieved from the server
            suub3 = data;
            console.log(suub3);      
                    
            
        let c1 = document.getElementById('c.1')
            if (suub3[2] == 'E') {
            c1.innerHTML = suub3[2] ;
            c1.style.color = 'black' 
            }else{
            c1.innerHTML =suub3[2] ;
            c1.style.color = 'red' 
            }
        let c2 = document.getElementById('c.2')
            if (suub3[7] == 'E') {
            c2.innerHTML = suub3[7] ;
            c2.style.color = 'black' 
            }else{
            c2.innerHTML =suub3[7] ;
            c2.style.color = 'red' 
            }
        let c3 = document.getElementById('c.3')
            if (suub3[12] == 'E') {
            c3.innerHTML = suub3[12] ;
            c3.style.color = 'black' 
            }else{
            c3.innerHTML =suub3[12] ;
            c3.style.color = 'red' 
            }

            let c4 = document.getElementById('c.4')
            if (suub3[17] == 'B') {
            c4.innerHTML = suub3[17] ;
            c4.style.color = 'black' 
            }else{
            c4.innerHTML =suub3[17] ;
            c4.style.color = 'red' 
            } 

            let c5 = document.getElementById('c.5')
            if (suub3[22] == 'C') {
            c5.innerHTML = suub3[22] ;
            c5.style.color = 'black' 
            }else{
            c5.innerHTML =suub3[22] ;
            c5.style.color = 'red' 
            } 

            let c6 = document.getElementById('c.6')
            if (suub3[27] == 'D') {
            c6.innerHTML = suub3[27] ;
            c6.style.color = 'black' 
            }else{
            c6.innerHTML =suub3[27] ;
            c6.style.color = 'red' 
            } 

            let c7 = document.getElementById('c.7')
            if (suub3[32] == 'E') {
            c7.innerHTML = suub3[32] ;
            c7.style.color = 'black' 
            }else{
            c7.innerHTML =suub3[32] ;
            c7.style.color = 'red' 
            } 

            let c8 = document.getElementById('c.8')
            if (suub3[37] == 'E') {
            c8.innerHTML = suub3[37] ;
            c8.style.color = 'black' 
            }else{
            c8.innerHTML =suub3[37] ;
            c8.style.color = 'red' 
            } 

            let c9 = document.getElementById('c.9')
            if (suub3[42] == 'A') {
            c9.innerHTML = suub3[42] ;
            c9.style.color = 'black' 
            }else{
            c9.innerHTML =suub3[42] ;
            c9.style.color = 'red' 
            } 


            let c10 = document.getElementById('c.10')
            if (suub3[47] == 'A') {
            c10.innerHTML = suub3[47] ;
            c10.style.color = 'black' 
            }else{
            c10.innerHTML =suub3[47] ;
            c10.style.color = 'red' 
            } 


            let c11 = document.getElementById('c.11')
            if (suub3[52] =='F') {
            c11.innerHTML = suub3[52] ;
            c11.style.color = 'black' 
            }else{
            c11.innerHTML =suub3[52] ;
            c11.style.color = 'red' 
            } 


            let c12 = document.getElementById('c.12')
            if (suub3[57] == 'C') {
            c12.innerHTML = suub3[57] ;
            c12.style.color = 'black' 
            }else{
            c12.innerHTML =suub3[57] ;
            c12.style.color = 'red' 
            } 


            let c13 = document.getElementById('c.13')
            if (suub3[62] == 'C') {
            c13.innerHTML = suub3[62] ;
            c13.style.color = 'black' 
            }else{
            c13.innerHTML =suub3[62] ;
            c13.style.color = 'red' 
            } 
            
        });          

        fetch('getData4.php') // Replace 'getData.php' with the correct path to your PHP script
        .then(response => response.json())
        .then(data => {
        // Assuming data is an array retrieved from the server
        suub4 = data;
        console.log(suub4); 

            let d1 = document.getElementById('d.1')
            if (suub4[2] == 'B') {
            d1.innerHTML = suub4[2] ;
            d1.style.color = 'black' 
            }else{
            d1.innerHTML =suub4[2] ;
            d1.style.color = 'red' 
            }   

            let d2 = document.getElementById('d.2')
            if (suub4[7] == 'A') {
            d2.innerHTML = suub4[7] ;
            d2.style.color = 'black' 
            }else{
            d2.innerHTML =suub4[7] ;
            d2.style.color = 'red' 
            } 

            
            let d3 = document.getElementById('d.3')
            if (suub4[12] == 'D') {
            d3.innerHTML = suub4[12] ;
            d3.style.color = 'black' 
            }else{
            d3.innerHTML =suub4[12] ;
            d3.style.color = 'red' 
            } 

            
            let d4 = document.getElementById('d.4')
            if (suub4[17] == 'D') {
            d4.innerHTML = suub4[17] ;
            d4.style.color = 'black' 
            }else{
            d4.innerHTML =suub4[17] ;
            d4.style.color = 'red' 
            } 

            
            let d5 = document.getElementById('d.5')
            if (suub4[22] == 'A') {
            d5.innerHTML = suub4[22] ;
            d5.style.color = 'black' 
            }else{
            d5.innerHTML =suub4[22] ;
            d5.style.color = 'red' 
            } 

            
            let d6 = document.getElementById('d.6')
            if (suub4[27] == 'B') {
            d6.innerHTML = suub4[27] ;
            d6.style.color = 'black' 
            }else{
            d6.innerHTML =suub4[27] ;
            d6.style.color = 'red' 
            } 

            
            let d7 = document.getElementById('d.7')
            if (suub4[32] == 'C') {
            d7.innerHTML = suub4[32] ;
            d7.style.color = 'black' 
            }else{
            d7.innerHTML =suub4[32] ;
            d7.style.color = 'red' 
            } 

            
            let d8 = document.getElementById('d.8')
            if (suub4[37] == 'D') {
            d8.innerHTML = suub4[37] ;
            d8.style.color = 'black' 
            }else{
            d8.innerHTML =suub4[37] ;
            d8.style.color = 'red' 
            } 

            
            let d9 = document.getElementById('d.9')
            if (suub4[42] == 'A') {
            d9.innerHTML = suub4[42] ;
            d9.style.color = 'black' 
            }else{
            d9.innerHTML =suub4[42] ;
            d9.style.color = 'red' 
            } 

            
            let d10 = document.getElementById('d.10')
            if (suub4[47] == 'D') {
            d10.innerHTML = suub4[47] ;
            d10.style.color = 'black' 
            }else{
            d10.innerHTML =suub4[47] ;
            d10.style.color = 'red' 
            } 
        });
            
        
        
    });


</script> 
<script>
document.getElementById('download').addEventListener('click', function () {
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("#example-table"));
        });</script>
        <script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>

</body>
</html>