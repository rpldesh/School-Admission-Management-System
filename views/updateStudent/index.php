
<title>Title</title>
<link href="<?php echo URL ?>public/css/login.css" rel="stylesheet">
<link href="<?php echo URL ?>public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}</style>
</head>
<body>
<div class="container">

    <form action="<?php echo URL;?>updateStudent/getStuDetails" method="post" id="searchStu">

        <div class="header">

            <h3>LOAD STUDENT DETAILS</h3>

            <p>Enter Student ID</p>

        </div>


        <div class="inputs">
            <label for="std_ID"><b>Student ID</b></label><br />
            <input name="std_ID" type="text" placeholder=" Enter Student ID" autofocus />


            <input id="Submit" type="submit"/>

        </div>

    </form>

</div>
​
</body>
</html>
