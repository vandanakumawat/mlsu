<script>
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
  document.getElementById("mySidenav").style.width = "75%";
  document.getElementById("main").style.marginLeft = "75%";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.body.style.backgroundColor = "white";
}

function openChild(menuNo) {
    if(document.getElementById("childMenu"+menuNo).style.display == "block") {
        document.getElementById("childMenu"+menuNo).style.display = "none";
        document.getElementById("openArrow"+menuNo).classList.remove("fa-caret-right");
        document.getElementById("openArrow"+menuNo).classList.add("fa-caret-down");
    }
    else {
        for(i=1; i<=9; i++) {
            document.getElementById("childMenu"+i).style.display = "none";    
            document.getElementById("openArrow"+i).classList.remove("fa-caret-right");
            document.getElementById("openArrow"+i).classList.add("fa-caret-down");
        }
        document.getElementById("childMenu"+menuNo).style.display = "block";
        document.getElementById("openArrow"+menuNo).classList.remove("fa-caret-down");
        document.getElementById("openArrow"+menuNo).classList.add("fa-caret-right");
    }
}
</script>

<link rel="stylesheet" href="css/responsiveMenu.css">

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <a href="#" class="parentMenu" onclick="openChild(1)">Academics &nbsp;&nbsp; <i id="openArrow1" class="fa fa-caret-down"></i> </a>
        <div class="childMenu" id="childMenu1">
            <a href="Academics.php?pageName=NRCbiotechnology.php"> NRC-Biotechnology </a>
            <a href="Academics.php?pageName=bioTechnology.php"> Department of Bio-Technology </a>
            <a href="Academics.php?pageName=departmentofBotany.php"> Department of Botany </a>
            <a href="Academics.php?pageName=departmentofChemistry.php"> Department of Chemistry </a>
            <a href="Academics.php?pageName=departmentofComputer.php"> Department of Computer Science </a>
            <a href="Academics.php?pageName=departmentofEnvironmental.php"> Department of Environment Science </a>
            <a href="Academics.php?pageName=departmentofGeology.php"> Department of Geology </a>
            <a href="Academics.php?pageName=departmentofIndustrial.php"> Department of Industrial Chemistry </a>
            <a href="Academics.php?pageName=departmentofMaths.php"> Department of Maths & Statistics </a>
            <a href="Academics.php?pageName=departmentofMicrobiology.php"> Department of Microbiology </a>
            <a href="Academics.php?pageName=departmentofPharmacy.php"> Department of Pharmacy </a>
            <a href="Academics.php?pageName=departmentofPhysics.php"> Department of Physics </a>
            <a href="Academics.php?pageName=departmentofPolymer.php"> Department of Polymer Science </a>
            <a href="Academics.php?pageName=departmentofZoology.php"> Department of Zoology </a>
            <a href="Academics.php?pageName=departmentofAccountancy.php"> Department of Accountancy & Statstics </a>
            <a href="Academics.php?pageName=departmentofBanking.php"> Department of Banking & Business Economics </a>
            <a href="Academics.php?pageName=departmentofBusiness.php"> Department of Business Administration </a>
            <a href="Academics.php?pageName=departmentof_Management.php"> Department of Faculty of Management Studies </a>
            <a href="Academics.php?pageName=departmentoftourism.php"> Department of Tourism & Hotel Management </a>
            <a href="https://www.mlsu.ac.in/education/"> Department of Education </a>
            <a href="Academics.php?pageName=departmentof_Law.php"> Department of Law </a>
            <a href="Academics.php?pageName=departmentofEnglish.php"> Department of English </a>
            <a href="Academics.php?pageName=departmentofHindi.php"> Department of Hindi </a>
            <a href="Academics.php?pageName=departmentofHistory.php"> Department of History </a>
            <a href="Academics.php?pageName=departmentofJainology.php"> Department of Jainology & Prakrit </a>
            <a href="Academics.php?pageName=departmentofPhilosophy.php"> Department of Philosophy </a>
            <a href="Academics.php?pageName=departmentofRajasthani.php"> Department of Rajasthani </a>
            <a href="Academics.php?pageName=departmentofSanskrit.php"> Department of Sanskrit </a>
            <a href="Academics.php?pageName=departmentofUrdu.php"> Department of Urdu </a>
            <a href="Academics.php?pageName=departmentofVisual.php"> Department of Visual Art </a>
            <a href="Academics.php?pageName=departmentofPhd.php"> Ph.D Programme </a>
            <a href="http://www.mlsumib.org/"> M.Com IB </a>
            <a href="http://www.bbamlsu.org/"> BBA </a>
            <a href="https://www.mlsu.ac.in/mcomhrd/"> M.Com. HRD </a>
            <a href="Academics.php?pageName=departmentofEconomics.php"> Department of Economics </a>
            <a href="Academics.php?pageName=departmentofGeography.php"> Department of Geography </a>
            <a href="Academics.php?pageName=departmentofJournalism.php"> Department of Journalism </a>
            <a href="Academics.php?pageName=departmentofPolitical.php"> Department of Political Science </a>
            <a href="Academics.php?pageName=departmentofLibrary.php"> Department of Library and Information Science </a>
            <a href="Academics.php?pageName=departmentofPsychology.php"> Department of Psychology </a>
            <a href="Academics.php?pageName=departmentofPublic.php"> Department of Public Administration </a>
            <a href="Academics.php?pageName=departmentofSociology.php"> Department of Sociology </a>
            <a href="http://www.uclmlsu.org/"> University Central Library </a>
            <a href="http://www.mlsudthm.org/"> Hotel and Tourism Management </a>
            <a href="http://www.cwsmlsu.in/"> UGC Centre for Women studies </a>
        </div>

    <a href="#" class="parentMenu" onclick="openChild(2)">Faculty &nbsp;&nbsp; <i id="openArrow2" class="fa fa-caret-down"></i></a>
        <div class="childMenu" id="childMenu2">
            <a href="Faculty.php?pageName=FacultyBioTechnology.php"> Department of Bio-Technology </a>
            <a href="Faculty.php?pageName=FacultyBotany.php"> Department of Botany </a>
            <a href="Faculty.php?pageName=FacultyChemistry.php"> Department of Chemistry </a>
            <a href="Faculty.php?pageName=FacultyComputerScience.php"> Department of Computer Science </a>
            <a href="Faculty.php?pageName=FacultyEnvironment.php"> Department of Environment Science </a>
            <a href="Faculty.php?pageName=FacultyGeology.php"> Department of Geology </a>
            <a href="Faculty.php?pageName="> Department of Industrial Chemistry </a>
            <a href="Faculty.php?pageName=FacultyMaths.php"> Department of Maths & Statistics </a>
            <a href="Faculty.php?pageName=FacultyMicrobiology.php"> Department of Microbiology </a>
            <a href="Faculty.php?pageName=FacultyPharmacy.php"> Department of Pharmacy </a>
            <a href="Faculty.php?pageName=FacultyPhysics.php"> Department of Physics </a>
            <a href="Faculty.php?pageName=FacultyPolymerScience.php"> Department of Polymer Science </a>
            <a href="Faculty.php?pageName=FacultyZoology.php"> Department of Zoology </a>
            <a href="Faculty.php?pageName=FacultyAccountancy.php"> Department of Accountancy & Statstics </a>
            <a href="Faculty.php?pageName=FacultyBanking.php"> Department of Banking & Business Economics </a>
            <a href="Faculty.php?pageName=FacultyBusinessAdministration.php"> Department of Business Administration </a>
            <a href="Faculty.php?pageName=FacultyManagement.php"> Faculty of Management Studies </a>
            <a href="Faculty.php?pageName=FacultyTourism.php"> Department of Tourism & Hotel Management </a>
            <a href="Faculty.php?pageName=FacultyEnglish.php"> Department of English </a>
            <a href="Faculty.php?pageName=FacultyHindi.php"> Department of Hindi </a>
            <a href="Faculty.php?pageName=FacultyHistory.php"> Department of History </a>
            <a href="Faculty.php?pageName=FacultyJainology.php"> Department of Jainology & Prakrit </a>
            <a href="Faculty.php?pageName=FacultyPhilosophy.php"> Department of Philosophy </a>
            <a href="Faculty.php?pageName=FacultyRajasthani.php"> Department of Rajasthani </a>
            <a href="Faculty.php?pageName=FacultySanskrit.php"> Department of Sanskrit </a>
            <a href="Faculty.php?pageName=FacultyUrdu.php"> Department of Urdu </a>
            <a href="Faculty.php?pageName=FacultyVisual.php"> Department of Visual Art </a>
            <a href="Faculty.php?pageName=FacultyEconomics.php"> Department of Economics </a>
            <a href="Faculty.php?pageName=FacultyGeography.php"> Department of Geography </a>
            <a href="Faculty.php?pageName=FacultyJournalism.php"> Department of Journalism </a>
            <a href="Faculty.php?pageName=FacultyPoliticalScience.php"> Department of Political Science </a>
            <a href="Faculty.php?pageName=FacultyLibrary.php"> Department of Library and Information Science </a>
            <a href="Faculty.php?pageName=FacultyPsychology.php"> Department of Psychology </a>
            <a href="Faculty.php?pageName=FacultyPublicAdministration.php"> Department of Public Administration </a>
            <a href="Faculty.php?pageName=FacultySociology.php"> Department of Sociology </a>
            <a href="Faculty.php?pageName=FacultyLaw.php"> Department of Law </a>
        </div>

    <a href="#" class="parentMenu" onclick="openChild(3)">Administration &nbsp;&nbsp; <i id="openArrow3" class="fa fa-caret-down"></i></a>
        <div class="childMenu" id="childMenu3">
            <a href="Administration.php?pageName=Vice-Chancellor.php">Vice-Chancellor</a>
            <a href="Administration.php?pageName=DeansChairman.php">Dean & Chairman</a>
            <a href="Administration.php?pageName=AdministrativeOfficers.php">Administrative Officers</a>
            <a href="Administration.php?pageName=CellsCenters.php">Cells and Centres</a>
            <a href="Administration.php?pageName=CentralLibrary.php">Central Library</a>
            <a href="Administration.php?pageName=ComputerCenter.php">University Computer Centre</a>
            <a href="Administration.php?pageName=InternetCentre.php">Internet Centre</a>
            <a href="Administration.php?pageName=HostelWardens.php">Hostel Wardens</a>
            <a href="Administration.php?pageName=DSW.php">D.S.W.</a>
            <a href="Administration.php?pageName=SportsBoard.php">Sports Board</a>
            <a href="Administration.php?pageName=academicCouncil.php">Academic Council</a>
            <a href="Administration.php?pageName=councilofDeans.php">Council of Deans</a>
            <a href="Administration.php?pageName=boardofManagement.php">Board of Management</a>
            <a href="Administration.php?pageName=CouncilOfDeans(minutes).php">Council of Deans</a>
            <a href="Administration.php?pageName=AcademicsCouncil(minutes).php">Academic Council</a>
            <a href="Administration.php?pageName=BoardOfManagement(minutes).php">Board of Management</a>
            <a href="Administration.php?pageName=Registrar.php">Registrar</a>
            <a href="Administration.php?pageName=Comptroller.php">Comptroller</a>
            <a href="Administration.php?pageName=DeputyRegistrar.php">Deputy Registrar (GAD)</a>
            <a href="Administration.php?pageName=ControllerOfExamination.php">Controller of Examination</a>
            <a href="Administration.php?pageName=DyRegistrar.php">Dy Registrar (Examination)</a>
            <a href="Administration.php?pageName=VCSecretariat.php">V.C. Secretariat</a>
            <a href="Administration.php?pageName=RegistrarOffice.php">Registrar Office</a>
            <a href="Administration.php?pageName=InchargeMediaCell.php">Incharge Media Cell</a>
            <a href="Administration.php?pageName=UniversityEngineer.php">University Engineer</a>
            <a href="Administration.php?pageName=UniversityGuestHouse.php">University Guest House</a>
            <a href="Administration.php?pageName=PropertyDeclaration.php">Property Declaration</a>
            <a href="Administration.php?pageName=Tenders.php">Tenders</a>
            <a href="Administration.php?pageName=Recruitment.php">Recruitment</a>
            <a href="Administration.php?pageName=RTI.php">RTI</a>
            <a href="Administration.php?pageName=boardofManagement.php">Board of Management</a>
        </div>

    <a href="#" class="parentMenu" onclick="openChild(4)">Affiliated Colleges &nbsp;&nbsp; <i id="openArrow4" class="fa fa-caret-down"></i></a>
        <div class="childMenu" id="childMenu4">
            <a href="AffiliatedColleges.php?pageName=ListAffiliatedCollege.php"> List of Affiliated Colleges </a>
            <a href="AffiliatedColleges.php?pageName=AffiliationNotification.php"> Notifications </a>
            <a href="https://college.mlsuportal.in/loginpage.aspx"> College Panel </a>
            <a href="https://affiliation.mlsuportal.in/Loginpage_Aff.aspx"> Online Affiliation Form </a>
            <a href="https://mlsuportal.in//PRINCIPLE_LECTURER/Aff_Principal_Lecturer_Performa_Application.aspx"> Registration for Teaching Faculty </a>
        </div>

    <a href="#" class="parentMenu" onclick="openChild(5)">About Us &nbsp;&nbsp; <i id="openArrow5" class="fa fa-caret-down"></i></a>
        <div class="childMenu" id="childMenu5">
            <a href="aboutUniversity.php?pageName=aboutOrganisation.php">About Organisation</a>
            <a href="aboutUniversity.php?pageName=visionMission.php">Vission and Mission</a>
            <a href="aboutUniversity.php?pageName=kulgeet.php">Kulgeet</a>
            <a href="aboutUniversity.php?pageName=actStatutes.php">Act and Statute</a>
            <a href="aboutUniversity.php?pageName=graduationAttribute.php">Graduate Attributes</a>
            <a href="aboutUniversity.php?pageName=IQAC.php">IQAC</a>
            <a href="aboutUniversity.php?pageName=AICTE.php">AICTE</a>
            <a href="aboutUniversity.php?pageName=BCI.php">BCI</a>
            <a href="aboutUniversity.php?pageName=PCI.php">PCI</a>
            <a href="aboutUniversity.php?pageName=UGC.php">UGC</a>
            <a href="aboutUniversity.php?pageName=NAACPear.php">NAAC Pear Team Report</a>
            <a href="aboutUniversity.php?pageName=NAACCertificate.php">NAAC Certificate</a>
            <a href="aboutUniversity.php?pageName=NAACCertificate.php">NIRF</a>
            <a href="aboutUniversity.php?pageName=Chancellor.php">Chancellor</a>
            <a href="aboutUniversity.php?pageName=Vice-Chancellor.php">Vice-Chancellor</a>
            <a href="aboutUniversity.php?pageName=councilofDeans.php">Council of Deans</a>
            <a href="aboutUniversity.php?pageName=academicCouncil.php">Academic Council</a>
            <a href="aboutUniversity.php?pageName=boardofManagement.php">Board of Management</a>
            <a href="aboutUniversity.php?pageName=councilofDeans(minutes).php">Council of Deans</a>
            <a href="aboutUniversity.php?pageName=AcademicCouncil(minutes).php">Academic Council</a>
            <a href="aboutUniversity.php?pageName=BoardOfManagement(minutes).php">Board of Management</a>
        </div>

    <a href="#" class="parentMenu" onclick="openChild(6)">Students &nbsp;&nbsp; <i id="openArrow6" class="fa fa-caret-down"></i></a>
        <div class="childMenu" id="childMenu6">
            <a href="StudentCorner.php?pageName=Admission.php">Online Admission 2018-19</a>
            <a href="https://student.mlsuportal.in/">Student Portal</a>
            <a href="StudentCorner.php?pageName=AcademicCalendar.php">Academic Calendar</a>
            <a href="StudentCorner.php?pageName=GeneralNotification.php">General Notifications</a>
            <a href="StudentCorner.php?pageName=StudentAttendance.php">Student Attendance</a>
            <a href="StudentCorner.php?pageName=UniversityProspectus.php">University Prospectus</a>
            <a href="https://examination.mlsuportal.in/default.aspx">Online Examination Form</a>
            <a href="https://student.mlsuportal.in/">Examination Notifications</a>
            <a href="StudentCorner.php?pageName=AcademicCalendar.php">Exam Time Table</a>
            <a href="StudentCorner.php?pageName=OldQuestionPapers.php">Old Question Papers</a>
            <a href="StudentCorner.php?pageName=Syllabus.php">Syllabus</a>
            <a href="StudentCorner.php?pageName=https://results.mlsuportal.in/">Results</a>
            <a href="StudentCorner.php?pageName=AcademicsProgramme.php">Academic Programmes</a>
            <a href="StudentCorner.php?pageName=fees.php">Fee Structure</a>
            <a href="StudentCorner.php?pageName=GeneralRules.php">General Rules for Admission</a>
            <a href="StudentCorner.php?pageName=Attendance.php">Attendance Rules</a>
            <a href="StudentCorner.php?pageName=GeneralDiscipline.php">General Discipline Rules</a>
            <a href="StudentCorner.php?pageName=StudentUnion.php">Student Union</a>
            <a href="https://www.mlsu.ac.in/Central-Library">Central Library</a>
            <a href="https://www.mlsu.ac.in/Hostels">Hostels</a>
            <a href="https://www.mlsu.ac.in/Scholarships">Scholarships & Financial Assistance</a>
            <a href="https://www.mlsu.ac.in/National">National Services</a>
            <a href="https://www.mlsu.ac.in/Games">Games & Sports</a>
            <a href="https://www.mlsu.ac.in/Activity">Co-curricular Activities</a>
        </div>

    <a href="#" class="parentMenu" onclick="openChild(7)">Media &nbsp;&nbsp; <i id="openArrow7" class="fa fa-caret-down"></i></a>
        <div class="childMenu" id="childMenu7">
            <a href="Media.php?pageName=General.php">News & Events</a>
            <a href="Media.php?pageName=UpcomingEvents.php">Upcoming Events</a>
            <a href="Media.php?pageName=videoGallery.php">Video Gallery</a>
            <a href="Media.php?pageName=photoGallery.php">Photo Gallery</a>
            <a href="Media.php?pageName=Proceedings.php">Proceedings</a>
        </div>

    <a href="#" class="parentMenu" onclick="openChild(8)">Helpline &nbsp;&nbsp; <i id="openArrow8" class="fa fa-caret-down"></i></a>
        <div class="childMenu" id="childMenu8">
            <a href="Helpline.php?pageName=StudentGrievance.php"> Students Grievance </a>
            <a href="Helpline.php?pageName=HelplineFacility.php"> Helpline Facility </a>
        </div>

    <a href="#" class="parentMenu" onclick="openChild(9)">Contact Us &nbsp;&nbsp; <i id="openArrow9" class="fa fa-caret-down"></i></a>
        <div class="childMenu" id="childMenu9">
            <a href="https://iums.mlsuportal.in/GuestHouse/GHM_guestrequest.aspx"> Guest House Booking </a>
            <a href="ContactUs.php?pageName=ImportantContacts.php"> Important Contact No. </a>
            <a href="ContactUs.php?pageName=contactUs1.php"> Contact Us </a>
            <a href="ContactUs.php?pageName=LocateUs.php"> Locate Us </a>
        </div>
</div>