<!doctype html>
<title>Example</title>
<style>
  * {
    box-sizing: border-box; 
  }
  body {
    display: flex;
    min-height: 100vh;
    flex-direction: row;
    margin: 0;
  }
  .col-1 {
    background: #D7E8D4;
    flex: 1;
  }
  .col-2 {
    text-align: center;
    color: green;
    background-color: blue;
    display: flex;
    flex-direction: column;
    flex: 5;
  }
  .content {
   background: url(aiub2.jpg) no-repeat;
    background-color: #cccccc;
    display: flex;
    flex-direction: row;
  }
  .content > article {
    flex: 4;
    min-height: 60vh;
  }
  header, footer {
    background: yellowgreen;
    height: 20vh;
  }
  header, footer, article, nav {
    padding: 1em;
  }
</style>
<body>
   <nav class="col-1">
  <p><input type="button" onclick="window.location.href = 'adminlogin.php';" value="admin"/> <br>

  <input type="button" onclick="window.location.href = 'salesmanlogin.php';" value="register"/> <br>
  <input type="button" onclick="window.location.href = '#';" value="contact"/> </p>
  
</nav>
  <div class="col-2">
    <header style="background-color:gray;"><p><font size="6">Computer Labratory Manegement<p></header>
    <main class="content">
    <article ></article>
    </main>
    <footer style="background-color:gray;"><p><font size="6">copyright@aiub.com<p></footer>
  </div>
</body>