<?php
$connection = mysqli_connect('localhost','root','');
mysqli_select_db($connection,'EMS_DB')or die("Error occurred");

# Student table
$sql="create table student
(std_ID 	varchar(20),
	first_name	varchar(50) not null,
	mid_name	varchar(50),
	last_name	varchar(50),
	gender		varchar(10),
	DoB		date not null,
	street_no	varchar(20),
	street_name	varchar(50),
	city		varchar(100),
	district		varchar(100),
	achievements	text,
	primary key(std_ID),
	check (gender in ('male','female')))";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table student: ');
}
echo "Table student created successfully\n";

# School table
$sql="create table school
(sch_ID		varchar(10) , 
	 sch_name		varchar(100) not null, 
	 street_no		varchar(20),
	 street_name		varchar(100),
	 city 			varchar(50),
	 district 		varchar(50),
	 number_of_vacancies	numeric(4),
	 primary key (sch_ID)
	)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table: ');
}
echo "Table  school created successfully\n";


# Applicant table
$sql="create table applicant
(application_ID	varchar(20), 
	first_name		varchar(100) not null,
	mid_name		varchar(100),
	last_name		varchar(100), 
	gender			varchar(10),
	DoB			date not null,
	mother_fName	varchar(100),
	mother_LName	varchar(100),
	father_fName		varchar(100),
	father_LName		varchar(100),
	guardian_fName	varchar(100),	
	guardian_LName	varchar(100),	
	primary key (application_ID),
	check (gender in ('male','female'))
	)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table: ');
}
echo "Table applicant created successfully\n";


#Refer table
$sql="create table refer
(application_ID 		varchar(20),
	std_ID				varchar(20),
	reference_type 		varchar(50),
	primary key (application_ID,std_ID,reference_type),
	foreign key (application_ID) references applicant(application_ID)
on delete cascade,
	foreign key (std_ID) references student(std_ID) 
	on delete cascade
)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table: ');
}
echo "Table refer created successfully\n";



#Apply table
$sql="create table apply
(application_ID	varchar(20),
	sch_ID			varchar(10),
	distanceToSchl	numeric(5,2),
	academic_staff_ref	varchar(30),
	state_emp_ref		varchar(30),
	primary key (application_ID,sch_ID),
	foreign key (application_ID) references applicant(application_ID)
		on delete cascade,
	foreign key (sch_ID) references school(sch_ID)
		on delete cascade,
	check (distanceToSchl > 0)
	)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table: ');
}
echo "Table apply created successfully\n";


#attend table
$sql="create table attend
(std_ID			varchar(20),
	sch_ID			varchar(10),
	dateOfAdmission	date not null,
	dateOfLeave		date,
	state			varchar(50),
	primary key (std_ID,sch_ID),
	foreign key (std_ID) references student(std_ID) 
	on delete cascade,
	foreign key (sch_ID) references school(sch_ID)
	on delete cascade,
	check (state in ('current','past'))
	)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table: ');
}
echo "Table attend created successfully\n";

 
# User table  
$sql="Create table users
(u_ID 			varchar(20),
	user_type		varchar(20),
	first_name		varchar(100) not null,
	last_name		varchar(100) ,
	street_no		varchar(20),
	streat_name		varchar(100),
	city			varchar(100),
	user_status		varchar(20),
	primary key(u_ID),
	check (user_type in ('principal','interviewer','inserter','admin','clerk'))
)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table: ');
}
echo "Table users created successfully\n";


#school staff table
$sql="create table school_staff
(u_ID 		varchar(20),
	sch_ID		varchar(10),
	user_type	varchar(20),
	foreign key (u_ID) references users(u_ID)
		on delete cascade,
foreign key (sch_ID) references school(sch_ID)
		on delete cascade,
check (user_type in ('principal','inserter','interviewer'))
	)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table: ');
}
echo "Table school_staff created successfully\n";


# Login table
$sql="Create table login
(username		varchar(100),
	 pwd			varchar(250) not null,
	u_ID 			varchar(20),
	primary key(username),
	foreign key (u_ID) references users(u_ID)
		on delete cascade
	)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table: ');
}
echo "Table login created successfully\n";


# Interview Results Table
$sql="create table interview_result
(application_ID	varchar(20),
	u_ID			varchar(20),
	distance_mark		numeric(5,2) check(distance_mark>=0.00 and distance_mark<=60.00),
	parental_ref_mark	numeric(5,2) check(parental_ref_mark>=0.00 and parental_ref_mark<=60.00),
	sibling_ref_mark	numeric(5,2) check(sibling_ref_mark>=0.00 and sibling_ref_mark<=60.00),
	academic_ref_mark	numeric(5,2) check(academic_ref_mark>=0.00 and academic_ref_mark<=60.00),
 	state_emp_mark	numeric(5,2) check(state_emp_mark>=0.00 and state_emp_mark<=60.00),
 	total_mark	numeric(5,2) check(total_mark>=0.00 and total_mark<=60.00),
	primary key (application_ID,u_ID),
	foreign key (application_ID) references applicant(application_ID)
		on delete cascade,
	foreign key (u_ID) references users(u_ID)
		on delete cascade
	)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table: ');
}
echo "Table interview_result created successfully\n";

$sql="Create table activity
(u_ID 			varchar(20),
    activity_ID int AUTO_INCREMENT,
    avtivity  varchar(255),
    time_of_activity  TIMESTAMP,
	primary key(activity_ID),
	foreign key (u_ID) references users(u_ID)
		on delete cascade
	)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table: ');
}
echo "Table activity created successfully\n";

#phone tables
$sql="create table studentPhone
(std_ID 		varchar(20),
	phone_number	varchar(50),
	primary key(std_ID,phone_number),
	foreign key (std_ID) references student(std_ID)
	on delete cascade	
	)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table: ');
}
echo "Table studentPhone created successfully\n";


$sql="create table schoolPhone
(sch_ID 		varchar(10),
	phone_number	varchar(50),
	primary key(sch_ID,phone_number),
	foreign key (sch_ID) references school(sch_ID)
	on delete cascade	
	)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table: ');
}
echo "Table schoolPhone created successfully\n";



$sql="create table userPhone
(u_ID 			varchar(20),
	phone_number	varchar(50),
	primary key(u_ID,phone_number),
	foreign key (u_ID) references users(u_ID)
	on delete cascade	
	)";
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create table: ');
}
echo "Table userPhone created successfully\n";

// Create index to search through activity table using user_ID
$sql='ALTER TABLE activity ADD INDEX uID_index (u_ID)';
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create index: ');
}
echo "uID_index created successfully\n";

// Create index to search through attend table to select studets of a single school easily
$sql='ALTER TABLE attend ADD INDEX schID_index (sch_ID)';
$retval = mysqli_query(  $connection, $sql );
if(! $retval ) {
    die('Could not create index: ');
}
echo "sch_ID_index created successfully\n";

?>

