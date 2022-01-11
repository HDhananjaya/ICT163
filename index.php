<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form method="POST">
			<label>Name</label>
            <input type="text" name="name"><br><br>
			<label>Reg No.</label>
            <input type="text" name="regno"><br><br>
            <button type="submit" name="submit">Submit</button>
        </form>

            <?php 
            if (isset($_POST['submit'])) {
            	$name = $_POST['name'];
            	$regno = $_POST['regno'];

            	$studentChild = new StudentChild($name, $regno);
            	$studentChild->display();


            }

            class StudentParent{
            	public $stdName;
            	public $stdRegNum;

            	function __construct($name, $regnum) {
            		$this->stdName = $name;
            		$this->stdRegNum = $regnum;
			  	}

			  	
            }

            class StudentChild extends StudentParent{
            	function __construct($name, $regnum) {
			        parent::__construct($name, $regnum);
			    }

			    function display(){
            		echo 'The Student Name is ';
            		echo $this->stdName;
            		echo ' and the Registration Number is ';
            		echo $this->stdRegNum;
            	}

            	
            }

             ?>

</body>
</html>