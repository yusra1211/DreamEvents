
include("../../AD/pages/connection.php");
if(isset($_POST['book'])){

    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['email'] = $_POST['email'];
    


    $PACK_CODE = $_POST['pack_code'];
$NAME = $_POST['fname'];
$EMAIL = $_POST['email'];
$PHONE = $_POST['phone'];
$EVE_TYPE = $_POST['type'];
$EVE_LOCATION = $_POST['loc'];
$EVE_DATE = $_POST['date'];
$NO_OF_ATT = $_POST['noofguests'];
$START_TIME = $_POST['starttime'];
$END_TIME = $_POST['endtime'];
$DESCRIBE = $_POST['describe'];
$THEME = $_POST['theme'];
$DECORATION = $_POST['decor'];
$MENU = $_POST['menu'];
$BEVERAGE = $_POST['beverage'];
$NOTES = $_POST['notes'];
$VEHICLE = $_POST['vehicle'];
$CLOTH_THEME = $_POST['cloththeme'];
$COLOR = $_POST['color'];
$ADDRESS = $_POST['address'];
$NO_OF_SUITS = $_POST['noofsuits'];


$query1 = "insert into basic(Name,Email,Phone,Event_Type ,Event_Location)
values('$NAME','$EMAIL','$PHONE','$EVE_TYPE','$EVE_LOCATION')";
$query2 = "insert into brief(Email,Date,No.of Attendence ,Starttime ,endtime ,description)
values('$EMAIL','$NO_OF_ATT','$EVE_DATE','$START_TIME','$END_TIME','$DESCRIBE')";
$query3 = "insert into decor(Email,Theme ,decoration ,Menu , Beverages, Needs)
values('$EMAIL','$THEME','$DECORATION','$MENU','$BEVERAGES','$NOTES')";
$query4 = "insert into clothing(Email,Theme ,Color ,No_of_Suits , Address)
values('$EMAIL','$CLOTH_THEME','$COLOR','$NO_OF_SUITS','$ADDRESS')";

$data1 = mysqli_query($connection,$query1);
$data2 = mysqli_query($connection,$query2);
$data3 = mysqli_query($connection,$query3);
$data4 = mysqli_query($connection,$query4);
if($data1 && $data2 && $data3 && $data4){

   
  
}else{

    echo "<script>alert('Data submitted failed')</script>";
  

}
exit();


}