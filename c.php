<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';

   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $sql = 'SELECT Course, Intro FROM definition';
   mysql_select_db('online_education_website');
   $retval = mysql_query( $sql, $conn );

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }






?>


<!DOCTYPE HTML>
<html lang= "en-US">
<head>
<meta charset="UTF-8">
<title>C language</title>
<link rel="stylesheet" href="c.css"type="text/css" />
 </head>
 <body>
 <div class= "header" >
 <h1> <?php
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';

 $conn = mysql_connect($dbhost, $dbuser, $dbpass);

 if(! $conn ) {
    die('Could not connect: ' . mysql_error());
 }

 $sql = 'SELECT Course, Intro FROM definition';
 mysql_select_db('online_education_website');
 $retval = mysql_query( $sql, $conn );

 if(! $retval ) {
    die('Could not get data: ' . mysql_error());
 }

while($row = mysql_fetch_assoc($retval)) {
     echo "{$row['Course']}  ";

  ?> language </h1>
 </div>
 <body>
 <section>
 <h2> Introduction </h2>
 <h4>Definition - What does C Programming Language (C) mean? </h3>
 <p><?php
     echo "{$row['Intro']}  <br> ";
   }

  mysql_close($conn);
  ?></p>
 <h4>1. C PROGRAMMING BASICS TO WRITE A C PROGRAM:</h4>
 Below are few commands and syntax used in C programming to write a simple C program. Let’s see all the sections of a simple C program line by line.<br><br>
 <table style="width:80%">
  <tr>
    <th>C Basic Commands</th>
    <th>Explanation</th>
  </tr>
  <tr>
    <td>  #include <<x>stdio.h></td>
    <td>This is a preprocessor command that includes standard input output header file(stdio.h) from the C library before compiling a C program</td>

  </tr>
  <tr>
    <td>int main()</td>
    <td>This is the main function from where execution of any C program begins.</td>

  </tr>
  <tr>
    <td>{</td>
    <td>This indicates the beginning of the main function.</td>

  </tr>

  <tr>
    <td>/*_some_comments_*/</td>
    <td>whatever is given inside the command “/*   */” in any C program, won’t be considered for compilation and execution.</td>

  </tr>


  <tr>
    <td>printf(“Hello_World! “);</td>
    <td>printf command prints the output onto the screen.</td>

  </tr>

   <tr>
    <td>getch;</td>
    <td>This command waits for any character input from keyboard.</td>

  </tr>

  <tr>
    <td>return 0;</td>
    <td>This command terminates C program (main function) and returns 0.</td>

  </tr>
   <tr>
    <td>}</td>
    <td>This indicates the end of the main function.</td>

  </tr>


</table>
<h4>2. A SIMPLE C PROGRAM:</h4>
<p>Below C program is a very simple and basic program in C programming language. This C program displays “Hello World!” in the output window. And, all syntax and commands in C programming are case sensitive. Also, each statement should be ended with semicolon (;) which is a statement terminator.</p>
<p>#include <<x>stdio.h></p>
<p>{</p>
<p> printf("Hello World! ");</p>
<p> getch();</p>
<p> return 0;</p>
<p>}</p>
<h4>output:</h4>

<p>Hello World!</p>
<h4>3. STEPS TO WRITE C PROGRAMS AND GET THE OUTPUT:</h4>
<p>Below are the steps to be followed for any C program to create and get the output. This is common to all C program and there is no exception whether its a very small C program or very large C program.</p>
<ol>
  <li>Create</li>
  <li>Compile</li>
  <li>Execute or Run</li>
   <li>Get the output</li>
</ol>
<h4>4. CREATION, COMPILATION AND EXECUTION OF A C PROGRAM:</h4>
<p><b>Prerequisite:</b></p>
<p>If  you want to create, compile and execute C programs by your own, you have to install C compiler in your machine. Then, you can start to execute your own C programs in your machine.
You can refer below link for how to install C compiler and compile and execute C programs in your machine.
Once C compiler is installed in your machine, you can create, compile and execute C programs as shown in below link.
If you don’t want to install C/C++ compilers in your machine, you can refer online compilers which will compile and execute C/C++ and many other programming languages online and display outputs on the screen. Please search for online C/C++ compilers in Google for more details.</p>
<h4>5. BASIC STRUCTURE OF A C PROGRAM:</h4>
<p>Structure of C program is defined by set of rules called protocol, to be followed by programmer while writing C program. All C programs are having sections/parts which are mentioned  below.</p>
<ol>
<li>Documentation section</li>
  <li>Link Section</li>
  <li>Definition Section</li>
   <li>Global declaration section</li>
  <li>Function prototype declaration section</li>
  <li>Main function</li>
  <li>User defined function definition section</li>
</ol>
<h4>DESCRIPTION FOR EACH SECTION OF THE C PROGRAM:</h4>
<p><b>Documentation section :</b>We can give comments about the program, creation or modified date, author name etc in this section. The characters or words or anything which are given between “/*” and “*/”, won’t be considered by C compiler for compilation process.These will be ignored by C compiler during compilation.
Example : /* comment line1 comment line2 comment 3 */</p>
<p><b>Link section :</b>Header files that are required to execute a C program are included in this section.</p>
<p><b>Definition Section :</b>In this section, variables are defined and values are set to these variables.</p>
<p><b>Global decleration Section :</b>Global variables are defined in this section. When a variable is to be used throughout the program, can be defined in this section.</p>
<p><b>Function prototype declaration section :</b>Function prototype gives many information about a function like return type, parameter names used inside the function.</p>

<p><b>Main function	:</b>Every C program is started from main function and this function contains two major sections called declaration section and executable section.</p>

<p><b>User defined function section:</b>User can define their own functions in this section which perform particular task as per the user requirement.</p>

<h4>KEY POINTS TO REMEMBER IN C PROGRAMMING BASICS:</h4>

<p>C programming is a case sensitive programming language.
Each C programming statement is ended with semicolon (;) which are referred as statement terminator.
printf() command is used to print the output onto the screen.
C programs are compiled using C compilers and displays output when executed.</p>
<h4>REFERENCE C PROGRAMMING E-BOOKS & RESEARCH PAPERS:</h4>
<p>ANSI 89 – American National Standards Institute, American National Standard for Information Systems Programming Language C, 1989.
Kernighan 78 – B. W. Kernighan and D. M. Ritchie, The C Programming Language, Prentice-Hall: Englewood Cliffs, NJ, 1978. Second edition, 1988.
Thinking 90 – C* Programming Guide, Thinking Machines Corp. Cambridge Mass., 1990.</p>
<p>Let us see about each section of a C basic program in detail below.
Please note that a C program mayn’t have all below mentioned sections except main function and link sections.
Also, a C program structure mayn’t be in below mentioned order.</p>
 </body>
 </html>
