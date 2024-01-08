<?
$company_name = $_POST['company_name'];
$offer_type = $_POST['offer_type'];
$offer_title = $_POST['offer_title'];
$offer_description = $_POST['offer_description'];
$number_of_places = $_POST['number_of_places'];
$candidate_requirements = $_POST['candidate_requirements'];
$company_website = $_POST['company_website'];

$conn = new mysqli('localhost', 'root', '', 'test');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error );
}else{
    $stmt = $conn->prepare("insert into jobs_offers(company_name, offer_type, offer_title, offer_description, number_of_places, candidate_requirements, company_website)
                       values(?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssiss",$company_name, $offer_type, $offer_title, $offer_description, $number_of_places, $candidate_requirements, $company_website );
    $stmt->execute();
    $stmt->close();
    $conn->close();
    echo "Offer Succesfully loaded";
}
?>
