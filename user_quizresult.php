<!DOCTYPE html>
<html>
<head>
	<title>PHP Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/quiz1.css" />
</head>
<style>
header {
    background-color: #F1A661;
    padding: 10px;
    text-align: center;
    font-size: 20px;
    color: white;
}
</style>
</head>

<header>
<h1>ONLINE QUIZ SYSTEM: PHP & SQL</h1>
</header>

<body>
        <!--Array-->
        <?php
                $questions = [
            'question-1-answers',
            'question-2-answers',
            'question-3-answers',
            'question-4-answers',
            'question-5-answers',
            'question-6-answers',
            'question-7-answers',
            'question-8-answers',
            'question-9-answers',
            'question-10-answers',
            'question-11-answers',
            'question-12-answers',
            'question-13-answers',
            'question-14-answers',
            'question-15-answers',
            'question-16-answers',
            'question-17-answers',
            'question-18-answers',
            'question-19-answers',
            'question-20-answers',
            ];
            
                $answer1 = $_POST['question-1-answers'];
                $answer2 = $_POST['question-2-answers'];
                $answer3 = $_POST['question-3-answers'];
                $answer4 = $_POST['question-4-answers'];
                $answer5 = $_POST['question-5-answers'];
                $answer6 = $_POST['question-6-answers'];
                $answer7 = $_POST['question-7-answers'];
                $answer8 = $_POST['question-8-answers'];
                $answer9 = $_POST['question-9-answers'];
                $answer10 = $_POST['question-10-answers'];
                $answer11 = $_POST['question-11-answers'];
                $answer12 = $_POST['question-12-answers'];
                $answer13 = $_POST['question-13-answers'];
                $answer14 = $_POST['question-14-answers'];
                $answer15 = $_POST['question-15-answers'];
                $answer16 = $_POST['question-16-answers'];
                $answer17 = $_POST['question-17-answers'];
                $answer18 = $_POST['question-18-answers'];
                $answer19 = $_POST['question-19-answers'];
                $answer20 = $_POST['question-20-answers'];
                $totalCorrect = 0;

            if(!empty($_POST)) {
                if ($answer1 == "C") { $totalCorrect++; }
                if ($answer2 == "A") { $totalCorrect++; }
                if ($answer3 == "C") { $totalCorrect++; }
                if ($answer4 == "D") { $totalCorrect++; }
                if ($answer5 == "B") { $totalCorrect++; }

                if ($answer6 == "D") { $totalCorrect++; }
                if ($answer7 == "A") { $totalCorrect++; }
                if ($answer8 == "B") { $totalCorrect++; }
                if ($answer9 == "B") { $totalCorrect++; }
                if ($answer10 == "D") { $totalCorrect++; }

                if ($answer11 == "D") { $totalCorrect++; }
                if ($answer12 == "D") { $totalCorrect++; }
                if ($answer13 == "B") { $totalCorrect++; }
                if ($answer14 == "C") { $totalCorrect++; }
                if ($answer15 == "C") { $totalCorrect++; }

                if ($answer16 == "A") { $totalCorrect++; }
                if ($answer17 == "C") { $totalCorrect++; }
                if ($answer18 == "A") { $totalCorrect++; }
                if ($answer19 == "B") { $totalCorrect++; }
                if ($answer20 == "B") { $totalCorrect++; }
                
                echo "<h5><center> Online Quiz Result: <br><br> Score: $totalCorrect /20 </h5>";
                echo "<h5><center> Thank you for taking the quiz!</h5>";
                $grade = (($totalCorrect/20)*50)+50;    
                     
    }
        ?>
        <div class="center">
            <h3> Go back to User Dashboard. </h3>
             &nbsp;&nbsp;<button class="submitbtn" onclick="document.location='user_dashboard.php'">USER DASHBOARD</button> <br> <br>

             </div>
            </body>
</html>