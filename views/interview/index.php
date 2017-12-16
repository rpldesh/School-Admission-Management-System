
<title>Title</title>
<link href="<?php echo URL ?>public/css/login.css" rel="stylesheet">
<link href="<?php echo URL ?>public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}</style>
</head>
<body>
<div class="container">

    <form action="<?php echo URL;?>interview/loadApplicant" method="post" id="signup">

        <div class="header">

            <h3>LOAD APPLICANT DETAILS</h3>

            <p>Enter Applicantion ID</p>

        </div>


        <div class="inputs">
            <label for="application_ID"><b>Application ID</b></label><br />
            <input name="application_ID" type="text" placeholder=" Enter Application ID" autofocus />


            <input id="submit" type="submit"/>

        </div>

    </form>

</div>
​
</body>
</html>
