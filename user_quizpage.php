<!DOCTYPE html>
<head>
	<title>PHP & SQL QUIZ</title>
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
    <?php
    if(isset($_POST['submit'])){
    }  
    ?>
		<h2>Answer the following questions:</h2>
		<form action="user_quizresult.php" method="post" id="quiz" select name="list"> <!--after submit-->
		
            <ol>
                <li>
                <!-- PERST QUESTION-->
                    <h3>What does PHP stand for?</h3>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required />
                        <label for="question-1-answers-A">A) Preprocessed Hypertext Page </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Hypertext Markup Language</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) PHP: Hypertext Preprocessor</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Hypertext Transfer Protocol</label>
                    </div>
                
                </li>
                
                <li>
                 <!-- 2nd QUESTION-->
                    <h3>Who is the father of PHP?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required/>
                        <label for="question-2-answers-A">A) Rasmus Lerdorf</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Willam Makepiece</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Drek Kolkevi</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) List Barely</label>
                    </div>
                
                </li>
                
                <li>
                 <!-- 3rd QUESTION-->
                    <h3>PHP files have a default file extension of</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required/>
                        <label for="question-3-answers-A">A) .html</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) .ph</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) .php</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) .xml</label>
                    </div>
                
                </li>
                
                <li>
                 <!-- 4 QUESTION-->
                    <h3>Which of the following is the syntax of comment in PHP?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required/>
                        <label for="question-4-answers-A">A) /**/</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) #</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) / / </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) All of the above</label>
                    </div>
                
                </li>
                
                <li>
                 <!--5 QUESTION-->
                    <h3>Which of the following is used to access session variables in PHP?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required />
                        <label for="question-5-answers-A">A) session_start() function</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) $_SESSION[]</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) isset() function</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) session_destroy() function</label>
                    </div>
                
                </li>
            
                    <li>
                 <!--6 QUESTION-->
                    <h3>Which of the looping statements is/are supported by PHP?</h3>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" required/>
                        <label for="question-6-answers-A">A) for loop</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) do-while loop</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) foreach loop</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D) All of the above</label>
                    </div>
                </li>

                <li>
                 <!--7 QUESTION-->
                    <h3>Which of the following PHP statements will output Hello World on the screen?</h3>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" required/>
                        <label for="question-7-answers-A">A) echo (Hello World);</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B) print (Hello World);</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C">C) printf (Hello World);</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D">D) All of the above</label>
                    </div>
                </li>

                <li>
                 <!--8 QUESTION-->
                    <h3>Which one of the following functions can be used to concatenate array elements to form a single delimited string?</h3>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" required/>
                        <label for="question-8-answers-A">A) explode()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B">B) implode()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C">C) concat()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D">D) concatenate()</label>
                    </div>
                </li>

                <li>
                 <!--9 QUESTION-->
                    <h3>Which of the methods are used to manage result sets using both associative and indexed arrays?</h3>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" required/>
                        <label for="question-9-answers-A">A) get_array() and get_row()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" required/>
                        <label for="question-9-answers-B">B) fetch_array() and fetch_row()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-9-answers-C">C) get_array() and get_column()</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-9-answers-D">D) fetch_array() and fetch_column()</label>
                    </div>
                </li>

                <li>
                 <!--10 QUESTION-->
                    <h3>Which of the following is not PHP loops?</h3>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" required/>
                        <label for="question-10-answers-A">A) Do while</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) for</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                        <label for="question-10-answers-C">C) while</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                        <label for="question-10-answers-D">D) do for</label>
                    </div>
                </li>

                <li>
                 <!--11 QUESTION-->
                    <h3>Which one of the following statements is used to create a table?</h3>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" required/>
                        <label for="question-11-answers-A">A)1CREATE TABLE table_name (column_name column_type)</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                        <label for="question-11-answers-B">B) CREATE table_name (column_type column_name);</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                        <label for="question-11-answers-C">C) CREATE table_name (column_name column_type);</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" />
                        <label for="question-11-answers-D">D) CREATE TABLE table_name (column_type column_name);</label>
                    </div>
                </li>

                <li>
                 <!--12 QUESTION-->
                    <h3>AVG, COUNT, MAX, MIN and SUM are known as what?</h3>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" required/>
                        <label for="question-12-answers-A">A) Wildcard filters</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                        <label for="question-12-answers-B">B) Calculated field</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
                        <label for="question-12-answers-C">C) Subqueries</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />
                        <label for="question-12-answers-D">D) Aggregate functions</label>
                    </div>
                </li>

                <li>
                 <!--13 QUESTION-->
                    <h3>Which of these groups are in the six common operators?</h3>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" required/>
                        <label for="question-13-answers-A">A) #=, ^=, $=</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                        <label for="question-13-answers-B">B) =, !=, >=</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />
                        <label for="question-12-answers-C">C) >^, <>, =+</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" />
                        <label for="question-12-answers-D">D) <+>, >=<, (<)</label>
                    </div>
                </li>

                <li>
                 <!--14 QUESTION-->
                    <h3>Which of the following is true about a group function?</h3>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" required/>
                        <label for="question-13=4-answers-A">A) Group functions operate on sets of rows to produce multiple results per group</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                        <label for="question-13-answers-B">B) DISTINCT keyword makes a group function consider duplicate values</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />
                        <label for="question-12-answers-C">C) Group functions ignore null values</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />
                        <label for="question-12-answers-D">D) None of the above</label>
                    </div>
                </li>

                <li>
                 <!--15 QUESTION-->
                    <h3>Which of the following is not true about removing rows from a table?</h3>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" required/>
                        <label for="question-15-answers-A">A) You can use a subquery in a DELETE statement</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                        <label for="question-15-answers-B">B) Specific rows are deleted based on the WHERE clause condition</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />
                        <label for="question-15-answers-C">C) A statement like, DELETE , would cause deletion of the table from the database.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" />
                        <label for="question-15-answers-D">D) All of the above.</label>
                    </div>
                </li>
                
                <li>
                 <!--16 QUESTION-->
                    <h3>Which of the following query would display all the students with honours_subject ‘IntegProg1’?</h3>
                    
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" required/>
                        <label for="question-16-answers-A">A) select student_code, first_name, last_name from students where honours_subject = ‘IntegProg1’;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />
                        <label for="question-16-answers-B">B) select student_code, first_name, last_name from students where honours_subject is ‘IntegProg1’;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-C" value="C" />
                        <label for="question-16-answers-C">C) select student_code, first_name, last_name where honours_subject = ‘IntegProg1’ from students;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-D" value="D" />
                        <label for="question-16-answers-D">D) select student_code, first_name, last_name from students;</label>
                    </div>
                </li>

                <li>
                 <!--17 QUESTION-->
                    <h3>Which of the following is not true about a subquery?</h3>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" required/>
                        <label for="question-17-answers-A">A) Subquery is a SELECT statement embedded in a clause of another SELECT statement.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
                        <label for="question-17-answers-B">B) The subquery executes before the main query.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-C" value="C" />
                        <label for="question-17-answers-C">C) The result of the main query is returned to the subquery.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-D" value="D" />
                        <label for="question-17-answers-D">D) All of the above.</label>
                    </div>
                </li>

                <li>
                 <!--18 QUESTION-->
                    <h3>Which of the following code will successfully delete the table LOCATIONS from the database?</h3>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" required/>
                        <label for="question-18-answers-A">A) DROP TABLE LOCATIONS;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
                        <label for="question-18-answers-B">B) DELETE TABLE LOCATIONS;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-C" value="C" />
                        <label for="question-18-answers-C">C) TRUNCATE TABLE LOCATIONS;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-D" value="D" />
                        <label for="question-18-answers-D">D) None of the above.</label>
                    </div>
                </li>

                <li>
                 <!--19 QUESTION-->
                    <h3>Which statement is used for allocating system privileges to the users?</h3>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" required/>
                        <label for="question-19-answers-A">A) CREATE</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
                        <label for="question-19-answers-B">B) GRANT</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-C" value="C" />
                        <label for="question-19-answers-C">C) REVOKE</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-D" value="D" />
                        <label for="question-19-answers-D">D) ROLE</label>
                    </div>
                </li>

                <li>
                 <!--20 QUESTION-->
                    <h3>Which one of the following sorts rows in SQL?</h3>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" required/>
                        <label for="question-20-answers-A">A) ALIGN BY</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
                        <label for="question-20-answers-B">B) ORDER BY</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-C" value="C" />
                        <label for="question-20-answers-C">C) SORT BY</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-D" value="D" />
                        <label for="question-20-answers-D">D) GROUP BY</label>
                    </div>
                </li>
            </ol>
            <input type="submit" value="SUBMIT QUIZ" name = "submit" class="submitbtn"/>
            <input type="reset" value="CLEAR" name = "reset" class="resetbtn">
		</form>
	</div>


<footer>
  <p>CREATED BY: <i>BABAS. CLORES. ESTRERA</i><br>
  <p>GROUP: <i>ODE TO CODE</i><br>
</footer>   

</body>
</html>