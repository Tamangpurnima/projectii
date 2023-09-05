<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard </title>
  <!-- <link rel="stylesheet" href="frontend/css/style.css" /> -->
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />

  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="containerCustom">
    <nav>
      <ul>
        <li><a href="/dashboard" class="logo">
          <img src="/logo.jpg" alt="">
          <span class="nav-item">DashBoard</span>
        </a></li>

        <li><a href="#">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-user"></i>
          <span class="nav-item">Profile</span>
        </a></li>
        <li><a href="/course/show">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Manage CourseType</span>
        </a></li>
        <li><a href="/college/show">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Manage College</span>
        </a></li>
        <li><a href="/coursedetail/show">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Manage Course Detail</span>
        </a></li>
        <li><a href="/qualification/show">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Manage Qualification</span>
        </a></li>
        <li><a href="" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      @yield('content')
    </section>
  </div>
</body>
</html>
