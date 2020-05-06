<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LearnC# - Different Variable types</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <nav>
      <ul id="navigation">
      <li><a href="../index.php">LearnC#</a></li>
        <li><a href="structure.php">Basic Structure</a></li>
        <li><a href="output.php">Output</a></li>
        <li><a class="active" href="variables.php">Variable types</a></li>
        <li><a href="input.php">Input from user</a></li>
        <li><a href="junctions.php">Junctions</a></li>
        <li><a href="arrays.php">Arrays</a></li>
        <li><a href="methods.php">Methods</a></li>
        <li><a href="structs.php">Structs</a></li>
        <li><a href="forum.php">Forum</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
    <section>
      <h2 class="title">3. Different Variable types and their usage</h2>
      <hr>
      <p>In programming there is something called Variabletypes, or Datatypes,
        with which you can declare the characteristic of a variable. There are two types:</p>
      <ul>
        <li>value types</li>
        <li>reference types</li>
      </ul>
      <p>We will discuss later, which one does what.</p>
      <br>
      <h3>Value types</h3>
      <p>They are catagorized in three Sections:</p>
      <ul>
        <li>Integer types</li>
        <li>Floating-point types</li>
        <li>Bool</li>
      </ul>
      <h4>Integer types</h4>
      <p>With integer types you can declare an integer value.
        This is the list with the different integer types:</p>
      <table>
        <tr>
          <th>Data-Type</th>
          <th>Description</th>
          <th>Size</th>
        </tr>
        <tr>
          <td>sbyte</td>
          <td>A signed 8-bits integer</td>
          <td>You can declare it with a number between -128 and 127</td>
        </tr>
        <tr>
          <td>byte</td>
          <td>A unsigned 8-bits integer</td>
          <td>You can declare it with a number between 0 and 255(2^8)</td>
        </tr>
        <tr>
          <td>short</td>
          <td>A signed 16-bits integer</td>
          <td>You can declare it with a number between -32,768 and 32,767</td>
        </tr>
        <tr>
          <td>ushort</td>
          <td>A unsigned 16-bits integer</td>
          <td>You can declare it with a number between 0 and 65,535(2^16)</td>
        </tr>
        <tr>
          <td>int</td>
          <td>A signed 32-bits integer</td>
          <td>You can declare it with a number between -2,147,483,648 and 2,147,483,647</td>
        </tr>
        <tr>
          <td>uint</td>
          <td>A unsigned 32-bits integer</td>
          <td>You can declare it with a number between 0 and 4,294,967,295(2^32)</td>
        </tr>
        <tr>
          <td>long</td>
          <td>A signed 64-bits integer</td>
          <td>You can declare it with a number between
            -9,223,372,036,854,775,808 and 9,223,372,036,854,775,807</td>
        </tr>
        <tr>
          <td>ulong</td>
          <td>Is a unsigned 64-bits integer</td>
          <td>You can declare it with a number between
            0 and 18,446,744,073,709,551,615(2^64)</td>
        </tr>
      </table>
      <p>At the beginnning, we would recommend to use int.</p>
      <br>
      <h4>Floating-point types</h4>
      <p>With floating-point types you can declare a floating-point number value.
      This is the list with the different floating-point types:</p>
      <table>
        <tr>
          <th>Data-Type</th>
          <th>Description</th>
          <th>Size</th>
        </tr>
        <tr>
          <td>float</td>
          <td>A signed 4-byte float</td>
          <td>You can declare it with a number between ±1.5 x 10^-45 and ±3.4 x 10^38</td>
        </tr>
        <tr>
          <td>double</td>
          <td>A signed 8-byte float</td>
          <td>You can declare it with a number between ±5.0 × 10^-324 and ±1.7 × 10^308</td>
        </tr>
        <tr>
          <td>decimal</td>
          <td>A signed 16-byte float</td>
          <td>You can declare it with a number between ±1.0 x 10^-28 and ±7.9228 x 10^28</td>
        </tr>
      </table>
      <br>
      <h4>Bool</h4>
      <p>A bool describes if a statement is <strong>true</strong> or <strong>false</strong>.</p>
      <br>
      <h5>Declaration and Initialization</h5>
      <p>You can declare it like this: </p>
      <strong class="command">int number1;</strong>
      <br>
      <strong class="command">double number2;</strong>
      <br>
      <strong class="command">bool isvalid;</strong>
      <br>
      <p>After the Valuetype comes the variable-name</p>
      <br>
      <p>If you want to initialize it, you must give the variable-name and a value:</p>
      <strong class="command">number1 = 5;</strong>
      <br>
      <strong class="command">number2 = 1.5;</strong>
      <br>
      <strong class="command">isvalid = true;</strong>
      <br>
      <p>You can do both in one row:</p>
      <strong class="command">int number1 = 5;</strong>
      <br>
      <strong class="command">double number2 = 1.5;</strong>
      <br>
      <strong class="command">bool isvalid = true;</strong>
      <br>
      <br>
      <h3>Reference types</h3>
      <p>There is a reference Datatype, named string. That´s an array of characters.</p>
      <strong class="command">string s = "Hello World!"</strong>
      <br>
      <br>
    </section>
  </body>
</html>
