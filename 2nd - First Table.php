<style>
table {
  border-collapse: collapse;
  width: 30%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>

<?php

abstract class Person {

    protected $list = array("adam", "jan", "tomas", "dusan", "igor", "viera", "tana", "zoltan", "oskar", "laco", "peto", "juro", "lubo", "dagmara" );

    protected function getList(){

        return $this->list;
    }
}

class Main extends Person {

    public $roles;
    public static $role_list = array( "1" => "tana", "2" => "tomas", "3" => "viera", "4" => "zoltan", "5" => "peto", "6" => "tomas", "7" => "juro", "8" => "igor", "9" => "lubo", "10" => "oskar", "11" => "jan" );
    public function __construct( array $roles = array() ) {
        $this->roles = $roles;
    }

    public function getList()
    {
        return parent::getList(); // TODO: Change the autogenerated stub
    }

}

class Work {

    public $list = array('kim' => 'grafik', 'igor' => 'TL', 'paolo' => 'qa');
    public $roles = array( "3" => "grafik", "5" => "developer", "9" => "builder", "1" => "qa", "2" => "wdl", "4" => "wpl", "11" => "gwdl", "10" => "TL", "8" => "PM", "7" => "architekt", "6" => "FA" );
}


class View {
	
	public function render( $table ){
		$html = "
         <html>
        <head>
        <script src='jquery-core-latest.js' type='text/javascript' ></script>
        </head>
        <body>
        <form method='get' action=''>
        <input type='submit' name='submit' value='submit' />
        <div id='results'>
        </div>
        </form>
        </body>
        </html>
";
	}
	
}

$ob = new View; // create an object of view class
$listWork = new Main; // create an object of main class
$work = new Work; // create an object of work class


$person = $listWork->getList(); // used to transfer value in person array
$rolesArrray = $work->roles;    // same here transfer value to array


echo "<table border='1'>";  // create the table with border 1 width
echo "<th>Person Name</th>"."<th>Role</th>";  // create <th> as table header
foreach ($listWork->getList() as $k => $v){   // loop of persons name 
			foreach ($work->roles as $key => $value){ // nested loop (loop inside loop) // loop of roles
        if($k==$key){ // conditions of matching the same index
            echo "<tr><td>".($v)."</td><td>".$value."</td></tr>";  // table row and its table data and then print the values
        }  // end of if condition
    }      // end of nested loop or inner loop
} // end of outer loop of external loop
echo "</table>"; // end the table
