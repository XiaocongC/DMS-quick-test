<!doctype html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Test</title>
    <script src="//ajax.googleapis.com/ajax/libs/mootools/1.5.2/mootools.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="./index.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
<div ng-app="testApp" ng-controller="testCont">
<table class="table table-striped">
  <thead>
    <tr>
        <td>ID</td><td>First Name</td><td>Last Name</td><td>Email</td><td></td>
    </tr>
  </thead>
  <tr ng-repeat="p in people">
      <td>{{ p.id }}</td>
      <td>{{ p.first_name }}</td>
      <td>{{ p.last_name }}</td>
      <td>{{ p.email }}</td>
      <td><button class="btn btn-success" ng-click="ShowAlert(p)">Check</button></td>
  </tr>
</table>
</div>
</body>
</html>