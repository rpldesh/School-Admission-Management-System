
<title>Title</title>
<link href="<?php echo URL ?>public/css/login.css" rel="stylesheet">
<link href="<?php echo URL ?>public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}</style>
</head>
<body>
<div class="container">

    <form action="addApplicant/addApplicant" method="post" id="signup">

        <div class="header">

            <h3>Application</h3>

            <p>You want to fill out this form</p>

        </div>

        <div class="sep"></div>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            Applicant is added successfully
        </div>
        <div class="inputs">
            <label for="application_ID"><b>Application ID</b></label><br />
            <input name="application_ID" type="text" placeholder=" Enter Application ID" autofocus />
            <label for="app_f_name"><b>Applicant's First Name</b></label><br />
            <input name="app_f_name" type="text" placeholder=" Enter First Name" autofocus />
            <label for="app_m_name"><b>Applicant's Middle Name</b></label><br />
            <input name="app_m_name" type="text" placeholder="Middle Name" autofocus />
            <label for="app_l_name"><b>Applicant's Last Name</b></label><br />
            <input name="app_l_name" type="text" placeholder="Last Name" autofocus />
            <label for="App_gender"><b>Gender</b></label><br />
            <select id="App_gender" name="gender" required>
                <option value="Male" >Male</option><option value="Female" >Female</option></select>
            <label for="DOB"><b>Date Of Birth</b></label><br />
            <input id="DOB" name="dob" type="date" required/><br />
            <label for="mother_fName"><b>Mother's First Name</b></label><br />
            <input name="mother_fName" type="text" placeholder="First Name of Mother" autofocus />
            <label for="mother_LName"><b>Mother's Last Name</b></label><br />
            <input name="mother_LName" type="text" placeholder="Last Name of Mother" autofocus />
            <label for="father_fName"><b>Father's First Name</b></label><br />
            <input name="father_fName" type="text" placeholder="First Name of Father" autofocus />
            <label for="father_LName"><b>Father's Last Name</b></label><br />
            <input name="father_LName" type="text" placeholder="Last Name of Father" autofocus />
            <label for="guardian_fName"><b>Guardian's First Name</b></label><br />
            <input name="guardian_fName" type="text" placeholder="First Name of Guardian " autofocus />
            <label for="guardian_LName"><b>Guardian's Last Name</b></label><br />
            <input name="guardian_LName" type="text" placeholder="Last Name of Guardian" autofocus />
            <label for="distanceToSchl"><b>Distance to School</b></label><br />
            <input name="distanceToSchl" type="text" placeholder="To nearest two decimal places in km" autofocus />
            <label for="academic_staff_ref"><b>Academic Staff references</b></label><br />
            <input name="academic_staff_ref" type="text" placeholder="Academic Staff references" autofocus />
            <label for="state_emp_ref"><b>State employee reference</b></label><br />
            <input name="state_emp_ref" type="text" placeholder="state employee reference" autofocus />
            <label for="parent_ref"><b>Parent Reference</b></label><br />
            <input name="parent_ref" type="text" placeholder="Enter Parent's Student Id" autofocus />
            <label for="sibling_ref"><b>Sibling Reference</b></label><br />
            <input name="sibling_ref" type="text" placeholder="Enter Sibling's Student Id" autofocus />




            <input id="submit" type="submit"/>

        </div>

    </form>

</div>
​
</body>
</html>