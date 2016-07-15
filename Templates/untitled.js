	var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope) {
		$scope.columns = ['On-boarding','Released']
		$scope.Leftitems = [''];
		$scope.Rightitems = [''];
		$scope.addName = function(){
			if($scope.selectColumn == null || $scope.selectColumn == "" || $scope.enterItem == null || $scope.enterItem == ""){
				
				if(($scope.enterItem == null || $scope.enterItem == "") && ($scope.selectColumn == null || $scope.selectColumn == "")){
					alert("Please enter ITEM and choose COLUMN!");
				} else if($scope.enterItem == null || $scope.enterItem == ""){ 
					alert("Please enter ITEM!"); 
				} else{ 
					alert("Please choose COLUMN!");
				}
				
			} else if($scope.selectColumn=='On-boarding' || $scope.selectColumn=='Released'){
				
				if($scope.selectColumn=='On-boarding'){
					$scope.Leftitems.push($scope.enterItem);
				}else if($scope.selectColumn=='Released'){
					$scope.Rightitems.push($scope.enterItem);
				}else{
					alert('Unexpected ERROR! Please contact system administrator!');
				}
					
			}else{
			   alert('Unexpected ERROR! Please contact system administrator!');
		    }
			
		};
	});
	
	
