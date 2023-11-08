<html>
    <head>
        <title>First website</title>
        <script>
            console.log("sample console output")
            function myFunction(){
                document.getElementById("test").innerHTML="updated";
            }
        </script>
        <link rel="stylesheet" href="color.css" />
    </head>
    <body>
        
    <button onclick="myFunction()">try me</button>
    <p id="test"></p>
        <h1>front page</h1>
        <form method="post">
            Search:<input type="text" name="search"/>
            <input type="submit" />
        </form>
        <?php  
            if(isset($_POST["search"])){
                echo $_POST["search"];
            }  
        ?>
        <button onclick="alert('message')">Alert</button>
        <hr>
        <p>paragraph <strong>bold face</strong></p>
        <input type="password" />
        <button>sample button</button>
        <a href="hw2/problem1.php">buy an iphone</a> 
        <script> 
        let sample="sample text"
        console.log(sample)
        </script>

        <?php
        echo "some php text";
        $sample = "plain variable";
        echo $sample;
        $math = 5+3;
        echo $math;
        if($math==8){
            echo "calculation equals 8";
        }

        ?>
        test
    </body>
</html>