<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LearnC# - Input from user</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <nav>
      <ul id="navigation">
      <li><a href="../index.php">LearnC#</a></li>
        <li><a href="structure.php">Basic Structure</a></li>
        <li><a href="output.php">Output</a></li>
        <li><a href="variables.php">Variable types</a></li>
        <li><a class="active" href="input.php">Input from user</a></li>
        <li><a href="junctions.php">Junctions</a></li>
        <li><a href="arrays.php">Arrays</a></li>
        <li><a href="methods.php">Methods</a></li>
        <li><a href="structs.php">Structs</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
    <section>
      <h2 class="title">4. Getting Input from the user</h2>
      <hr>
      <p>A program always needs a problem to solve and variables to work with. There's multiple ways of getting such data from the user,
        the easiest one being "<strong class="command">System.Console.ReadLine();</strong>".</p>
<pre class="border">
namespace Introduction
{
    class program
    {
            static void Main()
            {
                    string input;
                    System.Console.WriteLine("Write something down: ");
                    input = System.Console.ReadLine();
            }
    }
}</pre>
      <br>
      <h3>Returning the input</h3>
      <p>If you want to return a result with additional text ("The result is : ...") you will need an additional placeholder</p>
<pre class="border">
namespace Introduction
{
    class program
    {
            static void Main()
            {
                    System.Console.WriteLine("Write down your name: ");
                    string input = System.Console.ReadLine();
                    System.Console.WriteLine("{0} is a good programmer", input);
            }
    }
}</pre>
    <br>
    <h4>Convert a string to a number</h4>
    <p>If you want to convert a string to a number, you use the command "<strong>System.Convert.ToInt32([string]);</strong>"</p>
<pre class="border">
namespace Introduction
{
    class program
    {
            static void Main()
            {
                    System.Console.WriteLine("Write down a number: ");
                    string input = System.Console.ReadLine();
                    int number = System.Convert.ToInt32(input);
                    System.Console.WriteLine("{0}", number);

            }
    }
}</pre>
      <p>However if you want to convert it to a long or a short you need to use the commands:</p>
      <table>
        <tr>
          <th>Command</th>
          <th>Datatype</th>
        </tr>
        <tr>
          <td>System.Convert.ToInt16();</td>
          <td>short</td>
        </tr>
        <tr>
          <td>System.Convert.ToInt64();</td>
          <td>long</td>
        </tr>
        <tr>
          <td>System.Convert.ToDouble();</td>
          <td>double</td>
        </tr>
        <tr>
          <td>System.Convert.ToDecimal();</td>
          <td>decimal</td>
        </tr>
        <tr>
          <td>System.Convert.ToSingle();</td>
          <td>float</td>
        </tr>
      </table>
      <p class="important">Warning: You should be sure that the string only consists numbers before you
        convert it, otherwise you will get an ERROR-message.</p>
        <br>
      <h5>A shortcut</h5>
<pre class="border">
namespace Introduction
{
    class program
    {
            static void Main()
            {
                    System.Console.WriteLine("Write down a number: ");
                    int number = System.Convert.ToInt32(System.Console.ReadLine());
                    System.Console.WriteLine("{0}", number);

            }
    }
}</pre>
      <p>This shortcut is not adviceable, as it can be hard to read.</p>
      <br>
      <h4>Simplification</h4>
      <p>Since writing "<strong class="command">System.Console....</strong>" is a lot of work and programmers are lazy folk,
        C# came up with a solution:</p>
<pre class="border">
using System;
namespace Introduction
{
    class program
    {
            static void Main()
            {
                    Console.WriteLine("Write down a number: ");
                    string input = Console.ReadLine();
                    int number = Convert.ToInt32(input);
                    Console.WriteLine("{0}", number);

            }
    }
}</pre>
<p>With this, the compiler automatically adds "System." to every system command used.</p>
    </section>
  </body>
</html>
