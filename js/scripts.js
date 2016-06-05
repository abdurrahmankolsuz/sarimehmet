
$(document).ready(function(){$('.carousel').carousel({interval:4000});
    $('.carousel').carousel('cycle');
 
$('#lightbox').modal('show');


/* affix the navbar after scroll below header */
$('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
});	

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);

})

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top;
  $('body,html').animate({scrollTop:posi},700);

});
  
        
/* mesajlar kutusu popup */
 //   $('table tbody tr').click(function(){
   //   $("#mesaj").val($(this).find('td:eq(2)').text());
    //  $("#baslik").text($(this).find('td:eq(0)').text());
      //  $("#myModal").modal('show');
      //              });

    /* mesajlar kutusu popup */
    $('#cevapla').click(function(){
     
        $("#myModalCevapla").modal('show');
                    });


/* copy loaded thumbnails into carousel */
$('.panel .img-responsive').on('load', function() {
  
}).each(function(i) {
  if(this.complete) {
  	var item = $('<div class="item"></div>');
    var itemDiv = $(this).parent('a');
    var title = $(this).parent('a').attr("title");


    item.attr("title",title);
  	$(itemDiv.html()).appendTo(item);
  	item.appendTo('#modalCarousel .carousel-inner'); 
    if (i==0){ // set first item active
     item.addClass('active');
    }
  }
});

/* activate the carousel */
$('#modalCarousel').carousel({interval:false});


/* change modal title when slide changes */
$('#modalCarousel').on('slid.bs.carousel', function () {
  $('.modal-title').html($(this).find('.active').attr("title"));
})

/* when clicking a thumbnail */
$('.panel-thumbnail>a').click(function(e){
  
    e.preventDefault();
    var idx = $(this).parents('.panel').parent().index();
  	var id = parseInt(idx);
  	
  	$('#myModal').modal('show'); // show the modal
    $('#modalCarousel').carousel(id); // slide carousel to selected
  	return false;
});

$('#preview').text($(this).val());

//gönder mesaj



/*$('.form_error').hide();
      $('#submitIletisim').click(function(){
           var name = $('#name').val();
           var email = $('#email').val();
           var phone = $('#phone').val();
           var message = $('#message').val();
           if(name== ''){
              $('#name').next().show();
              return false;
            }
            if(email== ''){
               $('#email').next().show();
               return false;
            }
            if(IsEmail(email)==false){
                $('#invalid_email').show();
                return false;
            }

            if(phone== ''){
                $('#phone').next().show();
                return false;
            }
            if(message== ''){
                $('#message').next().show();
                return false;
            }
            //ajax call php page
            $.post("send.php", $("#contactform").serialize(),  function(response) {
            $('#contactform').fadeOut('slow',function(){
                $('#success').html(response);
                $('#success').fadeIn('slow');
               });
             });
             return false;
          });

function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
     }
*/
//resim yükleme



//mesaj gönderme 
$('#submitIletisim').click(function(){
  

           var name = $('#name').val();
            var organization = $('#organization').val();
           var email = $('#email').val();
           var phone = $('#phone').val();
           var message = $('#message').val();
 
  
  var datas= "name="+name+"&organization="+organization+"&email="+email+"&phone="+phone+"&message="+message;
      
  $.ajax({
     type: "POST",
     url: "send.php",
     data: datas
  }).done(function( data ) {
    $('#info').html(data);
    
   // viewdata();
  });
    });


/* google maps */
google.maps.visualRefresh = true;

var map;
function initialize() {
	var geocoder = new google.maps.Geocoder();
	var address = $('#map-input').text(); /* change the map-input to your address */
	var mapOptions = {
    	zoom: 15,
    	mapTypeId: google.maps.MapTypeId.ROADMAP,
     	scrollwheel: false
	};
	map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
	
  	if (geocoder) {
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
          map.setCenter(results[0].geometry.location);

            var infowindow = new google.maps.InfoWindow(
                {
                  content: address,
                  map: map,
                  position: results[0].geometry.location,
                });

            var marker = new google.maps.Marker({
                position: results[0].geometry.location,
                map: map, 
                title:address
            }); 

          } else {
          	alert("No results found");
          }
        }
      });
	}
}
google.maps.event.addDomListener(window, 'load', initialize);

/* end google maps */


});