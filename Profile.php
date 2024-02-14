<?php include 'template/header.php';?>
<?php include 'template/navigation.php';?>

<div class="sticklines">
    <!-- Add multiple sticklines as needed -->
    <div class="line" style="left: 5%;"></div>
    <div class="stickline" style="left: 10%;"></div>
    <div class="stick" style="left: 15%;"></div>
    <div class="line" style="left: 20%;"></div>
    <div class="stickline" style="left: 25%;"></div>
    <div class="stick" style="left: 30%;"></div>
    <div class="line" style="left: 35%;"></div>
    <div class="stickline" style="left: 40%;"></div>
    <div class="stick" style="left: 55%;"></div>
    <div class="line" style="left: 60%;"></div>
    <div class="stickline" style="left: 65%;"></div>
    <div class="stick" style="left: 70%;"></div>
    <div class="line" style="left: 75%;"></div>
    <div class="stickline" style="left: 85%;"></div>
    <div class="stick" style="left: 80%;"></div>
    <div class="line" style="left: 95%;"></div>
    <div class="stickline" style="left: 100%;"></div>
</div>
    <link rel="stylesheet" href="assets/css/style.css">
    <h1>My Profile</h1>
    <img src="assets/image/profile.jpg" alt="https://lh3.googleusercontent.com/a/ACg8ocKQs_KwTqUljT_kccVhekVRm84UkLYGh77rOc8K_0hWTS4=s96-c-rg-br100">
    <div1>
        <tit>
            <?php
                echo "<h3>Personal Information</h3>";
            ?>
        </tit>
        <con>
            <?php
            // personal information
            echo "<br>";
            echo "<b>Full Name:</b> Harmie Emata Chipada";
            echo "<br>";
            echo  "<b>Sex:</b> Male";
            echo "<br>";
            echo "<b>Age:</b> 20 years old";
            echo "<br>";
            echo "<b>Address:</b> Bagontaas, Valencia City, Bukidnon";
            echo " <br>";
            echo "<b>School ID:</b> 2022302840";
            echo "<br>";
            echo "<b>Year Level:</b> 2nd Year";
            ?>
        </con>
    </div1>

    <div2>
        <tit>
            <?php
                echo " <br>";
            echo "<h3>Educational Background</h3>";
            ?>
        </tit>
        <con>
            <?php
            // educ. background
                    echo "<br>";
                echo "<b>Elementary:</b> Bagontaas Central Elementary School";
                    echo "<br>";
                echo "<b>Junior High:</b> Valencia National High School";
                    echo "<br>";
                echo "<b>Senior High:</b> Valencia National High School";
                    echo " <br>";
            ?>
        </con>
    </div2>
    
    <div3>
        <tit>
            <?php
                echo " <br>";
                echo "<h3>Work Experience</h3>";
            ?>
        </tit>
        <con>
            <?php
            // work experience
                    echo "<br>";
                echo "5 years experience ";
                echo "Electronic Technicial Assistant";
                    echo "<br>";
                    echo " <br>";
                ?>
        </con>
    </div3>
    
    <div4>
        <tit>
            <?php
            echo "<h3>Programming Skills</h3>";
            ?>
        </tit>
        
        <div>
            <?php
                // programmign skills 
                echo "<br>";
                // Rating scale of skills
                echo "<b>Rating Skill</b>";
                    echo " <br>";
                    echo "<br>";
                echo "1 - Novice";
                echo "<br>";
                echo "2 - Advance Beginner";
                echo "<br>";
                echo "3 - Competent";
                echo "<br>";
                echo "4 - Proficient";
                echo "<br>";
                echo "5 - Expert";
                    echo " <br>";
                ?>
        </div>

        <survey>
            <?php
                    echo " <br>";
                echo "<b>1. Communication:</b>";
                    echo "<br>";
                echo "<b>2. Problem solving:</b>";
                    echo "<br>";
                echo "<b>3. Coding Proficiency:</b>";
                    echo "<br>";
                echo "<b>4. Abstract thinking:</b>";
                    echo "<br>";
                echo "<b>5. Curiosity:</b>";
                    echo "<br>";
                echo "<b>6. Teamwork:</b>";
                    echo "<br>";
                echo "<b>7. Patience:</b>";
                    echo "<br>";
                echo "<b>8. Attention to detail:</b>";
                    echo "<br>";
            ?>
        </survey>
        
        <h5>Scores:</h5>
        <answer>
            <?php
                echo "<br>";
                echo "&emsp;&emsp;&emsp;&nbsp;4";
                echo "<br>";
                echo "&emsp;&emsp;&emsp;&nbsp;3";
                echo "<br>";
                echo "&emsp;&emsp;&emsp;&nbsp;3";
                echo "<br>";
                echo "&emsp;&emsp;&emsp;&nbsp;&nbsp;3";
                echo "<br>";
                echo "&emsp;&emsp;&emsp;&nbsp;4";
                echo "<br>";
                echo "&emsp;&emsp;&emsp;&nbsp;&nbsp;4";
                echo "<br>";
                echo "&emsp;&emsp;&emsp;&nbsp;&nbsp;3";
                echo "<br>";
                echo "&emsp;&emsp;&emsp;&nbsp;&nbsp;3";
                echo "<br>";
            ?>
        </answer>
    </div4>
    <other>
        <tit>
            <?php
            echo "<h3>Other Skills</h3>";
            ?>
        </tit>
        <div>
            <?php
            echo "<br>";
            echo "- Soldering skills";
            echo "<br>";
            echo "- Electronic Building/Assembling";
            echo "<br>";
            echo "- Basic Troubleshooting Electronics";
            echo "<br>";
            echo "- Basic Reading Electronic Schematics";
            echo "<br>";
            echo "";
            ?>
        </div>

    </other>
    <div5>
        <tit>
        <?php
                echo "<br>";
            echo "<h3>References</h3>";
                echo "<br>";
        ?>
        </tit>
        <links>
            <?php
                echo "<br>";
                echo "Facebook:&emsp;&emsp;www.facebook.com/harmie.chipada";
			  		 echo "<br>";
			  		 echo "LinkedIn:&emsp;&emsp;www.linkedin.com/in/chipadah";
            ?>
        </links>
    </div5>

    <?php include 'template/footer.php';?>