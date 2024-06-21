<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?php echo ($currentPage == 'index') ? 'active' : ''; ?>" href="index.php?action=list"> List of Interns </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($currentPage == 'add') ? 'active' : ''; ?>" href="index.php?action=create"> Add an Intern </a>
      </li>
    </ul>
  </div>
</nav>
