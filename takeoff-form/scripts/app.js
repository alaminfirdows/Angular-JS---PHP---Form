var app = angular.module("takeoff_registration", ['ngMaterial', 'ngMessages']);

app.controller("registration_form_controller", function($scope, $http, $mdToast) {
  $scope.user = {
    name: '',
    student_id: '',
    email: '',
    phone: '',
    department: '',
    semester: '',
    tshirt_size: ''
  };

  $scope.terms = true;

  $scope.save_data = function() {
  	var save_data = $http({
  		method: "POST",
  		url: "requests/save_data.php",
  		data: {
	        name: $scope.user.name,
	        student_id: $scope.user.student_id,
	        email: $scope.user.email,
	        phone: $scope.user.phone,
	        department: $scope.user.department,
	        semester: $scope.user.semester,
	        tshirt_size: $scope.user.tshirt_size,

	        submit: 'ok'
  		},
  		headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
  	})
  	.success(function (data, status, headers, config) {
      
      switch(data) {
        case 'already_registered':
          $scope.showToast('Sorry, you have already resigtered for this contest. Please contact with us if you think there is something mistake.<br/>Thank you.','error');
          window.top.location.href="save.php?color=red&info=Sorry, you have already resigtered for this contest. Please contact with us if you think there is something mistake.<br/>Thank you.";
          break;
        case 'requred_fields':
          $scope.showToast('Please enter requred fields."','error');
          window.top.location.href="save.php?color=red&info=Please enter requred fields.";
          break;
        case 'successfully_registered':
          $scope.showToast('You have successfully registered for this contest!','success');
          window.top.location.href="save.php?color=green&info=You have successfully registered for this contest!";
          break;
        case "can't_accept":
          $scope.showToast("Sorry! Your request can't accept now.",'error');
          window.top.location.href="save.php?color=red&info=Sorry! Your request can't accept now.";
          break;

        default:
          $scope.showToast("Sorry! Your request can't accept now.",'error');
          window.top.location.href="save.php?color=red&info=Sorry! Your request can't accept now.";
          break;
      }
      console.log(data);
  	})
  	.error(function(data, status, headers, config) {
  		$scope.showToast(data,'error');
  	});
  };

  $scope.showToast = function($text,$type) {
    $mdToast.show(
      $mdToast.simple()
        .textContent($text)
        .position('top right')
        .hideDelay(3000)
        .theme($type)
    );
  };
});