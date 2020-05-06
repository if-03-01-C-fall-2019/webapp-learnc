<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LearnC# - Junctions</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <nav>
      <ul id="navigation">
      <li><a href="../index.php">LearnC#</a></li>
        <li><a href="structure.php">Basic Structure</a></li>
        <li><a href="output.php">Output</a></li>
        <li><a href="variables.php">Variable types</a></li>
        <li><a href="input.php">Input from user</a></li>
        <li><a class="active" href="junctions.php">Junctions</a></li>
        <li><a href="arrays.php">Arrays</a></li>
        <li><a href="methods.php">Methods</a></li>
        <li><a href="structs.php">Structs</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
    <section>
      <h2 class="title">5. Junctions and logical Operators</h2>
      <hr>
      <p>To actually have your program do something besides simple mathematic operations,
        you'll need logical operators. Here's a list of all logic operators:</p>
      <table>
        <tr>
          <th>Operations</th>
          <th>Meaning</th>
        </tr>
        <tr>
          <td>"=="</td>
          <td>This is used to check if 2 values are equal</td>
        </tr>
        <tr>
          <td>"!="</td>
          <td>This is used to check if 2 values aren't equal</td>
        </tr>
        <tr>
          <td>"&lt;"</td>
          <td>This is used to check if the value to the left of it is smaller than the value to the right</td>
        </tr>
        <tr>
          <td>"&lt;="</td>
          <td>This is used to check if the value on the left is smaller or equal to the value on the right</td>
        </tr>
        <tr>
          <td>">"</td>
          <td>This is used to check if the value to the left of it is bigger than the value to the right</td>
        </tr>
        <tr>
          <td>">="</td>
          <td>This is used to check if the value on the left is bigger or equal to the value on the right</td>
        </tr>
        <tr>
          <td>"&amp;&amp;"</td>
          <td>This is used to check if two logical operators are true.</td>
        </tr>
        <tr>
          <td>"||"</td>
          <td>This is used to check if one of two logical operators is true</td>
        </tr>
      </table>
      <p>You can also use !([Expression]) to check if an entire expression is the opposite of
        what it usually would be.</p>
      <p>You can use this operations in junctions like: </p>
      <ul>
        <li>if junction</li>
        <li>switch junction</li>
        <li>loops juntion</li>
      </ul>
      <br>
      <h3>if junction</h3>
      <p>With if junction you can execute commands, if a certain expression is true. There a three forms.</p>
      <ul>
        <li>if</li>
        <li>if else</li>
        <li>else</li>
      </ul>
      <h4>if</h4>
<pre class="border">
namespace Introduction
{
        class Program
        {
                static void main()
                {
                        int n1 = 4;
                        int n2 = 3;
                        if(n1 > n2)
                        {
                            Console.WriteLine("{0} is bigger than {1}", n1, n2);
                        }
                }
        }
}
</pre>
      <p>In this case the program would go between the brackets and it would print "4 is bigger than 3".</p>
<pre class="border">
namespace Introduction
{
        class Program
        {
                static void main()
                {
                        int n1 = 4;
                        int n2 = 3;
                        if(n1 &lt; n2)
                        {
                            Console.WriteLine("{0} is smaller than {1}", n1, n2);
                        }
                }
        }
}
</pre>
      <p>In this case the program wouldn´t go between the brackets, because 4 isn´t smaller than 3.</p>
      <br>
      <h4>if else</h4>
      <p>If the expression of the "if" is false, you have with "if else" so to speak a second chance.</p>
<pre class="border">
namespace Introduction
{
        class Program
        {
                static void main()
                {
                        int n1 = 4;
                        int n2 = 3;
                        if(n1 &lt; n2)
                        {
                            Console.WriteLine("{0} is smaller than {1}", n1, n2);
                        }
                        if else(n1 >= n2)
                        {
                            Console.WriteLine("{0} is bigger or equal {1}", n1, n2);
                        }
                }
        }
}
</pre>
      <p>If the if expression is false, it checks with "if else", if 4 is bigger or equal 3.
        This expression is true, so the program prints "4 is bigger or equal 3".</p>
        <br>
      <h4>else</h4>
      <p>If the expression of the "if" and "if else" is false, it goes to "else", not matter what.</p>
<pre class="border">
namespace Introduction
{
        class Program
        {
                static void main()
                {
                        int n1 = 5;
                        int n2 = 5;
                        if(n1 &lt; n2)
                        {
                            Console.WriteLine("{0} is smaller than {1}", n1, n2);
                        }
                        if else(n1 > n2)
                        {
                            Console.WriteLine("{0} is bigger tahn {1}", n1, n2);
                        }
                        else
                        {
                            Console.WriteLine("{0} is equal {1}", n1, n2);
                        }
                }
        }
}
</pre>
      <p>n1 isn´t bigger or smaller than n2, so it goes to else and prints "5 is equal 5".</p>
      <p class="important">Warning: You can´t use "else if" or "else" in single. It must come after a "if".</p>
      <br>
      <h3>switch</h3>
      <p>With switch you can check if a variable fulfill certain cases.</p>
<pre class="border">
namespace Introduction
{
        class Program
        {
                static void main()
                {
                        int number = 3;
                        switch(number)
                        {
                              case 0:
                                 Console.WriteLine("It´s 0");
                                 break;
                               case 1:
                                  Console.WriteLine("It´s 1");
                                  break;
                                case 2:
                                   Console.WriteLine("It´s 2");
                                   break;
                                default:
                                    Console.WriteLine("It´s unknown");
                                    break;
                        }

                }
        }
}
</pre>
      <p>You can compare the "case"-keyword with "if" and "else if" and "default" with "else".
      The break is there, that the program knows, when it found the matching case. It cancels
      than the remaining search. In this case it would print "It´s unknown". You use the switch junction
      when you have the same answer for several question. This example should simplify it:</p>
<pre class="border">
namespace Introduction
{
        class Program
        {
                static void main()
                {
                        int month = 4;
                        switch(month)
                        {
                              case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                                 Console.WriteLine("This month has 31 days.");
                                 break;
                               case 4: case 6: case 9: case 11:
                                  Console.WriteLine("This month has 30 days.");
                                  break;
                                case 2:
                                   Console.WriteLine("This month has 28/29 days.");
                                   break;
                                default:
                                    Console.WriteLine("This month doesn´t exists.");
                                    break;
                        }

                }
        }
}
</pre>
      <p>We want to search for the daynumber of a month, in this case 4 for april. The program prints than "This month has 30 days.".
      If the variable month has a number, from a month that doesn´t exist, it prints "This month doesn´t exists.".</p>
      <br>
      <h3>loops junction</h3>
      <p>With loops you repeat the commands between the brackets over and over again, while the expression is true.
      There are three forms:</p>
      <ul>
        <li>while</li>
        <li>do while</li>
        <li>for</li>
      </ul>
    </section>
  </body>
</html>
