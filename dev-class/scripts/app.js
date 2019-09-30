var app = angular.module("cpc_class_registration", ['ngMaterial', 'ngMessages']);

app.controller("registration_form_controller", function($scope, $http, $mdToast) {
  $scope.user = {
    name: '',
    student_id: '',
    email: '',
    phone: '',
    department: '',
    semester: '',
    course: '',
    why_learn: '',

    dev_time_sun: '',
    dev_time_mon: '',
    dev_time_tue: '',
    dev_time_wed: '',

    skill_html: '',
    skill_css: '',
    skill_js: '',
    skill_c: '',
    skill_cpp: '',
    skill_java: '',
    skill_php: '',
    skill_python: ''
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
        course: $scope.user.course,
        why_learn: $scope.user.why_learn,

        dev_time_sun: $scope.user.dev_time_sun,
        dev_time_mon: $scope.user.dev_time_mon,
        dev_time_tue: $scope.user.dev_time_tue,
        dev_time_wed: $scope.user.dev_time_wed,

        skill_html: $scope.user.skill_html,
        skill_css: $scope.user.skill_css,
        skill_js: $scope.user.skill_js,
        skill_c: $scope.user.skill_c,
        skill_cpp: $scope.user.skill_cpp,
        skill_java: $scope.user.skill_java,
        skill_php: $scope.user.skill_php,
        skill_python: $scope.user.skill_python,

        submit: 'ok'
  		},
  		headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
  	})
  	.success(function (data, status, headers, config) {
      
      switch(data) {
        case 'already_registered':
          window.top.location.href="save.php?color=red&info=Sorry! Your have already registered for this course.";
          break;
        case 'requred_fields':
          window.top.location.href="save.php?color=red&info=Please enter requred fields.";
          break;
        case 'successfully_registered':
          window.top.location.href="save.php?color=green&info=You have successfully registered for this course!";
          break;
        case "can't_accept":
          window.top.location.href="save.php?color=red&info=Sorry! Your request can't accept now.";
          break;
        default:
          window.top.location.href="save.php?color=red&info=Sorry! Your request can't accept now.";
          break;
      }
      console.log(data);
  	})
  };
});