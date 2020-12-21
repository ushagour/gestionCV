$(document).ready(function() {
    // function dateTime() {
      var format="";
      var ndate = new Date();
      var hr = ndate.getHours();
      var h = hr % 12;
      
       if (hr < 12)
       {
          greet = 'Good Morning';
          format='AM';
          }
      else if (hr >= 12 && hr <= 17)
      {
          greet = 'Good Afternoon';
          format='PM';
          }
      else if (hr >= 17 && hr <= 24)
          greet = 'Good Evening';
      
      if (h < 12) {
        h = "0" + h;
        $(".date").html(greet);
      } else if (h < 18) {
        $(".date").html(greet);
      } else {
        $(".date").html(greet);
      }
 
  
   
  // }
  
  //  setInterval(dateTime, 1000);
  });