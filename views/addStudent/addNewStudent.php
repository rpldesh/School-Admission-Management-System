<title>addStudent</title>
<link href="<?php echo URL ?>public/css/login.css" rel="stylesheet">
<link href="<?php echo URL ?>public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}</style>
</head>
<body>
<!-------------    Navigation Bar  ------------>
<nav class="navbar navbar-inverse navbarmod">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a class="navifont" href="<?php echo URL?>schoolHome">Home</a></li>
                <li><a class="navifont" href="<?php echo URL?>login/logout" style="margin-left: 1600%">Logout</a></li>
            </ul>

        </div>
    </div>
</nav>
<!-------------------------------------------->

<div class="container">

    <form action="addNewStudentDetails" method="post" id="signup">

        <div class="header">

            <h3>Add Student Form</h3>

            <p>You want to fill out this form</p>

        </div>

        <div class="sep"></div>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

            Student is added successfully
        </div>

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
            <select id="student_gender" name="gender" required>
                <option value="Male" >Male</option><option value="Female" >Female</option></select>
            <label for="dob"><b>Date Of Birth</b></label><br />
            <input name="dob" type="date" required/><br />
            <label for="land_phone"><b>Land Phone Number</b></label><br />
            <input name="land_phone" type="text" placeholder=" Enter land phone number" autofocus />
            <label for="mobile_phone1"><b>Mobile Phone Number1(Optional)</b></label><br />
            <input name="mobile_phone1" type="text" placeholder=" Enter mobile phone number" autofocus />
            <label for="mobile_phone2"><b>Mobile Phone Number2(Optional)</b></label><br />
            <input name="mobile_phone2" type="text" placeholder=" Enter mobile phone number" autofocus />
            <label for="street_no"><b>Street_no</b></label><br />
            <input name="street_no" type="text" placeholder=" Enter Street_no" autofocus />
            <label for="street_name"><b>Street_name</b></label><br />
            <input name="street_name" type="text" placeholder=" Enter Street_name" autofocus />
            <label for="city"><b>City</b></label><br />
            <input name="city" type="text" placeholder=" Enter City" autofocus />
            <label for="district"><b>District</b></label><br />
            <select id="district" name="district" required>
                <option value="Ampara" >Ampara</option><option value="Anuradhapura" >Anuradhapura</option><option value="Badulla" >Badulla</option>
                <option value="Batticaloa" >Batticaloa</option><option value="Colombo" >Colombo</option><option value="Galle" >Galle</option>
                <option value="Gampaha" >Gampaha</option><option value="Hambantota" >Hambantota</option><option value="Jaffna" >Jaffna</option>
                <option value="Kalutara" >Kalutara</option><option value="Kandy" >Kandy</option><option value="Kegalle" >Kegalle</option>
                <option value="Kilinochchi" >Kilinochchi</option><option value="Kurunegala" >Kurunegala</option><option value="Mannar" >Mannar</option>
                <option value="Matale" >Matale</option><option value="Matara" >Matara</option><option value="Monaragala" >Monaragala</option>
                <option value="Mullaitivu" >Mullaitivu</option><option value="Nuwara_Eliya" >Nuwara Eliya</option><option value="Polonnaruwa" >Polonnaruwa</option>
                <option value="Puttalam" >Puttalam</option><option value="Rathnapura" >Rathnapura</option><option value="Trincomalee" >Trincomalee</option>
                <option value="Vavuniya" >Vavuniya</option></select>
            <label for="date_of_add"><b>Date Of Admission</b></label><br />
            <input name="date_of_add" type="date" required/><br />




            <input id="submit" type="submit"/>

        </div>

    </form>

</div>
​
</body>
</html>