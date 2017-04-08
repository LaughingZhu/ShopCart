

		// 定义

	angular.module('myApp',[])
		.controller('SignUpController', function($scope)
		{
			$scope.userdata= {};

			$scope.submitForm=function()
			{
				 console.log($scope.userdata);
				 if($scope.signUpForm.$invalid)
				 {
				 	alert('请检查您的信息');
				 }
			}

		})
		.directive('compare',function()
		{
			var o={};
			o.strict = 'AE';
			o.scope = {
				orgText: '=compare'
			}
			o.require = 'ngModel';
			o.link = function(sco, ele, att, con)
			{
				con.$validators.compare = function(value)
				{
					return value == sco.orgText;
				}

				sco.$watch('orgText',function()
				{
					con.$validate();
				});
			}
			return o;
		})
