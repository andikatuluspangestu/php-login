<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<!-- Bootstrap 5 Alpha CSS CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
	<!-- General CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/admin_style.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<div class="container">


<div id="wrapper">

  <!-- Sidebar -->
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">

      <li class="active">
        <a href="#">
              <i class="align-middle material-icons">home</i>
              <span>Dashboard</span>
            </a>
      </li>
      <li>
        <a href="#">
              <i class="align-middle material-icons">menu</i>
              <span>Pages</span>
        </a>
      </li>
      <li>
        <a href="#">
              <i class="align-middle material-icons">trending_up</i>
              <span>Trending</span>
            </a>
      </li>
      <li>
        <a href="#">
              <i class="align-middle material-icons">mail</i>
              <span>Inbox</span>
            </a>
      </li>
      <li>
        <a href="#">
              <i class="align-middle material-icons">people</i>
              <span>People</span>
            </a>
      </li>

    </ul>
  </div>
  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="container-fluid">
    <br><br>
      <div class="row">
      	<div class="col-md-12">
      		<div class="card">
      			<div class="card-body"> Say, Hello ... Welcome Admin!</div>
      		</div>
      	</div>
      </div>
      <br>
      <div class="row">
      	<div class="col-md-12">
      		<div class="card">
      			<div class="card-body" style="height: 420px; padding-top: 50px;"> 
      				<div>
        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="quiz-graph">
            <defs>
                <pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse">
                    <path d="M 50 0 L 0 0 0 50" fill="none" stroke="#e5e5e5" stroke-width="1"></path>
                </pattern>
            </defs>
            <rect x="50" width="calc(100% - 50px)" height="300px" fill="url(#grid)" stroke="gray"></rect>
   
            <g class="x-labels">
                <text x="150" y="320">Q1</text>
                <text x="250" y="320">Q2</text>
                <text x="350" y="320">Q3</text>
                <text x="450" y="320">Q4</text>
                <text x="550" y="320">Q5</text>
                <text x="650" y="320">Q6</text>
                <text x="750" y="320">Complited</text>
            </g>
            <g class="y-labels">
                
                <text x="42" y="55">250</text>
                <text x="42" y="105">200</text>   
                <text x="42" y="155">150</text>
                <text x="42" y="205">100</text>   
                <text x="42" y="255">50</text>
                <text x="42" y="305">0</text>
            </g>
            <linearGradient id="grad" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" style="stop-color:rgba(99,224,238,.5);stop-opacity:1"></stop>
                <stop offset="100%" style="stop-color:white;stop-opacity:0"></stop>
            </linearGradient>
            <polyline fill="url(#grad)" stroke="#34becd" stroke-width="0" points="
            50,300
            51,0
            150,100
            250,80
            350,160
            450,100
            550,100
            650,150
            750,200
            750,300
            "></polyline>

            <polyline fill="none" stroke="#34becd" stroke-width="2" points="
            50,0
            150,100
            250,80
            350,160
            450,100
            550,100
            650,150
            750,200
            "></polyline>
            <g>
                <circle class="quiz-graph-start-dot" cx="50" cy="0" data-value="7.2" r="6"></circle>
                <circle class="quiz-graph-dot" cx="150" cy="100" data-value="8.1" r="6" q-title="Q1" answer-count="200" percent-value="66%"></circle>
                <circle class="quiz-graph-dot" cx="250" cy="80" data-value="7.7" r="6" q-title="Q2" answer-count="220" percent-value="73%"></circle>
                <circle class="quiz-graph-dot" cx="350" cy="160" data-value="6.8" r="6" q-title="Q3" answer-count="140" percent-value="46%"></circle>
                <circle class="quiz-graph-dot" cx="450" cy="100" data-value="6.7" r="6" q-title="Q4" answer-count="200" percent-value="66%"></circle>
                <circle class="quiz-graph-dot" cx="550" cy="100" data-value="6.7" r="6" q-title="Q5" answer-count="200" percent-value="66%"></circle>
                <circle class="quiz-graph-dot" cx="650" cy="150" data-value="6.7" r="6" q-title="Q6" answer-count="150" percent-value="50%"></circle>
                <circle class="quiz-graph-dot" cx="750" cy="200" data-value="6.7" r="6" q-title="Complited Quiz" answer-count="100" percent-value="33%"></circle>
            </g>
        </svg>
    </div>
      			</div>
      		</div>
      	</div>
      </div>
	</div>

</body>
</html>