var myModule = angular.module("myModule", []);
myModule.controller("myController", function($scope){
   $scope.cart = {
     items:[
       {
         name:'',
         qty:'',
         price:''
       }
     ]
   }

   $scope.addItem = function(){
      $scope.cart.items.push({name:'',qty:'',price:''});
   }

   $scope.removeItem = function(index){
     $scope.cart.items.splice(index, 1);
   }

   $scope.total = function(){
     var total = 0;

     angular.forEach($scope.cart.items, function(item){
        total += item.qty * item.price;
     });

     return total;
   }
});
