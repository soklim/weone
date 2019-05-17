
<link href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.css" rel="stylesheet"/>


<script href="/js/bootstrap-formhelpers.min.js"></script>

<script src="/js/jquery-1.10.2.js"></script>
<script src="/js/jquery-ui.js"></script>
<!-- REMOVE THIS >> <script src="js/jquery.js" type="text/javascript"></script> -->
<script src="js/jquery.datetimepicker.full.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin.min.js"></script>



<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '912333495590130',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.11'
        });
    };
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>
    $(window).bind("resize", function () {
        if ($(this).width() < 768) {
            $('.products').removeClass('img-wrap');
            $('.card').removeClass('hovereffect');
        }
        else {
            $('.products').addClass('img-wrap');
            $('.card').addClass('hovereffect');
        }
    }).trigger('resize');
</script>

 <script type="text/javascript">
      $('#searchname').autocomplete({
          source : '{!! URL::route('autoComplete') !!}',
          minlength : 1,
          autoFocus : true,

          select:function(e,ui){
          }

      });
  </script>
<script>
 $(document).ready(function() {

// Gets the video src from the data-src on each button

  var $videoSrc;
  $('.video-btn').click(function() {
   $videoSrc = $(this).data( "src" );
  });


// when the modal is opened autoplay it
  $('#myModal').on('shown.bs.modal', function (e) {
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
   $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" );
  })
// stop playing the youtube video when I close the modal
  $('#myModal').on('hide.bs.modal', function (e) {
   // a poor man's stop video
   $("#video").attr('src',$videoSrc);
  })

// document ready
 });

</script>



<!-- Page level plugin JavaScript-->
<script src="/vendor/datatables/jquery.dataTables.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.js"></script>









