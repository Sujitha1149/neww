<?php
    ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
        if(isset($_GET['data'])){
            $data = $_GET['data'];
            switch($data){
                //About Institute
                case "aboutrgukt":
                    echo "About Rgukt";
                    break;
                case "vam":
                    echo "Vision and Mission";
                    break;
                case "cl":
                    echo "campus life";
                    break;
                case "es":
                    echo "education system";
                    break;
                case "gc":
                    echo "governing council";
                    break;
                case "os":
                    echo "organizational structure";
                    break;
                case "rti":
                    echo "right to act information";
                    break;
                case "pg":
                    echo "photo gallery";
                    break;
                //Administration
                case "chancellor":
                    echo "Chancellor";
                    break;
                case "VC":
                    echo "Vice Chancellor";
                    break;
                case "director":
                    echo "Director";
                    break;
                case "AO":
                    echo "Administrative Officer";
                    break;
                case "DSW":
                    echo "Dean Student Welfare";
                    break; 
                case "FO":
                    echo "Finance Officer";
                    break;  
                case "COE":
                    echo "Controller of Examinations";
                    break;              
                case "coordinators":
                    echo "Coordinators";
                    break;  
                //Academics
                case "deanA":
                    echo "Dean Academics";
                    break;    
                case "APro":
                    echo "Academic Programs";
                    break;
                case "calenA":
                    echo "Academic Calender";
                    break;
                case "curric":
                    echo "Curriculum";
                    break;
                case "regulations":
                    echo "Academic Regulations";
                    break;
                case "alldept":
                    echo "All Departments";
                    break;
                //departments of engineering
                case "csedept":
                    echo "CSE Department";
                    break;
                case "ecedept":
                    echo "ECE Department";
                    break;
                case "civildept":
                    echo "Civil Department";
                    break;
                case "eeedept":
                    echo "EEE Department";
                    break;
                case "mechdept":
                    echo "Mech Department";
                    break;
                case "mmedept":
                    echo "MME Department";
                    break;
                case "chemicaldept":
                    echo "Chemical Department";
                    break;
                
                //cse department
                case "csefaculty":
                    echo "CSE Faculty";
                    break;
                case "cselab":
                    echo "CSE Laboratories";
                    break;
                case "csegallery":
                    echo "CSE Photo Gallery";
                    break;
                case "cselecture":
                    echo "CSE Lecture";
                    break;
                case "cseplacements":
                    echo "CSE Placements";
                    break;
                case "csenotifications":
                    echo "CSE Notifications";
                    break;
                //ece department
                case "ecefaculty":
                    echo "ECE Faculty";
                    break;
                case "ecelab":
                    echo "ECE Laboratories";
                    break;
                case "ecegallery":
                    echo "ECE Photo Gallery";
                    break;
                case "ecelecture":
                    echo "ECE Lecture";
                    break;
                case "eceplacements":
                    echo "ECE Placements";
                    break;
                case "ecenotifications":
                    echo "ECE Notifications";
                    break;   
                 //eee department
                 case "eeefaculty":
                    echo "EEE Faculty";
                    break;
                case "eeelab":
                    echo "EEE Laboratories";
                    break;
                case "eeegallery":
                    echo "EEE Photo Gallery";
                    break;
                case "eeelecture":
                    echo "EEE Lecture";
                    break;
                case "eeeplacements":
                    echo "EEE Placements";
                    break;
                case "eeenotifications":
                    echo "EEE Notifications";
                    break; 
                 //civil department
                 case "civilfaculty":
                    echo "CIVIL Faculty";
                    break;
                case "civillab":
                    echo "CIVIL Laboratories";
                    break;
                case "civilgallery":
                    echo "CIVIL Photo Gallery";
                    break;
                case "civillecture":
                    echo "CIVIL Lecture";
                    break;
                case "civilplacements":
                    echo "CIVIL Placements";
                    break;
                case "civilnotifications":
                    echo "CIVIL Notifications";
                    break;
                //mech department
                case "mechfaculty":
                    echo "MECHANICAL Faculty";
                    break;
                case "mechlab":
                    echo "MECHANICAL Laboratories";
                    break;
                case "mechgallery":
                    echo "MECHANICAL Photo Gallery";
                    break;
                case "mechlecture":
                    echo "MECHANICAL Lecture";
                    break;
                case "mechplacements":
                    echo "MECHANICAL Placements";
                    break;
                case "mechnotifications":
                    echo "MECHANICAL Notifications";
                    break;
                //mme department
                case "mmefaculty":
                    echo "MME Faculty";
                    break;
                case "mmelab":
                    echo "MME Laboratories";
                    break;
                case "mmegallery":
                    echo "MME Photo Gallery";
                    break;
                case "mmelecture":
                    echo "MME Lecture";
                    break;
                case "mmeplacements":
                    echo "MME Placements";
                    break;
                case "mmenotifications":
                    echo "MME Notifications";
                    break;
                //chemical department
                case "chemicalfaculty":
                    echo "CHEMICAL Faculty";
                    break;
                case "chemicallab":
                    echo "CHEMICAL Laboratories";
                    break;
                case "chemicalgallery":
                    echo "CHEMICAL Photo Gallery";
                    break;
                case "chemicallecture":
                    echo "CHEMICAL Lecture";
                    break;
                case "chemicalplacements":
                    echo "CHEMICAL Placements";
                    break;
                case "chemicalnotifications":
                    echo "CHEMICAL Notifications";
                    break;
                //departments of humanities
                case "englishdept":
                    echo "English Department";
                    break;
                case "telugudept":
                    echo "Telugu Department";
                    break;
                case "fineartsdept":
                    echo "Fine arts Department";
                    break;
                case "librarydept":
                    echo "Library Department";
                    break;
                case "pyogadept":
                    echo "Physical & Yoga Department";
                    break;
                case "managementdept":
                    echo "Management Department";
                    break;
                //departments of humanities
                case "chemistrydept":
                    echo "Chemistry Department";
                    break;
                case "physicsdept":
                    echo "Physics Department";
                    break;
                case "mathsdept":
                    echo "Maths Department";
                    break;
                case "itdept":
                    echo "IT Department";
                    break;
                //Grievance
                case "womenC":
                    echo "Women Cell";
                    break;   
                case "scst":
                    echo "SC St Cell";
                    break;   
                case "antiR":
                    echo "Anti Ragging Cell";
                    break; 
                //others
                case "consultancy":
                    echo "Consultancy";
                    break; 
                case "contactus":
                    echo "Contact Us";
                    break;  
                case "careers":
                    echo "Careers";
                    break; 
                
                case "rguktE":
                    echo "Rgukt Events";
                    break;
                case "imagegal":
                    echo "Image Gallery";
                    break;
                case "videogal":
                    echo "Video Gallery";
                    break;
                case "artsculture":
                    echo "Arts and Culture";
                    break;
                //Explore Campus
                case "resourcefaci":
                    echo "Resource and Facilities";
                    break;
                //notifications and tenders 
                case "tenders":
                    echo "Tenders";
                    break;
                case "news_updates":
                    echo "News, Updates and Events";
                    break;
                //placement cell
                case "placecell":
                    echo "Placement Cell";
                    break;
                //others- sub events
                case "revent1":
                    echo "Rgukt Events-1";
                    break;                
                default:
                   echo "RGUKT ONGOLE";
            }
        }
         ?>

    </title>
    
<!-- ================ Bootstrap ================ -->
<?php 
include_once 'bootstrap.php';
?>
<!-- ================ CSS FILE ================ -->
<style>
    <?php include 'style.css' ?>;     
</style>


</head>
<body>
    <?php  include_once 'nav.php';  ?>
    <main>
        <?php
            if(isset($_GET['data'])){
                $data = $_GET['data'];
                switch($data){
                    //aboutinstitute
                    case "aboutrgukt":
                        include_once 'aboutinstitute_/aboutrgukt.php';
                        break;
                    case "vam":
                        include_once 'aboutinstitute_/visionmission.php';
                        break;
                    case "cl":
                        include_once 'aboutinstitute_/campuslife.php';
                        break;
                    case "es":
                        include_once 'aboutinstitute_/educationsystem.php';
                        break;
                    case "gc":
                        include_once 'aboutinstitute_/governingcouncil.php';
                        break;
                    case "os":
                        include_once 'aboutinstitute_/organizationstrut.php';
                        break;
                    case "rti":
                        include_once 'aboutinstitute_/rti.php';
                        break;
                    case "pg":
                        include_once 'aboutinstitute_/photogallery.php';
                        break;
                    //administration
                    case "chancellor":
                        include_once 'administration_/chancellor.php';
                        break;
                    case "VC":
                        include_once 'administration_/vicechancellor.php';
                        break;
                    case "director":
                        include_once 'administration_/director.php';
                        break;
                    case "AO":
                        include_once 'administration_/administrativeofficer.php';
                        break;  
                    case "DSW":
                        include_once 'administration_/deanstudentwelfare.php';
                        break;  
                    case "FO":
                        include_once 'administration_/financeofficer.php';
                        break;   
                    case "COE":
                        include_once 'administration_/controllerofexaminations.php';
                        break;   
                    case "coordinators":
                        include_once 'administration_/coordinators.php';
                        break;  
                    //Academics
                    case "deanA":
                        include_once 'academics_/deanacademics.php';
                        break;     
                    case "APro":
                        include_once 'academics_/academicprograms.php';
                        break;
                    case "calenA":
                        include_once 'academics_/acacalender.php';
                        break;
                    case "curric":
                        include_once 'academics_/curriculum.php';
                        break; 
                    case "regulations":
                        include_once 'academics_/regulations.php';
                        break;
                    case "alldept":
                        include_once 'academics_/alldept.php';
                        break; 
                    //departments of Engineering
                    case "csedept":
                        include_once 'academics_/cse.php';
                        break; 
                    case "ecedept":
                        include_once 'academics_/ece.php';
                        break; 
                    case "civildept":
                        include_once 'academics_/civil.php';
                        break; 
                    case "eeedept":
                        include_once 'academics_/eee.php';
                        break; 
                    case "mechdept":
                        include_once 'academics_/mech.php';
                        break; 
                    case "mmedept":
                        include_once 'academics_/mme.php';
                        break;
                    case "chemicaldept":
                        include_once 'academics_/chemical.php';
                        break; 
                    
                    //cse department
                    case "csefaculty":
                        include_once 'academics_/csefaculty.php';
                        break;
                    case "cselab":
                        include_once 'academics_/cselab.php';
                        break;
                    case "csegallery":
                        include_once 'academics_/csegallery.php';
                        break;
                    case "cselecture":
                        include_once 'academics_/cselecture.php';
                        break;
                    case "cseplacements":
                        include_once 'academics_/cseplacements.php';
                        break;
                    case "csenotifications":
                        include_once 'academics_/csenotifications.php';
                        break;
                    //ece department
                    case "ecefaculty":
                        include_once 'academics_/ecefaculty.php';
                        break;
                    case "ecelab":
                        include_once 'academics_/ecelab.php';
                        break;
                    case "ecegallery":
                        include_once 'academics_/ecegallery.php';
                        break;
                    case "ecelecture":
                        include_once 'academics_/ecelecture.php';
                        break;
                    case "eceplacements":
                        include_once 'academics_/eceplacements.php';
                        break;
                    case "ecenotifications":
                        include_once 'academics_/ecenotifications.php';
                        break;   
                    //eee department
                    case "eeefaculty":
                        include_once 'academics_/eeefaculty.php';
                        break;
                    case "eeelab":
                        include_once 'academics_/eeelab.php';
                        break;
                    case "eeegallery":
                        include_once 'academics_/eeegallery.php';
                        break;
                    case "eeelecture":
                        include_once 'academics_/eeelecture.php';
                        break;
                    case "eeeplacements":
                        include_once 'academics_/eeeplacements.php';
                        break;
                    case "eeenotifications":
                        include_once 'academics_/eeenotifications.php';
                        break; 
                    //civil department
                    case "civilfaculty":
                        include_once 'academics_/civilfaculty.php';
                        break;
                    case "civillab":
                        include_once 'academics_/civillab.php';
                        break;
                    case "civilgallery":
                        include_once 'academics_/civilgallery.php';
                        break;
                    case "civillecture":
                        include_once 'academics_/civillecture.php';
                        break;
                    case "civilplacements":
                        include_once 'academics_/civilplacements.php';
                        break;
                    case "civilnotifications":
                        include_once 'academics_/civilnotifications.php';
                        break;
                    //mech department
                    case "mechfaculty":
                        include_once 'academics_/mechfaculty.php';
                        break;
                    case "mechlab":
                        include_once 'academics_/mechlab.php';
                        break;
                    case "mechgallery":
                        include_once 'academics_/mechgallery.php';
                        break;
                    case "mechlecture":
                        include_once 'academics_/mechlecture.php';
                        break;
                    case "mechplacements":
                        include_once 'academics_/mechplacements.php';
                        break;
                    case "mechnotifications":
                        include_once 'academics_/mechnotifications.php';
                        break;
                    //mme department
                    case "mmefaculty":
                        include_once 'academics_/mmefaculty.php';
                        break;
                    case "mmelab":
                        include_once 'academics_/mmelab.php';
                        break;
                    case "mmegallery":
                        include_once 'academics_/mmegallery.php';
                        break;
                    case "mmelecture":
                        include_once 'academics_/mmelecture.php';
                        break;
                    case "mmeplacements":
                        include_once 'academics_/mmeplacements.php';
                        break;
                    case "mmenotifications":
                        include_once 'academics_/mmenotifications.php';
                        break;
                    //chemical department
                    case "chemicalfaculty":
                        include_once 'academics_/chemicalfaculty.php';
                        break;
                    case "chemicallab":
                        include_once 'academics_/chemicallab.php';
                        break;
                    case "chemicalgallery":
                        include_once 'academics_/chemicalgallery.php';
                        break;
                    case "chemicallecture":
                        include_once 'academics_/chemicallecture.php';
                        break;
                    case "chemicalplacements":
                        include_once 'academics_/chemicalplacements.php';
                        break;
                    case "chemicalnotifications":
                        include_once 'academics_/chemicalnotifications.php';
                        break;
                    //departments of humanities
                    case "englishdept":
                        include_once 'academics_/english.php';
                        break; 
                    case "telugudept":
                        include_once 'academics_/telugu.php';
                        break; 
                    case "fineartsdept":
                        include_once 'academics_/finearts.php';
                        break; 
                    case "librarydept":
                        include_once 'academics_/library.php';
                        break; 
                    case "pyogadept":
                        include_once 'academics_/pyoga.php';
                        break; 
                    case "managementdept":
                        include_once 'academics_/management.php';
                        break; 
                    //departments of Sciences
                    case "chemistrydept":
                        include_once 'academics_/chemistry.php';
                        break; 
                    case "physicsdept":
                        include_once 'academics_/physics.php';
                        break; 
                    case "mathsdept":
                        include_once 'academics_/maths.php';
                        break; 
                    case "itdept":
                        include_once 'academics_/it.php';
                        break; 
                    //Grievance
                    case "womenC":
                        include_once 'grievance_/womencell.php';
                        break; 
                    case "scst":
                        include_once 'grievance_/scstcell.php';
                        break; 
                    case "antiR":
                        include_once 'grievance_/antiragging.php';
                        break; 
                    //others
                    case "consultancy":
                        include_once 'others/consultancy.php';
                        break; 
                    case "contactus":
                        include_once 'others/contactus.php';
                        break; 
                    case "careers":
                        include_once 'others/careers.php';
                        break;
                    case "rguktE":
                        include_once 'others/rguktevents.php';
                        break; 
                    case "imagegal":
                        include_once 'Galleries/imagegallery.php';
                        break; 
                    case "videogal":
                        include_once 'Galleries/videogallery.php';
                        break;
                    case "artsculture":
                        include_once 'Galleries/artsculture.php';
                        break;
                    //Explore campus
                    case "resourcefaci":
                        include_once 'ExploreCampus/resource.php';
                        break;
                    //notifications and tenders 
                    case "tenders":
                        include_once 'others/tenders.php';
                        break;
                    case "news_updates":
                        include_once 'others/news_updates.php';
                        break;
                    //placement cell
                    case "placecell":
                        include_once 'placementcell/placementcell.php';
                        break;
                    //others- sub events
                    case "revent1":
                        include_once 'others/revent1.php';
                        break; 
                    default:
                       header("Location: index.php");
                       exit();
                }
            }else{
               header("Location: index.php");
               exit();
            }
            
        ?>
    </main>
    <?php  include_once 'footer.php';  ?>
    <!-- ================ owl carousals and js ================ -->
    <?php
    include 'owlcarousalsjs.php';
    ?>
</body>
</html>