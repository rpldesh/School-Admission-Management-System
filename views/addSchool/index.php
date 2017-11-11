
<title>Title</title>
<link href="<?php echo URL ?>public/css/login.css" rel="stylesheet">
<link href="<?php echo URL ?>public/css/alertBox.css" rel="stylesheet">
<style> div.alert{display: none;}</style>
</head>
<body>
<div class="container">

    <form action="addSchool/addSchool" method="post" id="signup">

        <div class="header">

            <h3>Add a new school</h3>

            <p>Fill this form to add a new school to the system</p>

        </div>

        <div class="sep"></div>

        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            School is added successfully
        </div>
        <div class="inputs">
            <label for="sch_ID"><b>School ID</b></label><br />
            <input name="sch_ID" type="text" placeholder=" Enter School ID" autofocus />
            <label for="sch_name"><b>Name of the school</b></label><br />
            <input name="sch_name" type="text" placeholder=" Enter school Name" autofocus />
            <label for="street_no"><b>Street No.</b></label><br />
            <input name="street_no" type="text" placeholder="(If any)" autofocus />
            <label for="street_name"><b>Street Name</b></label><br />
            <input name="street_name" type="text" placeholder="Street Name" autofocus />
            <label for="city"><b>City</b></label><br />
            <input name="city" type="text" placeholder="City" autofocus />
            <label for="district"><b>District</b></label><br />
            <select id="district" name="district" required><br />
                <option value="Ampara" >Ampara</option><option value="Anuradhapura" >Anuradhapura</option><option value="Badulla" >Badulla</option>
                <option value="Batticaloa" >Batticaloa</option><option value="Colombo" >Colombo</option><option value="Galle" >Galle</option>
                <option value="Gampaha" >Gampaha</option><option value="Hambantota" >Hambantota</option><option value="Jaffna" >Jaffna</option>
                <option value="Kalutara" >Kalutara</option><option value="Kandy" >Kandy</option><option value="Kegalle" >Kegalle</option>
                <option value="Kilinochchi" >Kilinochchi</option><option value="Kurunegala" >Kurunegala</option><option value="Mannar" >Mannar</option>
                <option value="Matale" >Matale</option><option value="Matara" >Matara</option><option value="Monaragala" >Monaragala</option>
                <option value="Mullaitivu" >Mullaitivu</option><option value="Nuwara_Eliya" >Nuwara Eliya</option><option value="Polonnaruwa" >Polonnaruwa</option>
                <option value="Puttalam" >Puttalam</option><option value="Rathnapura" >Rathnapura</option><option value="Trincomalee" >Trincomalee</option>
                <option value="Vavuniya" >Vavuniya</option></select>
            <label for="vacancies"><b>No. of Vacancies</b></label><br />
            <input name="vacancies" type="text" placeholder="No. of vacancies" autofocus required/>
            <input id="submit" type="submit"/>
        </div>

    </form>

</div>
​
</body>
</html>