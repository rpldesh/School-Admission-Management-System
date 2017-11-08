
<title>addStudent</title>
<link href="<?php echo URL ?>public/css/login.css" rel="stylesheet">
</head>
<body>
<div class="container">

    <form action="applicant/addApplicant" method="post" id="signup">

        <div class="header">

            <h3>Add Student Form</h3>

            <p>You want to fill out this form</p>

        </div>

        <div class="sep"></div>

        <div class="inputs">
            <label for="student_ID"><b>Student ID</b></label><br />
            <input name="student_ID" type="text" placeholder=" Enter Student ID" autofocus />
            <label for="student_f_name"><b>Student's First Name</b></label><br />
            <input name="student_f_name" type="text" placeholder="First Name" autofocus />
            <label for="student_m_name"><b>Student's Middle Name</b></label><br />
            <input name="student_m_name" type="text" placeholder="Middle Name" autofocus />
            <label for="student_l_name"><b>Student's Last Name</b></label><br />
            <input name="student_l_name" type="text" placeholder="Last Name" autofocus />
            <label for="student_gender"><b>Gender</b></label><br />
            <select id="student_gender" name="gender" required><br />
                <option value="Male" >Male</option><option value="Female" >Female</option></select>
            <label for="dob"><b>Date Of Birth</b></label><br />
            <input name="date_of_add." type="date" required/><br />
            <label for="date_of_add."><b>Date Of Admission</b></label><br />
            <input name="dob" type="date" required/><br />



            <input id="submit" type="submit"/>

        </div>

    </form>

</div>
​
</body>
</html>